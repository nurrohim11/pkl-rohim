<?php

function username()
{
    $ci =& get_instance();

    return $ci->session->userdata('username');
}

function profile_name()
{
    $ci =& get_instance();

    return $ci->session->userdata('nama');
}

function level_user()
{
    $ci =& get_instance();

    $level = $ci->session->userdata('level');

    return $level;
}

function tid()
{
    $ci =& get_instance();

    $toko = '';
    if (level_user() == 2) {
        $toko = $ci->session->userdata('tid');
    }

    return $toko;
}

function uid()
{
    $ci =& get_instance();
    $user_id = ($ci->input->get_request_header('User-Id', true)) ? $ci->input->get_request_header('User-Id', true) : '';
    return $user_id;
}