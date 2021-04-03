<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
		is_login();
		$this->load->model('Master_model');
	}

    // START IKLAN
	function template()
	{
		$header['css'] = datatable('css');
		$footer['js'] = datatable('js').'<script src="'.base_url().'assets/apps/js/master/template.js'.'"></script>';
		$this->load->view('template/header',$header);
		$this->load->view('master/template');
		$this->load->view('template/footer',$footer);
	}

	function data_template()
	{
        if ($this->input->is_ajax_request()) {
            $draw = $this->input->get('draw');
            $start = $this->input->get('start');
            $length = $this->input->get('length');
            $search = $this->input->get('search');
            $order = $this->input->get('order');

            $json = $this->Master_model->json_template($draw, $start, $length, $search['value'], $order[0]['column'], $order[0]['dir']);

            echo json_encode($json);
        } else {
            error_ajax();
        }
	}

    function process_template()
    {
        if($this->input->is_ajax_request()){
            $kode_template = $this->input->post('kode_template');
            $template = $this->input->post('template');
            $uid = ($this->session->userdata('level') == 1) ? $this->input->post('member') : $this->session->userdata('uid');

            $user = ($kode_template) ? 'user_update' : 'user_insert';
            $time = ($kode_template) ? 'user_insert' : 'insert_at';

            if($uid == '' || $template == ''){
                $status = false;
                if($template == ''){
                    $message = "Template masih kosong";
                }
                if($uid == ''){
                    $message = "Member masih kosong";
                }
            }
            else{

                $data = array(
                    'template' => $template,
                    'uid' => $uid,
                    $user => $this->session->userdata('username'),
                    $time => now()
                );

                if(!empty($kode_template)){

                    $upd = $this->customdb->process_data('ms_template',$data,['kode_template' => $kode_template]);
                    if($upd){
                        $status = true;
                        $message = "Template berhasil diupdate";
                    }
                    else{
                        $status = false;
                        $message = "Template gagal diupdate";
                    }
                }
                else{
                    $data['kode_template'] = counter('TPL');
                    $upd = $this->customdb->process_data('ms_template',$data);
                    if($upd){
                        $status = true;
                        $message = "Template berhasil ditambahkan";
                    }
                    else{
                        $status = false;
                        $message = "Template gagal ditambahkan";
                    }
                }   
            }
            echo json_encode(['status' => $status,'message'=>$message]);
        }
        else{
            error_ajax();
        }
    }

    function id_template(){
        if ($this->input->is_ajax_request()) {

            $kode_template = $this->input->post('kode_template');
            $response = [];

            $res = $this->db->query("
                SELECT a.*,b.nama from ms_template a
                join tb_member b 
                    on b.uid = a.uid
                where a.status = 1 
                and a.kode_template = '$kode_template'
                ")->row();

            if($res){
                $response = array(
                    'nama' => ucwords(strtolower($res->nama)),
                    'template' => $res->template,
                    'id' => $res->id,
                    'kode_template' => $res->kode_template,
                    'uid' => $res->uid,
                );
                $status = true;
                $message ="Berhasil";
            }else{
                $status = false;
                $message = "Template tidak ada";
            }
            print_json($status,$message,$response);
        }else{
            error_ajax();
        }
    }

    function delete_template()
    {
        if($this->input->is_ajax_request()){

            $kode_template= $this->input->post('kode_template');

            $del = $this->customdb->process_data('ms_template',['status' => 0],['kode_template' => $kode_template]);

            if($del){

                $status = true;
                $message = "Iklan berhasil dihapus";

            }
            else{

                $status = false;
                $message = "Iklan gagal dihapus";

            }
            echo json_encode(['status' =>$status,'message' =>$message]);
        }
        else{
            error_ajax();
        }
    }

    function ajax_member($search='')
    {
        if ($this->input->is_ajax_request()) {

            $condition ='';
            if($search != '' && $search != 'undefined'){
                $condition .= ' AND nama like "%'.$search.'%"';
            }

            $member = $this->db->query("SELECT * from tb_member where 1=1 and status =1 $condition")->result();
            $result = [];

            if ($member) {
                foreach ($member as $row => $val) {
                    $result[$row] = array(
                        'id' => $val->uid,
                        'text' => ucwords(strtolower($val->nama))
                    );
                }
            }

            echo json_encode($result);
        }else{
            error_ajax();
        }
    }

    function ajax_template($member='',$search='')
    {
        if ($this->input->is_ajax_request()) {

            $member = ($member == '' || $member == 'null' || $member == 'undefined') ? $this->session->userdata('uid') : $member;

            $condition ='';
            if($search != '' && $search != 'undefined'){
                $condition .= ' AND template like "%'.$search.'%"';
            }

            $member = $this->db->query("SELECT * from ms_template where uid='$member' and status =1 $condition")->result();
            $result = [];

            if ($member) {
                foreach ($member as $row => $val) {
                    $result[$row] = array(
                        'id' => $val->kode_template,
                        'text' => $val->template
                    );
                }
            }

            echo json_encode($result);
        }else{
            error_ajax();
        }
    }

}