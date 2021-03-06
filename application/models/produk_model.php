<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class produk_model extends CI_Model {
    
        public function Get(){
            $query = $this->db->query('SELECT id_produk,nama_produk,gambar FROM produk ORDER BY produk.waktu_pembuatan DESC');

            return $query->result_array();
        }

        public function GetDetail($id){
            $query = $this->db->query('SELECT produk.id_produk, produk.nama_produk, produk.gambar, produk.deskripsi FROM produk WHERE id_produk = ?',array($id));

            return $query->row_array();
        }

        public function GetLimit($limit_start,$limit){
            $query = $this->db->query('SELECT produk.id_produk,produk.nama_produk,produk.gambar,produk.deskripsi FROM produk ORDER BY produk.waktu_pembuatan DESC LIMIT ?, ?',array($limit_start,$limit));

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(produk.id_produk) AS jumlah FROM produk");
            $row = $data->row_array();
            return $row['jumlah'];
        }
    
    }
    
    /* End of file produk_model.php */
    