
    <div class="theme-header container theme-container">
        <div class="float-center">
            <h4 id="heading-h">Galeri</h4>
        </div>
    </div>
    <div class="container theme-container" style="margin-top:0px;">
        <div class="border-secondary mb-3 card-view">
            <div class="card-body theme-body">
                <h2 class="text-center">Album
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle theme-button-default" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php 
                            if($album_count > 0){
                                if ($album_page == 0) {
                                    echo "-- Semua Album --";
                                }
                                else{
                                    foreach($album as $row){
                                        if ($album_page == $row['id_album']) { 
                                            echo $row['judul_album'];
                                            break;
                                        }
                                    }
                                }
                            } else{
                                echo "Tidak Ada Album";
                            }
                            ?>
                        </button>
                        <div class="dropdown-menu theme-dropdown">
                            <?php 
                                if($album_count> 0){?>
                                    <li><a class="dropdown-item <?php echo ($album_page == "all") ? "theme-dropdown-active" : "" ;?>" href="<?php echo base_url()."page/galeri.php?page=1&album=all"; ?>">-- Semua Album --</a></li>
                                    <div class="dropdown-divider"></div>
                                    <?php 
                                    foreach($album as $row){?>
                                        <li><a class="dropdown-item <?php echo ($album_page == $row['id_album']) ? "theme-dropdown-active" : "" ;?>" href="<?php echo base_url()."page/galeri.php?page=1&album=".$row['id_album']; ?>"><?php echo $row['judul_album']; ?></a></li>
                                    <?php } ?>
                                    <?php 
                                    
                                } else{
                                    ?>
                                    <h6>Tidak Ada Album</h6>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
                    </h2>
                <br>

            <?php   
                    if($galeri_count > 0){?>
                        <div class="row">
                            <?php foreach($galeri_limit as $row){?>
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <div class="btn-space">
                                        <a href="<?php echo base_url().$row["gambar"]; ?>" data-imagelightbox="h" data-ilb2-caption="<?php echo $row['deskripsi_gambar']; ?>"><img class="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>"></a>
                                        </br>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <?php 
                    } else{
                        echo "<p class='lead'><em>Tidak ada Gambar</em></p>";
                    }?>
            </div>
        </div>
    </div>
    
    <ul class="pagination justify-content-center theme-pagination container">
        <!-- LINK FIRST AND PREV -->
        <?php
            if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
        ?>
                <li class="page-item disabled theme-page-disable">
                    <a class="page-link" href="#">
                        <i class="fas fa-angle-double-left"></i>
                    </a>
                </li>
                    <li class="page-item disabled theme-page-disable">
                        <a class="page-link" href="#">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
        <?php
            }else{ // Jika page bukan page ke 1
                $link_prev = ($page > 1)? $page - 1 : 1;
        ?>
                <li class="page-item theme-page">
                    <a class="page-link" href="<?php echo base_url()."page/galeri.php" ?>?page=1&album=<?php echo ($album_page == 0) ? "all" : $album_page; ?>">
                        <i class="fas fa-angle-double-left"></i>
                    </a>
                </li>
                <li class="page-item theme-page">
                    <a class="page-link" href="<?php echo base_url()."page/galeri.php" ?>?page=<?php echo $link_prev; ?>&album=<?php echo ($album_page == 0) ? "all" : $album_page; ?>">
                        <i class="fas fa-angle-left"></i>
                    </a>
                </li>
        <?php
            }
        ?>
            <!-- LINK NUMBER -->
        <?php
                    
        $jumlah_page = ceil($galeri_count / $limit); // Hitung jumlah halamannya
        $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
        $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
        $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
                    
        for($i = $start_number; $i <= $end_number; $i++){
            $link_active = ($page == $i)? ' class="page-item theme-page-active"' : 'class="theme-page"';
        ?>
            <li <?php echo $link_active; ?>>
                <a class="page-link" href="<?php echo base_url()."page/galeri.php" ?>?page=<?php echo $i; ?>&album=<?php echo ($album_page == 0) ? "all" : $album_page;; ?>">
                    <?php echo $i; ?>
                </a>
            </li>
        <?php } ?>
                    
        <!-- LINK NEXT AND LAST -->
        <?php
            // Jika page sama dengan jumlah page, maka disable link NEXT nya
            // Artinya page tersebut adalah page terakhir 
            if($page == $jumlah_page || $page > $jumlah_page|| $jumlah_page == 0){ // Jika page terakhir ?>
                <li class="page-item disabled theme-page-disable">
                    <a class="page-link" href="#">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
                <li class="page-item disabled theme-page-disable">
                    <a class="page-link" href="#">
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </li>
            <?php
            }else{ // Jika Bukan page terakhir
                $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
            ?>
                <li class="page-item theme-page">
                    <a class="page-link" href="<?php echo base_url()."page/galeri.php" ?>?page=<?php echo $link_next; ?>&album=<?php echo ($album_page == 0) ? "all" : $album_page; ?>">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
                <li class="page-item theme-page">
                    <a class="page-link" href="<?php echo base_url()."page/galeri.php" ?>?page=<?php echo $jumlah_page; ?>&album=<?php echo ($album_page == 0) ? "all" : $album_page; ?>">
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </li>
            <?php
            }
            ?>
    </ul>
      <!-- Modal Image -->
    <div class="modal fade" id="dataModal">
        <div class="modal-dialog modal-dialog-centered">
            <div id="image_detail" class="modal-content">
            </div>
        </div>
    </div>
