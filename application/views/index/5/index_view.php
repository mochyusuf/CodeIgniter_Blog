
        <div class="row theme-row">
            <div class="col-lg-9">
                <div id="berita" class="theme-card">
                    <h5 class="card-header theme-header">Berita</h5>
                        <div class="row">
                            <?php
                            if($berita_count > 0){
                                $i = 0;
                                foreach($berita as $row){?>
                                    <div class="col-xs-12 col-lg-6">
                                        <div class="theme-headline theme-space theme-round">
                                            <div class="row">
                                                <div class="col-xs-12 col-lg-12">
                                                    <h4 class="card-title text-center"><?php echo cutText($row["judul"],25); ?></h4>
                                                </div>
                                                <div class="col-xs-12 col-lg-12 text-center">
                                                    <a href="<?php echo base_url()."view/view_news.php"; ?>?id=<?php echo $row["id_berita"]; ?>" class="theme-btn-primary btn-block" style="height : 100%; width : 100%">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    $i++;
                                    if ($i >= 10) {
                                        break;
                                    }
                                } ?>
                                <?php 
                            } else{
                                echo "<p class='lead'><em>Tidak ada Berita</em></p>";
                            }?>
                        </div>
                    </div>
                <div id="galery" class="theme-card">
            <h5 class="card-header theme-header ">Galeri</h5>
            <div class="card-body theme-body theme-galeri-index">
                <div class="row">
                    <?php if($galeri_count > 0){
                        $i = 0;
                        foreach($galeri as $row){?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="<?php echo base_url().$row["gambar"]; ?>" data-imagelightbox="h" data-ilb2-caption="<?php echo $row['deskripsi_gambar']; ?>"><img class="img-fluid theme-space" src="<?php echo base_url().$row["gambar"]; ?>"></a>
                            </div>
                            <?php 
                            $i++;
                            if ($i >= 9) {
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
            <div class="col-lg-3">
                <div class="theme-card">
                    <h5 class="card-header theme-header ">Info 1</h5>
                    <img class="card-img-top theme-image" src="<?php echo base_url()."assets/image/1.jpg"; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="theme-card">
                    <h5 class="card-header theme-header ">Info 2</h5>
                    <img class="card-img-top theme-image" src="<?php echo base_url()."assets/image/1.jpg"; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="theme-card">
                    <h5 class="card-header theme-header ">Info 3</h5>
                    <img class="card-img-top theme-image" src="<?php echo base_url()."assets/image/1.jpg"; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
