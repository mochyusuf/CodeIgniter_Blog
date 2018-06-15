<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class produk extends CI_Controller {

        public function index()
        {
            $this->load->model('layout_model');
            $this->load->model('produk_model');
            $this->load->model('slideshow_model');
            
            $page = ($this->input->get('page'))? (int)$this->input->get('page'): 1;
            if(is_integer($page) && $page > 0){}
            else{$page = 1;}

            $slideshow = $this->slideshow_model->Get();
            $data['slideshow'] =  $slideshow;
            $slideshow_count = $this->slideshow_model->GetCount();
            $data['slideshow_count'] =  $slideshow_count;

            $layout_active = $this->layout_model->GetActiveLayout();
            $produk_count = $this->produk_model->GetCount();
            $data['produk_count'] =  $produk_count;
            $data['produk'] =$this->produk_model->Get();

            switch ($layout_active) {
                case 1:
                    $limit = 9;
                    $limit_start = ($page - 1) * $limit;
                    $produk_limit = $this->produk_model->GetLimit($limit_start,$limit);
                    
                    $data['produk_limit'] =  $produk_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/1/header.php',$data);
                    $this->load->view('page/1/produk.php');
                    $this->load->view('template/1/footer.php');
                    break;
        
                case 2:
                    $limit = 9;
                    $limit_start = ($page - 1) * $limit;
                    $produk_limit = $this->produk_model->GetLimit($limit_start,$limit);
                    
                    $data['produk_limit'] =  $produk_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/2/header.php',$data);
                    $this->load->view('page/2/produk.php');
                    $this->load->view('template/2/footer.php');
                    break;
        
                case 3:
                    $limit = 4;
                    $limit_start = ($page - 1) * $limit;
                    $produk_limit = $this->produk_model->GetLimit($limit_start,$limit);
                    
                    $data['produk_limit'] =  $produk_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/3/header.php',$data);
                    $this->load->view('page/3/produk.php');
                    $this->load->view('template/3/footer.php');
                    break;
        
                case 4:
                    $limit = 3;
                    $limit_start = ($page - 1) * $limit;
                    $produk_limit = $this->produk_model->GetLimit($limit_start,$limit);
                    
                    $data['produk_limit'] =  $produk_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/4/header.php',$data);
                    $this->load->view('page/4/produk.php');
                    $this->load->view('template/4/footer.php');
                    break;
        
                case 5:
                    $limit = 6;
                    $limit_start = ($page - 1) * $limit;
                    $produk_limit = $this->produk_model->GetLimit($limit_start,$limit);
                    
                    $data['produk_limit'] =  $produk_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/5/header.php',$data);
                    $this->load->view('page/5/produk.php');
                    $this->load->view('template/5/footer.php');
                    break;
        
                default:
                echo "Error 404 Page Not Found";
                    break;
            }
        }
    
        
        public function detail(){
            $this->load->model('layout_model');
            $this->load->model('produk_model');
            $this->load->model('slideshow_model');
            $layout_active = $this->layout_model->GetActiveLayout();
            $id = 0;
            if($this->input->get('id')){
                $id = $this->input->get('id');
            }else{
                $id = 0;
            }
            $slideshow = $this->slideshow_model->Get();
            $data['slideshow'] =  $slideshow;
            $slideshow_count = $this->slideshow_model->GetCount();
            $data['slideshow_count'] =  $slideshow_count;
            $data['id'] = $id;
            if ($id != 0) {
                $data['produk_detail'] = $this->produk_model->GetDetail($id);
            }
            
            switch ($layout_active) {
                case 1:
                    $this->load->view('template/1/header.php',$data);
                    $this->load->view('detail/1/view_produk.php');
                    $this->load->view('template/1/footer.php');
                    break;
        
                case 2:
                    $this->load->view('template/2/header.php',$data);
                    $this->load->view('detail/2/view_produk.php');
                    $this->load->view('template/2/footer.php');
                    break;
        
                case 3:
                    $this->load->view('template/3/header.php',$data);
                    $this->load->view('detail/3/view_produk.php');
                    $this->load->view('template/3/footer.php');
                    break;
        
                case 4:
                    $this->load->view('template/4/header.php',$data);
                    $this->load->view('detail/4/view_produk.php');
                    $this->load->view('template/4/footer.php');
                    break;
        
                case 5:
                    $this->load->view('template/5/header.php',$data);
                    $this->load->view('detail/5/view_produk.php');
                    $this->load->view('template/5/footer.php');
                    break;
        
                default:
                echo "Error 404 Page Not Found";
                    break;
            }
        }
    }

    
    /* End of file produk.php */
    
?>