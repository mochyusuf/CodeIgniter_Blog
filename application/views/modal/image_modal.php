
                <div class='border-dark btn-space text-center theme-modal'>
                    <h2 class='theme-header'><?php echo $galeri[0]['judul_galeri'] ?><button type='button' class='close' data-dismiss='modal' class='theme-header'>&times;</button></h2>
                    <img class='img-fluid view_data' src="<?php echo base_url().$galeri[0]['gambar'] ?>">
                    <small><?php echo html_entity_decode($galeri[0]['deskripsi_gambar']) ?></small>
                    <hr>
                    <h5 class='theme-footer'>Album : <?php echo $galeri[0]['judul_album'] ?></h5>
                </div>