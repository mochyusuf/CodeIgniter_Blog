<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class modal extends CI_Controller {
    
        public function index()
        {
            
        }
    
        public function image_modal(){
            $id = $this->input->post('id_galeri');
            $this->load->model('galeri_model');
            $galeri = $this->galeri_model->GetGaleri($id);
            $data['galeri'] =  $galeri;
            $this->load->view('modal/image_modal.php',$data); 
        }
    }
    
    /* End of file modal.php */
    