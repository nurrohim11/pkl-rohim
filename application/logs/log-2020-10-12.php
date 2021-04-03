<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-12 02:53:24 --> 404 Page Not Found: Transaksi/data_pos_kasir
ERROR - 2020-10-12 03:01:41 --> 404 Page Not Found: Transaksi/data_pos_kasir
ERROR - 2020-10-12 03:04:35 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:05:11 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:05:42 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:06:10 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:06:10 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:06:17 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:06:18 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:06:30 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:06:33 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:06:33 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:08:05 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:08:06 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:08:19 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:08:20 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:13:20 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:13:22 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:13:54 --> Severity: Compile Error --> Cannot use isset() on the result of an expression (you can use "null !== expression" instead) D:\server\htdocs\project\konter\application\controllers\Transaksi.php 22
ERROR - 2020-10-12 03:16:29 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:16:30 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:16:40 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:16:41 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:17:22 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:17:22 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:17:28 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:17:29 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:17:33 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:17:34 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:19:37 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:19:38 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:19:59 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 03:20:00 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 07:43:32 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 07:43:32 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 08:08:59 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 08:08:59 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 08:09:00 --> Severity: Notice --> Undefined property: Transaksi::$Master_model D:\server\htdocs\project\konter\application\controllers\Transaksi.php 46
ERROR - 2020-10-12 08:09:00 --> Severity: error --> Exception: Call to a member function json_pos_kasir() on null D:\server\htdocs\project\konter\application\controllers\Transaksi.php 46
ERROR - 2020-10-12 08:09:28 --> Severity: error --> Exception: syntax error, unexpected ')' D:\server\htdocs\project\konter\application\models\Transaksi_model.php 59
ERROR - 2020-10-12 08:10:36 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 08:10:36 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 08:10:36 --> Query error: Unknown column 'a.id_faktur' in 'field list' - Invalid query: 
            SELECT a.id, a.id_faktur,a.qty ,a.harga ,a.subtotal ,a.diskon ,a.hpp ,a.total_hpp, b.* 
			from tb_penjualan a
			join (
				select * from (
					select a.id as id_barang, a.kode_barang ,ifnull(b.serial_number,0) as serial_number,
					a.nama,a.stok ,
					(case when a.harga_beli is null or a.harga_beli = 0 
						then b.harga_beli
						else a.harga_beli
					end) as harga_beli,
					(case when a.harga_jual is null or a.harga_jual= 0 
						then b.harga_jual
						else a.harga_jual
					end) as harga_jual
					from tb_barang a
					left join (
						select * from tb_serial_number a
						where a.status  =1
					) b
						on b.token = a.token
					where a.status = 1
				) barang
			) b
			on a.id_barang = b.id_barang and a.sn = b.serial_number
			where a.user_insert = 'super' and a.status = 1
             
             ORDER BY b.kode_barang asc  
            LIMIT 0, 10 
ERROR - 2020-10-12 08:11:07 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 08:11:07 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:01:17 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:01:17 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:01:19 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:01:20 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:05:27 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:05:28 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:05:49 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:05:50 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:06:09 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:06:10 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:06:40 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:06:41 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:07:08 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:07:08 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:07:17 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:07:18 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:07:35 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:07:36 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:07:57 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-10-12 12:07:58 --> 404 Page Not Found: Assets/plugins
