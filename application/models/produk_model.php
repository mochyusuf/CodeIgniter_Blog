<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class produk_model extends CI_Model {
    
        public function Get(){
            $query = $this->db->query('SELECT id_produk,nama_produk,gambar FROM produk ORDER BY produk.waktu_pembuatan DESC');

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(produk.id_produk) AS jumlah FROM produk");
            $row = $data->row_array();
            return $row['jumlah'];
        }
    
    }
    
    /* End of file produk_model.php */
    