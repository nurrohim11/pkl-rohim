<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-28 00:12:20 --> Severity: Compile Error --> Cannot use empty array elements in arrays E:\server\htdocs\project\ajsadmin\application\controllers\Toko.php 123
ERROR - 2021-02-28 00:18:39 --> Query error: Unknown column 'is_valid' in 'field list' - Invalid query: 
                INSERT INTO tb_user (`level`, `uid`, `username`, `password`, `key`, `nama`, `user_insert`,`insert_at`,`no_telp`,`is_valid`)
                VALUES ('3', 'kgpHNR6SJ2A0HRkN9RD8DdCs8L6sE0', 'anekajaya1', AES_ENCRYPT('1234', 'nQC0E'), 'nQC0E', 'Tesdas daskjd', 'admin',now(),'3292304823443',1)
            
ERROR - 2021-02-28 00:18:42 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:18:42 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:19:54 --> Query error: Unknown column 'is_valid' in 'field list' - Invalid query: 
                INSERT INTO tb_user (`level`, `uid`, `username`, `password`, `key`, `nama`, `user_insert`,`insert_at`,`no_telp`,`is_valid`)
                VALUES ('3', 'pZ5d3lupXsGb7lEcxzLV6vAvauklOG', 'anekajaya1', AES_ENCRYPT('1234', 'Eg0Y7'), 'Eg0Y7', 'Tesdas daskjd', 'admin',now(),'3292304823443',1)
            
ERROR - 2021-02-28 00:22:08 --> 404 Page Not Found: Merchant/id_merchant
ERROR - 2021-02-28 00:22:11 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:22:11 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:29:10 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:29:11 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:29:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'from ms_toko a
					join tb_user b
						on b.uid =a.tid 
					-- left join m...' at line 3 - Invalid query: 
              	SELECT a.*,b.username ,
              		-- c.provinsi ,d.kota ,e.kecamatan
					from ms_toko a
					join tb_user b
						on b.uid =a.tid 
					-- left join ms_provinsi c
					-- 	on c.id=a.id_provinsi 
					-- left join ms_kota d
					-- 	on d.id =a.id_kota 
					-- left join ms_kecamatan e
					-- 	on e.id =a.id_kecamatan 
					where a.status =1 and a.id='3'
                
ERROR - 2021-02-28 00:29:39 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:29:39 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:29:49 --> Severity: Notice --> Undefined property: stdClass::$no_telp E:\server\htdocs\project\ajsadmin\application\controllers\Toko.php 225
ERROR - 2021-02-28 00:30:14 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:30:15 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:32:56 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:32:56 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:39:30 --> 404 Page Not Found: Merchant/hapus_merchant
ERROR - 2021-02-28 00:39:38 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:39:39 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 00:42:14 --> 404 Page Not Found: Master/iklan
ERROR - 2021-02-28 01:04:17 --> 404 Page Not Found: Master/iklan
ERROR - 2021-02-28 01:09:18 --> Severity: error --> Exception: Unable to locate the model you have specified: Master_model E:\server\htdocs\project\ajsadmin\system\core\Loader.php 348
ERROR - 2021-02-28 03:21:50 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) E:\server\htdocs\project\ajsadmin\application\controllers\Master.php 62
ERROR - 2021-02-28 03:25:25 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 03:25:25 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 03:26:14 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 03:26:14 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 03:27:33 --> 404 Page Not Found: Master/berita
ERROR - 2021-02-28 06:29:35 --> Severity: error --> Exception: syntax error, unexpected '}' E:\server\htdocs\project\ajsadmin\application\helpers\custom_date_helper.php 268
ERROR - 2021-02-28 06:29:59 --> 404 Page Not Found: Main/assets
ERROR - 2021-02-28 06:30:04 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 11:26:43 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 11:27:26 --> 404 Page Not Found: Main/assets
ERROR - 2021-02-28 11:27:28 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 11:27:38 --> 404 Page Not Found: Main/assets
ERROR - 2021-02-28 11:27:39 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 11:30:34 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 11:30:34 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 11:31:02 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 11:31:02 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:26:49 --> 404 Page Not Found: Main/assets
ERROR - 2021-02-28 23:26:52 --> 404 Page Not Found: Master/member
ERROR - 2021-02-28 23:33:45 --> Query error: Unknown column 'a.tid' in 'on clause' - Invalid query: 
            SELECT COUNT(*) AS jumlah
            from tb_member a
            join ms_toko b
                on a.tid =b.tid 
            where a.status =1
             
ERROR - 2021-02-28 23:33:48 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:33:48 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:33:51 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:33:52 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:33:52 --> Query error: Unknown column 'a.tid' in 'on clause' - Invalid query: 
            SELECT COUNT(*) AS jumlah
            from tb_member a
            join ms_toko b
                on a.tid =b.tid 
            where a.status =1
             
ERROR - 2021-02-28 23:36:20 --> Severity: error --> Exception: syntax error, unexpected '$query' (T_VARIABLE), expecting identifier (T_STRING) E:\server\htdocs\project\ajsadmin\application\models\Master_model.php 212
ERROR - 2021-02-28 23:36:37 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:36:37 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:36:37 --> Severity: Notice --> Undefined variable: toko E:\server\htdocs\project\ajsadmin\application\models\Master_model.php 165
ERROR - 2021-02-28 23:36:39 --> Query error: Unknown column 'b.nama' in 'field list' - Invalid query: 
            SELECT a.*, b.nama as nama_toko
            from tb_member a
            where a.status =1
             
             
            LIMIT 0, 10 
ERROR - 2021-02-28 23:37:03 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:37:03 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:37:03 --> Query error: Unknown column 'b.nama' in 'field list' - Invalid query: 
            SELECT a.*, b.nama as nama_toko
            from tb_member a
            where a.status =1
             
             
            LIMIT 0, 10 
ERROR - 2021-02-28 23:37:20 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:37:20 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:37:20 --> Query error: Unknown column 'b.nama' in 'field list' - Invalid query: 
            SELECT a.*, b.nama as nama_toko
            from tb_member a
            where a.status =1
             
             
            LIMIT 0, 10 
ERROR - 2021-02-28 23:37:39 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:37:40 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:37:50 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:37:51 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-02-28 23:56:13 --> Severity: error --> Exception: syntax error, unexpected ',' E:\server\htdocs\project\ajsadmin\application\controllers\Produk.php 516
ERROR - 2021-02-28 23:56:29 --> Severity: error --> Exception: syntax error, unexpected '{', expecting function (T_FUNCTION) or const (T_CONST) E:\server\htdocs\project\ajsadmin\application\models\Produk_model.php 110
ERROR - 2021-02-28 23:56:45 --> Severity: error --> Exception: syntax error, unexpected '$start' (T_VARIABLE), expecting ';' or '{' E:\server\htdocs\project\ajsadmin\application\models\Produk_model.php 111
