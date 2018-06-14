<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class album_model extends CI_Model {
    
        public function Get(){
            $query = $this->db->query('SELECT id_album,gambar_album,judul_album FROM album where album.status = 1 ORDER BY album.judul_album DESC');

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(album.id_album) AS jumlah FROM album where album.status = 1");
            $row = $data->row_array();
            return $row['jumlah'];
        }
    
    }
    
    /* End of file slideshow_model.php */
    