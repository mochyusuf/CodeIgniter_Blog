
    <div class="theme-body">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="card-header theme-header ">Produk</h5>
                <div class="row">
                <?php
                    if($produk_count > 0){
                        foreach($produk_limit as $row){?>   
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <div class="btn-space">
                                    <h2 class="text-center theme-title">
                                        <?php echo $row['nama_produk']; ?>
                                    </h2>
                                    <img style="width : 100%;" class="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>" width="460" height="345"> 
                                    <a class="btn btn-primary btn-block theme-btn-primary" href="<?php echo base_url(); ?>view/view_produk.php?id=<?php echo $row["id_produk"]; ?>">Deskripsi</a>
                                </div>
                            </div>
                        <?php }
                    }else{
                        echo "<p class='lead'><em>Tidak ada Produk</em></p>";
                    }
                ?>
                </div>
                </div>
            </div>
            </div>
        </div>
    
        <div class="theme-pagination">
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
                        <a class="page-link" href="<?php echo base_url()."page/produk.php" ?>?page=1">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li class="page-item theme-page">
                        <a class="page-link" href="<?php echo base_url()."page/produk.php" ?>?page=<?php echo $link_prev; ?>">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                <?php } ?>
                    
                <!-- LINK NUMBER -->
                <?php
                    
                $jumlah_page = ceil($produk_count / $limit); // Hitung jumlah halamannya
                $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
                $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
                $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
                    
                for($i = $start_number; $i <= $end_number; $i++){
                    $link_active = ($page == $i)? ' class="page-item theme-page-active"' : ' class="theme-page"';
                ?>
                    <li <?php echo $link_active; ?>>
                        <a class="page-link" href="<?php echo base_url()."page/produk.php" ?>?page=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
                <?php } ?>
                    
                <!-- LINK NEXT AND LAST -->
                <?php
                // Jika page sama dengan jumlah page, maka disable link NEXT nya
                // Artinya page tersebut adalah page terakhir 
                if($page == $jumlah_page || $page > $jumlah_page || $jumlah_page == 0){ // Jika page terakhir
                ?>
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
                        <a class="page-link" href="<?php echo base_url()."page/produk.php" ?>?page=<?php echo $link_next; ?>">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="page-item theme-page">
                        <a class="page-link" href="<?php echo base_url()."page/produk.php" ?>?page=<?php echo $jumlah_page; ?>">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>
                    <?php
                }?>
            </ul>
        </div>
    </div>
