<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Menu_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function view_menu($parent = 0)
    {
        $username = $this->session->userdata('username');

        $level = $this->session->userdata('level');
        $condition = '';
        if($level == 2){
            $condition .= " AND a.level = '$level'";
        }

        return $this->db->query("
            SELECT a.*, IFNULL(jumlah_menu.jumlah, 0) AS hitung
            FROM tb_menu a
            LEFT JOIN (
                SELECT parent, COUNT(*) AS jumlah
                FROM tb_menu a
                WHERE a.status = 1 $condition
                GROUP BY parent
            ) AS jumlah_menu 
                ON a.id = jumlah_menu.parent
            WHERE a.parent = '$parent'
            AND a.status = 1
            $condition
            ORDER BY a.urutan asc")->result();
    }

    function parent($class = '', $method = '')
    {
        if($this->session->userdata('level') == 1){
            $query = $this->db->where('fungsi', $class)
                    ->where('method', $method)
                    ->get('tb_menu')
                    ->row();
        }
        else{
            $query = $this->db->where('fungsi', $class)
                    ->where('method', $method)
                    ->where('level',2)
                    ->get('tb_menu')
                    ->row();
        }

        return $query;
    }

    function create_menu($parent = 0, $lev = 0)
    {
        $menu = $this->view_menu($parent);
        $class = $this->router->fetch_class();
        $method = $this->router->fetch_method();

        $this_menu = $this->parent($class, $method);
        $this_parent = isset($this_menu->parent) ? $this_menu->parent : '';

        $return = '';
        if (! empty($menu)) {
            foreach ($menu as $row) {
                $active = '';
                $expanded = '';
                if ($class == $row->fungsi && $method == $row->method) {
                    $active = 'kt-menu__item--active';
                }

                $url = '#';
                if ($row->url != '') {
                    $url = base_url().$row->url;
                }

                if ($lev == 0) {
                    if ($row->hitung > 0) {
                        if ($row->id == $this_parent) {
                            $expanded = 'kt-menu__item--open kt-menu__item--here ';
                        }

                        $return .= '<li class="kt-menu__item kt-menu__item--submenu '.$expanded.'" aria-haspopup="true"  data-menu-submenu-toggle="hover">';
                        $return .= '<a  href="'.$url.'" class="kt-menu__link kt-menu__toggle">
                                        <i class="kt-menu__link-icon fas '.$row->icon.'"></i>
                                        <span class="kt-menu__link-text">
                                            '.$row->label.'
                                        </span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>';
                        $return .= '<div class="kt-menu__submenu">
                                        <span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">';
                        $return .= $this->create_menu($row->id, ($lev + 1));
                        $return .= '    </ul>
                                    </div>';
                    } else {
                        $return .= '<li class="kt-menu__item '.$active.'" aria-haspopup="true" >';
                        $return .= '<a  href="'.$url.'" class="kt-menu__link ">
                                        <i class="kt-menu__link-icon fas '.$row->icon.'"></i>
                                        <span class="kt-menu__link-title">
                                            <span class="kt-menu__link-wrap">
                                                <span class="kt-menu__link-text">
                                                    '.$row->label.'
                                                </span>
                                            </span>
                                        </span>
                                    </a>';
                    }

                    $return .= '</li>';
                } else {
                    $return .= '<li class="kt-menu__item '.$active.'" aria-haspopup="true" >
                                    <a  href="'.$url.'" class="kt-menu__link ">
                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                                            <span></span>
                                        </i>
                                        <span class="kt-menu__link-text">
                                            '.$row->label.'
                                        </span>
                                    </a>
                                </li>';
                }
            }
        }

        return $return;
    }

    function menu($parent=0,$user_name='')
    {
        return $this->db->query("
                SELECT a.*, COALESCE(Deriv1.`Count`,0) hitung,
                CASE WHEN (c.id_menu <> '') 
                    THEN TRUE 
                    ELSE FALSE 
                END AS checked
                FROM `tb_menu` a  
                LEFT OUTER JOIN (
                    SELECT parent, COUNT(*) AS COUNT 
                    FROM `tb_menu` 
                    GROUP BY parent
                ) Deriv1 ON a.`id` = Deriv1.`parent` 
                LEFT JOIN (
                    SELECT id_menu
                    FROM tb_user_menu
                    WHERE tb_user_menu.`usr_name` = '$user_name'
                ) AS c ON c.id_menu = a.`id`
                WHERE a.`level` = 1 
                AND a.`status` = 1 
                AND a.`parent` = '$parent' 
                ORDER BY a.urutan ASC
            ")->result();
    }

    function json_menu($user_name='', $parent='0', $level='0')
    {
        $result = $this->menu($parent, $user_name);
        $arr = array();
        if (!empty($result)) {
            foreach ($result as $row => $val) {
                $arr[$row] = array(
                    'text' => $val->label,
                    'id' => $val->id,
                    'icon' => 'fas '.$val->icon
                );

                if($val->checked == 1 && $val->hitung == 0) {
                    $arr[$row]['state'] = array(
                        'selected' => true,
                        'opened' => true
                    );
                }

                if ($val->hitung > 0) {
                    $arr[$row]['children'] = $this->json_menu($user_name, $val->id, $level + 1);
                }
            }

            $select = $this->db->query("
                SELECT * 
                FROM tb_user_menu 
                WHERE usr_name = '$user_name'")->result();

        }

        return $arr;
    }

    function edit_menu($id = '', $menu = '')
    {
        $this->db->trans_begin();
        $ms_user = $this->db->where('id', $id)
                    ->get('tb_user')
                    ->row();
        $username = isset($ms_user->username) ? $ms_user->username : '';

        # parsing menu
        $parse_menu = explode(',', $menu);
        $arr_menu = [];
        if ($parse_menu) {
            foreach ($parse_menu as $key => $val) {
                if ($val != '') {
                    $arr_menu[] = $val;
                }
            }
        }

        $this->db->where('usr_name', $username)->delete('tb_user_menu');
        if ($arr_menu) {
            for ($i = 0; $i < count($arr_menu); $i++) {
                $val = isset($arr_menu[$i]) ? $arr_menu[$i] : '';
                if ($val != '') {
                    $this->db->insert('tb_user_menu', [
                        'usr_name' => $username, 
                        'id_menu' => $val, 
                        'user_insert' => username()
                    ]);
                }
            }
        }

        if ($this->db->trans_status() == true) {
            $this->db->trans_commit();

            return true;
        } else {
            $this->db->trans_rollback();

            return false;
        }
    }

}

/* End of file Menu_Model.php */
/* Location: ./application/models/Menu_Model.php */
