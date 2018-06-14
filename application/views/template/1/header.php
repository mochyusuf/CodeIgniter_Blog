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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
	
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"/>
  
    <link rel="stylesheet" href="<?php echo base_url();?>library/select2-develop/dist/css/select2.min.css">
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
