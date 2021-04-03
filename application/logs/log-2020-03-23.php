<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-23 03:44:37 --> Severity: Notice --> Undefined variable: nik /home/gmedia/public_html/ontime/application/models/Rest_Model.php 104
ERROR - 2020-03-23 03:44:37 --> Query error: Unknown column 'nik' in 'where clause' - Invalid query: 
            SELECT i.package FROM `tb_app_installed` i
            WHERE 
            nik = ''
            AND EXISTS (
                SELECT 1
                FROM `tb_app_forbiden` f 
                WHERE f.`package` = i.package
            )
        
ERROR - 2020-03-23 03:44:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/gmedia/public_html/ontime/system/core/Exceptions.php:271) /home/gmedia/public_html/ontime/system/core/Common.php 570
ERROR - 2020-03-23 03:45:50 --> Severity: Notice --> Undefined variable: id_karyawan /home/gmedia/public_html/ontime/application/models/Rest_Model.php 104
ERROR - 2020-03-23 03:45:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/gmedia/public_html/ontime/system/core/Exceptions.php:271) /home/gmedia/public_html/ontime/system/core/Common.php 570
ERROR - 2020-03-23 03:46:49 --> Severity: Notice --> Undefined variable: id_karyawan /home/gmedia/public_html/ontime/application/models/Rest_Model.php 104
ERROR - 2020-03-23 03:46:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/gmedia/public_html/ontime/system/core/Exceptions.php:271) /home/gmedia/public_html/ontime/system/core/Common.php 570
ERROR - 2020-03-23 03:47:00 --> Severity: Notice --> Undefined variable: id_karyawan /home/gmedia/public_html/ontime/application/models/Rest_Model.php 104
ERROR - 2020-03-23 03:47:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/gmedia/public_html/ontime/system/core/Exceptions.php:271) /home/gmedia/public_html/ontime/system/core/Common.php 570
ERROR - 2020-03-23 03:47:27 --> Severity: Notice --> Undefined variable: id_karyawan /home/gmedia/public_html/ontime/application/models/Rest_Model.php 104
ERROR - 2020-03-23 03:47:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/gmedia/public_html/ontime/system/core/Exceptions.php:271) /home/gmedia/public_html/ontime/system/core/Common.php 570
ERROR - 2020-03-23 04:16:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/gmedia/public_html/ontime/application/controllers/Rest_Scan.php:229) /home/gmedia/public_html/ontime/system/core/Common.php 570
ERROR - 2020-03-23 04:16:55 --> Severity: Parsing Error --> syntax error, unexpected end of file, expecting function (T_FUNCTION) /home/gmedia/public_html/ontime/application/controllers/Rest_Scan.php 229
ERROR - 2020-03-23 07:44:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '', '110.4273605', NOW())' at line 2 - Invalid query: 
    			INSERT INTO log_location(id_company, id_karyawan, latitude, longitude, timestamp) 
    			VALUES ('22', '556', -7.0209305', '110.4273605', NOW())
ERROR - 2020-03-23 07:44:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '', '110.4273605', NOW())' at line 2 - Invalid query: 
    			INSERT INTO log_location(id_company, id_karyawan, latitude, longitude, timestamp) 
    			VALUES ('22', '556', -7.0209305', '110.4273605', NOW())
ERROR - 2020-03-23 07:46:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '', '110.4273894', NOW())' at line 2 - Invalid query: 
    			INSERT INTO log_location(id_company, id_karyawan, latitude, longitude, timestamp) 
    			VALUES ('22', '556', -7.0209165', '110.4273894', NOW())
ERROR - 2020-03-23 07:46:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '', '110.4273892', NOW())' at line 2 - Invalid query: 
    			INSERT INTO log_location(id_company, id_karyawan, latitude, longitude, timestamp) 
    			VALUES ('22', '556', -7.0209162', '110.4273892', NOW())
ERROR - 2020-03-23 07:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '', '110.4273938', NOW())' at line 2 - Invalid query: 
    			INSERT INTO log_location(id_company, id_karyawan, latitude, longitude, timestamp) 
    			VALUES ('22', '556', -7.0209139', '110.4273938', NOW())
ERROR - 2020-03-23 07:48:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '', '110.4273855', NOW())' at line 2 - Invalid query: 
    			INSERT INTO log_location(id_company, id_karyawan, latitude, longitude, timestamp) 
    			VALUES ('22', '556', -7.020966', '110.4273855', NOW())
ERROR - 2020-03-23 07:48:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '', '110.4273855', NOW())' at line 2 - Invalid query: 
    			INSERT INTO log_location(id_company, id_karyawan, latitude, longitude, timestamp) 
    			VALUES ('22', '556', -7.020966', '110.4273855', NOW())
ERROR - 2020-03-23 08:11:23 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 08:11:23 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 08:11:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 08:11:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 08:11:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 08:11:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:12:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''1234'', a.`key`)
			AND a.`status` = 1
            AND a.level <> 3' at line 4 - Invalid query: 
			SELECT *
			FROM tb_user a
			WHERE a.`username` = 'admingmedia'
			AND a.`password` = AES_ENCRYPT('1234'', a.`key`)
			AND a.`status` = 1
            AND a.level <> 3 
ERROR - 2020-03-23 15:12:55 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:12:55 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:13:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:13:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ia'
			AND a.`password` = AES_ENCRYPT('1234', a.`key`)
			AND a.`status` = 1
   ' at line 3 - Invalid query: 
			SELECT *
			FROM tb_user a
			WHERE a.`username` = 'admingmed'ia'
			AND a.`password` = AES_ENCRYPT('1234', a.`key`)
			AND a.`status` = 1
            AND a.level <> 3 
ERROR - 2020-03-23 15:13:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:13:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:14:07 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-03-23 15:14:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:14:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:14:07 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-03-23 15:14:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:14:17 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-03-23 15:14:17 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-03-23 15:14:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:21:50 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:21:50 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-03-23 15:21:50 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-03-23 15:21:50 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:22:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 15:22:59 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-03-23 15:22:59 --> 404 Page Not Found: Assets/plugins
ERROR - 2020-03-23 15:22:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2020-03-23 17:36:29 --> Severity: Notice --> Uninitialized string offset: 0 /home/gmedia/public_html/ontime/application/models/Rest_Model.php 88
ERROR - 2020-03-23 17:36:29 --> Severity: Warning --> Illegal string offset 'id_karyawan' /home/gmedia/public_html/ontime/application/models/Rest_Model.php 88
ERROR - 2020-03-23 17:36:29 --> Severity: Notice --> Uninitialized string offset: 0 /home/gmedia/public_html/ontime/application/models/Rest_Model.php 88
ERROR - 2020-03-23 17:36:29 --> Could not find the language line "insert_batch() called with no data"
ERROR - 2020-03-23 17:36:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/gmedia/public_html/ontime/system/core/Exceptions.php:271) /home/gmedia/public_html/ontime/system/core/Common.php 570
