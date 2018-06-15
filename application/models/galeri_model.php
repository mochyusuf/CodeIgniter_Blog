<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class galeri_model extends CI_Model {
    
        public function Get(){
            $query = $this->db->query('SELECT galeri.id_galeri,galeri.id_album,galeri.gambar,galeri.judul_galeri,galeri.deskripsi_gambar FROM galeri INNER JOIN album on galeri.id_album = album.id_album where album.status = 1 ORDER BY galeri.id_galeri DESC');

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(galeri.id_galeri) AS jumlah FROM galeri INNER JOIN album on galeri.id_album = album.id_album where album.status = 1");
            $row = $data->row_array();
            return $row['jumlah'];
        }

        public function GetLimit($limit_start,$limit){
            $query = $this->db->query('SELECT galeri.id_galeri,galeri.gambar,galeri.deskripsi_gambar FROM galeri INNER JOIN album on galeri.id_album = album.id_album where album.status = 1 ORDER BY galeri.waktu_pembuatan DESC LIMIT ?, ?',array($limit_start,$limit));

            return $query->result_array();
        }

        public function GetLimitAlbum($album,$limit_start,$limit){
            $query = $this->db->query('SELECT galeri.id_galeri,galeri.gambar,galeri.deskripsi_gambar FROM galeri INNER JOIN album on galeri.id_album = album.id_album where album.status = 1  AND galeri.id_album = ? ORDER BY galeri.waktu_pembuatan DESC LIMIT ?, ? ',array($album,$limit_start,$limit));

            return $query->result_array();
        }

        public function GetCountAlbum($album){
            $data = $this->db->query("SELECT COUNT(galeri.id_galeri) AS jumlah FROM galeri INNER JOIN album on galeri.id_album = album.id_album where album.status = 1  AND galeri.id_album = ?",array($album));
            $row = $data->row_array();
            return $row['jumlah'];
        }

        public function GetGaleri($id){
            $query = $this->db->query('SELECT album.judul_album,galeri.gambar,galeri.judul_galeri,galeri.deskripsi_gambar FROM galeri INNER JOIN album ON galeri.id_album = album.id_album WHERE galeri.id_galeri = ?',
            array($id));

            return $query->result_array();
        }
    
    }
    
    /* End of file slideshow_model.php */
    