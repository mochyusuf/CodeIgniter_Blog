<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class testimoni_model extends CI_Model {
    
        public function Get(){
            $query = $this->db->query('SELECT id_testimoni,judul_testimoni,gambar_testimoni,testimoni FROM testimoni ORDER BY testimoni.waktu_pembuatan DESC');

            return $query->result_array();
        }

        public function GetCount(){
            $data = $this->db->query("SELECT COUNT(testimoni.id_testimoni) AS jumlah FROM testimoni");
            $row = $data->row_array();
            return $row['jumlah'];
        }
    
    }
    
    /* End of file slideshow_model.php */
    