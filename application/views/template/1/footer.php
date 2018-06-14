<nav class="navbar navbar-expand-sm theme-navbar">
        <!-- Navbar text-->
        <span class="theme-navbar-text">
            Navbar text
        </span>
    </nav> 

    
    <!-- Modal Image -->
    <div class="modal fade " id="dataModal">
        <div class="modal-dialog modal-dialog-centered">
        <div id="image_detail" class="modal-content">
        
        </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/javascript.js"></script>
    <script src="<?php echo base_url();?>vendor/components/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>vendor/ivaynberg/select2/dist/js/select2.js"></script>

	<!-- Image Modal -->
    <script>
        $(document).ready(function(){  
            $('.view_data').click(function(){  
                var id_galeri = $(this).attr("id");  
                $.ajax({  
                        url:"index.php/modal/image_modal",  
                        method:"post",  
                        data:{id_galeri:id_galeri},  
                        success:function(data){  
                            $('#image_detail').html(data);  
                            $('#dataModal').modal("show");  
                        }  
                });  
            });  
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