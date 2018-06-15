<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class testimoni extends CI_Controller {
    
        public function index()
        {
            $this->load->model('layout_model');
            $this->load->model('testimoni_model');
            $this->load->model('slideshow_model');
            
            $page = ($this->input->get('page'))? (int)$this->input->get('page'): 1;
            if(is_integer($page) && $page > 0){}
            else{$page = 1;}

            $slideshow = $this->slideshow_model->Get();
            $data['slideshow'] =  $slideshow;
            $slideshow_count = $this->slideshow_model->GetCount();
            $data['slideshow_count'] =  $slideshow_count;

            $layout_active = $this->layout_model->GetActiveLayout();
            $testimoni_count = $this->testimoni_model->GetCount();
            $data['testimoni_count'] =  $testimoni_count;
            $data['testimoni'] = $this->testimoni_model->Get();

            switch ($layout_active) {
                case 1:
                    $limit = 9;
                    $limit_start = ($page - 1) * $limit;
                    $testimoni_limit = $this->testimoni_model->GetLimit($limit_start,$limit);
                    
                    $data['testimoni_limit'] =  $testimoni_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/1/header.php',$data);
                    $this->load->view('page/1/testimoni.php');
                    $this->load->view('template/1/footer.php');
                    break;
        
                case 2:
                    $limit = 9;
                    $limit_start = ($page - 1) * $limit;
                    $testimoni_limit = $this->testimoni_model->GetLimit($limit_start,$limit);
                    
                    $data['testimoni_limit'] =  $testimoni_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/2/header.php',$data);
                    $this->load->view('page/2/testimoni.php');
                    $this->load->view('template/2/footer.php');
                    break;
        
                case 3:
                    $limit = 4;
                    $limit_start = ($page - 1) * $limit;
                    $testimoni_limit = $this->testimoni_model->GetLimit($limit_start,$limit);
                    
                    $data['testimoni_limit'] =  $testimoni_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/3/header.php',$data);
                    $this->load->view('page/3/testimoni.php');
                    $this->load->view('template/3/footer.php');
                    break;
        
                case 4:
                    $limit = 3;
                    $limit_start = ($page - 1) * $limit;
                    $testimoni_limit = $this->testimoni_model->GetLimit($limit_start,$limit);
                    
                    $data['testimoni_limit'] =  $testimoni_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/4/header.php',$data);
                    $this->load->view('page/4/testimoni.php');
                    $this->load->view('template/4/footer.php');
                    break;
        
                case 5:
                    $limit = 6;
                    $limit_start = ($page - 1) * $limit;
                    $testimoni_limit = $this->testimoni_model->GetLimit($limit_start,$limit);
                    
                    $data['testimoni_limit'] =  $testimoni_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/5/header.php',$data);
                    $this->load->view('page/5/testimoni.php');
                    $this->load->view('template/5/footer.php');
                    break;
        
                default:
                echo "Error 404 Page Not Found";
                    break;
            }
        }
    
    }
    
    /* End of file testimoni.php */
    
?>