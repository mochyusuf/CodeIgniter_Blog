<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class search extends CI_Controller {
    
        public function index()
        {
            
        }

        public function news(){
            $this->load->model('layout_model');
            $this->load->model('berita_model');
            $this->load->model('tag_model');
            $this->load->model('slideshow_model');

            $slideshow = $this->slideshow_model->Get();
            $data['slideshow'] =  $slideshow;
            $slideshow_count = $this->slideshow_model->GetCount();
            $data['slideshow_count'] =  $slideshow_count;
            $layout_active = $this->layout_model->GetActiveLayout();

            $page = ($this->input->get('page'))? (int)$this->input->get('page'): 1;
            if(is_integer($page) && $page > 0){}
            else{$page = 1;}

            $id = 0;
            if ($this->input->get('id_tag')) {
                $id = $this->input->get('id_tag');
            }
            $data['id'] = $id;
            $data['id_tag'] = $id;
            if ($id != 0) {
                $data['tag_detail'] = $this->tag_model->GetDetail($id);
            }
            switch ($layout_active) {
                case 1:
                    $limit = 3;
                    $limit_start = ($page - 1) * $limit;
                    $data['news_search_count'] =  $this->berita_model->GetCountTag($id);
                    $data['news_search_limit'] = $this->berita_model->GetLimitTag($id,$limit_start,$limit);
                    
                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/1/header.php',$data);
                    $this->load->view('search/1/search_news.php');
                    $this->load->view('template/1/footer.php');
                    break;
        
                case 2:
                    $limit = 4;
                    $limit_start = ($page - 1) * $limit;
                    $data['news_search_count'] =  $this->berita_model->GetCountTag($id);
                    $data['news_search_limit'] = $this->berita_model->GetLimitTag($id,$limit_start,$limit);

                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/2/header.php',$data);
                    $this->load->view('search/2/search_news.php');
                    $this->load->view('template/2/footer.php');
                    break;
        
                case 3:
                    $limit = 3;
                    $limit_start = ($page - 1) * $limit;
                    $data['news_search_count'] =  $this->berita_model->GetCountTag($id);
                    $data['news_search_limit'] = $this->berita_model->GetLimitTag($id,$limit_start,$limit);

                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/3/header.php',$data);
                    $this->load->view('search/3/search_news.php');
                    $this->load->view('template/3/footer.php');
                    break;
        
                case 4:
                    $limit = 4;
                    $limit_start = ($page - 1) * $limit;
                    $data['news_search_count'] =  $this->berita_model->GetCountTag($id);
                    $data['news_search_limit'] = $this->berita_model->GetLimitTag($id,$limit_start,$limit);

                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/4/header.php',$data);
                    $this->load->view('search/4/search_news.php');
                    $this->load->view('template/4/footer.php');
                    break;
        
                case 5:
                    $limit = 4;
                    $limit_start = ($page - 1) * $limit;
                    $data['news_search_count'] =  $this->berita_model->GetCountTag($id);
                    $data['news_search_limit'] = $this->berita_model->GetLimitTag($id,$limit_start,$limit);

                    $data['page'] =  $page;
                    $data['limit'] = $limit;
                    $this->load->view('template/5/header.php',$data);
                    $this->load->view('search/5/search_news.php');
                    $this->load->view('template/5/footer.php');
                    break;
        
                default:
                echo "Error 404 Page Not Found";
                    break;
            }
        }
    
    }
    
    /* End of file search.php */
    