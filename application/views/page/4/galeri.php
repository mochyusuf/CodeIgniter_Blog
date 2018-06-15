
    <div class="row">
        <div class="col-sm-12 col-md-4 theme-space">
            <div class="theme-card">
                <h5 class="card-header theme-header ">Album</h5>
                <ul class="list-group theme-list-group">    
                    <?php 
                    if($album_count > 0){?>
                        <a href="<?php echo base_url()."index.php/galeri?page=1&album=all"; ?>" class="list-group-item <?php echo ($album_page == "all") ? "theme-list-active" : "theme-list" ;?>">-- Semua Album --</a>
                        <?php 
                        foreach($album as $row){?>
                            <a href="<?php echo base_url()."index.php/galeri?page=1&album=".$row['id_album']; ?>"  class="list-group-item <?php echo ($album_page == $row['id_album']) ? "theme-list-active" : "theme-list" ;?>"><?php echo $row['judul_album']; ?></a>
                            <?php } ?>
                            <?php 
                    } else{
                        ?>
                        <h6>Tidak Ada Album</h6>
                        <?php
                    } ?>
                </ul>  
            </div>      
        </div>
        <div class="col-sm-12 col-md-8 theme-space">
        <div class="theme-card">
            <h5 class="card-header theme-header ">SlideShow Galeri</h5>
            <div class="card-body theme-body theme-galeri-index">
                    <div class="galeri-class">
                    <?php if($galeri_count > 0){
                        $i = 0;
                        foreach($galeri_limit as $row){?>
                            <div>
                                <a href="<?php echo base_url().$row["gambar"]; ?>" data-imagelightbox="g" data-ilb2-caption="<?php echo $row['deskripsi_gambar']; ?>"><img class="img-fluid center-cropped" src="<?php echo base_url().$row["gambar"]; ?>"></a>
                            </div>
                            <?php 
                            $i++;
                            if ($i >= 6) {
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
    </div>

    <div class="row theme-space">
        <div class="col-sm-12">
        <div class="theme-card">
    <h5 class="card-header theme-header ">Galeri</h5>
            <div class="theme-galeri container">
            <?php
                if($galeri_count > 0){?>
                    <div class="row">
                        <?php foreach($galeri_limit as $row){?>
                            <div class="col-sm-12 col-md-6 col-lg-3 no-margin">
                                <div class="theme-space">
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
    </div>

    <div class="row theme-space">
        <div class="col-sm-12">
    <div class="theme-pagination">
        <ul class="pagination justify-content-end">
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
                        <a class="page-link" href="<?php echo base_url()."index.php/galeri" ?>?page=1&album=<?php echo ($album_page == 0) ? "all" : $album_page; ?>">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li class="page-item theme-page">
                        <a class="page-link" href="<?php echo base_url()."index.php/galeri" ?>?page=<?php echo $link_prev; ?>&album=<?php echo ($album_page == 0) ? "all" : $album_page; ?>">
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
                    <a class="page-link" href="<?php echo base_url()."index.php/galeri" ?>?page=<?php echo $i; ?>&album=<?php echo ($album_page == 0) ? "all" : $album_page;; ?>">
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
                        <a class="page-link" href="<?php echo base_url()."index.php/galeri" ?>?page=<?php echo $link_next; ?>&album=<?php echo ($album_page == 0) ? "all" : $album_page; ?>">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="page-item theme-page">
                        <a class="page-link" href="<?php echo base_url()."index.php/galeri" ?>?page=<?php echo $jumlah_page; ?>&album=<?php echo ($album_page == 0) ? "all" : $album_page; ?>">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>
                <?php
                }
                ?>
        </ul>
    </div>
    </div>
    </div>
