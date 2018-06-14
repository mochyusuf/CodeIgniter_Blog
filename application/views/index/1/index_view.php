    <!-- Tentang -->
    <div id="about" class="card-container">
        <h5 class='card-header theme-header'>About</h5>
            <div class='card-body theme-body'>
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col-sm-12 col-md-6 col-lg-3'>
                            <img class='img-fluid' src=assets/image/i_1.png width='460' height='345'> 
                        </div>
                        <div class='col-sm-12 col-md-6 col-lg-9'>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a tempor elit, eu auctor nisi. Integer orci ipsum, pellentesque sit amet consequat ut, tempor sit amet quam. Curabitur laoreet purus sit amet imperdiet sodales. Vestibulum at lacinia nibh, ac finibus purus. Sed ultricies bibendum ipsum, ac commodo lacus luctus quis. Cras efficitur augue nec mi pellentesque fermentum. Etiam tellus mi, hendrerit et semper auctor, mollis sed purus. Curabitur quis metus leo.</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <!-- Berita -->
    <div id="news" class="card-container">
        <h5 class="card-header theme-header">Berita</h5>
        <div class="card-body theme-body">
            <div class="container-fluid">
                <div class="row">
                    <?php
                        if($berita_count > 0){
                            $i = 0;
                            foreach($berita as $row){?>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card theme-card-body theme-space">
                                        <img class="" img="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>" alt="" style="width:100%">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $row["judul"]; ?></h4>
                                            <p class="card-text"><?php echo cutText(strip_tags(html_entity_decode($row["isi"])),50); ?></p>
                                            <a href="<?php echo base_url()."view/view_news.php";?>?id=<?php echo $row["id_berita"]; ?>" class="btn btn-primary theme-btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                $i++;
                                if ($i >= 3) {
                                    break;
                                }
                            } ?>
                            <?php 
                            unset($result);
                        } else{
                            echo "<p class='lead'><em>Tidak ada berita</em></p>";
                        }
                    ?>
                </div>
            </div> 
        </div>
    </div>

    <!-- Produk -->
    <div id="product" class="card-container">
        <h5 class="card-header theme-header">Produk</h5>
        <div class="card-body theme-body">
            <div class="container-fluid">
                <div class="row">
                    <?php
                        if($produk_count > 0){
                            $i = 0;
                            foreach($produk as $row){?>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card theme-card-body theme-space">
                                        <h4 class="card-title text-center"><?php echo $row["nama_produk"]; ?></h4>
                                        <img class="" img="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>" alt="" style="width:100%">
                                        <div class="card-body">
                                            <a href="<?php echo  base_url()."view/view_produk.php";?>?id=<?php echo $row["id_produk"]; ?>" class="btn btn-primary theme-btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                $i++;
                                if ($i >= 3) {
                                    break;
                                }
                            }?>
                            <?php 
                            unset($result);
                        } else{
                            echo "<p class='lead'><em>Tidak ada Produk</em></p>";
                        }?>
                </div>
            </div> 
        </div>
    </div>

    <!-- Testimoni -->
    <div id="testimoni" class="card-container">
        <h5 class="card-header theme-header">Testimoni</h5>
        <div class="card-body theme-body">
            <div class="container-fluid">
                <div class="row">
                    <?php
                        if($testimoni_count > 0){
                            $i = 0;
                            foreach($testimoni as $row){?>
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <div class="card theme-card-body theme-space">
                                        <h4 class="card-title text-center"><?php echo cutText($row["judul_testimoni"],10); ?></h4>
                                        <img class="" img="img-fluid" src="<?php echo base_url().$row["gambar_testimoni"]; ?>" alt="" style="width:100%">
                                        <div class="card-body">
                                            <a href="<?php echo  base_url()."view/view_testimoni.php";?>?id=<?php echo $row["id_testimoni"]; ?>" class="btn btn-primary theme-btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                $i++;
                                if ($i >= 4) {
                                    break;
                                }
                            } ?>
                            <?php 
                            unset($result);
                        } else{
                            echo "<p class='lead'><em>Tidak ada Testimoni</em></p>";
                        }?>
                </div>
            </div> 
        </div>
    </div>

        <!-- Galeri -->
        <div id="galery" class="card-container">
        <h5 class="card-header theme-header">Galeri</h5>
        <div class="card-body theme-body">
            <div class="container-fluid">
                <div class="row">
                <?php
                        if($galeri_count > 0){
                            $i = 0;
                            foreach($galeri as $row){?>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card theme-card-body theme-space">
                                        <img class="view_data" src="<?php echo base_url().$row["gambar"]; ?>" alt="" style="width:100%" id="<?php echo $row['id_galeri']; ?>">
                                    </div>
                            </div>
                            <?php 
                            $i++;
                            if ($i >= 3) {
                                break;
                            }
                        } ?>
                        <?php 
                            unset($result);
                        } else{
                            echo "<p class='lead'><em>Tidak ada Gambar</em></p>";
                        }?>
                </div> 
            </div>
        </div>
    </div>