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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>library/select2-develop/dist/js/select2.js"></script>

	<!-- Image Modal -->
    <script>
        $(document).ready(function(){  
            $('.view_data').click(function(){  
                var id_galeri = $(this).attr("id");  
                $.ajax({  
                        url:"modal/image_modal.php",  
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