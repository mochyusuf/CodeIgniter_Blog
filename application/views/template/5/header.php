<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo base_url();?>node_modules/imagelightbox/dist/imagelightbox.min.css">
        <link rel="stylesheet" href="<?php echo base_url()."vendor/twbs/bootstrap/dist/css/"; ?>bootstrap.min.css"/>
	
        <link rel="stylesheet" href="<?php echo base_url()."vendor/components/font-awesome/css/"; ?>fontawesome-all.css"/>
    
        <link rel="stylesheet" href="<?php echo base_url();?>vendor/ivaynberg/select2/dist/css/select2.min.css">

        <link rel="stylesheet" href="<?php echo base_url();?>node_modules/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="<?php echo base_url();?>node_modules/slick-carousel/slick/slick-theme.css">
        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style_5.css">
  </head>
    <body class="theme-website-body">
	
	<!-- Logo Website -->
    <div class="theme-brand">
        <div class="row no-margin">
            <div class="theme-image-brand">
                <img src="<?php echo base_url()."assets/image/logoTP.png" ?>" alt="Logo Website" class="img-fluid">
            </div>
            <div class="theme-text-brand">
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>

    <div class="container theme-container">   
        <!-- Carousel / Slideshow -->
        <div id="top" class="carousel slide" data-ride="carousel">
            <!-- Carousel Indicator -->
            <ul class="carousel-indicators">
                <?php 
                $i = 0;
                foreach($slideshow as $row){?>
                    <li data-target="#top" data-slide-to="<?php echo $i; ?>" class="<?php echo $retVal = ($i == 0) ? 'active' : '' ; ?>"></li>
                <?php $i++;
                }
                ?>
            </ul>
            <div class="carousel-inner">
                <!-- Carousel Image -->
                <?php 
                if ($slideshow_count > 0) {
                    $i = 0;
                    foreach($slideshow as $row){?>
                        <div class="carousel-item <?php echo $retVal = ($i == 0) ? 'active' : '' ; ?>">
                            <img src=<?php echo base_url().$row['gambar_slideshow'];?> alt="<?php echo $row['nama_slideshow']; ?>" width="1100" height="500">
                        </div>
                    <?php $i++;
                    }
                }
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
        
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-sm theme-navbar sticky-top">
            <button class="navbar-toggler theme-navbar-button" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse theme-navbar-link" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."index.php";?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."page/about.php";?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."page/produk.php";?>">Produk</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."page/testimoni.php";?>">Testimoni</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."page/news.php";?>">Berita</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()."page/galeri.php";?>">Galeri</a>
                    </li> 
                </ul>
            </div>
        </nav>