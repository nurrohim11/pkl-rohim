<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Main_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    
    function view_by_id($table='',$condition='',$row='row')
    {
        if($row == 'row') {
            if($condition) {
                return $this->db->where($condition)->get($table)->row();
            } else {
                return $this->db->get($table)->row();
            }
        } else {
            if($condition) {
                return $this->db->where($condition)->get($table)->result();
            } else {
                return $this->db->get($table)->result();
            }
        }
    }

    function process_data($table='', $data='', $condition='') 
    {
        if($condition) {
            return $this->db->where($condition)->update($table, $data);
        } else {
            return $this->db->insert($table, $data);
        }
    }

    function settings($key='')
    {
        $condition = '';
        if($key != ''){
            $condition .= " AND a.key = '$key'";
        }
        else{
            $condition .= " AND a.key = '$'";
        }
        $query = $this->db->query("
                SELECT * FROM app_setting a where 1=1
                $condition
            ")->row();
        return $query;
    }

    function data_id($table='',$field='',$where='')
    {
        $q = $this->db->get_where($table,['id' => $where])->row();
        $show = isset($q->$field) ? $q->$field : '';
        return $show;
    }

    function get_uid_pembeli($username)
    {
        $query = $this->db->query("
                SELECT * FROM tb_user a 
                where a.username='$username'
                and a.level = 4
            ")->row();
        $uid = ($query->uid) ? $query->uid : '';
        return $uid;
    }

    function image_produk($token='',$flag='row')
    {
        $query = $this->db->query("
                SELECT * FROM tb_img_produk a
                where a.token ='$token' and a.status = 1
                order by a.id asc
            ")->$flag();
        $result = '';
        if($flag == 'row'){
            $result =link_produk().$query->image;
        }
        else{
            $result=[];
            if($query){
                foreach($query as $row){
                    $result[] = array(
                        'id' => $row->id,
                        'image' => link_produk().$row->image
                    );
                }
            }   
        }
        return $result;
    }

    function home_iklan()
    {
        $id_toko = sess_id_toko();
        $result = '';
        $q = $this->db->query("
                SELECT * from ms_iklan a
                where a.status = 1 and a.tid = '$id_toko'
            ")->result();
        if($q){
            $result .= '<div class="row">
                           <div id="2" class="col-sm-12 col-sm-offset-0 desktop-flowwrap  tablet-flowwrap mobile-flowwrap" data-desktop-carouselduration="0" data-tablet-carouselduration="0" data-mobile-carouselduration="0" style="">
                              <ul class="Slider Slider1">';
            foreach($q as $row){
                $result .= '<li class="DSlider-item" data-title="'.$row->title.'"><img src="'.link_iklan().$row->image.'" alt=" " class="img-responsive" /></li>';
            }
            $result .= '</ul>
                            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                              <script src="assets/ww/js/DSlider.js"></script>
                              <script >
                                 $(".Slider1").Slider({isFlexible:true});
                                 $(".Slider2").Slider({mode:"fade", isFlexible:true});
                                 $(".Slider3").Slider({direction:"top", isShowControls:false,isFlexible:true});
                              </script>
                           </div>
                        </div>';
        }
        return $result;
    }

    function home_kategori()
    {
        $id_toko = sess_id_toko();
        $result ='';
        $q = $this->db->query("
                SELECT * FROM ms_kategori a
                where a.status = 1 and a.tid = '$id_toko'
            ")->result();
        $result .= '<div class="row">
                       <div id="7" class="col-sm-12 col-sm-offset-0 desktop-flowwrap  tablet-flowwrap mobile-flowwrap" data-desktop-carouselduration="0" data-tablet-carouselduration="0" data-mobile-carouselduration="0" style="">
                          <div style="width:100%;" class="dynamic-content2-item dynamic-content2-item-html">
                             <section class="section section-offer-tiles" data-label="offertiles">
                                <div class="section-content">
                                   <h2 class="section-headline"> Produk Promo '.sess_toko().'</h2>
                                   <div class="section-content-inner">
                                      <div class="offers-tiles-container row text-center" id="offers-tiles-container" >';
        if($q){
            foreach($q as $row){
                $result .= '<div class="offers-tiles-scroller col-md-3" id="offertiles" style="height: 110px">
                                <div class="offer-tile-item" data-style="generic" style="height: 105px">
                                   <a href="http://anekajaya.id/kategori">
                                      <div data-target-link="" class="offer-tile-item-link">
                                         <div class="offer-tile-header">
                                            <div class="offer-tile-header-title" style="margin: 0 1em;">
                                               <span>'.$row->kategori.'</span>
                                            </div>
                                         </div>
                                      </div>
                                   </a>
                                </div>
                             </div>';   
            }
        }
        $result .= '</div>
        </div>
        </div>
        </section>
        </div>
        </div>
        </div>';

        return $result;
    }

    function produk_spesial()
    {
        $id_toko = sess_id_toko();
        $result = '';
        $q = $this->db->query("
                SELECT a.* from tb_produk a
                left join ms_satuan b
                    on a.id_satuan =b.id 
                left join ms_kategori c
                    on c.id = a.id_kategori 
                where a.status =1 and a.is_special =1
                limit 15
            ")->result();
        return $q;
    }

}

/* End of file Main_Model.php */
/* Location: ./application/models/Main_Model.php */
