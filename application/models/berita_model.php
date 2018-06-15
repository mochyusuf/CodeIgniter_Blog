<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class berita_model extends CI_Model {

        public function Get(){
            $query = $this->db->query('SELECT id_berita,judul,gambar,isi FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori where kategori.status = 1 ORDER BY berita.waktu_pembuatan DESC');

            return $query->result_array();
        }

        public function GetLimit($limit_start,$limit){
            $query = $this->db->query('SELECT berita.id_berita,berita.judul,berita.gambar,berita.isi, kategori.nama_kategori, berita.waktu_pembuatan FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori where kategori.status = 1 ORDER BY berita.waktu_pembuatan DESC LIMIT ?, ?',array($limit_start,$limit));

            return $query->result_array();
        }

        public function GetLimitKategori($kategori,$limit_start,$limit){
            $query = $this->db->query('SELECT berita.id_berita,berita.judul,berita.gambar,berita.isi, kategori.nama_kategori, berita.waktu_pembuatan FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori where kategori.status = 1 AND berita.id_kategori = ? ORDER BY berita.waktu_pembuatan DESC LIMIT ?, ?',array($kategori,$limit_start,$limit));

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(berita.id_berita) AS jumlah FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori where kategori.status = 1");
            $row = $data->row_array();
            return $row['jumlah'];
        }

        public function GetCountKategori($kategori){
            $data = $this->db->query("SELECT COUNT(berita.id_berita) AS jumlah FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori where kategori.status = 1 AND berita.id_kategori = ?",array($kategori));
            $row = $data->row_array();
            return $row['jumlah'];
        }
    }

/* End of file berita_model.php */
