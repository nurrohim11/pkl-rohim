<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-07 08:02:40 --> Severity: Notice --> Undefined variable: res E:\xampp\htdocs\gmedia\tokotap\application\controllers\api\Transaksi.php 183
ERROR - 2021-01-07 08:14:26 --> Query error: Unknown column 'b.nama_product' in 'field list' - Invalid query: 
            SELECT a.id, a.no_order ,a.id_product, ifnull(b.nama_product,c.nama_product) as nama_product ,
                ifnull(b.harga,a.harga) as harga,ifnull(b.qty,a.qty) as qty, 
                (case when b.id is null then a.flag 
                    else b.flag
                    end) as flag, 
                ifnull(b.status,a.status ) as status, 
                (case when b.status is null then 'Proses'
                    else 'Dihapus'
                    end) as ket_status
                from tb_det_transaksi a
                left join (
                    select * from temp_det_transaksi c
                    where 1=1  and  c.token ='KJsaioduoi90Adf$823m'
                )b
                    on a.id  = b.id_det_transaksi
                join tb_product c
                    on c.id  =  a.id_product 
                where a.no_order ='TRANS/01/2021/0000007' and a.status =1
                and (case when b.id is null then a.flag else b.flag end) ='1'
            
ERROR - 2021-01-07 08:15:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ifnull(b.harga,a.harga) as harga,ifnull(b.qty,a.qty) as qty, 
                (' at line 5 - Invalid query: 
            SELECT a.id, a.no_order ,a.id_product, 
            CONCAT(ifnull(b.nama_product,c.nama_product), 
                case when a.id_varian <> 0 then concat(' (',d.varian,')')
                        else '' end ) nama_product
                ifnull(b.harga,a.harga) as harga,ifnull(b.qty,a.qty) as qty, 
                (case when b.id is null then a.flag 
                    else b.flag
                    end) as flag, 
                ifnull(b.status,a.status ) as status, 
                (case when b.status is null then 'Proses'
                    else 'Dihapus'
                    end) as ket_status
                from tb_det_transaksi a
                left join (
                    select * from temp_det_transaksi c
                    where 1=1  and  c.token ='KJsaioduoi90Adf$823m'
                )b
                    on a.id  = b.id_det_transaksi
                join tb_product c
                    on c.id  =  a.id_product 
                left join ms_varian d
                    on d.id = a.id_varian
                where a.no_order ='TRANS/01/2021/0000007' and a.status =1
                and (case when b.id is null then a.flag else b.flag end) ='1'
            
ERROR - 2021-01-07 08:16:01 --> Query error: Unknown column 'b.nama_product' in 'field list' - Invalid query: 
            SELECT a.id, a.no_order ,a.id_product, 
            CONCAT(ifnull(b.nama_product,c.nama_product), 
                case when a.id_varian <> 0 then concat(' (',d.varian,')')
                        else '' end ) nama_product,
                ifnull(b.harga,a.harga) as harga,ifnull(b.qty,a.qty) as qty, 
                (case when b.id is null then a.flag 
                    else b.flag
                    end) as flag, 
                ifnull(b.status,a.status ) as status, 
                (case when b.status is null then 'Proses'
                    else 'Dihapus'
                    end) as ket_status
                from tb_det_transaksi a
                left join (
                    select * from temp_det_transaksi c
                    where 1=1  and  c.token ='KJsaioduoi90Adf$823m'
                )b
                    on a.id  = b.id_det_transaksi
                join tb_product c
                    on c.id  =  a.id_product 
                left join ms_varian d
                    on d.id = a.id_varian
                where a.no_order ='TRANS/01/2021/0000007' and a.status =1
                and (case when b.id is null then a.flag else b.flag end) ='1'
            
ERROR - 2021-01-07 08:17:08 --> Query error: Unknown column 'b.nama_product' in 'field list' - Invalid query: 
            SELECT a.id, a.no_order ,a.id_product, 
            CONCAT(b.nama_product, 
                case when a.id_varian <> 0 then concat(' (',d.varian,')')
                        else '' end ) nama_product,
                ifnull(b.harga,a.harga) as harga,ifnull(b.qty,a.qty) as qty, 
                (case when b.id is null then a.flag 
                    else b.flag
                    end) as flag, 
                ifnull(b.status,a.status ) as status, 
                (case when b.status is null then 'Proses'
                    else 'Dihapus'
                    end) as ket_status
                from tb_det_transaksi a
                left join (
                    select * from temp_det_transaksi c
                    where 1=1  and  c.token ='KJsaioduoi90Adf$823m'
                )b
                    on a.id  = b.id_det_transaksi
                join tb_product c
                    on c.id  =  a.id_product 
                left join ms_varian d
                    on d.id = a.id_varian
                where a.no_order ='TRANS/01/2021/0000007' and a.status =1
                and (case when b.id is null then a.flag else b.flag end) ='1'
            
ERROR - 2021-01-07 08:59:09 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 08:59:24 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 08:59:24 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:04:44 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:04:45 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:09:04 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:36:05 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:36:10 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:36:41 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:37:33 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:38:00 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:39:08 --> 404 Page Not Found: Assets/plugins
ERROR - 2021-01-07 09:39:34 --> 404 Page Not Found: Assets/plugins
