<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>E&R Enterprises</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="public/web/lib/animate/animate.min.css"/>
        <link href="public/web/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="public/web/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="public/web/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="public/web/css/style.css" rel="stylesheet">
        <link href="public/web/css/login.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>(+255)000 000 000</a>
                        <a href="mailto:eandrenterprise@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>eandrenterprise@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#" onclick="login()"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                    </div>
                </div>
                
            </div>
            
        </div>
        <!-- Topbar End -->
       
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"><img src="public/web/img/newlogo.png" alt="Logo" style="width:150px;"></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        
                        <a href="<?php echo base_url();?>" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Furnitures</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Outdoor furniture</a>
                                <a href="feature.html" class="dropdown-item">Home furniture</a>
                                <a href="team.html" class="dropdown-item">School furniture</a>
                                <a href="testimonial.html" class="dropdown-item">Recreation furniture</a>
                                <a href="offer.html" class="dropdown-item">Office furniture</a>
                                <a href="FAQ.html" class="dropdown-item">Play equipment (children)/Recreation centers</a>
                                <a href="404.html" class="dropdown-item">Hall furniture</a>
                                <a href="404.html" class="dropdown-item">Meeting room furniture</a>
                            </div>
                        </div>
                        <a href="about.html" class="nav-item nav-link">Electronics</a>
                        <a href="service.html" class="nav-item nav-link">Other Products</a>
                        <a href="#testimon" class="nav-item nav-link">Testimonies</a>
                        <a href="#faqs" class="nav-item nav-link">FAQS</a>
                        <a href="contact" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a>
                </div>
            </nav>