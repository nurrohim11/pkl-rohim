<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-01 13:00:17 --> 404 Page Not Found: Main/assets
ERROR - 2021-03-01 13:06:54 --> 404 Page Not Found: Produk/index
ERROR - 2021-03-01 13:33:22 --> 404 Page Not Found: Main/assets
ERROR - 2021-03-01 13:33:28 --> 404 Page Not Found: Produk/index
ERROR - 2021-03-01 13:33:35 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:33:36 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:33:53 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:33:53 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:34:26 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:34:26 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:34:40 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:34:41 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:35:00 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:35:01 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 13:36:03 --> 404 Page Not Found: Main/assets
ERROR - 2021-03-01 14:18:18 --> 404 Page Not Found: Main/assets
ERROR - 2021-03-01 14:19:29 --> 404 Page Not Found: Produk/wishlist
ERROR - 2021-03-01 14:36:39 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 14:36:39 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 14:39:17 --> Query error: Unknown column 'a.is_valid' in 'where clause' - Invalid query: 
                SELECT COUNT(*) AS jumlah
                from tb_user a
                join ms_level b
                    on a.`level`  = b.id 
                where a.status  =1 and a.is_valid =1
                 
ERROR - 2021-03-01 14:39:22 --> 404 Page Not Found: Produk/wishlist
ERROR - 2021-03-01 14:56:47 --> Query error: Unknown column 'a.is_valid' in 'where clause' - Invalid query: 
                SELECT COUNT(*) AS jumlah
                from tb_user a
                join ms_level b
                    on a.`level`  = b.id 
                where a.status  =1 and a.is_valid =1
                 
ERROR - 2021-03-01 14:59:11 --> 404 Page Not Found: Assets/apps
ERROR - 2021-03-01 14:59:11 --> 404 Page Not Found: Assets/apps
ERROR - 2021-03-01 14:59:41 --> 404 Page Not Found: Assets/apps
ERROR - 2021-03-01 14:59:42 --> 404 Page Not Found: Assets/apps
ERROR - 2021-03-01 15:07:08 --> Query error: Table 'project_tokoonline.ms_wishlist' doesn't exist - Invalid query: 
            SELECT COUNT(*) AS jumlah
            from ms_wishlist e
            join tb_produk a
                on a.id = e.id_produk
            join ms_kategori b
                on a.id_kategori =b.id 
            join ms_satuan c
                on c.id =a.id_satuan
            join ms_toko d
                on d.tid =a.tid 
            where a.status =1
             AND a.tid = '' 
ERROR - 2021-03-01 15:07:12 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 15:07:12 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 15:07:14 --> Query error: Table 'project_tokoonline.ms_wishlist' doesn't exist - Invalid query: 
            SELECT COUNT(*) AS jumlah
            from ms_wishlist e
            join tb_produk a
                on a.id = e.id_produk
            join ms_kategori b
                on a.id_kategori =b.id 
            join ms_satuan c
                on c.id =a.id_satuan
            join ms_toko d
                on d.tid =a.tid 
            where a.status =1
             AND (a.nama_produk LIKE '%a%'  OR b.kategori LIKE '%a%'  OR c.satuan LIKE '%a%'  OR d.nama LIKE '%a%' ) AND a.tid = '' 
ERROR - 2021-03-01 15:07:34 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-03-01 15:07:35 --> 404 Page Not Found: Assets/plugins
