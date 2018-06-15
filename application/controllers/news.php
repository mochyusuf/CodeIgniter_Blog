<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class news extends CI_Controller {
    
        public function index()
        {
            $this->load->model('layout_model');
            $this->load->model('berita_model');
            $this->load->model('slideshow_model');
            $this->load->model('tag_model');
            $this->load->model('kategori_model');
            
            $page = ($this->input->get('page'))? (int)$this->input->get('page'): 1;
            if(is_integer($page) && $page > 0){}
            else{$page = 1;}
            $kategori_page = ($this->input->get('kategori'))? (int)$this->input->get('kategori'): 0;

            $data['kategori_page'] = $kategori_page;
            $slideshow = $this->slideshow_model->Get();
            $data['slideshow'] =  $slideshow;
            $slideshow_count = $this->slideshow_model->GetCount();
            $data['slideshow_count'] =  $slideshow_count;

            $layout_active = $this->layout_model->GetActiveLayout();
            $data['tag'] =$this->tag_model->Get();
            $data['kategori'] =$this->kategori_model->Get();
            switch ($layout_active) {
                case 1:
                    $limit = 3;
                    $limit_start = ($page - 1) * $limit;
                    if($this->input->get('kategori')){
                        if($kategori_page == 0){
                            $data['news_count'] =  $this->berita_model->GetCount();
                            $data['news_limit'] = $this->berita_model->GetLimit($limit_start,$limit);
                        }
                        else{
                            $data['news_count'] =  $this->berita_model->GetCountKategori($kategori);
                            $data['news_limit'] = $this->berita_model->GetLimitKategori($kategori,$limit_start,$limit);
                        }
                    }
                    else{
                        $data['news_count'] =  $this->berita_model->GetCount();
                        $data['news_limit'] = $this->berita_model->GetLimit($limit_start,$limit);
                    }
                    
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/1/header.php',$data);
                    $this->load->view('page/1/news.php');
                    $this->load->view('template/1/footer.php');
                    break;
        
                case 2:
                    $limit = 9;
                    $limit_start = ($page - 1) * $limit;
                    $news_limit = $this->berita_model->GetLimit($limit_start,$limit);
                    
                    $data['news_limit'] =  $news_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/2/header.php',$data);
                    $this->load->view('page/2/news.php');
                    $this->load->view('template/2/footer.php');
                    break;
        
                case 3:
                    $limit = 4;
                    $limit_start = ($page - 1) * $limit;
                    $news_limit = $this->berita_model->GetLimit($limit_start,$limit);
                    
                    $data['news_limit'] =  $news_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/3/header.php',$data);
                    $this->load->view('page/3/news.php');
                    $this->load->view('template/3/footer.php');
                    break;
        
                case 4:
                    $limit = 3;
                    $limit_start = ($page - 1) * $limit;
                    $news_limit = $this->berita_model->GetLimit($limit_start,$limit);
                    
                    $data['news_limit'] =  $news_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/4/header.php',$data);
                    $this->load->view('page/4/news.php');
                    $this->load->view('template/4/footer.php');
                    break;
        
                case 5:
                    $limit = 6;
                    $limit_start = ($page - 1) * $limit;
                    $news_limit = $this->berita_model->GetLimit($limit_start,$limit);
                    
                    $data['news_limit'] =  $news_limit;
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/5/header.php',$data);
                    $this->load->view('page/5/news.php');
                    $this->load->view('template/5/footer.php');
                    break;
        
                default:
                echo "Error 404 Page Not Found";
                    break;
            }
        }
    
    }

    function SetLimit($_limit,$page){
    }
    
    /* End of file news.php */
    
?>