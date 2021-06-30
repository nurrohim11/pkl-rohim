<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    is_login();
		$this->load->model('Master_model');
	}

	function wa()
	{
		$header['css'] = datatable('css');
		$footer['js'] = datatable('js').'<script src="'.base_url().'assets/apps/js/wa.js'.'"></script>';
		$this->load->view('template/header',$header);
		$this->load->view('main/wa');
		$this->load->view('template/footer',$footer);
	}

	function send_wa()
	{
		if($this->input->is_ajax_request()){
			$message = $this->input->post('message');
			$metode_pengiriman = $this->input->post('metode_pengiriman');
			$template = $this->input->post('template');
			$pelanggan = $this->input->post('pelanggan');
			$imageUrl = '';

	        $config['upload_path'] = './assets/uploads/wa/';
	        $config['allowed_types'] = 'jpeg|jpg|png';
	        $config['max_size'] = 4000;
	        $config['max_width'] = 6000;
	        $config['max_height'] = 6000;
            $config['file_name'] =date('YmdHisu');

	        $this->load->library('upload', $config);

	        if ($this->upload->do_upload('image')) {
            	$file = $this->upload->data();
            	$imageUrl = base_url().'assets/uploads/wa/'.$file['file_name'];
	        }

			if($metode_pengiriman == 'plg'){

				$this->db->trans_begin();

				$data = array();
				foreach($pelanggan as $row){

					$plg = $this->db->get_where('tb_pelanggan',['kode_pelanggan' => $row])->row();

					$data[] = array(
						'uid' => $this->session->userdata('uid'),
						'kode_pelanggan' => $row,
						'nomor' => $plg->no_hp,
						'message' => $message,
						'image' => $imageUrl,
						'insert_at' => now(),
						'user_insert' => $this->session->userdata('uid')
					); 
				}

				$this->db->insert_batch('tb_message',$data);

				// if($imageUrl != ''){
				// 	$this->customcurl->wa_send_media($data);
				// }
				// else{
				// 	$this->customcurl->wa_send_message($data);
				// }

				if ($this->db->trans_status()){
				    $this->db->trans_commit();
				    $status = true;
				    $message = "Pesan berhasil di kirim";
				}
				else{
				    $this->db->trans_rollback();
				    $status = false;
				    $message = "Pesan gagal di kirim";
				}

			}
			else{
				$query = $this->db->get_where('tb_pelanggan',['kode_template' => $template,'status' => 1])->result();

				$this->db->trans_begin();

				$data = array();
				foreach($query as $row){

					$data[] = array(
						'uid' => $this->session->userdata('uid'),
						'kode_pelanggan' => $row->kode_pelanggan,
						'nomor' => $row->no_hp,
						'message' => $message,
						'image' => $imageUrl,
						'insert_at' => now(),
						'user_insert' => $this->session->userdata('uid')
					); 
				}

				$this->db->insert_batch('tb_message',$data);

				if($imageUrl != ''){
					$this->customcurl->wa_send_media($data);
				}
				else{
					$this->customcurl->wa_send_message($data);
				}

				if ($this->db->trans_status()){
				    $this->db->trans_commit();
				    $status = true;
				    $message = "Pesan berhasil di kirim";
				}
				else{
				    $this->db->trans_rollback();
				    $status = false;
				    $message = "Pesan gagal di kirim";
				}
			}
			echo json_encode(['status' => $status,'message' => $message]);
		}
		else{
			show_404();
		}
	}

	function riwayat()
	{
		$header['css'] = datatable('css');
		$footer['js'] = datatable('js').'<script src="'.base_url().'assets/apps/js/wa.js'.'"></script>';
		$this->load->view('template/header',$header);
		$this->load->view('main/riwayat');
		$this->load->view('template/footer',$footer);
	}

	function data_riwayat_pesan()
	{
        if ($this->input->is_ajax_request()) {
            $draw = $this->input->get('draw');
            $start = $this->input->get('start');
            $length = $this->input->get('length');
            $search = $this->input->get('search');
            $order = $this->input->get('order');
            $tgl = $this->input->get('tgl');

            $json = $this->Master_model->json_riwayat_pesan($draw, $start, $length, $search['value'], $order[0]['column'], $order[0]['dir'],$tgl);

            echo json_encode($json);
        } else {
            error_ajax();
        }
	}

}