<?php
function generate_random($length = 8, $number = false)
{
    $characters = '0123456789';
    if ($number == false) {
        $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }

    return $random_string;
}

function random_string($id=10){
    $pool = '1234567890';
    
    $word = '';
    for ($i = 0; $i < $id; $i++){ 
        $word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
    }
    return $word; 
}