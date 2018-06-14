<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Icon Website -->
    <link href="<?php echo base_url();?>assets/image/logotp.ico" rel='SHORTCUT ICON'/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()."vendor/twbs/bootstrap/dist/css/"; ?>bootstrap.min.css"/>
	
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()."vendor/components/font-awesome/css/"; ?>fontawesome-all.css"/>
  
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/ivaynberg/select2/dist/css/select2.min.css">
 </head>
    <body class="theme-website-body">
	
    <!-- Carousel -->
    <div id="top" class="carousel slide" data-ride="carousel">
        <!-- Carousel Indicator -->
        <ul class="carousel-indicators">
            <?php
            $i = 0;
            foreach ($slideshow as $row)
            {?>
                <li data-target="#top" data-slide-to="<?php echo $i; ?>" class="<?php echo $retVal = ($i == 0) ? 'active' : '' ; ?>"></li>
            <?php 
                $i++;
            }
            ?>
        </ul>
        <div class="carousel-inner">
            <!-- Carousel Image -->
            <?php 
            if ($slideshow_count > 0) {
                $i = 0;?>
                <div class="image-holder">
                <?php foreach ($slideshow as $row){?>
                    <div class="carousel-item <?php echo $retVal = ($i == 0) ? 'active' : '' ; ?> text-center">
                        <img class="" src=<?php echo base_url().$row['gambar_slideshow'];?> alt="<?php echo $row['gambar_slideshow']; ?>">
                    </div>
                <?php $i++;
                }?>
                
                </div>
            <?php }
            else{ ?>
                <div class="carousel-item active">
                    <img src=<?php echo base_url()."assets/image/no_image.png";?> alt="1" width="1100" height="500">
                </div>
            <?php }
            unset($result);
            ?>
        </div>
        <a class="carousel-control-prev" href="#top" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#top" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- End Carousel -->
