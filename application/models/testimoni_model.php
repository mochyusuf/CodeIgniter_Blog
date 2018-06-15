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
    
        public function GetLimit($limit_start,$limit){
            $query = $this->db->query('SELECT testimoni.id_testimoni,testimoni.judul_testimoni,testimoni.gambar_testimoni, testimoni.waktu_pembuatan ,testimoni.testimoni FROM testimoni ORDER BY testimoni.waktu_pembuatan DESC LIMIT ?, ?',array($limit_start,$limit));

            return $query->result_array();
        }
    }
    
    /* End of file slideshow_model.php */
    