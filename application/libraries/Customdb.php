<?php
class Customdb
{
    function view_by_id($table = '', $condition = '', $row = 'row')
    {
        $ci =& get_instance();
        if ($row == 'row') {
            if ($condition) {
                return $ci->db->where($condition)->get($table)->row();
            } else {
                return $ci->db->get($table)->row();
            }
        } else {
            if ($condition) {
                return $ci->db->where($condition)->get($table)->result();
            } else {
                return $ci->db->get($table)->result();
            }
        }
    }

    function run_query($query = '', $row = 'row')
    {
        $ci =& get_instance();
        if ($row == 'row') {
            
            return $ci->db->query($query)->row();
           
        } else {
            return $ci->db->query($query)->result();
        }
    }

    function process_data($table = '', $data = '', $condition = '')
    {
        $ci =& get_instance();
        if ($condition) {
            return $ci->db->where($condition)->update($table, $data);
        } else {
            return $ci->db->insert($table, $data);
        }
    }

    function delete_data($table = '', $condition = '')
    {
        $ci =& get_instance();
        return $ci->db->where($condition)->delete($table);
    }

    // connect to another db
    function create_connection($hostname = '', $username = '', $password = '', $database = '')
    {
        $ci =& get_instance();
        $config['hostname'] = $hostname;
        $config['username'] = $username;
        $config['password'] = $password;
        $config['database'] = $database;
        $config['dbdriver'] = 'mysqli';
        $config['dbprefix'] = '';
        $config['pconnect'] = false;
        $config['db_debug'] = true;

        $db_new = $ci->load->database($config, true);
        return $db_new;
    }
}
