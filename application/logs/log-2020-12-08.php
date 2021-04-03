<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-08 02:15:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 D:\server\htdocs\gmedia\tokotap\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2020-12-08 02:15:52 --> Unable to connect to the database
ERROR - 2020-12-08 02:56:05 --> Severity: Notice --> Trying to get property 'no_order' of non-object D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 116
ERROR - 2020-12-08 02:56:09 --> Severity: Notice --> Trying to get property 'total' of non-object D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 117
ERROR - 2020-12-08 02:56:10 --> Severity: Notice --> Trying to get property 'total' of non-object D:\server\htdocs\gmedia\tokotap\application\helpers\web_helper.php 325
ERROR - 2020-12-08 03:52:03 --> Severity: Notice --> Undefined variable: row D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 59
ERROR - 2020-12-08 03:52:03 --> Severity: Notice --> Trying to get property 'id' of non-object D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 59
ERROR - 2020-12-08 03:52:03 --> Severity: Notice --> Undefined variable: row D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 60
ERROR - 2020-12-08 03:52:04 --> Severity: Notice --> Trying to get property 'no_order' of non-object D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 60
ERROR - 2020-12-08 03:52:04 --> Severity: Notice --> Undefined variable: row D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 61
ERROR - 2020-12-08 03:52:04 --> Severity: Notice --> Trying to get property 'tgl_pengiriman' of non-object D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 61
ERROR - 2020-12-08 03:52:04 --> Severity: Notice --> Undefined variable: row D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 62
ERROR - 2020-12-08 03:52:04 --> Severity: Notice --> Trying to get property 'jam_dari_pengiriman' of non-object D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 62
ERROR - 2020-12-08 03:52:04 --> Severity: Notice --> Undefined variable: row D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 63
ERROR - 2020-12-08 03:52:04 --> Severity: Notice --> Trying to get property 'jam_sampai_pengiriman' of non-object D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 63
ERROR - 2020-12-08 03:52:04 --> Query error: Unknown column 'a.id_produk' in 'on clause' - Invalid query: 
	    		SELECT a.*,b.nama_product,b.satuan from tb_det_transaksi a
				left join(
					select c.*,d.satuan from tb_product c
					left join ms_satuan d
						on c.id_satuan =d.id
				) b
					on b.id = a.id_produk
				where a.no_order ='1232332432' and a.flag = '1'
    		
ERROR - 2020-12-08 03:52:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\server\htdocs\gmedia\tokotap\system\core\Exceptions.php:271) D:\server\htdocs\gmedia\tokotap\system\core\Common.php 570
ERROR - 2020-12-08 03:52:16 --> Query error: Unknown column 'a.id_produk' in 'on clause' - Invalid query: 
	    		SELECT a.*,b.nama_product,b.satuan from tb_det_transaksi a
				left join(
					select c.*,d.satuan from tb_product c
					left join ms_satuan d
						on c.id_satuan =d.id
				) b
					on b.id = a.id_produk
				where a.no_order ='1232332432' and a.flag = '1'
    		
ERROR - 2020-12-08 04:15:32 --> Query error: Unknown column 'kode_product' in 'field list' - Invalid query: INSERT INTO `tb_det_transaksi` (`kode_product`, `id_satuan`, `nama_product`, `harga`, `flag_populer`) VALUES ('3324839038', '1', 'rekomended product', '100000', 0)
ERROR - 2020-12-08 04:40:44 --> Severity: Notice --> Undefined variable: res D:\server\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 90
ERROR - 2020-12-08 07:52:11 --> Severity: error --> Exception: syntax error, unexpected '}' D:\server\htdocs\gmedia\tokotap\application\controllers\api\Authentication.php 175
ERROR - 2020-12-08 07:52:33 --> Severity: Notice --> Undefined variable: no_telp D:\server\htdocs\gmedia\tokotap\application\models\api\Auth_model.php 81
ERROR - 2020-12-08 07:52:33 --> Severity: Notice --> Undefined variable: no_telp D:\server\htdocs\gmedia\tokotap\application\models\api\Auth_model.php 88
ERROR - 2020-12-08 07:53:45 --> Severity: Notice --> Undefined variable: no_telp D:\server\htdocs\gmedia\tokotap\application\models\api\Auth_model.php 88
ERROR - 2020-12-08 09:48:04 --> Severity: Notice --> Undefined property: stdClass::$foto_profil D:\server\htdocs\gmedia\tokotap\application\controllers\api\Profile.php 266
ERROR - 2020-12-08 10:12:02 --> Severity: Notice --> Undefined variable: params D:\server\htdocs\gmedia\tokotap\application\controllers\api\Profile.php 396
