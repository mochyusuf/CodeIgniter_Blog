     
        <div class="row theme-row">
            <div class="col-lg-4 col-sm-12 theme-col">
                <div class="theme-card">
                    <h5 class="card-header theme-header ">Info 1</h5>
                    <img class="card-img-top theme-image" src="<?php echo base_url()."assets/image/1.jpg"; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="theme-card">
                    <h5 class="card-header theme-header ">Info 2</h5>
                    <img class="card-img-top theme-image" src="<?php echo base_url()."assets/image/2.jpg"; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="theme-card">
                    <h5 class="card-header theme-header ">Info 3</h5>
                    <img class="card-img-top theme-image" src="<?php echo base_url()."assets/image/3.jpg"; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="berita" class="theme-card">
            <h5 class="card-header theme-header ">Berita</h5>
            <div class="card-body">
                <div class="row">
                    <?php
                    if($berita_count > 0){
                        $i = 0;
                        foreach($berita as $row){?>
                            <div class="col-xs-12 col-lg-6">
                                <div class="theme-headline theme-space theme-round">
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-8">
                                            <h4 class="card-title text-center"><?php echo cutText($row["judul"],20); ?></h4>
                                        </div>
                                        <div class="col-xs-12 col-lg-4 text-center">
                                            <a href="<?php echo base_url()."index.php/news/detail"; ?>?id=<?php echo $row["id_berita"]; ?>" class="btn btn-primary theme-btn-primary btn-block" style="height : 100%; width : 100%">Selengkapnya</a>
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
        </div>

        <div id="galery" class="theme-card">
            <h5 class="card-header theme-header ">Galeri</h5>
            <div class="card-body theme-galeri-index">
                    <div class="your-class">
                    <?php if($galeri_count > 0){
                        $i = 0;
                        foreach($galeri as $row){?>
                            <div>
                                <a href="<?php echo base_url().$row["gambar"]; ?>" data-imagelightbox="h" data-ilb2-caption="<?php echo $row['deskripsi_gambar']; ?>"><img class="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>"></a>
                            </div>
                            <?php 
                            $i++;
                            if ($i >= 12) {
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