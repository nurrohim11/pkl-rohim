<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-14 06:39:03 --> Query error: Column count doesn't match value count at row 1 - Invalid query: 
            INSERT INTO temp_karyawan 
            (SELECT * FROM ms_karyawan WHERE id = '52')
ERROR - 2019-01-14 06:39:21 --> Query error: Column count doesn't match value count at row 1 - Invalid query: 
            INSERT INTO temp_karyawan 
            (SELECT * FROM ms_karyawan WHERE id = '52')
ERROR - 2019-01-14 06:39:30 --> Query error: Column count doesn't match value count at row 1 - Invalid query: 
            INSERT INTO temp_karyawan 
            (SELECT * FROM ms_karyawan WHERE id = '53')
ERROR - 2019-01-14 06:39:34 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-01-14 06:39:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-01-14 06:39:34 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-01-14 06:39:35 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-01-14 06:39:37 --> 404 Page Not Found: 
ERROR - 2019-01-14 06:40:45 --> Query error: Column count doesn't match value count at row 1 - Invalid query: 
            INSERT INTO temp_karyawan 
            (SELECT * FROM ms_karyawan WHERE id = '53')
ERROR - 2019-01-14 09:59:15 --> Query error: Unknown column 'usernam' in 'where clause' - Invalid query: 
            SELECT *
            FROM tb_user 
            WHERE `usernam` = 'victor'
            AND `password` = AES_ENCRYPT('1234', `key`)
            AND `level` = '' 
