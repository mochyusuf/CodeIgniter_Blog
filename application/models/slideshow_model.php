<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class slideshow_model extends CI_Model {
    
        public function Get(){
            $query = $this->db->query('SELECT slideshow.id_slideshow,slideshow.nama_slideshow,slideshow.gambar_slideshow FROM slideshow WHERE slideshow.status_slideshow = 1');

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(slideshow.id_slideshow) AS jumlah FROM slideshow WHERE slideshow.status_slideshow = 1");
            $row = $data->row_array();
            return $row['jumlah'];
        }
    
    }
    
    /* End of file slideshow_model.php */
    