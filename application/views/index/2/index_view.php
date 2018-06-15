    <div class="container theme-container">
        <!-- Carousel -->
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

        <div class="row theme-row">
            <div class="col-lg-3 theme-col">
                <div id="about" class="card-container theme-card-round">
                    <h5 class='card-header theme-header theme-card-round-top'>About</h5>
                    <div class='theme-body'>
                        <div class='text-center'>
                            <img class='img-fluid' src="<?php echo base_url(); ?>assets/image/i_1.png" width='460' height='345'> 
                        </div>
                        <div class='theme-card-round-bottom text-center'>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et consectetur voluptatem reiciendis, asperiores voluptatibus architecto in at illum nemo quas accusamus exercitationem dignissimos inventore culpa, iure ad minus deleniti quaerat!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 theme-col">
                <div id="testimoni" class="card-container theme-card">
                    <h5 class="card-header theme-header">Testimoni</h5>
                    <div class="card-body theme-body">
                        <?php
                            if($testimoni_count > 0){
                                $i = 0;
                                foreach($testimoni as $row){?>
                                    <div class="card theme-testimoni">
                                        <div class="row">
                                            <div class="col-9">
                                                <h5 class="card-title theme-text-center">
                                                    <?php echo $row["judul_testimoni"]; ?>
                                                </h5>
                                            </div>
                                            <div class="col-3 justify-content-right">
                                                <img class="center-cropped img-fluid" src="<?php echo base_url().$row["gambar_testimoni"]; ?>" alt="" >
                                            </div>
                                        </div>
                                        <a href="<?php echo base_url()."index.php/testimoni/detail";?>?id=<?php echo $row["id_testimoni"]; ?>" class="btn btn-primary theme-btn-primary">Selengkapnya</a>
                                    </div>
                                    <?php 
                                    $i++;
                                    if ($i >= 3) {
                                        break;
                                    }
                                } ?>
                                <?php 
                            } else{
                                echo "<p class='lead'><em>Tidak ada Testimoni</em></p>";
                            }?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row theme-row">
            <div class="col-lg-4 theme-col">
                <div id="galery" class="card-container theme-card">
                    <h5 class="card-header theme-header">Galeri</h5>
                    <div class="card-body theme-body">
                        <div class="row">
                        <?php
                                if($galeri_count > 0){
                                    $i = 0;
                                    foreach($galeri as $row){?>
                                        <div class="col-sm-12 col-md-6 col-lg-12">
                                            <div class="card theme-space">
                                                <a href="<?php echo base_url().$row["gambar"]; ?>" data-imagelightbox="h" data-ilb2-caption="<?php echo $row['deskripsi_gambar']; ?>"><img class="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>"></a>
                                            </div>
                                        </div>
                                        <?php 
                                        $i++;
                                        if ($i >= 6) {
                                            break;
                                        }
                                    } ?>
                                    <?php 
                                } else{
                                    echo "<p class='lead'><em>Tidak ada Gambar</em></p>";
                                }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 theme-col">
                <div id="news" class="card-container theme-card">
                    <h5 class="card-header theme-header">Berita</h5>
                    <div class="card-body theme-body">
                        <div class="row">
                            <?php
                                if($berita_count > 0){
                                    $i = 0;
                                    foreach($berita as$row){?>
                                        <div class="col-sm-12 col-md-6 col-lg-6 theme-space">
                                            <div class="theme-card-body">
                                                <img class="center-cropped-news" img="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>" alt="" style="width:100%">
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo cutText($row["judul"],15); ?></h4>
                                                    <p class="card-text"><?php echo cutText(strip_tags(html_entity_decode($row["isi"])),50); ?></p>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url()."index.php/news/detail";?>?id=<?php echo $row["id_berita"]; ?>" class="btn btn-primary btn-block theme-btn-primary">Selengkapnya</a>
                                        </div>
                                        <?php 
                                        $i++;
                                        if ($i >= 6) {
                                            break;
                                        }
                                    } ?>
                                    <?php 
                                } else{
                                    echo "<p class='lead'><em>Tidak ada berita</em></p>";
                                }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row theme-row">
            <div class="col-sm-12 theme-col">
                <div id="product" class="card-container theme-card">
                    <h5 class="card-header theme-header">Produk</h5>
                    <div class="card-body theme-body">
                        <div class="row">
                            <?php
                                if($produk_count > 0){
                                    $i = 0;
                                    foreach($produk as $row){?>
                                        <div class="col-sm-12 col-lg-4">
                                            <div class="card theme-card-body theme-space">
                                            <h4 class="card-title text-center"><?php echo $row["nama_produk"]; ?></h4>
                                                <img class="center-cropped-image" img="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>" alt="" style="width:100%">
                                                <a href="<?php echo base_url()."index.php/produk/detail";?>?id=<?php echo $row["id_produk"]; ?>" class="btn btn-primary btn-block theme-btn-primary">Selengkapnya</a>
                                            </div>
                                        </div>
                                        <?php 
                                        $i++;
                                        if ($i >= 3) {
                                            break;
                                        }
                                    }?>
                                    <?php 
                                } else{
                                    echo "<p class='lead'><em>Tidak ada Produk</em></p>";
                                }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>