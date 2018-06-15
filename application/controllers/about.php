<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class about extends CI_Controller {
    
        public function index()
        {
            $this->load->model('layout_model');
            $this->load->model('slideshow_model');

            $layout_active = $this->layout_model->GetActiveLayout();
            $slideshow = $this->slideshow_model->Get();
            $data['slideshow'] =  $slideshow;
            $slideshow_count = $this->slideshow_model->GetCount();
            $data['slideshow_count'] =  $slideshow_count;

            switch ($layout_active) {
                case 1:
                    $this->load->view('template/1/header.php',$data);
                    $this->load->view('page/1/about.php');
                    $this->load->view('template/1/footer.php');
                    break;
        
                case 2:
                    $this->load->view('template/2/header.php',$data);
                    $this->load->view('page/2/about.php');
                    $this->load->view('template/2/footer.php');
                    break;
        
                case 3:
                    $this->load->view('template/3/header.php',$data);
                    $this->load->view('page/3/about.php');
                    $this->load->view('template/3/footer.php');
                    break;
        
                case 4:
                    $this->load->view('template/4/header.php',$data);
                    $this->load->view('page/4/about.php');
                    $this->load->view('template/4/footer.php');
                    break;
        
                case 5:
                    $this->load->view('template/5/header.php',$data);
                    $this->load->view('page/5/about.php');
                    $this->load->view('template/5/footer.php');
                    break;
        
                default:
                echo "Error 404 Page Not Found";
                    break;
            }
        }
    
    }
    
    /* End of file about.php */
    
?>