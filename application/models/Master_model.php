<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Master_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function json_template($draw = 1, $start = 0, $length = 0, $search = '', $column = '', $dir = '')
    {
        $start = $this->db->escape_str($start);
        $length = $this->db->escape_str($length);
        $column = $this->db->escape_str($column);
        $dir = $this->db->escape_str($dir);
        $search = $this->db->escape_str($search);

        $total_filtered = $this->jumlah_template($search);
        $data = [];
        $request = $this->view_template($start, $length, $search, $column, $dir);
        if (! empty($request)) {
            $no = $start + 1;
            foreach ($request as $row) {
                $data[] = array(
                    $no++,
                    $row->nama,
                    $row->template,
                    ($row->jml) ? $row->jml.' pelanggan' : 0 .' pelanggan',
                    btn_group([btn_edit($row->kode_template),btn_delete($row->kode_template)])
                );
            }
        }

        return response_datatable($draw, $total_filtered, $data);
    }

    function view_template($start = 0, $length = 0, $search = '', $column = '', $dir = '')
    {
        $kolom = ['b.nama','a.template'];
        $condition = condition($search,$kolom);

        $condition = '';
        $uid = $this->session->userdata('uid');
        if($this->session->userdata('level') == 2){
            $condition .= " AND a.uid ='$uid'";
        }

        $kolom_order = ['1' => 'b.nama','2' => 'a.template','3'=>'c.jml'];
        $order = order($column,$dir,$kolom_order);

        $query = $this->db->query("
            SELECT a.* , b.nama,c.jml
			from ms_template a
            join tb_member b 
                on b.uid = a.uid
            left join (
                select ifnull(count(*),0) as jml, d.kode_template
                from tb_pelanggan d
                group by d.kode_template
            ) c
                on c.kode_template = a.kode_template
			where a.status =1 $condition
            $order 
            LIMIT $start, $length ")->result();

        return $query;
    }

    function jumlah_template($search = '')
    {
        $kolom = ['b.nama','a.template'];
        $condition = condition($search,$kolom);

        $condition = '';
        $uid = $this->session->userdata('uid');
        if($this->session->userdata('level') == 2){
            $condition .= " AND a.uid ='$uid'";
        }

        $query = $this->db->query("
            SELECT COUNT(*) AS jumlah
            from ms_template a
            join tb_member b 
                on b.uid = a.uid
            left join (
                select count(*) as jml, d.kode_template
                from tb_pelanggan d
                group by d.kode_template
            ) c
                on c.kode_template = a.kode_template
            where a.status =1 $condition")->row();

        return isset($query->jumlah) ? $query->jumlah : 0;
    }

}