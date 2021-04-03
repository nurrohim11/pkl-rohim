<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-10 02:46:08 --> Query error: Table 'gmedia_atms.kunjungan_tgl' doesn't exist - Invalid query: 
            SELECT COUNT(id) AS jumlah
			FROM kunjungan_tgl
            WHERE 1 = 1
             AND id_company = '4'  AND tgl BETWEEN '2019-12-10' AND '2019-12-10'  
ERROR - 2019-12-10 02:46:08 --> Query error: Table 'gmedia_atms.kunjungan_hari' doesn't exist - Invalid query: 
            SELECT COUNT(id) AS jumlah
			FROM kunjungan_hari
            WHERE 1 = 1
             AND id_company = '4'  AND hari = '0'  
ERROR - 2019-12-10 02:46:23 --> Query error: Table 'gmedia_atms.kunjungan_tgl' doesn't exist - Invalid query: 
            SELECT COUNT(id) AS jumlah
			FROM kunjungan_tgl
            WHERE 1 = 1
             AND id_company = '4'  AND tgl BETWEEN '2019-12-10' AND '2019-12-10'  
ERROR - 2019-12-10 02:46:23 --> Query error: Table 'gmedia_atms.kunjungan_hari' doesn't exist - Invalid query: 
            SELECT COUNT(id) AS jumlah
			FROM kunjungan_hari
            WHERE 1 = 1
             AND id_company = '4'  AND hari = '0'  
ERROR - 2019-12-10 02:47:29 --> Query error: Table 'gmedia_atms.view_lembur' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_lembur 
			WHERE 1 = 1
             AND id_company = '4'  AND ((DATE(awal) BETWEEN '2019-12-10' AND '2019-12-10') OR (DATE(akhir) BETWEEN '2019-12-10' AND '2019-12-10')) 
			 
ERROR - 2019-12-10 02:47:37 --> Query error: Table 'gmedia_atms.upload_payroll' doesn't exist - Invalid query: 
    		SELECT tahun
			FROM upload_payroll a
			GROUP BY a.`tahun`
			ORDER BY a.`tahun` ASC 
ERROR - 2019-12-10 02:47:44 --> Query error: Table 'gmedia_atms.view_lembur' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_lembur 
			WHERE 1 = 1
             AND id_company = '4'  AND ((DATE(awal) BETWEEN '2019-12-10' AND '2019-12-10') OR (DATE(akhir) BETWEEN '2019-12-10' AND '2019-12-10')) 
			 
ERROR - 2019-12-10 03:03:26 --> Query error: Table 'gmedia_atms.view_ijin' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_ijin
			WHERE 1 = 1
             AND id_company = '4'  AND tgl BETWEEN '2019-12-10' AND '2019-12-10' 
			 
ERROR - 2019-12-10 03:03:31 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:03:31 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:03:31 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:03:31 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:03:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:03:39 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:03:39 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:03:39 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:03:39 --> Query error: Table 'gmedia_atms.view_ijin' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_ijin
			WHERE 1 = 1
             AND id_company = '4'  AND tgl BETWEEN '2019-12-10' AND '2019-12-10' 
			 
ERROR - 2019-12-10 03:04:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:04:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:04:37 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:04:37 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:04:56 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:04:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:04:57 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:04:57 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:06:37 --> Query error: Table 'gmedia_atms.view_lembur' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_lembur 
			WHERE 1 = 1
             AND id_company = '4'  AND ((DATE(awal) BETWEEN '2019-12-10' AND '2019-12-10') OR (DATE(akhir) BETWEEN '2019-12-10' AND '2019-12-10')) 
			 
ERROR - 2019-12-10 03:06:43 --> Query error: Table 'gmedia_atms.upload_payroll' doesn't exist - Invalid query: 
    		SELECT tahun
			FROM upload_payroll a
			GROUP BY a.`tahun`
			ORDER BY a.`tahun` ASC 
ERROR - 2019-12-10 03:10:48 --> Query error: Table 'gmedia_atms.view_lembur' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_lembur 
			WHERE 1 = 1
             AND id_company = '4'  AND ((DATE(awal) BETWEEN '2019-12-10' AND '2019-12-10') OR (DATE(akhir) BETWEEN '2019-12-10' AND '2019-12-10')) 
			 
ERROR - 2019-12-10 03:11:15 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'gmedia_atms'@'talam.gmedia.net.id' (using password: YES) /home/gmedia/public_html/ontime/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2019-12-10 03:11:15 --> Unable to connect to the database
ERROR - 2019-12-10 03:11:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/gmedia/public_html/ontime/system/core/Exceptions.php:271) /home/gmedia/public_html/ontime/system/core/Common.php 570
ERROR - 2019-12-10 03:13:57 --> Query error: Table 'gmedia_atms.view_lembur' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_lembur 
			WHERE 1 = 1
             AND id_company = '4'  AND ((DATE(awal) BETWEEN '2019-12-10' AND '2019-12-10') OR (DATE(akhir) BETWEEN '2019-12-10' AND '2019-12-10')) 
			 
ERROR - 2019-12-10 03:14:01 --> Query error: Table 'gmedia_atms.upload_payroll' doesn't exist - Invalid query: 
    		SELECT tahun
			FROM upload_payroll a
			GROUP BY a.`tahun`
			ORDER BY a.`tahun` ASC 
ERROR - 2019-12-10 03:14:06 --> Query error: Table 'gmedia_atms.view_lembur' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_lembur 
			WHERE 1 = 1
             AND id_company = '4'  AND ((DATE(awal) BETWEEN '2019-12-10' AND '2019-12-10') OR (DATE(akhir) BETWEEN '2019-12-10' AND '2019-12-10')) 
			 
ERROR - 2019-12-10 03:14:30 --> Query error: Table 'gmedia_atms.view_scanlog' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah 
        	FROM view_scanlog 
			WHERE 1 = 1
			 AND id_company = '0'  AND DATE(scan_date) BETWEEN '2019-12-10' AND '2019-12-10'  AND id_company = '0'  
ERROR - 2019-12-10 03:14:34 --> Query error: The user specified as a definer ('root'@'116.254.112.137') does not exist - Invalid query: CALL rekap_absensi('4', '2019-12-10', '2019-12-10')
ERROR - 2019-12-10 03:14:47 --> Query error: Table 'gmedia_atms.upload_payroll' doesn't exist - Invalid query: 
    		SELECT tahun
			FROM upload_payroll a
			GROUP BY a.`tahun`
			ORDER BY a.`tahun` ASC 
ERROR - 2019-12-10 03:16:15 --> Query error: Table 'gmedia_atms.view_cuti' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_cuti 
			WHERE 1 = 1
             AND id_company = '4'  AND ((awal BETWEEN '2019-12-10' AND '2019-12-10') OR (akhir BETWEEN '2019-12-10' AND '2019-12-10')) 
			 
ERROR - 2019-12-10 03:16:18 --> Query error: Table 'gmedia_atms.view_ijin' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_ijin
			WHERE 1 = 1
             AND id_company = '4'  AND tgl BETWEEN '2019-12-10' AND '2019-12-10' 
			 
ERROR - 2019-12-10 03:16:21 --> Query error: Table 'gmedia_atms.view_cuti' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_cuti 
			WHERE 1 = 1
             AND id_company = '4'  AND ((awal BETWEEN '2019-12-10' AND '2019-12-10') OR (akhir BETWEEN '2019-12-10' AND '2019-12-10')) 
			 
ERROR - 2019-12-10 03:16:24 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:16:24 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:16:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:16:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:16:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:16:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:16:29 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:16:29 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:16:29 --> Query error: Table 'gmedia_atms.view_cuti' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah
			FROM view_cuti 
			WHERE 1 = 1
             AND id_company = '4'  AND ((awal BETWEEN '2019-12-10' AND '2019-12-10') OR (akhir BETWEEN '2019-12-10' AND '2019-12-10')) 
			 
ERROR - 2019-12-10 03:26:37 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:26:38 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:26:38 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:26:38 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:28:20 --> Query error: The user specified as a definer ('root'@'116.254.112.137') does not exist - Invalid query: CALL rekap_absensi('4', '2019-12-10', '2019-12-10')
ERROR - 2019-12-10 03:28:25 --> Query error: The user specified as a definer ('root'@'116.254.112.137') does not exist - Invalid query: CALL rekap_absensi('4', '2019-12-10', '2019-12-10')
ERROR - 2019-12-10 03:29:01 --> Query error: The user specified as a definer ('root'@'116.254.112.137') does not exist - Invalid query: CALL rekap_absensi('4', '2019-12-10', '2019-12-10')
ERROR - 2019-12-10 03:29:07 --> Query error: The user specified as a definer ('root'@'116.254.112.137') does not exist - Invalid query: CALL rekap_absensi('4', '2019-12-10', '2019-12-10')
ERROR - 2019-12-10 03:29:10 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:29:10 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:29:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:29:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:29:13 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:29:13 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:29:14 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:29:14 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:29:14 --> Query error: The user specified as a definer ('root'@'116.254.112.137') does not exist - Invalid query: CALL rekap_absensi('4', '2019-12-10', '2019-12-10')
ERROR - 2019-12-10 03:46:33 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 03:46:33 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:46:33 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 03:46:33 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 04:10:35 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 04:10:35 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 04:10:35 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 04:10:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 04:16:06 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:06 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:07 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:07 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:07 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:07 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:08 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:08 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:08 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:08 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:09 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:09 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:09 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:10 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:10 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:10 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:10 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:11 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:11 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:11 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:11 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:12 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:12 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:12 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:13 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:13 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:13 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:13 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:14 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 04:16:30 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 04:16:30 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 04:16:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 04:16:47 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:47 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:47 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:47 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:48 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:48 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:48 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:48 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:49 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:49 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:49 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:50 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:50 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:50 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:50 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:51 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:51 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:51 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:51 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:52 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:52 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:52 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:53 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:53 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:53 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:53 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:54 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:54 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:54 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:16:54 --> Severity: Notice --> fwrite(): send of 5 bytes failed with errno=32 Broken pipe /home/gmedia/public_html/ontime/system/libraries/Email.php 2268
ERROR - 2019-12-10 04:18:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-12-10 04:18:03 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 04:18:03 --> 404 Page Not Found: Assets/plugins
ERROR - 2019-12-10 04:18:03 --> 404 Page Not Found: Assets/vendors
