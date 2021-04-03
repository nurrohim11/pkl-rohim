<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-05 03:41:32 --> Query error: Table 'gmedia_atms.upload_payroll' doesn't exist - Invalid query: 
    		SELECT tahun
			FROM upload_payroll a
			GROUP BY a.`tahun`
			ORDER BY a.`tahun` ASC 
ERROR - 2019-12-05 04:37:04 --> Query error: Table 'gmedia_atms.view_scanlog' doesn't exist - Invalid query: 
        	SELECT COUNT(*) AS jumlah 
        	FROM view_scanlog 
			WHERE 1 = 1
			 AND id_company = '0'  AND DATE(scan_date) BETWEEN '2019-12-05' AND '2019-12-05'  AND id_company = '0'  
