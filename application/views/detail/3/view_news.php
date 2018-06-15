
        <?php
        if($id != 0){?>
                        
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
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <img class="img-fluid card-image" src="<?php echo base_url().$news_detail["gambar"]; ?>" alt="" width="700" height="700">
                                        </div>
                                        <div class="col-sm-12 col-lg-8">
                                            <div class="card-text text-left">
                                                <?php echo html_entity_decode($news_detail['isi']); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer theme-footer-category text-center">
                                        Kategori : <?php echo $news_detail['nama_kategori']; ?>
                                    </div>
                                        <p class="text-center">Tag : </p>
                                        <?php 
                                        if($tag_news_count > 0){?>
                                            <div class="text-center">
                                            <?php foreach($tag_news as $row){?>
                                                <div class="d-inline theme-tag">
                                                    <a href="<?php echo base_url()."search/search_news.php?id_tag=".$row['id_tag']; ?>">
                                                        <small>
                                                            <?php echo $row['nama_tag'];?>
                                                        </small>
                                                    </a>    
                                                </div>
                                            <?php } ?>
                                            </div>
                                        <?php 
                                        } else{
                                            ?>
                                            <h6>Tidak Ada Tag</h6>
                                            <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        
                    <?php  ?>
                <?php 
        }?>
