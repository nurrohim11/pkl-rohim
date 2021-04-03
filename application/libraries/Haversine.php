<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Haversine
{

    /*
        curlatitude = posisi current latitude / posisi sekarang
        curlongitude = posisi current longitude / posisi sekarang
        latitude = latitude posisi jarak objek
        longitude = longitude posisi jarak objek
    */
    function hitung_jarak($curlatitude = '', $curlongitude = '', $latitude = '', $longitude = '')
    {
        $ci =& get_instance();

        $query = $ci->db->query("
			SELECT 	 
            ROUND (111.045 * DEGREES(ACOS(COS(RADIANS('$curlatitude'))
            * COS(RADIANS('$latitude'))
            * COS(RADIANS('$curlongitude') - RADIANS('$longitude'))
            + SIN(RADIANS('$curlatitude'))
            * SIN(RADIANS('$latitude')))), 2) AS jarak ")->row();

        // return distance in km
        return isset($query->jarak) ? $query->jarak : 0;
    }
}
