
    <div class="container">
        <?php
        if($id != 0){?>
                            <div class="card theme-card">
                                <div class="card-header theme-header text-center">
                                    <h2><?php echo $produk_detail['nama_produk']; ?></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-4">
                                            <img class="img-fluid card-image" src="<?php echo base_url().$produk_detail["gambar"]; ?>" alt="" width="700" height="700">
                                        </div>
                                        <div class="col-sm-12 col-lg-8">
                                            <div class="card-text text-left">
                                                <?php echo html_entity_decode($produk_detail['deskripsi']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php  ?>
                <?php 
        }?>
    </div>
