<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Index_Controller extends CI_Controller {
    
        public function index()
        {
            $this->load->model('layout_model');
            $this->load->model('slideshow_model');
            $this->load->model('berita_model');
            $this->load->model('produk_model');
            $this->load->model('testimoni_model');
            $this->load->model('galeri_model');

            $layout_active = $this->layout_model->GetActiveLayout();

            $slideshow = $this->slideshow_model->Get();
            $data['slideshow'] =  $slideshow;
            $slideshow_count = $this->slideshow_model->GetCount();
            $data['slideshow_count'] =  $slideshow_count;
            
            $berita = $this->berita_model->Get();
            $data['berita'] =  $berita;
            $berita_count = $this->berita_model->GetCount();
            $data['berita_count'] =  $berita_count;

            $produk = $this->produk_model->Get();
            $data['produk'] =  $produk;
            $produk_count = $this->produk_model->GetCount();
            $data['produk_count'] =  $produk_count;

            $testimoni = $this->testimoni_model->Get();
            $data['testimoni'] =  $testimoni;
            $testimoni_count = $this->testimoni_model->GetCount();
            $data['testimoni_count'] =  $testimoni_count;

            $galeri = $this->galeri_model->Get();
            $data['galeri'] =  $galeri;
            $galeri_count = $this->galeri_model->GetCount();
            $data['galeri_count'] =  $galeri_count;
            switch ($layout_active) {
                case 1:
                    $this->load->view('template/1/header.php',$data);
                    $this->load->view('index/1/index_view.php');
                    $this->load->view('template/1/footer.php');
                    break;
        
                case 2:
                    $this->load->view('template/2/header.php');
                    $this->load->view('index/2/index_view.php');
                    $this->load->view('template/2/footer.php');
                    break;
        
                case 3:
                    $this->load->view('template/3/header.php');
                    $this->load->view('index/3/index_view.php');
                    $this->load->view('template/3/footer.php');
                    break;
        
                case 4:
                    $this->load->view('template/4/header.php');
                    $this->load->view('index/4/index_view.php');
                    $this->load->view('template/4/footer.php');
                    break;
        
                case 5:
                    $this->load->view('template/5/header.php');
                    $this->load->view('index/5/index_view.php');
                    $this->load->view('template/5/footer.php');
                    break;
            
                case 6:
                    $this->load->view('template/6/header.php');
                    $this->load->view('index/6/index_view.php');
                    $this->load->view('template/6/footer.php');
                    break;
        
                default:
                echo "Error 404 Page Not Found";
                    break;
            }
        }
    
    }
    
    /* End of file Index_Controller.php */
    
?>