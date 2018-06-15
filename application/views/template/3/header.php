<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="<?php echo base_url();?>assets/image/logotp.ico" rel='SHORTCUT ICON'/>

		<!-- Lightbox -->
        <link rel="stylesheet" href="<?php echo base_url();?>node_modules/imagelightbox/dist/imagelightbox.min.css">
        <link rel="stylesheet" href="<?php echo base_url()."vendor/twbs/bootstrap/dist/css/"; ?>bootstrap.min.css"/>
	
        <link rel="stylesheet" href="<?php echo base_url()."vendor/components/font-awesome/css/"; ?>fontawesome-all.css"/>
    
        <link rel="stylesheet" href="<?php echo base_url();?>vendor/ivaynberg/select2/dist/css/select2.min.css">

        <link rel="stylesheet" href="<?php echo base_url();?>node_modules/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="<?php echo base_url();?>node_modules/slick-carousel/slick/slick-theme.css">
        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style_3.css">
    </head>
    <body class="theme-website-body">
    
	<!-- NavBar -->
    <nav class="navbar navbar-expand-sm theme-navbar fixed-top">
        <button class="navbar-toggler theme-navbar-button" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fas fa-bars"></i>
        </button>
        <!-- Just an image -->
        <nav class="navbar navbar-light brand">
            <a class="navbar-brand theme-brand" href="#">
                <img src="<?php echo base_url()."assets/image/logoTP.png" ?>" alt="Nama Website" style="width:100px;">
            </a>
        </nav>
        <div class="collapse navbar-collapse theme-navbar-link" id="collapsibleNavbar">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php";?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php/about";?>">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php/produk";?>">Produk</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php/testimoni";?>">Testimoni</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php/news";?>">Berita</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()."index.php/galeri";?>">Galeri</a>
                </li> 
            </ul>
        </div>

    </nav>
	
	<!-- Carousel / SlideShow -->
    <div class="container theme-container">   
        <!-- Carousel -->
        <div id="top" class="carousel slide theme-slide" data-ride="carousel">
            <!-- Carousel Indicator -->
            <ul class="carousel-indicators">
                <?php 
                $i = 0;
				//Tampilkan Indikator SlideShow
                foreach($slideshow as $row){?>
                    <li data-target="#top" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : '' ; ?>"></li>
                <?php $i++;
                }
                ?>
            </ul>
            <div class="carousel-inner">
                <!-- Carousel Image -->
                <?php 
				//Jika Terdapat Gambar Slideshow
                if ($slideshow_count > 0) {
                    $i = 0;
					//Tampilkan Gambar SlideShow
                    foreach($slideshow as $row){?>
                        <div class="carousel-item <?php echo $retVal = ($i == 0) ? 'active' : '' ; ?>">
                            <img src=<?php echo base_url().$row['gambar_slideshow'];?> alt="<?php echo $row['nama_slideshow']; ?>" width="1100" height="500">
                        </div>
                    <?php $i++;
                    }
                }
				//Jika Gambar SlideShow Kosong
                else{ ?>
                    <div class="carousel-item active">
                        <img src=<?php echo base_url()."assets/image/no_image.png";?> alt="1" width="1100" height="500">
                    </div>
                <?php }
                ?>
            </div>
            <a class="carousel-control-prev" href="#top" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#top" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    
    