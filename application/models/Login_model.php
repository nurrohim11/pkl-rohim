<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function is_valid_user($username = '', $password = '')
    {
        return $this->db->query("
			SELECT *
			FROM tb_user a
			WHERE a.`username` = '$username'
			AND a.`password` = AES_ENCRYPT('$password', a.`key`)
			AND a.`status` = 1")->row();
    }

    function update_session($uid = '', $remember = '')
    {
        $now = now();
        $session = md5(generate_random(4));
        $ip = $this->input->ip_address();

        $data = array(
            'session' => $session,
            'last_login' => $now,
            'last_ip' => $ip
        );

        $this->db->where('uid', $uid)
            ->update('tb_user', $data);

        if ($remember == 1) {
            $this->create_cookies($session);
        }

        return $session;
    }

    function create_cookies($session = '')
    {
        $name = 'apiwa';
        $expire = '8640000';
        $domain = base_url();
        
        delete_cookie($name);

        $cookie = array(
            'name' => $name,
            'value' => $session,
            'expire' => $expire
        );

        $this->input->set_cookie($cookie);
    }

    function login($username = '', $password = '', $remember = '')
    {
        $is_valid_user = $this->is_valid_user($username, $password);

        $data = [];
        if (! empty($is_valid_user)) {
            $status = true;
            $message = 'Login berhasil.';
            $data = $is_valid_user;
            $today = date('Y-m-d');

            $uid = isset($data->uid) ? $data->uid : '';
            $username = isset($data->username) ? $data->username : '';
            $nama = isset($data->nama) ? $data->nama : '';
            $level = isset($data->level) ? $data->level : '';

            $is_login = true;

            if ($is_login == true) {
                $session = $this->update_session($uid, $remember);

                $set_session = array(
                    'username' => $username,
                    'nama' => $nama,
                    'level' => $level,
                    'uid' => $uid,
                    'session' => $session
                );

                $this->session->set_userdata($set_session);
            }
        } else {
            $status = false;
            $message = 'Username atau password salah. silahkan ulangi lagi.';
        }

        $result = array(
            'status' => $status,
            'message' => $message
        );

        return $result;
    }

    function is_valid_cookie()
    {
        $get_cookie = get_cookie('apiwa', true);
        $is_valid = $this->db->where('session', $get_cookie)
                        ->get('tb_user')
                        ->row();

        $result = (! empty($is_valid)) ? true : false;

        if ($result == true && $get_cookie != '' && $get_cookie != null) {
            $uid = isset($data->uid) ? $data->uid : '';
            $username = isset($data->username) ? $data->username : '';
            $nama = isset($data->nama) ? $data->nama : '';
            $level = isset($data->level) ? $data->level : '';

            $session = $get_cookie;

            $set_session = array(
                'username' => $username,
                'nama' => $nama,
                'level' => $level,
                'uid' => $uid,
                'session' => $session
            );
            
            $this->session->set_userdata($set_session);
        }

        return $result;
    }

    function is_valid_session()
    {
        $username = $this->session->userdata('username');
        $uid = $this->session->userdata('uid');
        $nama = $this->session->userdata('nama');
        $level = $this->session->userdata('level');
        $session = $this->session->userdata('session');

        $where = array(
            'username' => $username,
            'uid' => $uid,
            'nama' => $nama,
            'level' => $level,
            'session' => $session
        );

        $is_valid = $this->db->where($where)
                        ->get('tb_user')
                        ->row();

        $result = (! empty($is_valid)) ? true : false;

        return $result;
    }

    function is_login()
    {
        $valid_cooke = $this->is_valid_cookie();
        $valid_session = $this->is_valid_session();

        $cookie_status = false;
        $session_status = false;
            
        if ($valid_cooke == true) {
            $valid_session = $this->is_valid_session();
            if ($valid_session == true) {
                $cookie_status = true;
            } else {
                $cookie_status = false;
            }
        }

        if ($valid_session == true) {
            $session_status = true;
        }

        return ($cookie_status == true || $session_status == true) ? true : redirect('login');
    }

    function is_login_ajax()
    {
        $valid_cooke = $this->is_valid_cookie();
        $valid_session = $this->is_valid_session();

        $cookie_status = false;
        $session_status = false;
        $is_ajax = false;
            
        if ($valid_cooke == true) {
            $valid_session = $this->is_valid_session();
            if ($valid_session == true) {
                $cookie_status = true;
            } else {
                $cookie_status = false;
            }
        }

        if ($valid_session == true) {
            $session_status = true;
        }

        if ($this->input->is_ajax_request() == true) {
            $is_ajax = true;
        }

        return (($cookie_status == true || $session_status == true) && $is_ajax == true) ? true : $this->output->set_status_header(401);
    }
}

/* End of file Auth_Model.php */
/* Location: ./application/models/Auth_Model.php */
