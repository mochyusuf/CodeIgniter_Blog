<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class galeri extends CI_Controller {
    
        public function index()
        {
            $this->load->model('layout_model');
            $this->load->model('galeri_model');
            $this->load->model('slideshow_model');
            $this->load->model('album_model');
            
            $page = ($this->input->get('page'))? (int)$this->input->get('page'): 1;
            if(is_integer($page) && $page > 0){}
            else{$page = 1;}
            $album_page = ($this->input->get('album'))? (int)$this->input->get('album'): 0;

            $data['album_page'] = $album_page;
            $slideshow = $this->slideshow_model->Get();
            $data['slideshow'] =  $slideshow;
            $slideshow_count = $this->slideshow_model->GetCount();
            $data['slideshow_count'] =  $slideshow_count;

            $layout_active = $this->layout_model->GetActiveLayout();
            $data['album'] =$this->album_model->Get();
            $data['album_count'] =$this->album_model->GetCount();
            $data['galeri'] =$this->galeri_model->Get();
            switch ($layout_active) {
                case 1:
                    $limit = 9;
                    $limit_start = ($page - 1) * $limit;
                    if($this->input->get('album')){
                        if($album_page == 0){
                            $data['galeri_count'] =  $this->galeri_model->GetCount();
                            $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                        }
                        else{
                            $data['galeri_count'] =  $this->galeri_model->GetCountalbum($album);
                            $data['galeri_limit'] = $this->galeri_model->GetLimitalbum($album,$limit_start,$limit);
                        }
                    }
                    else{
                        $data['galeri_count'] =  $this->galeri_model->GetCount();
                        $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                    }
                    
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/1/header.php',$data);
                    $this->load->view('page/1/galeri.php');
                    $this->load->view('template/1/footer.php');
                    break;
        
                case 2:
                    $limit = 12;
                    $limit_start = ($page - 1) * $limit;
                    if($this->input->get('album')){
                        if($album_page == 0){
                            $data['galeri_count'] =  $this->galeri_model->GetCount();
                            $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                        }
                        else{
                            $data['galeri_count'] =  $this->galeri_model->GetCountalbum($album);
                            $data['galeri_limit'] = $this->galeri_model->GetLimitalbum($album,$limit_start,$limit);
                        }
                    }
                    else{
                        $data['galeri_count'] =  $this->galeri_model->GetCount();
                        $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                    }

                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/2/header.php',$data);
                    $this->load->view('page/2/galeri.php');
                    $this->load->view('template/2/footer.php');
                    break;
        
                case 3:
                    $limit = 12;
                    $limit_start = ($page - 1) * $limit;
                    if($this->input->get('album')){
                        if($album_page == 0){
                            $data['galeri_count'] =  $this->galeri_model->GetCount();
                            $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                        }
                        else{
                            $data['galeri_count'] =  $this->galeri_model->GetCountalbum($album);
                            $data['galeri_limit'] = $this->galeri_model->GetLimitalbum($album,$limit_start,$limit);
                        }
                    }
                    else{
                        $data['galeri_count'] =  $this->galeri_model->GetCount();
                        $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                    }

                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/3/header.php',$data);
                    $this->load->view('page/3/galeri.php');
                    $this->load->view('template/3/footer.php');
                    break;
        
                case 4:
                    $limit = 8;
                    $limit_start = ($page - 1) * $limit;
                    if($this->input->get('album')){
                        if($album_page == 0){
                            $data['galeri_count'] =  $this->galeri_model->GetCount();
                            $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                        }
                        else{
                            $data['galeri_count'] =  $this->galeri_model->GetCountalbum($album);
                            $data['galeri_limit'] = $this->galeri_model->GetLimitalbum($album,$limit_start,$limit);
                        }
                    }
                    else{
                        $data['galeri_count'] =  $this->galeri_model->GetCount();
                        $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                    }

                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/4/header.php',$data);
                    $this->load->view('page/4/galeri.php');
                    $this->load->view('template/4/footer.php');
                    break;
        
                case 5:
                    $limit = 9;
                    $limit_start = ($page - 1) * $limit;
                    if($this->input->get('album')){
                        if($album_page == 0){
                            $data['galeri_count'] =  $this->galeri_model->GetCount();
                            $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                        }
                        else{
                            $data['galeri_count'] =  $this->galeri_model->GetCountalbum($album);
                            $data['galeri_limit'] = $this->galeri_model->GetLimitalbum($album,$limit_start,$limit);
                        }
                    }
                    else{
                        $data['galeri_count'] =  $this->galeri_model->GetCount();
                        $data['galeri_limit'] = $this->galeri_model->GetLimit($limit_start,$limit);
                    }

                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/5/header.php',$data);
                    $this->load->view('page/5/galeri.php');
                    $this->load->view('template/5/footer.php');
                    break;
        
                default:
                echo "Error 404 Page Not Found";
                    break;
            }
        }
    
    }
    
    /* End of file galeri.php */
    
?>