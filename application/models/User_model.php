<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function json_user($draw = 1, $start = 0, $length = 0, $search = '', $column = '', $dir = '',$level_user='')
    {
        $start = $this->db->escape_str($start);
        $length = $this->db->escape_str($length);
        $column = $this->db->escape_str($column);
        $dir = $this->db->escape_str($dir);
        $search = $this->db->escape_str($search);
        $level_user = $this->db->escape_str($level_user);

        $total_filtered = $this->jumlah_user($search,$level_user);
        $data = [];
        $request = $this->view_user($start, $length, $search, $column, $dir,$level_user);
        if (! empty($request)) {
            $no = $start + 1;
            foreach ($request as $row) {
                $btn_menu = btn_custom($row->id,'menu','javascript:void(0)','success','list','');
                $btn_reset = '<button type="button" style="color:#fff" class="btn btn-warning btn-elevate btn-pill btn-sm reset" data-refid="'.$row->id.'"><span class="fa fa-lock fa-sm"></span></button>';
                if($row->level != 1){
                    $btn_delete =btn_delete($row->id);
                }else{
                    $btn_delete= '';
                }
                $data[] = array(
                    $no++,
                    $row->nama,
                    $row->no_hp,
                    $row->username,
                    $row->level_user,
                    btn_group([btn_edit($row->id),$btn_reset,$btn_delete])
                );
            }
        }

        return response_datatable($draw, $total_filtered, $data);
    }

    function view_user($start = 0, $length = 0, $search = '', $column = '', $dir = '',$level_user='')
    {
        $kolom = ['a.nama','a.no_hp','a.username','b.level'];
        $condition = '';
        if ($search != '') {
            $condition .= ' AND (';
            for ($i = 0; $i < count($kolom); $i++) {
                $condition .= $kolom[$i]." LIKE '%$search%' ";
                if ($kolom[$i] != end($kolom)) {
                    $condition .= ' OR ';
                }
            }
            $condition .= ')';
        }

        if($level_user != ''){
            $condition .= " AND a.level ='$level_user'";
        }

        $kolom_order = ['1' => 'a.nama','2' => 'a.no_hp','3' => 'a.username','4' => 'b.level'];
        $order = '';
        if ($column != '' && $dir != '') {
            $col = isset($kolom_order[$column]) ? $kolom_order[$column] : '';

            if ($col != '') {
                $order .= " ORDER BY $col $dir ";
            }
        }

        $query = $this->db->query("
            SELECT a.*,b.`level` as level_user
            from tb_user a
            join ms_level b
                on a.`level`  = b.id
            where a.status  =1 
            $condition 
            $order 
            LIMIT $start, $length ")->result();  

        return $query;
    }

    function jumlah_user($search = '',$level_user='')
    {
        $kolom = ['a.nama','a.no_hp','a.username','b.level'];
        $condition = '';
        if ($search != '') {
            $condition .= ' AND (';
            for ($i = 0; $i < count($kolom); $i++) {
                $condition .= $kolom[$i]." LIKE '%$search%' ";
                if ($kolom[$i] != end($kolom)) {
                    $condition .= ' OR ';
                }
            }
            $condition .= ')';
        }

        if($level_user != ''){
            $condition .= " AND a.level ='$level_user'";
        }

        $query = $this->db->query("
            SELECT COUNT(*) AS jumlah
            from tb_user a
            join ms_level b
                on a.`level`  = b.id 
            where a.status  =1
            $condition ")->row();  

        return isset($query->jumlah) ? $query->jumlah : 0;
    }

    function ms_level()
    {
        $level = $this->session->userdata('level');
        if($level == 1){
            $query = $this->db->query("
                        SELECT * FROM ms_level where status = 1
                    ")->result();   
        }
        else if($level == 2){
            $query = $this->db->query("
                        SELECT * FROM ms_level where status = 1 and flag=1
                    ")->result();
        }
        else{
            $query = [];
        }
        return $query;
    }

    function process_user($id='',$nama='',$no_hp='',$username='',$password='',$level='')
    {
        $level = $this->db->escape_str($level);
        $nama = $this->db->escape_str($nama);
        $no_hp = $this->db->escape_str($no_hp);
        $username = $this->db->escape_str($username);
        $password = $this->db->escape_str($password);
        $id = $this->db->escape_str($id);

        $key = generate_random(4);
        $user_insert = username();
        $now = now();
        $result = false;
        $uid = generate_random(30,false);

        if ($id == '') {
            $uid = generate_random(30,false);
            $ins = $this->db->query("
                INSERT INTO tb_user (`uid`, `nama`, `no_hp`, `username`, `password`, `key`, `insert_at`,`user_insert`,`level`) 
                VALUES ('$uid', '$nama', '$no_hp', '$username', AES_ENCRYPT('$password', '$key'), '$key', NOW(), '$user_insert','$level')");

            if($ins){
                $data = array(
                    'uid' => $uid,
                    'nama' => $nama,
                    'no_hp' => $no_hp,
                    'insert_at' => now(),
                    'user_insert' => $this->session->userdata('username'),
                    'is_verified' => 1
                );
                $this->customdb->process_data('tb_member',$data);
                $result = true;
            }
            else{
                $result = false;
            }
        } else {
            $uid = view_by_id('tb_user',['id'=>$id],'uid');
            if($password != ''){
                $this->db->query("
                        UPDATE tb_user 
                        set `nama` ='$nama', `no_hp` = '$no_hp',
                            `username` = '$username',`password`= AES_ENCRYPT('$password', '$key'),
                            `key`='$key',`update_at` = NOW(), `user_update`='$user_insert',`level` = '$level'
                        where id = '$id'
                    "); 
            }else{
                $this->db->query("
                        UPDATE tb_user 
                        set `nama` ='$nama', `no_hp` = '$no_hp',
                            `username` = '$username',`update_at` = NOW(), 
                            `user_update`='$user_insert',`level` = '$level'
                        where id = '$id'
                    ");
            }

            if($level == 2){
                $this->customdb->process_data('tb_member',['nama' => $nama,'no_hp' => $no_hp],['uid' => $uid]);
            }

            $result = true;
        }

        return $result;

    }

    function exist_user($username='')
    {
        $q = $this->db->query("
                SELECT * FROM tb_user a
                where a.username = '$username' 
                and a.status=1
            ")->row();

        $result = true;
        if(empty($q)){
            $result = false;
        }
        return $result;
    }

    function check_password($uid='',$password_lama='')
    {
        $q = $this->db->query("
            SELECT aes_decrypt(tu.password,tu.`key`)  as pass_lama
                from tb_user tu 
                where tu.uid ='$uid'
            ")->row();

        if($password_lama != $q->pass_lama){
            return false;
        }
        else{
            return true;
        }
    }

    function change_password($uid='',$re_password_baru='')
    {
        $key = generate_random(4);
        $user_update = $this->session->userdata('username');
        $upd = $this->db->query("
                    UPDATE tb_user 
                    set `password`= AES_ENCRYPT('$re_password_baru', '$key'),
                        `key`='$key',`update_at` = NOW(), `user_update`='$user_update'
                    where uid = '$uid'
                "); 
        if($upd){
            return true;
        }
        else{
            return false;
        }
    }

}