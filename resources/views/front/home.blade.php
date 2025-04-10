@extends('layouts.web-app')
@section('web-main')
  <!-- How It Works Section -->
  <section class="py-5 bg-light mt-5">
    <div class="container">
      <div class="text-center mb-5">
        <h5 class="fw-bold mb-4">How It <span class="text-success">Works?</span></h5>
        <p class="text-muted">
          Our Platform Provides You The Best Opportunities<br>
          To Find The Best Property Nearby. You Can Make This:
        </p>
      </div>
      <div class="row justify-content-center text-center">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow border border-success rounded-4 h-100">
            <div class="card-body">
              <div class="mb-3 " >
                <svg xmlns="http://www.w3.org/2000/svg" class="bg-light rounded-circle p-2" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path d="M27.5 42.5C35.7843 42.5 42.5 35.7843 42.5 27.5C42.5 19.2157 35.7843 12.5 27.5 12.5C19.2157 12.5 12.5 19.2157 12.5 27.5C12.5 35.7843 19.2157 42.5 27.5 42.5Z" fill="#42A15B" stroke="#222222" stroke-width="3"/>
                    <path d="M27.5 20C26.515 20 25.5397 20.194 24.6299 20.5709C23.7199 20.9478 22.8932 21.5003 22.1967 22.1967C21.5003 22.8932 20.9478 23.7199 20.5709 24.6299C20.194 25.5397 20 26.515 20 27.5" stroke="#222222" stroke-width="3" stroke-linecap="round"/>
                    <path d="M50 50L42.5 42.5" stroke="#222222" stroke-width="3" stroke-linecap="round"/>
                  </svg>
              </div>
              <h6 class="fw-bold mb-3">Search Property</h6>
              <p class="text-muted small">
                Physical space is often considered in three linear dimensions, although modern
              </p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-4 h-100 card-center">
              <div class="card-body">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bg-light rounded-circle p-2" width="70" height="70" viewBox="0 0 85 85" fill="none">
                        <g clip-path="url(#clip0_1145_58)">
                          <path d="M55.2466 23.268L44.8946 12.4128C44.437 11.933 43.8076 11.6546 43.1447 11.6389C42.4819 11.6231 41.8399 11.8714 41.3601 12.3289L30.5049 22.681L29.5358 59.0488C29.5221 59.7092 29.7703 60.3481 30.2261 60.826C30.6819 61.304 31.3083 61.5822 31.9685 61.5998L51.974 62.0745C52.6343 62.0882 53.2733 61.8401 53.7512 61.3843C54.2292 60.9285 54.5074 60.302 54.525 59.6418L55.2466 23.268Z" fill="#42A15B"/>
                          <path d="M42.7014 26.5953L42.8823 26.4228" stroke="black" stroke-width="6.25" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M55.2466 23.268L44.8946 12.4128C44.437 11.933 43.8076 11.6546 43.1447 11.6389C42.4819 11.6231 41.8399 11.8714 41.3601 12.329L30.5049 22.681L29.5358 59.0488C29.5221 59.7092 29.7703 60.3481 30.2261 60.826C30.6819 61.304 31.3083 61.5822 31.9685 61.5998L51.974 62.0745C52.6343 62.0882 53.2733 61.8401 53.7512 61.3843C54.2292 60.9285 54.5074 60.302 54.525 59.6418L55.2466 23.268Z" stroke="#292532" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_1145_58">
                            <rect width="60" height="60" fill="white" transform="translate(0 41.408) rotate(-43.6407)"/>
                          </clipPath>
                        </defs>
                      </svg>
                </div>
                <h6 class="fw-bold mb-3">Instant Valuation</h6>
                <p class="text-muted small">
                  Physical space is often considered in three linear dimensions, although modern
                </p>
              </div>
            </div>
          </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow  border-0 rounded-4 h-100">
            <div class="card-body">
              <div class="mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="bg-light rounded-circle p-2" width="60" height="60" viewBox="0 0 60 60" fill="none">
                    <path d="M27.5 42.5C35.7843 42.5 42.5 35.7843 42.5 27.5C42.5 19.2157 35.7843 12.5 27.5 12.5C19.2157 12.5 12.5 19.2157 12.5 27.5C12.5 35.7843 19.2157 42.5 27.5 42.5Z" fill="#42A15B" stroke="#222222" stroke-width="3"/>
                    <path d="M27.5 20C26.515 20 25.5397 20.194 24.6299 20.5709C23.7199 20.9478 22.8932 21.5003 22.1967 22.1967C21.5003 22.8932 20.9478 23.7199 20.5709 24.6299C20.194 25.5397 20 26.515 20 27.5" stroke="#222222" stroke-width="3" stroke-linecap="round"/>
                    <path d="M50 50L42.5 42.5" stroke="#222222" stroke-width="3" stroke-linecap="round"/>
                    </svg>
              </div>
              <h6 class="fw-bold mb-3">Track Property</h6>
              <p class="text-muted small">
                Physical space is often considered in three linear dimensions, although modern
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!--===== OTHERS AREA STARTS =======-->
<div class="others4-section-area sp6 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
        <div class="others-header text-center space-margin60">
          <h5 class="wf-30" data-aos="fade-left" data-aos-duration="800">Best <span class="text-success">Properties</span> of the Month </h5>
          <div class="space20"></div>
          <p>Our platform provides you the best opportunity to find the best property possible. we can make thi</p>
        </div>
      </div>
      <div>

        <ul class="nav justify-content-center mb-5 mx-5">
            <li class="nav-item nav-item-margin">
              <a class="nav-link active btn btn-light border " aria-current="page" href="#">Residential</a>
            </li>
            <li class="nav-item nav-item-margin">
              <a class="nav-link btn btn-light border" href="#">Commercial</a>
            </li>
            <li class="nav-item nav-item-margin">
              <a class="nav-link btn btn-light border" href="#">Agricultural</a>
            </li>
            <li class="nav-item nav-item-margin">
              <a class="nav-link btn btn-light border" href="#" tabindex="-1" aria-disabled="true">Industrial</a>
            </li>
          </ul>

      </div>
    </div>
    <div class="row">

        <div class="col-md-4 rounded" data-aos="zoom-in-up" data-aos-duration="800">
            <div class="card h-100 shadow-sm" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                <div class="instagram-posts">
                    <div class="img1">
                        <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/nld-amphitheatre.jpg" alt="">
                    </div>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title h6 fw-bold">Shahjahan Garden Residence</h5>
                    <span class="h6 text-muted">Blue Area, islamabad</span>
                    <div class="clearfix mt-4">
                        <span class="float-start price-hp fw-bold">$599.00</span>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="float-end badge rounded-pill" width="50" height="30" viewBox="0 0 42 30" fill="none">
                                <rect width="42" height="30" rx="7.5" fill="#42A15B"/>
                                <path d="M14 14.8272H28M28 14.8272L22.1667 7M28 14.8272L22.1667 22.6544" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 rounded" data-aos="zoom-in-up" data-aos-duration="800">
            <div class="card h-100 shadow-sm" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                <div class="instagram-posts">
                    <div class="img1">
                        <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/nld-amphitheatre.jpg" alt="">
                    </div>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title h6 fw-bold">Shahjahan Garden Residence</h5>
                    <span class="h6 text-muted">Blue Area, islamabad</span>
                    <div class="clearfix mt-4">
                        <span class="float-start price-hp fw-bold">$599.00</span>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="float-end badge rounded-pill" width="50" height="30" viewBox="0 0 42 30" fill="none">
                                <rect width="42" height="30" rx="7.5" fill="#42A15B"/>
                                <path d="M14 14.8272H28M28 14.8272L22.1667 7M28 14.8272L22.1667 22.6544" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 rounded" data-aos="zoom-in-up" data-aos-duration="800">
            <div class="card h-100 shadow-sm" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                <div class="instagram-posts">
                    <div class="img1">
                        <img src="{{ asset('public') }}/front-assets/img/all-images/about/nld/nld-amphitheatre.jpg" alt="">
                    </div>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title h6 fw-bold">Shahjahan Garden Residence</h5>
                    <span class="h6 text-muted">Blue Area, islamabad</span>
                    <div class="clearfix mt-4">
                        <span class="float-start price-hp fw-bold">$599.00</span>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="float-end badge rounded-pill" width="50" height="30" viewBox="0 0 42 30" fill="none">
                                <rect width="42" height="30" rx="7.5" fill="#42A15B"/>
                                <path d="M14 14.8272H28M28 14.8272L22.1667 7M28 14.8272L22.1667 22.6544" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>



      <div class="col-lg-12" data-aos="zoom-in-up" data-aos-duration="1000">
        <div class="space18"></div>
        <div class="btn-area1 text-center rounded">
          <a href="" class="btn btn-success col-md-3 p-2"> View More Property</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== OTHERS AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta4-section-area sp4">
    <div class="container">
      <h3 class="text-center wf-36">Featured <span class="text-success">Listing</span> Of The Week</h3>
      <div class="row align-items-center">
        <!-- Left Column: Image -->
        <div class="col-md-5 mb-4">
          <div class="instagram-posts">
            <div class="img1">
              <img src="{{ asset('public') }}/front-assets/img/floors-images/unsplash.png" class="img-fluid rounded" alt="Building Image">
            </div>
          </div>
        </div>

        <!-- Right Column: Content -->
        <div class="col-md-7 card-proerty">
          <h5 class="fw-bolder mb-3 wf-36">Let’s Move To Your <span class="text-success">Dream Property</span></h5>
          <p class="text-muted mb-3 wf-24">
            Our platform provides you the best opportunity to find the best property possible.
            <br>We can make this happen.
          </p>

          <a href="#" class="btn btn-success mb-5 px-4 py-2">I Want Book Floor</a>

          <!-- Property Info Cards -->
          <div class="row g-3 ">
            <div class="col-md-4">
              <div class="border p-3 bg-white rounded text-center">
                <h5>Budget</h5>
                <p class="text-muted mb-0">Confidential</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border p-3 bg-white rounded text-center">
                <h5>Size</h5>
                <p class="text-muted mb-0">1000m</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border p-3 bg-white rounded text-center">
                <h5>Type</h5>
                <p class="text-muted mb-0">Office</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border p-3 bg-white rounded text-center">
                <h5>Status</h5>
                <p class="text-muted mb-0">Confidential</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border p-3 bg-white rounded text-center">
                <h5>Location</h5>
                <p class="text-muted mb-0">Islamabad</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border p-3 bg-white rounded text-center">
                <h6>Flat</h6>
                <p class="text-muted mb-0">10</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="premium-section py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Side Content -->
        <div class="col-md-6 mb-4">
          <h2 class="fw-bold">Experience the Urban<br>living in <span class="text-success">Premium Floors</span></h2>
          <p class="text-muted my-3">
            Discover the perfect blend of modern design and luxury with our premium floors
          </p>
          <a href="#" class="btn btn-success px-4 py-2 mb-4">Get Started</a>

          <!-- Stats -->
          <div class="row text-center text-md-start mt-4">
            <div class="col-md-4 mb-2">
              <h5 class="fw-bold mb-0">1200+</h5>
              <p class="text-muted small">Listed Properties</p>
            </div>
            <div class="col-md-4 mb-2">
              <h5 class="fw-bold mb-0">1460+</h5>
              <p class="text-muted small">Happy Customers</p>
            </div>
            <div class="col-md-4 mb-2">
              <h5 class="fw-bold mb-0">1342+</h5>
              <p class="text-muted small">Awards</p>
            </div>
          </div>
        </div>

        <!-- Right Side Image -->
        <div class="col-md-6">
          <img src="{{ asset('public') }}/front-assets/img/floors-images/unsplash.png" class="img-fluid rounded" alt="Premium Floors Building">
        </div>
      </div>
    </div>
  </div>



  <!--===== MOBILE HEADER STARTS =======-->
  <div class="mobile-header mobile-haeder4 d-block d-lg-none">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
         <a href="index5.php"><img src="{{ asset('public') }}/front-assets/img/logo/nld-gold-dark.png" alt="nld logo"></a>
          </div>


          <div class="mobile-nav-icon dots-menu">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-sidebar mobile-sidebar4">
    <div class="logosicon-area">
      <div class="logos">
        <img src="{{ asset('public') }}/front-assets/img/logo/nld-gold-dark.png" alt="">
      </div>
      <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
      </div>
     </div>
    <div class="mobile-nav mobile-nav1">
      <ul class="mobile-nav-list nav-list1">
        <li><a href="index5.php" >Home </a>

        </li>
        <li><a href="about.php">About</a></li>

        <li><a href="project.php">Project<f/a>

        </li>

        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
<!--===== MOBILE HEADER STARTS =======-->
@endsection

