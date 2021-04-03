<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
		is_login();
		$this->load->model('User_model');
	}

	function index()
	{
		$header['css'] = datatable('css').tree('css');
		$data = array(
			'level' => $this->User_model->ms_level()
		);
		$footer['js'] = datatable('js').tree('js').'<script src="'.base_url().'assets/apps/js/user/user.js'.'"></script>';
		$this->load->view('template/header',$header);
		$this->load->view('user/user',$data);
		$this->load->view('template/footer',$footer);
	}

    function data_user()
    {
        if ($this->input->is_ajax_request()) {
            $draw = $this->input->get('draw');
            $start = $this->input->get('start');
            $length = $this->input->get('length');
            $search = $this->input->get('search');
            $order = $this->input->get('order');
            $level_user = $this->input->get('level_user');
            
            $json = $this->User_model->json_user($draw, $start, $length, $search['value'], $order[0]['column'], $order[0]['dir'],$level_user);

            echo json_encode($json);
        } else {
            error_ajax();
        }
    }

    function proses_user()
    {
        if ($this->input->is_ajax_request()) {
        	$id = $this->input->post('id');
        	$nama = $this->input->post('nama');
        	$username = $this->input->post('username');
        	$no_hp = $this->input->post('no_hp');
        	$level = $this->input->post('level');
            $password = $this->input->post('password');
        	// $password = $this->input->post('pass');

        	$exist = $this->User_model->exist_user($username);

        	if(empty($id)){
    			if($exist){
	        		$status =false;
	        		$message = "Username ".$username." sudah digunakan user lain";
	        	}
	        	else{
                    $status = false;
	        		$message = '';
	        		if($nama == '' || $username == '' || $no_hp == '' || $password == '' || $level == '' ){
	        			if($nama == ''){
	        				$message .= "Masukkan nama user <br>";
	        			}
	        			if($no_hp == ''){
	        				$message .= "Masukkan no. telp user <br>";
	        			}
	        			if($username == ''){
	        				$message .= "Masukkan username user <br>";
	        			}
	        			if($password == ''){
	        				$message .= "Masukkan password user <br>";
	        			}
	        			if($level == ''){
	        				$message .= "Masukkan level user <br>";
	        			}
	        		}
	        		else {

	        			if(strlen($password) < 4){
	        				$message = "Password minimal 4 karakter <br>";	
	        			}

	        			$save = $this->User_model->process_user($id,$nama,$no_hp,$username,$password,$level);
	        			if($save){
	        				$status = true;
	        				$message ="User berhasil ditambahakan";
	        			}
	        			else{
	        				$status = false;
	        				$message ="User gagal ditambahakan";
	        			}
	        		}
	        	}
        	}
        	else {
        		$status = false;
        		$message = '';
        		if($nama == '' || $username == '' || $no_hp == ''){
        			if($nama == ''){
        				$message .= "Masukkan nama user <br>";
        			}
        			if($no_hp == ''){
        				$message .= "Masukkan no. telp user <br>";
        			}
        			if($username == ''){
        				$message .= "Masukkan username user <br>";
        			}
        		}
        		else {
        			if($password != ''){
	        			if(strlen($password) < 4){
	        				$message .= "Password minimal 4 karakter <br>";	
	        			}
                        else{
                            $save = $this->User_model->process_user($id,$nama,$no_hp,$username,$password,$level);
                            if($save){
                                $status = true;
                                $message ="User berhasil diupdate";
                            }
                            else{
                                $status = false;
                                $message ="User gagal diupdate";
                            }
                        }
        			}else{
	        			$save = $this->User_model->process_user($id,$nama,$no_hp,$username,$password,$level);
	        			if($save){
	        				$status = true;
	        				$message ="User berhasil diupdate";
	        			}
	        			else{
	        				$status = false;
	        				$message ="User gagal diupdate";
	        			}	
        			}
        		}
        	}

        	echo json_encode(array('status' => $status,'message' => $message));
        }
    }

    function hapus_user()
    {
        if ($this->input->is_ajax_request()) {
        	$id = $this->input->post('id');

        	$del = $this->Main_model->process_data('tb_user',array('status' => 0),array('id' => $id));
        	if($del){

                $q = $this->db->get_where('tb_user',['id' => $id])->row();
                if($q->level == 1){
                    $this->customdb->process_data('tb_member',['status' => 0],['uid'=>$q->uid]);
                }
        		$status = true;
        		$message ="User berhasil dihapus";
        	}else{
        		$status = false;
        		$message = "User gagal dihapus";
        	}
        	echo json_encode(array('status' => $status,'message' => $message));
        }else{
        	error_ajax();
        }

    }

    function id_user()
    {
        if ($this->input->is_ajax_request()) {
        	$id = $this->input->post('id');

        	$res = $this->Main_model->view_by_id('tb_user',array('id' => $id,'status' => 1),'row');
        	if($res){
        		$status = true;
        		$message ="Berhasil";
        	}else{
        		$status = false;
        		$message = "Berhasil";
        	}
        	echo json_encode(array('status' => $status,'message' => $message,'response' => $res));
        }else{
        	error_ajax();
        }

    }

    function id_user_menu($id = '')
    {
        $ms_user = $this->customdb->view_by_id('tb_user', ['id' => $id], 'row');
        $username = isset($ms_user->username) ? $ms_user->username : '';
        $nama = isset($ms_user->nama) ? $ms_user->nama : '';

        $ms_menu = $this->Menu_model->json_menu($username);

        echo json_encode([
            'menu' => $ms_menu, 
            'nama' => $nama
        ]);
    }

    function edit_menu()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id-menu');
            $checked = $this->input->post('checked');

            if ($id == '' || $checked == '') {
                $status = 0;
                $message = '';

                $message .= ($id == '') ? 'User tidak ditemukan <br/>' : '';
                $message .= ($checked == '') ? 'Menu harus dipilih <br />' : '';
            } else {
                $update = $this->Menu_model->edit_menu($id, $checked);
                if ($update) {
                    $status = 1;
                    $message = 'Data berhasil diupdate';
                } else {
                    $status = 0;
                    $message = 'Gagal mengupdate data';
                }
            }

            $result = array(
                'status' => $status,
                'message' => $message
            );
            // return json result
            echo json_encode($result);
        }
    }

    function reset_password()
    {
        if ($this->input->is_ajax_request()) {
            $id = $this->input->post('id');

            $key = generate_random(4);
            $password = 1234;
            $q = $this->db->query("
                        UPDATE tb_user 
                        set `password`= AES_ENCRYPT('$password', '$key'),`key`='$key'
                        where id = '$id'
                    ");
            if($q){
                $status = true;
                $message = "Password berhasil direset";
            }
            else{
                $status = false;
                $message = "Password gagal direset";   
            }

            $result = array(
                'status' => $status,
                'message' => $message
            );
            // return json result
            echo json_encode($result);
        }
        else{
            error_ajax();
        }
    }

    function change_password()
    {
        $header['css'] = datatable('css');
        $data=[];
        $footer['js'] = datatable('js').'<script src="'.base_url().'assets/apps/js/user/user.js'.'"></script>';
        $this->load->view('admin/template/header',$header);
        $this->load->view('admin/user/change_password');
        $this->load->view('admin/template/footer',$footer);
    }

    function process_change_password()
    {
        if($this->input->is_ajax_request()){
            $uid = $this->session->userdata('uid');
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru');
            $re_password_baru = $this->input->post('re_password_baru');

            $check_password = $this->User_model->check_password($uid,$password_lama);
            if($check_password){
                $upd = $this->User_model->change_password($uid,$re_password_baru);
                if($upd){
                    $status = true;
                    $message = "Password berhasil diubah";
                }
                else{
                    $status = false;
                    $message = "Password gagal diubah";
                }
            }
            else{
                $status = false;
                $message = "Password lama anda tidak sesuai";
            }
            echo json_encode(['status' => $status,'message'=>$message]);
        }
        else{
            error_ajax();
        }
    }

}