<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class tag_model extends CI_Model {

        public function Get(){
            $query = $this->db->query('SELECT tag.id_tag,tag.nama_tag FROM tag');

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(berita.id_berita) AS jumlah FROM berita INNER JOIN kategori ON berita.id_kategori = kategori.id_kategori where kategori.status = 1");
            $row = $data->row_array();
            return $row['jumlah'];
        }

    }

/* End of file berita_model.php */