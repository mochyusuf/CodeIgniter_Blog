
        <footer class="theme-footer">
            <div class="container">
                <div class="row">
					<!-- Footer Info -->
                    <div class="col-sm-12 col-md-6 col-lg-3 theme-background-1">
                        <h4>XXXXXXXXXXX</h4>
                        <span>Telepon : </span><br>
                        <span>1234567890</span><br>
                        <span>0987654321</span>
                    </div>
					<!-- Footer Secondary -->
                    <div id="footersecondary" class="col-md-6 col-lg-9 theme-background-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et consectetur voluptatem reiciendis, asperiores voluptatibus architecto in at illum nemo quas accusamus exercitationem dignissimos inventore culpa, iure ad minus deleniti quaerat!</p>
                    </div>
                </div>
            </div>
        </footer>
	
	<!-- End Div Container -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/javascript.js"></script>
    <script src="<?php echo base_url();?>vendor/components/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/popper.js/dist/popper.js"></script>
    <script src="<?php echo base_url(); ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>vendor/ivaynberg/select2/dist/js/select2.js"></script>
	
	<!-- Lightbox -->
    <script src="<?php echo base_url();?>node_modules/imagelightbox/dist/imagelightbox.min.js"></script>
    <script src="<?php echo base_url();?>node_modules/slick-carousel/slick/slick.min.js"></script>
    
    <!-- Slick SlideShow -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.your-class').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: false,
                variableWidth: false,
                adaptiveHeight: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            }); 
        });
    </script>

    <!-- LightBox -->
    <script>
    $('a[data-imagelightbox="h"]').imageLightbox({
        activity: true,
        arrows: true,
        button: true,
        caption: true,
        // navigation: true,
        overlay: true,
        quitOnDocClick: false,
        selector: 'a[data-imagelightbox="h"]'
    });
    </script>

    
    <!-- Tag Search -->
    <script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>

    <script>
    $(document).ready(function(){
        $('#tag_search').submit(function() {
            var error = 0;
            var tag = $('#tag_select').val();
            if (tag == '0') {
                error = 1;
                alert('Pilih Tag');
            }

            if (error) {
                return false;
            } else {
                return true;
            }

        });
    });
    </script>

    </body>
</html>