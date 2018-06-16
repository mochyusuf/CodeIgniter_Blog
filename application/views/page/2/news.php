
    <div class="theme-header container theme-container">
        <div class="float-center">
            <h4 id="heading-h">Berita</h4>
        </div>
    </div>
    <div class="container theme-container" style="margin-top:0px;">
        <div class="border-secondary mb-3 card-view">
            <div class="card-body theme-body"> 
                    <h2 class="text-center">Kategori
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle theme-button-default" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php 
                                if($kategori_count > 0){
                                    if ($kategori_page == 0) {
                                        echo "-- Semua Kategori --";
                                    }
                                    else{
                                        foreach($kategori as $row){
                                            if ($kategori_page == $row['id_kategori']) { 
                                                echo $row['nama_kategori'];
                                                break;
                                            }
                                        }
                                    }
                                } else{
                                    echo "Tidak Ada Kategori";
                                }
                                ?>
                            </button>
                            <div class="dropdown-menu theme-dropdown">
                                <?php 
                                    if($kategori_count > 0){?>
                                        <li><a class="dropdown-item <?php echo ($kategori_page == "all") ? "theme-dropdown-active" : "" ;?>" href="<?php echo base_url()."index.php/news?page=1&kategori=all"; ?>">-- Semua Kategori --</a></li>
                                        <div class="dropdown-divider"></div>
                                        <?php 
                                        foreach($kategori as $row){?>
                                            <li><a class="dropdown-item <?php echo ($kategori_page == $row['id_kategori']) ? "theme-dropdown-active" : "" ;?>" href="<?php echo base_url()."index.php/news?page=1&kategori=".$row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></a></li>
                                        <?php } ?>
                                        <?php 
                                        
                                    } else{
                                        ?>
                                        <h6>Tidak Ada Kategori</h6>
                                    <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </h2>
                        <br>
                    <div class="row">
                    <div class="col-md-12 col-lg-6 offset-lg-6">  
                        <div class="row">
                            <div class="input-group col-sm-12 col-lg-12 theme-search theme-space">
                                <form id="tag_search" class="form-inline width-100" action="../index.php/search/news" method="GET">
                                    <div class="row width-100">
                                        <div class="col-md-10 col-lg-10">
                                            <select id="tag_select" class="js-example-basic-single width-100" name="id_tag">
                                                <option value="0">Pilih Tag</option>
                                                <?php 
                                                    foreach($tag as $row_select_tag){?>
                                                        <option value="<?php echo $row_select_tag['id_tag']; ?>"><?php echo $row_select_tag['nama_tag']; ?></option>
                                                    <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-lg-2 justify-content-center">
                                            <button type="submit" class="btn btn-primary theme-btn-search"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>  
                        </div>
                        </div>
                    </div>
                    <?php
                    if($news_count > 0){ ?>
                        <div class="row">
                        <?php 
                        foreach($news_limit as $row){
                        ?>
                            <!-- Tampilkan Data -->
                            <div class="col-md-12 col-lg-6">
                                <div class="card border-dark btn-space">
                                    <div class="border-dark theme-header">
                                        <h5>
                                            <p class="text-center">
                                                <?php echo $row["judul"]; ?>
                                            </p>
                                        </h5>
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
                                        <img class="img-fluid" src="<?php echo base_url().$row["gambar"]; ?>" alt="">
                                        <p><?php echo cutText(strip_tags(html_entity_decode($row["isi"])),300); ?></p>
                                    </div>
                                </div>
                                    <a class="btn btn-primary btn-block theme-btn-primary" href="<?php echo base_url(); ?>index.php/news/detail?id=<?php echo $row["id_berita"]; ?>">Baca Selengkapnya</a>
                            </div>
                                </div>
                            
                            <?php } ?>
                            </div>
                        <?php 
                        } else{
                            echo "<p class='lead'><em>Tidak ada berita</em></p>";
                        }
                    ?>
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
                <a class="page-link" href="<?php echo base_url()."index.php/news" ?>?page=1&kategori=<?php echo ($kategori_page == 0) ? "all" : $kategori_page; ?>">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </li>
			<li class="page-item theme-page">
                <a class="page-link" href="<?php echo base_url()."index.php/news" ?>?page=<?php echo $link_prev; ?>&kategori=<?php echo ($kategori_page == 0) ? "all" : $kategori_page; ?>">
                    <i class="fas fa-angle-left"></i>
                </a>
            </li>
		<?php
		    }
			?>
			
		<!-- LINK NUMBER -->
		<?php
				
		$jumlah_page = ceil($news_count / $limit); // Hitung jumlah halamannya
		$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
		$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
		$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
				
		for($i = $start_number; $i <= $end_number; $i++){
			$link_active = ($page == $i)? ' class="page-item theme-page-active"' : 'class="theme-page"';
		?>
		<li <?php echo $link_active; ?>>
            <a class="page-link" href="<?php echo base_url()."index.php/news" ?>?page=<?php echo $i; ?>&kategori=<?php echo ($kategori_page == 0) ? "all" : $kategori_page; ?>">
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
                <a class="page-link" href="<?php echo base_url()."index.php/news" ?>?page=<?php echo $link_next; ?>&kategori=<?php echo ($kategori_page == 0) ? "all" : $kategori_page; ?>">
                    <i class="fas fa-angle-right"></i>
                </a>
            </li>
            <li class="page-item theme-page">
                <a class="page-link" href="<?php echo base_url()."index.php/news" ?>?page=<?php echo $jumlah_page; ?>&kategori=<?php echo ($kategori_page == 0) ? "all" : $kategori_page; ?>">
                    <i class="fas fa-angle-double-right"></i>
                </a>
            </li>
			<?php
		}
		?>
	</ul>