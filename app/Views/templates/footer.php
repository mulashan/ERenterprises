<!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="index.html" class="p-0">
                                <h4 class="text-white"><i class="fas fa-search-dollar me-3"></i>E&R Enterprise</h4>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>
                            <p class="mb-4">Connect you to global style</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Furniture</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Electronics</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Other products</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Testimonies</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Developed by</h4>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">Dar - Es - Salaam</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">eandrenterprise@gmail.com</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">(+255) 000 000 000</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fab fa-firefox-browser text-primary me-3"></i>
                                <p class="text-white mb-0">eandrenterprise.com</p>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>E&R Enterprises</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        Designed By <a class="border-bottom text-white" href="https://rwazi.com">SyliverStarCompany</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
            
        
          <!-- Login modal -->
        <div id="myModal" class="modal fade"  role="dialog" >
    <div class="modal-dialog modal-lg" style="width:375px;">
    
      <!-- Modal content-->
      <div class="modal-content wrapper" style="">
        <div class="modal-body">
        <div class="wrapper">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            E&R Enterprises
        </div>
        <form class="p-3 mt-3" id="login_form">
            <div id="fdbk"></div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="username" placeholder="Username" required="required">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" required="required">
            </div>
            <button class="btn mt-3" onClick="checkLogin()" type="submit">Login</button>
            <button type="button" class="btn2 mt-1" data-bs-dismiss="modal" aria-label="Close">close</button>
        </form>
    </div>
        </div>
      </div>
      
    </div>
</div>
        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="public/web/lib/wow/wow.min.js"></script>
        <script src="public/web/lib/easing/easing.min.js"></script>
        <script src="public/web/lib/waypoints/waypoints.min.js"></script>
        <script src="public/web/lib/counterup/counterup.min.js"></script>
        <script src="public/web/lib/lightbox/js/lightbox.min.js"></script>
        <script src="public/web/lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="<?php echo base_url('public/web/js/main.js')?>"></script>
    </body>

</html>

<script type="text/javascript">
    function login(){
        $('#myModal').modal('show');
    }

    $('#login_form').submit(function (e) {
        e.preventDefault();
        $('#fdbk').html('<span class="fa fa-spinner fa-spin"></span> ...');
    var dta = $('#login_form').serialize(); 
                
        $.ajax({
            type: "POST",
            url: "<?php echo base_url() . 'login_details'; ?>",
            data: dta,
            success: function (res) {
                if(res==200){
                    $('#fdbk').html("<div class='alert alert-success'><span class='fa fa-tick'></span> LoggedIn Successfuly</div>");
                    window.location.replace('<?php echo base_url('dashboard'); ?>');
                }else{
          $('#fdbk').html(res);
                }
              
            },
            error: function () {
                $('#fdbk').html('<div class="alert alert-warning">Failed to login.!!</div>');
            }
        });
    });

    $('#send_message').submit(function(e){
    var form_data = $('#send_message').serialize();
     $('#fdbk').html('<center><b><span class="fa fa-spin fa-spinner"></span> Sending Message...</b></center>');
       
        $.ajax({
          url: "<?= base_url('send_message'); ?>",
            type: 'POST',
            data: form_data,
            success:function(data){
              $("#send_message")[0].reset();
                    
                    setTimeout(function(){
                        $('#fdbk').html(data);
                    },1500)
                
            },
            error:function(){
                setTimeout(function(){
                $('#fdbk').html('<div class="alert alert-danger alert-dismissible" role="alert"><strong>Sorry! Something went wrong!</strong> Couldnt Sennd Message.<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>');
                 },1500)
            }
        });
        
        e.preventDefault();
    }); 
</script>