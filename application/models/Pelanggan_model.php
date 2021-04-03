<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pelanggan_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function json_pelanggan($draw = 1, $start = 0, $length = 0, $search = '', $column = '', $dir = '')
    {
        $start = $this->db->escape_str($start);
        $length = $this->db->escape_str($length);
        $column = $this->db->escape_str($column);
        $dir = $this->db->escape_str($dir);
        $search = $this->db->escape_str($search);

        $total_filtered = $this->jumlah_pelanggan($search);
        $data = [];
        $request = $this->view_pelanggan($start, $length, $search, $column, $dir);
        if (! empty($request)) {
            $no = $start + 1;
            foreach ($request as $row) {
                $data[] = array(
                    $no++,
                    $row->member,
                    $row->kode_pelanggan,
                    $row->nama,
                    $row->no_hp,
                    $row->alamat,
                    $row->template,
                    btn_group([btn_edit($row->kode_pelanggan),btn_delete($row->kode_pelanggan)])
                );
            }
        }

        return response_datatable($draw, $total_filtered, $data);
    }

    function view_pelanggan($start = 0, $length = 0, $search = '', $column = '', $dir = '')
    {
        $kolom = ['a.nama','b.template','c.nama'];
        $condition = condition($search,$kolom);

        $condition = '';
        $uid = $this->session->userdata('uid');
        if($this->session->userdata('level') == 2){
            $condition .= " AND c.uid ='$uid'";
        }

        $kolom_order = ['1' => 'c.nama','2' => 'a.kode_pelanggan','3'=>'a.nama','4'=>'a.no_hp','5'=>'a.alamat','6'=>'b.template'];
        $order = order($column,$dir,$kolom_order);

        $query = $this->db->query("
        	SELECT a.*,b.template,c.nama as member
        	from tb_pelanggan a
			join (
				select * from ms_template mt 
				where mt.status =1
			) b
				on a.kode_template =b.kode_template
			left join tb_member c
				on c.uid =b.uid
			where c.status =1 and a.status=1 $condition
            $order 
            LIMIT $start, $length ")->result();

        return $query;
    }

    function jumlah_pelanggan($search = '')
    {
        $kolom = ['a.nama','b.template','c.nama'];
        $condition = condition($search,$kolom);

        $condition = '';
        $uid = $this->session->userdata('uid');
        if($this->session->userdata('level') == 2){
            $condition .= " AND c.uid ='$uid'";
        }

        $query = $this->db->query("
            SELECT COUNT(*) AS jumlah
            from tb_pelanggan a
			join (
				select * from ms_template mt 
				where mt.status =1
			) b
				on a.kode_template =b.kode_template
			left join tb_member c
				on c.uid =b.uid
			where c.status =1 and a.status = 1 $condition")->row();

        return isset($query->jumlah) ? $query->jumlah : 0;
    }
	
	function upload_file($filename){
		$this->load->library('upload');
		
		$config['upload_path'] = './assets/uploads/pelanggan/';
		$config['allowed_types'] = 'xlsx';
		$config['max_size']	= '2048';
		$config['overwrite'] = true;
		$config['file_name'] = $filename;
	
		$this->upload->initialize($config);
		if($this->upload->do_upload('file')){
			$return = array('status' => true, 'file' => $this->upload->data(), 'message' => '');
			return $return;
		}
		else{
			$return = array('message' => false, 'file' => '', 'message' => $this->upload->display_errors());
			return $return;
		}
	}

}