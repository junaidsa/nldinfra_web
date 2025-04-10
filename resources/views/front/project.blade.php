@extends('layouts.web-app')
@section('web-main')
    <!--===== ABOUT AREA STARTS =======-->
    <div class="about4-section-area sp6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <div class="about4-header heading4">
                        <div class="space20"></div>
                        <h1 class="main-text">Experience the urban living <br> in <span style="color:#FFA513;">Premium
                                Floors</span> </h1>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900" style="text-align:justify;">Discover the perfect
                            blend of modern designand <br> luxury with our premium floors</p>
                        <div class="space20"></div>
                        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                            <a href="" class="btn me-3" style="background: #FFEDBD;color:black;">Learn More</a>
                            <a href="https://www.youtube.com/watch?v=Y8XpQpW5OVY" class="btn"
                                style="background: #f2f2f2;color:black;"><i
                                    class="fa-solid fa-play-circle"></i>&nbsp;&nbsp;Watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-images4">
                        <div class="img1 reveal image-anime">
                            <img src="{{ asset('public') }}/front-assets/img/floors-images/Rectangle 57.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT AREA ENDS =======-->





    <div class="about4-section-area sp6">
        <div class="container">
            <div class="section-heading text-center mb-10">
                <h1 data-aos="fade-left" data-aos-duration="800" class="wf-36">FEATURED FLOORS</h1>
                <div class="underline"></div>
            </div>
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-lg-6">
                    <img src="{{ asset('public') }}/front-assets/img/floors-images/Rectangle-61.png"
                        alt="3 BHK Luxury Floor" class="img-fluid rounded">
                </div>

                <!-- Text Column -->
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h3 class="mb-2 wf-36">3 BHK Luxury Floor</h3>
                    <div class="space20"></div>
                    <p class="wf-24">
                        Are you looking for premium 3 BHK luxury floors in a prime location? Whether you're a growing
                        family,
                        a professional couple, or someone looking to invest in high-end real estate, these stunning
                        apartments
                        offer everything you need for a luxurious lifestyle.
                    </p>
                    <div class="space20"></div>
                    <p class="wf-24">

                        A premium 3 BHK luxury floor is perfect for those seeking more space, comfort, and a lifestyle
                        upgrade.
                        Make a choice that combines luxury and functionality, and experience the best in modern living.
                    </p>
                    <div class="btn-area1 mt-3" data-aos="fade-left" data-aos-duration="1200">
                        <a href="" class="btn me-3">View our Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA STARTS =======-->
    <div class="service4-section-area sp7">
        <div class="container">
            <div class="section-heading text-center mb-10">
                <h1 class="wf-36" data-aos="fade-left" data-aos-duration="800">AMENITIES</h1>
                <div class="underline mb-3"></div>
                <p class="wf-24">Sophisticated Amenities for a Luxurious Living Experience</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="service-amenities-boxarea">
                        <div class="img1">


                            <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/badminton court.png"
                                alt="">
                        </div>
                        <div class="content-area">
                            <a href="">Badminton Court</a>
                        </div>
                        <div class="view-btn">
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="service-amenities-boxarea">
                        <div class="img1">
                            <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/cabana.png"
                                alt="">
                        </div>
                        <div class="content-area">
                            <a href="">Cabana</a>
                        </div>
                        <div class="view-btn">
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                    <div class="service-amenities-boxarea">
                        <div class="img1">
                            <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/kids play area.png"
                                alt="">
                        </div>
                        <div class="content-area">
                            <a href="">Kids Play Zone</a>
                        </div>
                        <div class="view-btn">
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="service-amenities-boxarea">
                        <div class="img1">
                            <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/amphiteathre.png"
                                alt="">
                        </div>
                        <div class="content-area">
                            <a href="">Amphitheatre</a>
                        </div>
                        <div class="view-btn">
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="service-amenities-boxarea">
                        <div class="img1">
                            <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/gym.png" alt="">
                        </div>
                        <div class="content-area">
                            <a href="">Fitness Facilities</a>
                        </div>
                        <div class="view-btn">
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                    <div class="service-amenities-boxarea">
                        <div class="img1">
                            <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/playing ground.png"
                                alt="">
                        </div>
                        <div class="content-area">
                            <a href="">Playing Ground</a>
                        </div>
                        <div class="view-btn">
                            <a href="">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== GALLERY AREA STARTS =======-->
    <div class="gallery4-section-area sp6">
        <div class="container">
            <div class="section-heading text-center mb-10">
                <h1 class="wf-36" data-aos="fade-left" data-aos-duration="800">Our gallery</h1>
                <div class="underline mb-3"></div>
                <p class="wf-24">Explore Our Gallery of Exquisite Floors</p>
            </div>
            <div class="col-lg-11 m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="gallery-images-slider owl-carousel">
                    <div class="img1 image-anime">
                        <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/nld-luxuryfloor.jpeg"
                            alt="">
                    </div>
                    <div class="img1 image-anime">
                        <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/nld-independent-builder-floor.jpg"
                            alt="">
                    </div>
                    <div class="img1 image-anime">
                        <img src="{{ asset('public') }}/front-assets/img/all-images/gallery/gallery-img1.png"
                            alt="">
                    </div>
                    <div class="img1 image-anime">
                        <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/nld-bathroom.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== GALLERY AREA ENDS =======-->

    <!--===== APARTMENT AREA STARTS =======-->
    <div class="apartment4-section-area sp7">
        <div class="container">
            <div class="section-heading text-center mb-10">
                <h1 class="wf-36" data-aos="fade-left" data-aos-duration="800"> Our Project</h1>
                <div class="underline mb-3"></div>
                <p class="wf-24">Explore Our Gallery of Exquisite Floors</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="apartment-boxarea">
                        <div class="img1">
                            <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/nld-luxuryfloor.jpeg"
                                alt="">
                        </div>
                        <div class="content-area">
                            <a href="project.php">NLD Luxury Floor - Sector 35 South of Gurgaon at Bonheur Avenue</a>
                            <div class="space16"></div>
                            <ul>
                                <li><a href="#"><img
                                            src="{{ asset('public') }}/front-assets/img/icons/bed-icon1.svg"
                                            alt="">x3</a> <span> | </span></li>
                                <li><a href="#"><img
                                            src="{{ asset('public') }}/front-assets/img/icons/bat-icon1.svg"
                                            alt="">x3</a> <span> | </span></li>
                                <li><a href="#"><img
                                            src="{{ asset('public') }}/front-assets/img/icons/squre-icon1.svg"
                                            alt="">167/178 sqyd</a></li>
                            </ul>
                        </div>
                        <div class="arrow">
                            <a href="project.php">View</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                    <div class="apartment-boxarea">
                        <div class="img1">
                            <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/nld-independent-luxury-floor.jpg"
                                alt="">
                        </div>
                        <div class="content-area">
                            <a href="">NLD Luxury Floor - Sector 93 Gurgaon DLF Gardencity Enclave </a>
                            <div class="space16"></div>
                            <ul>
                                <li><a href="#"><img src="{{ asset('public') }}/front-assets/img/icons/bed-icon1.svg" alt="">x3</a> <span> | </span></li>
                                <li><a href="#"><img src="{{ asset('public') }}/front-assets/img/icons/bat-icon1.svg" alt="">x3</a> <span> | </span></li>
                                <li><a href="#"><img src="{{ asset('public') }}/front-assets/img/icons/squre-icon1.svg" alt="">179.4 sqyd</a></li>
                            </ul>
                        </div>
                        <div class="arrow">
                            <a href="independent_luxury_floor.php">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== APARTMENT AREA ENDS =======-->

    <!--===== PROPERTIES AREA STARTS =======-->



    <!--===== PROPERTIES AREA ENDS =======-->

    <!--===== TESTIMONIAL AREA STARTS =======-->
    <div class="testimonial4-section-area sp1">
        <div class="container">
            <div class="section-heading text-center mb-10">
                <h1 class="wf-36" data-aos="fade-left" data-aos-duration="800">Testimonials</h1>
                <div class="underline mb-3"></div>
                <p class="wf-24">What Client Says</p>
            </div>
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow text-center p-4">
                        <div class="mb-2"><i class="fas fa-quote-left text-warning fa-2x"></i></div>
                        <div class="text-warning mb-2">★★★★★</div>
                        <p class="mb-3">Outstanding experience with this propertydealer. He is very nice and punctual.
                            Highly recommended.</p>
                        <img src="{{ asset('public') }}/front-assets/img/all-images/testimonial/testimonial-img2.png"
                            alt="Kathryn" class="rounded-circle mb-2" width="60">
                        <h6 class="fw-bold mb-0">Kathryn Murphy</h6>
                        <small>Saudi Arabia</small>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow text-center p-4">
                        <div class="mb-2"><i class="fas fa-quote-left text-warning fa-2x"></i></div>
                        <div class="text-warning mb-2">★★★★★</div>
                        <p class="mb-3">Outstanding experience with this propertydealer. He is very nice and punctual.
                            Highly recommended.</p>
                        <img src="{{ asset('public') }}/front-assets/img/all-images/testimonial/testimonial-img4.png"
                            alt="Annette" class="rounded-circle mb-2" width="60">
                        <h6 class="fw-bold mb-0">Annette Black</h6>
                        <small>Palestine, State Of</small>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow text-center p-4">
                        <div class="mb-2"><i class="fas fa-quote-left text-warning fa-2x"></i></div>
                        <div class="text-warning mb-2">★★★★★</div>
                        <p class="mb-3">Outstanding experience with this propertydealer. He is very nice and punctual.
                            Highly recommended.</p>
                        <img src="{{ asset('public') }}/front-assets/img/all-images/testimonial/testimonial-img5.png"
                            alt="Darlene" class="rounded-circle mb-2" width="60">
                        <h6 class="fw-bold mb-0">Darlene Robertson</h6>
                        <small>Sao Tome And Principe</small>
                    </div>
                </div>
            </div>
            <!-- Dots for navigation (optional if using JS slider) -->
            <div class="text-center mt-4">
                <span class="dot bg-warning rounded-circle mx-1"
                    style="width: 10px; height: 10px; display: inline-block;"></span>
                <span class="dot bg-secondary rounded-circle mx-1"
                    style="width: 10px; height: 10px; display: inline-block;"></span>
                <span class="dot bg-secondary rounded-circle mx-1"
                    style="width: 10px; height: 10px; display: inline-block;"></span>
            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->


    <!--===== CTA AREA ENDS =======-->
    <div class="about4-section-area sp6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-images2">
                        <div class="img1 reveal image-anime">
                            <img src="{{ asset('public') }}/front-assets/img/floors-images/Rectangle-79.png"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5" style="margin-bottom: 120px;">
                    <div class="about4-header heading4">
                        <div class="container">
                            <form action="">
                                <div class="form-group mt-4">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="name"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="mobile"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="Message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                </div>
                                <div class="row mt-4">
                                    <input type="submit" value="Submit" class="btn me-3"
                                        style="background: #FFEDBD;color:black;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer4-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-menu-area">
                        <div class="footer-elements">
                            <div class="footer-logo">

                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="index4.html">Home</a></li>
                                    <li><a href="">Properties</a></li>
                                    <li><a href="">Gallery</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="">Contact</a></li>
                                </ul>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 m-auto">
                                <div class="footer-call-area text-center">
                                    <a href="tel:+91 7026600000" style="font-size:24px;">+91-7026600000</a>
                                    <div class="space36"></div>
                                    <ul>
                                        <li><a href="#"> <span><i
                                                        class="fa-solid fa-location-crosshairs"></i></span> <span>Unit No-
                                                    214 , 2nd Floor, Tower 2, DLF Corporate Greens<br
                                                        class="d-lg-block d-none"> Sector 74A-Gurgaon</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Section -->
    <div class="bg-light py-5">
        <div class="container text-center py-5 bg-white">
            <h4 class="fw-bold">Subscribe To Our Newsletter</h4>
            <p class="text-muted">Outstanding Experience With This Propertydealer. He Is Very Nice And Punctual. Highly
                Recommended.</p>

            <form class="d-flex justify-content-center mt-4" style="max-width: 600px; margin: auto;">
                <input type="email" class="form-control rounded-start-pill px-4 py-2 border-success"
                    placeholder="Enter Your Email" required> &nbsp;&nbsp;
                <button class="btn btn-success rounded-end-pill px-4 ml-2">Subscribe</button>
            </form>
        </div>
    </div>
@endsection
