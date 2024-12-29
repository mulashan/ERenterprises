<!-- Carousel Start -->
<?php 
    $model = new App\Models\WebModel();
?>
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <img src="public/web/img/home_picture3.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-0 gx-5">
                    <div class="col-lg-0 col-xl-5"></div>
                    <div class="col-xl-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-end">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome <?= $company_details->name; ?></h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">Connecting you to global style</h1>
                            <p class="mb-5 fs-5">Based in Dar es Salaam, Tanzania, <?= $company_details->name; ?> we are a trusted business with over four years of experience in sourcing furniture and electronics from China. We specialize in managing the entire process—receiving customer orders, purchasing, transporting, and distributing high-quality products across East Africa....
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="public/web/img/home_picture2.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 animated fadeInUp">
                        <div class="text-center">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To <?= $company_details->name; ?></h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">connecting you to global style</h1>
                            <p class="mb-5 fs-5">Based in Dar es Salaam, Tanzania, E&R Enterprise we are a trusted business with over six years of experience in sourcing furniture and electronics from China. We specialize in managing the entire process—receiving customer orders, purchasing, transporting, and distributing high-quality products across East Africa....
                            </p>
                            <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
</div>
<!-- Navbar & Hero End -->


<!-- Abvout Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About Us</h4>
                    <h1 class="display-5 mb-4">History and expertise of <?= $company_details->name; ?> </h1>
                    <?= $company_details->about_us_sms; ?>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Business Consuluting</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Year Of Expertise</h4>
                                    <p>We have more than <?= (date('Y')-($company_details->company_start_year)); ?> years of experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Call Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;"><?= $company_details->phone1; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="public/web/img/office-2.png" class="img-fluid rounded w-100" alt="">
                    
                    <!-- <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="public/web/img/home_min-3.jpg" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="public/web/img/home_min-3.jpg" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                    </div> -->
                    <div class="rounded-bottom">
                        <img src="public/web/img/living-room-2.png" class="img-fluid rounded-bottom w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid service pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-5 mb-4">Products Categories</h1>
        </div>
        <div class="row g-4">
            <?php 
                $categories = $model->getCategories();
                if(!empty($categories)){
                foreach ($categories as $category) {
            ?>

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="public/web/img/service-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4"><?= $category->category_name; ?></a>
                        <p class="mb-4"><?= $category->description; ?></p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</div>
<!-- Services End -->


    <!-- FAQs Start -->
<div class="container-fluid faq-section pb-5" id="faqs">
    <div class="container pb-5 overflow-hidden">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">FAQs</h4>
            <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">

                    <?php 
                    $faqs = $model->getAllFaqs(); 
                    if(!empty($faqs)){
                        foreach($faqs as $faq){
                    ?>
                    <div class="accordion-item rounded-top">
                        <h2 class="accordion-header" id="flush-heading<?= $faq->id; ?>">
                            <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $faq->id; ?>" aria-expanded="false" aria-controls="flush-collapse<?= $faq->id; ?>">
                            <?= $faq->question; ?>
                            </button>
                        </h2>
                        <div id="flush-collapse<?= $faq->id; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $faq->id; ?>" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body"><?= $faq->answer; ?></div>
                        </div>
                    </div>
                     <?php } } ?>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded">
                    <img src="public/web/img/faq-image-2.jpg" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial pb-5" id="testimonies">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Testimonial</h4>
            <h1 class="display-5 mb-4">Our Clients Reviews</h1>
            <p class="mb-0">With a proven track record, a tradition for excellence and always going the extra mile for out customers, we aim to meet and exceed our customers expectations every time.
            </p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <?php 
                $testimonies = $model->getAllTestimonies();
                if(!empty($testimonies)){
                    foreach ($testimonies   as $testimony){
            ?>
                <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="public/web/img/user.jpg" class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0"><?= $testimony->message; ?>
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0"><?= $testimony->person_name; ?></h4>
                        <p class="mb-0"><?= $testimony->company_name; ?></p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->


