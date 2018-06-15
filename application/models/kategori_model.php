<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class kategori_model extends CI_Model {

        public function Get(){
            $query = $this->db->query('SELECT id_kategori,nama_kategori FROM kategori where status = 1');

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(*) FROM kategori where status = 1");
            $row = $data->row_array();
            return $row['jumlah'];
        }

    }

/* End of file berita_model.php */
