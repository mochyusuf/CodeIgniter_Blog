
        <div id="galery" class="theme-card">
            <h5 class="card-header theme-header ">Galeri</h5>
            <div class="card-body theme-body theme-galeri-index">
                    <div class="your-class">
                    <?php if($album_count > 0){
                        $i = 0;
                        foreach($album as $row){?>
                            <a href="<?php echo base_url()."page/galeri.php?album=".$row['id_album']; ?>">
                                <p class="theme-album"><?php echo $row['judul_album']; ?></p>
                                <img class="img-fluid center-cropped" src="<?php echo base_url().$row["gambar_album"]; ?>" alt="" style="width:100%" id="<?php echo $row['id_album']; ?>">
                            </a>
                            <?php 
                            $i++;
                            if ($i >= 12) {
                                break;
                            }
                        } ?>
                        <?php 
                    } else{
                        echo "<p class='lead'><em>Tidak ada Album</em></p>";
                    }?>
                    </div>
            </div>
        </div>

        <div id="berita" class="theme-card">
            <h5 class="card-header theme-header">Berita</h5>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        if($berita_count > 0){
                            $i = 0;
                            foreach($berita as $row){?>
                                <div class="col-xs-12 col-lg-6">
                                    <div class="theme-headline theme-space theme-round">
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-8">
                                                <h4 class="card-title text-center"><?php echo cutText($row["judul"],25); ?></h4>
                                            </div>
                                            <div class="col-xs-12 col-lg-4 text-center">
                                                <a href="<?php echo base_url()."index.php/news/detail"; ?>?id=<?php echo $row["id_berita"]; ?>" class="theme-btn-primary btn-block" style="height : 100%; width : 100%">Selengkapnya</a>
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
        </div>
