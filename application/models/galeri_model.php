<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class galeri_model extends CI_Model {
    
        public function Get(){
            $query = $this->db->query('SELECT id_galeri,gambar FROM galeri INNER JOIN album on galeri.id_album = album.id_album where album.status = 1 ORDER BY galeri.id_galeri DESC');

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(galeri.id_galeri) AS jumlah FROM galeri INNER JOIN album on galeri.id_album = album.id_album where album.status = 1");
            $row = $data->row_array();
            return $row['jumlah'];
        }
    
    }
    
    /* End of file slideshow_model.php */
    