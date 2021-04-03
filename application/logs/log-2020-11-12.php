<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-12 13:13:47 --> 404 Page Not Found: Transaksi/penjualan
ERROR - 2020-11-12 15:18:48 --> 404 Page Not Found: ajax/Piutang/total_penjualan
ERROR - 2020-11-12 15:18:51 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:18:51 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:18:55 --> 404 Page Not Found: ajax/Piutang/total_penjualan
ERROR - 2020-11-12 15:18:56 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:18:56 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:19:10 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:19:11 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:19:11 --> Severity: error --> Exception: Unable to locate the model you have specified: Penjualan_model D:\server\htdocs\project\konter\system\core\Loader.php 348
ERROR - 2020-11-12 15:19:53 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:19:53 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:27:40 --> Severity: Notice --> Undefined property: Penjualan::$Transaksi_model D:\server\htdocs\project\konter\application\controllers\ajax\Penjualan.php 78
ERROR - 2020-11-12 15:27:41 --> Severity: error --> Exception: Call to a member function json_riwayat_penjualan() on null D:\server\htdocs\project\konter\application\controllers\ajax\Penjualan.php 78
ERROR - 2020-11-12 15:27:45 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:27:45 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:27:49 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:27:49 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:27:49 --> Severity: Notice --> Undefined property: Penjualan::$Transaksi_model D:\server\htdocs\project\konter\application\controllers\ajax\Penjualan.php 78
ERROR - 2020-11-12 15:27:49 --> Severity: error --> Exception: Call to a member function json_riwayat_penjualan() on null D:\server\htdocs\project\konter\application\controllers\ajax\Penjualan.php 78
ERROR - 2020-11-12 15:28:04 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:28:04 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:28:04 --> Query error: Unknown column 'a.pelanggan' in 'order clause' - Invalid query: 
            SELECT a.id ,a.faktur ,a.total ,a.diskon, a.grand_total, 
				a.id_pelanggan,a.insert_at, ifnull(b.pelanggan ,'') as pelanggan,
				(
					case when a.flag  = 1 then 'Tunai'
					else 'Kredit'
					end
				) jenis_transaksi
				from tb_faktur a
				left join ms_pelanggan b
					on b.id = a.id_pelanggan 
				where a.mode ='001' and a.status  =1
             
             ORDER BY a.pelanggan desc  
            LIMIT 0, 10 
ERROR - 2020-11-12 15:28:28 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:28:29 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:28:29 --> Severity: Notice --> Undefined property: stdClass::$tgl D:\server\htdocs\project\konter\application\models\Penjualan_model.php 36
ERROR - 2020-11-12 15:28:29 --> Severity: Notice --> Undefined property: stdClass::$tgl D:\server\htdocs\project\konter\application\models\Penjualan_model.php 36
ERROR - 2020-11-12 15:28:29 --> Severity: Notice --> Undefined property: stdClass::$tgl D:\server\htdocs\project\konter\application\models\Penjualan_model.php 36
ERROR - 2020-11-12 15:28:30 --> Severity: Notice --> Undefined property: stdClass::$tgl D:\server\htdocs\project\konter\application\models\Penjualan_model.php 36
ERROR - 2020-11-12 15:28:30 --> Severity: Notice --> Undefined property: stdClass::$tgl D:\server\htdocs\project\konter\application\models\Penjualan_model.php 36
ERROR - 2020-11-12 15:29:01 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-11-12 15:29:01 --> 404 Page Not Found: Assets/plugins
