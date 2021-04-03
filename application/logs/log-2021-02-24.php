<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-24 00:34:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-24 08:46:05 --> Severity: error --> Exception: syntax error, unexpected 'CURLOPT_HTTPHEADER' (T_STRING), expecting ')' /home/pfh5cektoko/public_html/application/libraries/Customcurl.php 56
ERROR - 2021-02-24 01:50:34 --> Severity: error --> Exception: syntax error, unexpected '}' /home/pfh5cektoko/public_html/application/controllers/api/Authentication.php 590
ERROR - 2021-02-24 04:56:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-02-24 04:56:18 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2021-02-24 04:56:19 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2021-02-24 04:56:20 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2021-02-24 05:26:41 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2021-02-24 05:26:41 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2021-02-24 05:26:41 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2021-02-24 05:26:42 --> 404 Page Not Found: Web/wp-includes
ERROR - 2021-02-24 05:26:42 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2021-02-24 05:26:42 --> 404 Page Not Found: Website/wp-includes
ERROR - 2021-02-24 05:26:42 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2021-02-24 05:26:42 --> 404 Page Not Found: News/wp-includes
ERROR - 2021-02-24 05:26:42 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2021-02-24 05:26:42 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2021-02-24 05:26:43 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2021-02-24 05:26:43 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2021-02-24 05:26:43 --> 404 Page Not Found: Test/wp-includes
ERROR - 2021-02-24 05:26:43 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2021-02-24 05:26:43 --> 404 Page Not Found: Site/wp-includes
ERROR - 2021-02-24 05:26:43 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2021-02-24 05:26:43 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2021-02-24 07:08:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-24 07:08:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-24 07:22:38 --> Severity: Warning --> mysqli::query(): (22007/1366): Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 /home/pfh5cektoko/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-02-24 07:22:38 --> Query error: Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 - Invalid query: 
                SELECT a.*,b.nama_merchant, metode_belanja(a.metode_belanja) as metode_belanja,
                DATE_FORMAT(a.tgl_pengiriman,'%d %M %Y') as tgl_kirim,
                TIME_FORMAT(a.jam_dari_pengiriman, '%H:%i') as jam_awal,
                TIME_FORMAT(a.jam_sampai_pengiriman,'%H:%i') as jam_akhir, a.status,status_transaksi(a.status) as ket_status
                from tb_head_transaksi a
                left join ms_merchant b
                    on a.uid = b.uid
                where a.status =1 and a.uid_pembeli='Y2KXnmWH0PdROnp7TweYUoVqvRl1'
                order by a.insert_at desc
                 LIMIT 0, 10
            
ERROR - 2021-02-24 07:22:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/pfh5cektoko/public_html/system/core/Exceptions.php:271) /home/pfh5cektoko/public_html/system/core/Common.php 570
ERROR - 2021-02-24 07:22:39 --> Severity: Warning --> mysqli::query(): (22007/1366): Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 /home/pfh5cektoko/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-02-24 07:22:40 --> Query error: Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 - Invalid query: 
                SELECT a.*,b.nama_merchant, metode_belanja(a.metode_belanja) as metode_belanja,
                DATE_FORMAT(a.tgl_pengiriman,'%d %M %Y') as tgl_kirim,
                TIME_FORMAT(a.jam_dari_pengiriman, '%H:%i') as jam_awal,
                TIME_FORMAT(a.jam_sampai_pengiriman,'%H:%i') as jam_akhir, a.status,status_transaksi(a.status) as ket_status
                from tb_head_transaksi a
                left join ms_merchant b
                    on a.uid = b.uid
                where a.status =1 and a.uid_pembeli='Y2KXnmWH0PdROnp7TweYUoVqvRl1'
                order by a.insert_at desc
                 LIMIT 0, 10
            
ERROR - 2021-02-24 07:22:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/pfh5cektoko/public_html/system/core/Exceptions.php:271) /home/pfh5cektoko/public_html/system/core/Common.php 570
ERROR - 2021-02-24 07:22:42 --> Severity: Warning --> mysqli::query(): (22007/1366): Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 /home/pfh5cektoko/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-02-24 07:22:42 --> Query error: Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 - Invalid query: 
                SELECT a.*,b.nama_merchant, metode_belanja(a.metode_belanja) as metode_belanja,
                DATE_FORMAT(a.tgl_pengiriman,'%d %M %Y') as tgl_kirim,
                TIME_FORMAT(a.jam_dari_pengiriman, '%H:%i') as jam_awal,
                TIME_FORMAT(a.jam_sampai_pengiriman,'%H:%i') as jam_akhir, a.status,status_transaksi(a.status) as ket_status
                from tb_head_transaksi a
                left join ms_merchant b
                    on a.uid = b.uid
                where a.status =1 and a.uid_pembeli='Y2KXnmWH0PdROnp7TweYUoVqvRl1'
                order by a.insert_at desc
                 LIMIT 0, 10
            
ERROR - 2021-02-24 07:22:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/pfh5cektoko/public_html/system/core/Exceptions.php:271) /home/pfh5cektoko/public_html/system/core/Common.php 570
ERROR - 2021-02-24 07:22:47 --> Severity: Warning --> mysqli::query(): (22007/1366): Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 /home/pfh5cektoko/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-02-24 07:22:47 --> Query error: Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 - Invalid query: 
                SELECT a.*,b.nama_merchant, metode_belanja(a.metode_belanja) as metode_belanja,
                DATE_FORMAT(a.tgl_pengiriman,'%d %M %Y') as tgl_kirim,
                TIME_FORMAT(a.jam_dari_pengiriman, '%H:%i') as jam_awal,
                TIME_FORMAT(a.jam_sampai_pengiriman,'%H:%i') as jam_akhir, a.status,status_transaksi(a.status) as ket_status
                from tb_head_transaksi a
                left join ms_merchant b
                    on a.uid = b.uid
                where a.status =1 and a.uid_pembeli='Y2KXnmWH0PdROnp7TweYUoVqvRl1'
                order by a.insert_at desc
                 LIMIT 0, 10
            
ERROR - 2021-02-24 07:22:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/pfh5cektoko/public_html/system/core/Exceptions.php:271) /home/pfh5cektoko/public_html/system/core/Common.php 570
ERROR - 2021-02-24 07:23:17 --> Severity: Warning --> mysqli::query(): (22007/1366): Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 /home/pfh5cektoko/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-02-24 07:23:17 --> Query error: Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 - Invalid query: 
                SELECT a.*,b.nama_merchant, metode_belanja(a.metode_belanja) as metode_belanja,
                DATE_FORMAT(a.tgl_pengiriman,'%d %M %Y') as tgl_kirim,
                TIME_FORMAT(a.jam_dari_pengiriman, '%H:%i') as jam_awal,
                TIME_FORMAT(a.jam_sampai_pengiriman,'%H:%i') as jam_akhir, a.status,status_transaksi(a.status) as ket_status
                from tb_head_transaksi a
                left join ms_merchant b
                    on a.uid = b.uid
                where a.status =1 and a.uid_pembeli='Y2KXnmWH0PdROnp7TweYUoVqvRl1'
                order by a.insert_at desc
                 LIMIT 0, 10
            
ERROR - 2021-02-24 07:23:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/pfh5cektoko/public_html/system/core/Exceptions.php:271) /home/pfh5cektoko/public_html/system/core/Common.php 570
ERROR - 2021-02-24 07:26:52 --> Severity: Warning --> mysqli::query(): (22007/1366): Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 /home/pfh5cektoko/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-02-24 07:26:52 --> Query error: Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 - Invalid query: 
                SELECT a.*,b.nama_merchant, metode_belanja(a.metode_belanja) as metode_belanja,
                DATE_FORMAT(a.tgl_pengiriman,'%d %M %Y') as tgl_kirim,
                TIME_FORMAT(a.jam_dari_pengiriman, '%H:%i') as jam_awal,
                TIME_FORMAT(a.jam_sampai_pengiriman,'%H:%i') as jam_akhir, a.status,status_transaksi(a.status) as ket_status
                from tb_head_transaksi a
                left join ms_merchant b
                    on a.uid = b.uid
                where a.status =1 and a.uid_pembeli='Y2KXnmWH0PdROnp7TweYUoVqvRl1'
                order by a.insert_at desc
                 LIMIT 0, 10
            
ERROR - 2021-02-24 07:26:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/pfh5cektoko/public_html/system/core/Exceptions.php:271) /home/pfh5cektoko/public_html/system/core/Common.php 570
ERROR - 2021-02-24 07:26:56 --> Severity: Warning --> mysqli::query(): (22007/1366): Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 /home/pfh5cektoko/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-02-24 07:26:56 --> Query error: Incorrect integer value: 'Pesanan Baru' for column ``.``.`ket_status` at row 1 - Invalid query: 
                SELECT a.*,b.nama_merchant, metode_belanja(a.metode_belanja) as metode_belanja,
                DATE_FORMAT(a.tgl_pengiriman,'%d %M %Y') as tgl_kirim,
                TIME_FORMAT(a.jam_dari_pengiriman, '%H:%i') as jam_awal,
                TIME_FORMAT(a.jam_sampai_pengiriman,'%H:%i') as jam_akhir, a.status,status_transaksi(a.status) as ket_status
                from tb_head_transaksi a
                left join ms_merchant b
                    on a.uid = b.uid
                where a.status =1 and a.uid_pembeli='Y2KXnmWH0PdROnp7TweYUoVqvRl1'
                order by a.insert_at desc
                 LIMIT 0, 10
            
ERROR - 2021-02-24 07:26:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/pfh5cektoko/public_html/system/core/Exceptions.php:271) /home/pfh5cektoko/public_html/system/core/Common.php 570
ERROR - 2021-02-24 14:37:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-02-24 16:14:03 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-02-24 16:24:32 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-02-24 16:38:41 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2021-02-24 17:34:50 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-02-24 17:34:53 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2021-02-24 17:34:54 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2021-02-24 17:34:56 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2021-02-24 17:36:09 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-02-24 18:19:03 --> 404 Page Not Found: Wp-loginphp/index
