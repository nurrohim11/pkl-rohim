<?php

function toko()
{
    $ci =& get_instance();
    $result = '<div class="dropdown-menu" style="transform: translate3d(0px, 30px, 0px); top: 0px;">';
    $q = $ci->db->query("SELECT * FROM ms_toko where status = 1 order by id asc")->result();
    if($q){
        foreach($q as $row){
            $result .= '<a class="dropdown-item-top" href="javascript:void(0)" onclick="selectToko('."'".$row->tid."'".')">Ganti '.$row->nama.'</a>';
        }
    }
    $result .='</div>';
    return $result;
}

function sess_toko() {
    $CI =& get_instance();
    $toko = $CI->session->userdata('nama_toko');

    if (empty($toko)) {
        $q = $CI->db->query("SELECT * FROM ms_toko where status = 1 order by id asc limit 1")->row();
        $CI->session->set_userdata(['id_toko' => $q->tid,'nama_toko' => $q->nama]);
        $toko = $CI->session->userdata('nama_toko');
    }

    return $toko;
}

function sess_id_toko()
{
    sess_toko();
    $ci =& get_instance();
    $id_toko = $ci->session->userdata('id_toko');
    return $id_toko;
}

function is_login(){
    $ci =& get_instance();
    $ci->Login_model->is_login();
}

function datatable($param = 'css')
{
    switch ($param) {
        case 'js':
            return '<script type="text/javascript" src="'.base_url().'assets/plugins/custom/datatables/datatables.bundle.js?v='.generate_random(5,true).'"></script>';
            break;
        
        default:
            return '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/custom/datatables/datatables.bundle.css?v='.generate_random(5,true).'">';
            break;
    }
}

function error_ajax()
{
    return '<script>window.location.reload();</script>';
}

function tree($param='css')
{
    switch ($param) {
        case 'js':
            return '<script src="'.base_url('assets/plugins/custom/jstree/jstree.bundle.js?v='.generate_random(5,true)).'" type="text/javascript"></script>';
            break;
        
        default:
            return '<link href="'.base_url('assets/plugins/custom/jstree/jstree.bundle.css?v='.generate_random(5,true)).'" rel="stylesheet" type="text/css" />';
            break;
    }
}

function mask($param = 'js')
{
    switch ($param) {
        case 'js':
            return '<script type="text/javascript" src="'.base_url().'assets/plugins/mask/jquery.mask.js"></script>
                    <script type="text/javascript" src="'.base_url().'assets/plugins/mask/jquery.mask.min.js"></script>';
            break;
        
        default:
            return '';
            break;
    }
}

function tbl_template($id = 'dataTables-example', $class = '')
{
    $template = array(
            'table_open'            => '<table class="table table-striped table-bordered table-hover table-checkable order-column '.$class.'" id="'.$id.'">',

            'thead_open'            => '<thead>',
            'thead_close'           => '</thead>',

            'heading_row_start'     => '<tr>',
            'heading_row_end'       => '</tr>',
            'heading_cell_start'    => '<th>',
            'heading_cell_end'      => '</th>',

            'tbody_open'            => '<tbody>',
            'tbody_close'           => '</tbody>',

            'row_start'             => '<tr>',
            'row_end'               => '</tr>',
            'cell_start'            => '<td>',
            'cell_end'              => '</td>',

            'row_alt_start'         => '<tr>',
            'row_alt_end'           => '</tr>',
            'cell_alt_start'        => '<td>',
            'cell_alt_end'          => '</td>',

            'table_close'           => '</table>'
    );
    
    return $template;
}

function condition($search='',$kolom=[])
{
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
    return $condition;
}

function order($column='',$dir='',$kolom=[])
{
    $order = '';
    if ($column != '' && $dir != '') {
        $col = isset($kolom[$column]) ? $kolom[$column] : '';

        if ($col != '') {
            $order .= " ORDER BY $col $dir ";
        }
    }
    return $order;
}

function web_title()
{
    $ci =& get_instance();
    $class = $ci->router->fetch_class();
    $method = $ci->router->fetch_method();

    $menu = $ci->Menu_model->parent($class, $method);

    if(!empty($menu)){
        $label = ($menu->label) ? $menu->label : '';
    }
    else{
        $exp = explode("_", $method);
        $result = '';
        $numItems = count($exp);
        $i = 0;
        foreach($exp as $key=>$value) {
            $result .= $value.' ';
            if(++$i === $numItems) {
                $result .="";
            }
        }
        $label = ucwords($result);
    }

    return $label;
}

function response_datatable($draw = '', $total_filtered = 0, $data = [])
{
    $arr = array(
        'draw' => $draw,
        'recordsFiltered' => $total_filtered,
        'recordsTotal' => $total_filtered,
        'data' => $data
    );

    return $arr;
}

function btn_edit($id = '')
{
    return '<button type="button" class="btn btn-primary btn-elevate btn-pill btn-sm update" data-refid="'.$id.'"><span class="fa fa-edit fa-sm"></span></button>';
}

function btn_delete($id = '')
{
    return '<button type="button" class="btn btn-secondary btn-elevate btn-pill btn-sm delete" data-refid="'.$id.'"><span class="fa fa-trash"></span></button>';
}

function btn_custom($id = '', $action = '', $url = 'javascript:void(0);', $class = 'info', $icon = 'check', $title = '', $target='')
{
    return '<a href="'.$url.'" data-refid="'.$id.'" class="btn btn-'.$class.' btn-elevate btn-pill btn-sm '.$action.'" title="'.$title.'" target="'.$target.'">
                <i class="fa fa-'.$icon.' fa-sm"></i>
            </a>';
}

function btn_group($button = [])
{
    $result = '';
    if (! empty($button)) {
        $result .= '<div class="btn-group btn-group-sm">';
        for ($i = 0; $i < count($button); $i++) {
            $result .= $button[$i].'&nbsp;';
        }
        $result .= '</div>';
    }

    return $result;
}

function get_params()
{
    return json_decode(file_get_contents('php://input'), true);
}

function response($status = 200, $message = '', $data = [])
{
    return array(
        'response' => $data,
        'metadata' => array(
            'status' => $status,
            'message' => $message
        )
    );
}

function print_json($status = 200, $message = '', $data = [])
{
    $ci =& get_instance();
    $response = response($status, $message, $data);

    return $ci->token->print_json($response);
}

function log_api($request = '', $status = '', $message = '', $data = [])
{
    $ci =& get_instance();

    $ci->load->model('api/Log_model');

    $response = array(
        'status' => $status,
        'message' => $message,
        'data' => $data
    );

    $response = json_encode($response);
    $request = json_encode($request);

    $ci->Log_model->log($request, $response);
}

function search_datatable($kolom = [], $search = '')
{
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

    return $condition;
}

function order_datatable($kolom_order = [], $column = '', $dir = '')
{
    $order = '';
    if ($column != '' && $dir != '') {
        $col = isset($kolom_order[$column]) ? $kolom_order[$column] : '';

        if ($col != '') {
            $order .= " ORDER BY $col $dir ";
        }
    }

    return $order;
}

function decode_image($file = '', $path = '')
{
    $decoder = base64_decode($file);
    header('Content-Type: bitmap; charset=utf-8');
    $open = fopen($path, 'wb');
    fwrite($open, $decoder);
    fclose($open);
}

function filter_params($params = '', $index = '')
{
    $ci =& get_instance();
    return isset($params[$index]) ? $ci->db->escape_str($params[$index]) : '';
}

function filter_isset($params = '')
{
    return isset($params) ? $params : '';
}

function settings($key='')
{
    $ci =& get_instance();
    $q = $ci->Main_model->settings($key);
    $isi = ($q->isi) ? $q->isi : '';
    return $isi;
}

function data_id($table='',$field='',$where='')
{
    $ci =& get_instance();
    $q = ($ci->Main_model->data_id($table,$field,$where)) ? $ci->Main_model->data_id($table,$field,$where) : '';
    return $q;
}

function request_url($url = '', $data = [], $method = 'POST', $header = [])
{
    ini_set('memory_limit', '-1');
    ini_set('MAX_EXECUTION_TIME', '-1');
    set_time_limit(0);
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => $header,
        CURLOPT_CAINFO => dirname(__FILE__).'\cacert.pem'
    ));
 
    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
        return $error;
    } else {
        return $response;
    }
}

function view_by_id($table='',$where=[],$show=''){
    $ci =& get_instance();
    $q = $ci->db->get_where($table,$where)->row();
    $show = ($q->$show) ? $q->$show : '';
    return $show;
}

function link_iklan()
{
    return base_url().'assets/uploads/iklan/';
}

function path_iklan()
{
    return './assets/uploads/iklan/';
}

function link_berita()
{
    return base_url().'assets/uploads/berita/';
}

function path_berita()
{
    return './assets/uploads/berita/';
}

function link_kategori()
{
    return base_url().'assets/uploads/kategori/';
}

function path_kategori()
{
    return './assets/uploads/kategori/';
}

function link_member()
{
    return base_url().'assets/uploads/member/';
}

function path_member()
{
    return './assets/uploads/member/';
}

function link_produk()
{
    return base_url().'assets/uploads/produk/';
}

function path_produk()
{
    return './assets/uploads/produk/';
}

function isa_convert_bytes_to_specified($bytes, $to, $decimal_places = 1) {
    $formulas = array(
        'K' => number_format($bytes / 1024, $decimal_places),
        'M' => number_format($bytes / 1048576, $decimal_places),
        'G' => number_format($bytes / 1073741824, $decimal_places)
    );
    return isset($formulas[$to]) ? $formulas[$to] : 0;
}

function fcm_id($uid= '')
{
    $ci =& get_instance();
    $user = $ci->db->get_where('tb_user',['uid' =>$uid])->row();
    $fcm = ($user->fcm_id) ? $user->fcm_id : '';
    return $fcm;
}