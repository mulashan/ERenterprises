
          <?php
          helper('Query');
          ?>
          <style type="text/css">
              
          </style>
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                   <!--  <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Contact</li>
                    </ol>  deric lyatuu   -->
                </div>
            </div>
            <h4 class="text-white display-4 mb-3 wow fadeInDown" data-wow-delay="0.1s"></h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                       
                        <li class="breadcrumb-item active text-primary">Contact Us</li>
                    </ol>    
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5">
                     <div class="col-xl-2">
                     </div>
                    <div class="col-xl-8">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="bg-light rounded p-5 mb-5">
                                <h4 class="text-primary mb-4">Get in Touch</h4>
                                <div class="row g-4">
                                    <!-- <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Address</h4>
                                                <p class="mb-0">123 Street New York.USA</p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <?php 
                                        $detail =get_data('company_tbl',$where=array('id >'=>0));
                                         ?>
                                     <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fas fa-envelope fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Mail Us</h4>
                                                <p class="mb-0">
                                            <?php 
                                            if(count($detail)>0){
                                                echo $detail[0]->email;
                                               }else{
                                               echo "----";
                                               }

                                            ?></p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Telephone</h4>
                                                <p class="mb-0">
                                             <?php 
                                            if(count($detail)>0){
                                                echo "+".$detail[0]->phone1;
                                                echo "</br>";
                                                echo "+".$detail[0]->phone2;
                                               }else{
                                               echo "----";
                                               }
                                            ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-add-item">
                                            <div class="contact-icon text-primary mb-4">
                                                <i class="fab fa-firefox-browser fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4>Official Website</h4>
                                                <p class="mb-0">erenterprise.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
                                <h4 class="text-primary">Send us an message </h4>
                                
                                <form id="send_message">
                                    <div class="row g-4">
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="fname" name="fname" placeholder="Your Fuul Name" required>
                                                <label for="name">Your Full Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email" required>
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="phone" class="form-control border-0" id="phone" placeholder="Phone" name="phone" required>
                                                <label for="phone">Your Phone</label>
                                            </div>
                                        </div>
                                        <?php 
                                        $countries =get_data('country',$where=array('id >'=>0));
                                         ?>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                               <select class="form-control border-0" name="country" required>
                                                    <?php
                                                        foreach($countries as $country){ 
                                                            if($country->nicename == "Tanzania, United Republic of"){ ?>
                                                            <option value="<?= $country->id; ?>" selected> <?= $country->nicename; ?></option>
                                                            <?php }else{ ?>
                                                                <option value="<?= $country->id; ?>"> <?= $country->nicename; ?></option>   
                                                    <?php   } }  ?>
                                                </select>
                                                <label for="project">Your Country</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="subject" name="subject" placeholder="Subject" required>
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px" name="message" required></textarea>
                                                <label for="message">Message</label>
                                            </div>

                                        </div>
                                        <div class="col-12" id="fdbk"></div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                     </div>
                    <!-- <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="rounded h-100">
                            <iframe class="rounded h-100 w-100" 
                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> 
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <script type="text/javascript">

        </script>