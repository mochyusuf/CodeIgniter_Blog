<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class layout_model extends CI_Model {
    
        public function GetActiveLayout(){
            $data = $this->db->query("SELECT id_layout FROM layout WHERE status = 1");
            $row = $data->row_array();
            return $row['id_layout'];
        }

    
    }
    
    /* End of file layout_model.php */
    