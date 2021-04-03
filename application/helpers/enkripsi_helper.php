<?php  
/**
* @param $id is integer
* NOTE: untuk mengkonversi id menjadi angka lain
*/
if (!function_exists('send_id')) {
    function send_id($id='')
    {
        $date_init = new DateTime(date('Y-m-d'));
        $time = $date_init->getTimestamp();
        $date = getdate();
        $baru = $id * $date['year'] * $date['mon'] * $date['mday'];
        return ($baru + $time)*$date['hours'];
    }
}

/**
* @param $id is integer
* NOTE: untuk menerima angka menjadi id
*/
if (!function_exists('receive_id')) {
    function receive_id($id='')
    {
        $date_init = new DateTime(date('Y-m-d'));
        $time = $date_init->getTimestamp();
        $date = getdate();
        $div = $id / $date['hours'];
        $new_id = $div - $time;
        return (($new_id/$date['year'])/$date['mon'])/$date['mday'];
    }
}

function encrypt_pass($pass='',$key='')
{
    $ci =& get_instance();

    $query = $ci->db->query("
        SELECT aes_encrypt('$pass','$key') as password
    ")->row();

    $password = ($query->password) ? $query->password : '';
    return $password;
}

function counter($kode='TRX')
{
    $ci =& get_instance();

    $month = date('m');
    if(strlen($month) == 1){
        $month = '0'.$month;
    }

    $year = date('Y');
    $count = 1;

    $exist = $ci->customdb->run_query("
            SELECT * FROM counter a
            where a.code = '$kode'
        ","row");

    if(!empty($exist))
    {
        $count = $exist->counter + 1;
        $ci->customdb->process_data('counter',
            ['counter' => $count,'bulan' => $month,'tahun' => $year],
            ['code' => $kode]);
    }
    else{
        $ci->customdb->process_data('counter',
            ['counter' => $count,'bulan' => $month,'tahun' => $year,'code' => $kode]);   
    }

    $counter = 0;

    switch (strlen($count)) {
        case '4':
            $counter = "0".$count;
            break;
        case '3':
            $counter = "00".$count;
            break;
        case '2':
            $counter = "000".$count;
            break;
        case '1':
            $counter = "0000".$count;
            break;
        default:
            $counter = 0;
            break;
    }

    $result = $counter.$month.date('y');

    return $result;

}

?>