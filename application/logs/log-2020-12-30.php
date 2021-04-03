<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-30 09:15:09 --> Query error: Unknown column '123@gmail.com' in 'field list' - Invalid query: 
                INSERT INTO tb_user (`email`,`level`, `uid`, `username`, `password`, `key`, `nama`, `insert_at`,`no_telp`)
                VALUES (`123@gmail.com`,'4', '2BqnZrT75TbeOVPUQM5kYD5qgmGzyU', 'user3', AES_ENCRYPT('1234', 'SOagR'), 'SOagR', 'asdasd',now(),'023984023')
            
ERROR - 2020-12-30 09:20:36 --> Severity: Notice --> Undefined variable: validasi_email E:\xampp\htdocs\gmedia\tokotap\application\controllers\api\Authentication.php 249
ERROR - 2020-12-30 09:23:36 --> Severity: Notice --> Undefined property: stdClass::$foto_profil E:\xampp\htdocs\gmedia\tokotap\application\controllers\api\Authentication.php 266
ERROR - 2020-12-30 09:24:12 --> Severity: Notice --> Undefined property: stdClass::$foto_profil E:\xampp\htdocs\gmedia\tokotap\application\controllers\api\Authentication.php 266
ERROR - 2020-12-30 10:17:58 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' E:\xampp\htdocs\gmedia\tokotap\application\config\autoload.php 61
ERROR - 2020-12-30 10:18:20 --> Severity: Notice --> Undefined property: Authentication::$auth E:\xampp\htdocs\gmedia\tokotap\application\controllers\api\Authentication.php 313
ERROR - 2020-12-30 10:18:24 --> Severity: error --> Exception: Call to a member function token() on null E:\xampp\htdocs\gmedia\tokotap\application\controllers\api\Authentication.php 313
ERROR - 2020-12-30 10:33:29 --> Severity: error --> Exception: syntax error, unexpected '$status' (T_VARIABLE) E:\xampp\htdocs\gmedia\tokotap\application\controllers\api\Authentication.php 338
ERROR - 2020-12-30 10:33:42 --> Severity: error --> Exception: syntax error, unexpected '$status' (T_VARIABLE) E:\xampp\htdocs\gmedia\tokotap\application\controllers\api\Authentication.php 338
ERROR - 2020-12-30 10:34:10 --> Query error: Unknown column 'no_hp' in 'where clause' - Invalid query: SELECT *
FROM `tb_user`
WHERE `no_hp` = '0+12185155431542'
ERROR - 2020-12-30 13:42:59 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-12-30 13:42:59 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-12-30 13:43:25 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-12-30 13:43:25 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-12-30 13:44:11 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-12-30 13:44:11 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-12-30 13:44:22 --> Severity: Notice --> Undefined variable: image E:\xampp\htdocs\gmedia\tokotap\application\controllers\Produk.php 334
ERROR - 2020-12-30 13:53:08 --> Query error: Unknown column 'c.nama_merchant' in 'field list' - Invalid query: 
				SELECT a.*,b.kategori,c.nama_merchant from tb_product a
				left join ms_kategori b
					on a.id_kategori =b.id 
				-- left join ms_merchant c
				-- 	on c.uid = a.uid
				where a.status=1 and a.flag_populer=1  
				 
				LIMIT 0,10
			
ERROR - 2020-12-30 15:58:58 --> Query error: Unknown column 'a.code' in 'where clause' - Invalid query: 
            SELECT * FROM counter a
            where a.code = 'TRANS'
        
ERROR - 2020-12-30 16:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'b.nama_merchant from tb_head_transaksi a
                left join ms_merchant ' at line 1 - Invalid query: 
                SELECT a.*b.nama_merchant from tb_head_transaksi a
                left join ms_merchant b
                    on a.uid = b.uid
                where a.status =1 and a.uid_pembeli='J7YfZmLB8On2rT35ezrWRTXm80UZ8o'
            
