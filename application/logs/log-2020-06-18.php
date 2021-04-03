<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-18 00:05:10 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-06-18 01:22:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-06-18 03:00:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2020-06-18 10:59:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/application/controllers/Rest_Reimburse.php:37) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-06-18 11:01:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/application/models/Rest_Reimburse_Model.php:37) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-06-18 11:07:19 --> Severity: Notice --> Undefined variable: status /home/absenon/public_html/application/controllers/Rest_Reimburse.php 71
ERROR - 2020-06-18 11:07:19 --> Severity: Notice --> Undefined variable: message /home/absenon/public_html/application/controllers/Rest_Reimburse.php 71
ERROR - 2020-06-18 11:07:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/system/core/Exceptions.php:271) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-06-18 11:07:19 --> Severity: Notice --> Undefined variable: status /home/absenon/public_html/application/controllers/Rest_Reimburse.php 72
ERROR - 2020-06-18 11:07:19 --> Severity: Notice --> Undefined variable: message /home/absenon/public_html/application/controllers/Rest_Reimburse.php 72
ERROR - 2020-06-18 11:12:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/application/controllers/Rest_Reimburse.php:30) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-06-18 11:13:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/application/controllers/Rest_Reimburse.php:30) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-06-18 11:14:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/application/controllers/Rest_Reimburse.php:30) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-06-18 11:14:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/application/controllers/Rest_Reimburse.php:33) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-06-18 11:14:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY a.`insert_at` desc LIMIT 0, 20' at line 11 - Invalid query: 
    		SELECT a.id,DATE(a.`tgl_pembayaran`) as tgl_pembayaran,a.`foto_pembayaran`,a.`nominal`,a.`ket`,b.`profile_name`,
				c.`company`, d.`nama`,a.approval,DATE(a.insert_at) as insert_at
				FROM tb_reimburse a
				JOIN tb_user b 
					ON a.`id_user` = b.`id`
				JOIN ms_company c
					ON c.`id` = a.`id_company`
				JOIN ms_karyawan d
					ON d.`id` = a.`id_karyawan`
				WHERE 
				ORDER BY a.`insert_at` desc LIMIT 0, 20
    		
ERROR - 2020-06-18 04:18:59 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-06-18 14:19:48 --> Severity: Notice --> Undefined property: Rest_Reimburse::$Rest_Reimbuse_Model /home/absenon/public_html/application/controllers/Rest_Reimburse.php 178
ERROR - 2020-06-18 14:19:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/system/core/Exceptions.php:271) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-06-18 14:19:48 --> Severity: Error --> Call to a member function approve_reimburse() on null /home/absenon/public_html/application/controllers/Rest_Reimburse.php 178
ERROR - 2020-06-18 14:21:38 --> Severity: Notice --> Undefined property: Rest_Reimburse::$Rest_Reimbuse_Model /home/absenon/public_html/application/controllers/Rest_Reimburse.php 178
ERROR - 2020-06-18 14:21:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/system/core/Exceptions.php:271) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-06-18 14:21:38 --> Severity: Error --> Call to a member function approve_reimburse() on null /home/absenon/public_html/application/controllers/Rest_Reimburse.php 178
ERROR - 2020-06-18 17:14:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-06-18 17:14:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-06-18 17:14:23 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-06-18 17:14:27 --> 404 Page Not Found: Faviconico/index
