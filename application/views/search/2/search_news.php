
    <?php
        if($id != 0){
    ?>

    <div class="container">
        <div class="border-secondary mb-3 card-view">
            <div class="card-header theme-header">
                <div class="float-center">
                    <h4 id="heading-h">Berita</h4>
                </div>
            </div>
            <div class="card-body theme-body">
                <div class="row">
                    <div class="col-md-3">    
                        <div class="theme-search">
                            <h2 class="card-header theme-header">Pencarian</h2>
                                <h4>Tag :</h4>
                                <h4><?php echo $tag_detail['nama_tag']; ?></h4>
                        </div>
                    </div>
                    <div class="col-md-9">
                    <?php
                    if($news_search_count > 0){
                        foreach($news_search_limit as $row){?>
                            <!-- Tampilkan Data -->
                            <div class="card border-dark btn-space">
                                <div class="border-dark theme-header">
                                    <h5><p class="text-center"><?php echo $row["judul"]; ?></p></h5>
                                </div>
                                
                                <div class="theme-header-detail">
                                    <h6>
                                        <small>
                                            <?php echo $row["waktu_pembuatan"]; ?>
                                        </small> 
                                        <div class="float-right"> 
                                            Kategori : <?php echo $row["nama_kategori"]; ?> 
                                        </div>
                                    </h6>
                                </div>

                                <div class="card-body theme-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img class="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>" alt="">
                                            </div>
                                            <div class="col-sm-8">
                                                <p><?php echo cutText(strip_tags(html_entity_decode($row["isi"])),300); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <a class="btn btn-primary btn-block theme-btn-primary" href="<?php echo base_url()."view/view_news.php"; ?>?id=<?php echo $row["id_berita"]; ?>">Baca Selengkapnya</a>
                                </div>
                            <?php } ?>
                        <?php 
                        } else{
                            echo "<p class='lead'><em>Berita Tidak Ditemukan</em></p>";
                        }
                    ?>
                    </div>
                </div>
            </div>

            <ul class="pagination justify-content-center theme-pagination">
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
                        <a class="page-link" href="<?php echo base_url()."index.php/search/news" ?>?id_tag=<?php echo $id_tag; ?>&page=1">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
					<li class="page-item theme-page">
                        <a class="page-link" href="<?php echo base_url()."index.php/search/news" ?>?id_tag=<?php echo $id_tag; ?>&page=<?php echo $link_prev; ?>">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
				<?php
				}
				?>
				
				<!-- LINK NUMBER -->
				<?php
				
				$jumlah_page = ceil($news_search_count / $limit); // Hitung jumlah halamannya
				$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
				$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
				$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
				
				for($i = $start_number; $i <= $end_number; $i++){
					$link_active = ($page == $i)? ' class="page-item theme-page-active"' : 'class="theme-page"';
				?>
					<li <?php echo $link_active; ?>>
                        <a class="page-link" href="<?php echo base_url()."index.php/search/news" ?>?id_tag=<?php echo $id_tag; ?>&page=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    </li>
				<?php
				}
				?>
				
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
                        <a class="page-link" href="<?php echo base_url()."index.php/search/news" ?>?id_tag=<?php echo $id_tag; ?>&page=<?php echo $link_next; ?>">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="page-item theme-page">
                        <a class="page-link" href="<?php echo base_url()."index.php/search/news" ?>?id_tag=<?php echo $id_tag; ?>&page=<?php echo $jumlah_page; ?>">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>
				<?php
				}
				?>
			</ul>
        </div>
    </div>
            <?php } ?>