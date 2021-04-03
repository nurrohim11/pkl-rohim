<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-26 02:30:56 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-04-26 10:07:15 --> Severity: Notice --> Undefined property: stdClass::$id_divisi /home/absenon/public_html/application/controllers/Scanlog.php 170
ERROR - 2020-04-26 10:07:15 --> Query error: Unknown column 'b.status' in 'on clause' - Invalid query: 
            SELECT a.* 
            FROM view_scanlog a
            inner join ms_karyawan b on a.id_karyawan=b.id AND b.id_divisi=''  AND b.id_company='22'
            inner join ms_rule_approval c on c.id_karyawan=b.id AND c.id_penyetuju='524' AND b.status='1'
            WHERE DATE(a.scan_date) BETWEEN '2020-03-25' AND '2020-03-25'
ERROR - 2020-04-26 10:07:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/absenon/public_html/system/core/Exceptions.php:271) /home/absenon/public_html/system/core/Common.php 570
ERROR - 2020-04-26 10:07:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-04-26 10:07:57 --> Query error: Unknown column 'b.status' in 'on clause' - Invalid query: 
            SELECT a.* 
            FROM view_scanlog a
            inner join ms_karyawan b on a.id_karyawan=b.id
            inner join ms_rule_approval c on c.id_karyawan=b.id AND c.id_penyetuju='524' AND b.status='1'
            WHERE DATE(a.scan_date) BETWEEN '2020-03-25' AND '2020-03-25'
ERROR - 2020-04-26 10:14:58 --> Severity: Notice --> Undefined property: stdClass::$email /home/absenon/public_html/application/controllers/Scanlog.php 223
ERROR - 2020-04-26 10:14:58 --> Severity: Notice --> Undefined property: stdClass::$email /home/absenon/public_html/application/controllers/Scanlog.php 223
ERROR - 2020-04-26 10:14:58 --> Severity: Notice --> Undefined property: stdClass::$email /home/absenon/public_html/application/controllers/Scanlog.php 223
ERROR - 2020-04-26 10:14:58 --> Severity: Notice --> Undefined property: stdClass::$email /home/absenon/public_html/application/controllers/Scanlog.php 223
ERROR - 2020-04-26 10:14:58 --> Severity: Notice --> Undefined property: stdClass::$email /home/absenon/public_html/application/controllers/Scanlog.php 223
ERROR - 2020-04-26 10:14:58 --> Severity: Notice --> Undefined property: stdClass::$email /home/absenon/public_html/application/controllers/Scanlog.php 223
ERROR - 2020-04-26 10:14:58 --> Severity: Notice --> Undefined property: stdClass::$email /home/absenon/public_html/application/controllers/Scanlog.php 223
ERROR - 2020-04-26 10:14:58 --> Severity: Notice --> Undefined property: stdClass::$email /home/absenon/public_html/application/controllers/Scanlog.php 223
ERROR - 2020-04-26 10:14:58 --> Severity: Notice --> Undefined property: stdClass::$email /home/absenon/public_html/application/controllers/Scanlog.php 223
ERROR - 2020-04-26 10:22:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2020-04-26 15:54:35 --> 404 Page Not Found: Wp-configphp~/index
ERROR - 2020-04-26 20:43:28 --> 404 Page Not Found: Robotstxt/index
