
    <div class="container">
        <?php
        if($id != 0){?>
                        <div class="text-center">
                            <div class="card theme-card">
                                <div class="card-header theme-header">
                                    <h2><?php echo $news_detail['judul']; ?></h2>
                                    <div class="float-left">
                                        <small><?php echo $news_detail['waktu_pembuatan']; ?></small>
                                    </div>
                                    <div class="float-right">
                                        <small align="right"><?php echo "Diunggah oleh : ".$news_detail['nama']; ?></small>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img class="img-fluid card-image" src="<?php echo base_url().$news_detail["gambar"]; ?>" alt="" width="700" height="700">
                                    <div class="card-text margin text-left">
                                        <?php echo html_entity_decode($news_detail['isi']); ?>
                                    </div>
                                    <div class="card-footer theme-footer-category">
                                        Kategori : <?php echo $news_detail['nama_kategori']; ?>
                                    </div>
                                        <p>Tag : </p>
                                        <?php
                                        if($tag_news_count > 0){
                                            foreach($tag_news as $row){?>
                                            <div class="d-inline theme-tag">
                                                <a href="<?php echo base_url()."index.php/search/news?id_tag=".$row['id_tag']; ?>">
                                                    <small>
                                                        <?php echo $row['nama_tag'];?>
                                                    </small>
                                                </a>   
                                            </div>
                                        <?php } ?>
                                        <?php 
                                        } else{
                                            ?>
                                            <h6>Tidak Ada Tag</h6>
                                            <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    <?php  ?>
                <?php 
        }?>
    </div>
