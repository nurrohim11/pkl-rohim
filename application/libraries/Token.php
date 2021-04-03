<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Token
{
    protected $ci;
    private $client_service = 'wrapper-client';
    private $auth_key = 'anekaja-client';

    function __construct()
    {
        $this->ci =& get_instance();
    }

    /*
        GETTING STARTED
        1. Create table users_authentication
        2. Create field users_id -- varchar(60)
        3. Create field token -- text
        4. Create field expired_at -- datetime
    */

    // checking method request of client
    function check_method($method = 'GET')
    {
        $request_method = $_SERVER['REQUEST_METHOD'];
        if ($request_method == $method) {
            return true;
        } else {
            return false;
        }
    }

    // checking header
    function check_header()
    {
        $client_service = $this->ci->input->get_request_header('Client-Service', true);
        $auth_key = $this->ci->input->get_request_header('Auth-Key', true);

        if ($client_service == $this->client_service && $auth_key == $this->auth_key) {
            return true;
        } else {
            return false;
        }
    }

    // create token
    function create_token($user_id = '')
    {
        $expired_at = date('Y-m-d H:i:s', strtotime('+12 hours'));
        $timestamp = date('YmdHis');
        $encoded_signature = $this->generate_signature($user_id, $timestamp);

        // users_id
        if ($user_id == '') {
            $user_id = $this->ci->input->get_request_header('User-Id', true);
        }

        $data = array(
            'user_id' => $user_id,
            'token' => $encoded_signature,
            'expired_at' => $expired_at
        );

        # revisi 07/01/2019
        $this->ci->db->delete('users_authentication', ['user_id' => $user_id]);

        $this->ci->db->insert('users_authentication', $data);
        $simpan = $this->ci->db->insert_id();

        if ($simpan > 0) {
            return $data;
        } else {
            return false;
        }
    }

    function generate_signature($user_id = '', $timestamp = '')
    {
        $signature = hash_hmac('sha256', $user_id.'&'.$timestamp, $user_id.'die', true);

        return base64_encode($signature);
    }

    // check token
    function check_token()
    {
        $users_id = $this->ci->input->get_request_header('User-Id', true);
        $token = $this->ci->input->get_request_header('Token', true);

        $query = $this->ci->db->query("
			SELECT *
			FROM users_authentication a
			WHERE a.`token` = '$token'
			AND a.`user_id` = '$users_id'
			-- AND a.`expired_at` > NOW() ")->row();

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    // auth
    function auth($method = 'GET', $flag = true)
    {
        // check method request dan method yg ditentukan
        $check_method = $this->check_method($method);
        if ($check_method == true) {
            // check header apakah sudah sesuai
            $check_header = $this->check_header();
            if ($check_header == true) {
                // jika flag true maka check token terlebih dahulu
                // jiak flag false maka hanya mengecek header
                if ($flag == true) {
                    // check token apakah sudah expired
                    $check_token = $this->check_token();
                    if ($check_token == true) {
                        return true;
                    } else {
                        $response = array(
                            'response' => null,
                            'metadata' => array(
                                'status' => 401,
                                'message' => 'Token anda sudah kadaluarsa'
                            )
                        );

                        return $this->print_json($response);
                    }
                } else {
                    return true;
                }
            } else {
                $response = array(
                    'response' => null,
                    'metadata' => array(
                        'status' => 406,
                        'message' => 'Not acceptable response'
                    )
                );

                return $this->print_json($response);
            }
        } else {
            $response = array(
                'response' => null,
                'metadata' => array(
                    'status' => 405,
                    'message' => 'Method not allowed'
                )
            );

            return $this->print_json($response);
        }
    }

    // fungsi untuk mengeluarkan output json
    function print_json($response = '', $statusHeader = 200)
    {
        $ci =& get_instance();
        $ci->output->set_content_type('application/json');
        $ci->output->set_status_header($statusHeader);
        $ci->output->set_output(json_encode($response));
    }
}

/* End of file Token.php */
/* Location: ./application/libraries/Token.php */
