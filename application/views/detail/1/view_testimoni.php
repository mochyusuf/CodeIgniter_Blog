
    <div class="container">
        <?php
        if($id != 0){?>
                        <div class="text-center">
                            <div class="card theme-card">
                                <div class="card-header theme-header">
                                    <h2><?php echo $testimoni_detail['judul_testimoni']; ?></h2>
                                        <div class="float-left">
                                            <small><?php echo $testimoni_detail['waktu_pembuatan']; ?></small>
                                        </div>
                                        <div class="float-right">
                                            <small align="right"><?php echo "Diunggah oleh : ".$testimoni_detail['nama']; ?></small>
                                        </div>
                                </div>
                                <div class="card-body">
                                    <img class="img-fluid card-image" src="<?php echo base_url().$testimoni_detail["gambar_testimoni"]; ?>" alt="" width="700" height="700">
                                    <div class="card-text text-left">
                                        <?php echo html_entity_decode($testimoni_detail['testimoni']); ?>
                                    </div>
                            </div>
                        </div>
                        </div>
                    <?php  ?>
                <?php 
        }?>
    </div>
