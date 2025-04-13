@extends('layouts.web-app')
@section('web-main')
    <!--===== ABOUT AREA STARTS =======-->
    @php
    $project = DB::table('projects')->where('id',$id)->first();
    $projects = DB::table('projects')->get();
    $featured = DB::table('featureds')->where('project_id',$id)->first();
    $amenities = DB::table('amenities')->where('project_id',$id)->get();
    $galleries = DB::table('galleries')->where('project_id',$id)->get();
    $testimonials = DB::table('testimonials')->where('project_id',$id)->get();
    @endphp
    <div class="about4-section-area sp6">
        <div class="container">
            <div class="row align-items-center">
                <div class="cl-md-1"></div>
                <div class="col-md-7 mb-5">
                    <div class="about4-header heading4">
                        <div class="space20"></div>
                        <h1 class="main-text">{{ $project->title ?? 'Premium Floors' }} </h1>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="900" style="text-align:justify;">{{ $project->discripation}}</p>
                        <div class="space20"></div>
                        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                            <a href="" class="btn me-3" style="background: #FFEDBD;color:black;">Learn More</a>
                            <a href="{{$project->video_url ?? '#'}}" class="btn"
                                style="background: #f2f2f2;color:black;"><i
                                    class="fa-solid fa-play-circle"></i>&nbsp;&nbsp;Watch</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-images4">
                        <div class="img1 reveal image-anime">
                            <img src="{{ asset('public/files') }}/{{$project->image}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT AREA ENDS =======-->



@if ($featured)
    <div class="about4-section-area sp6">
        <div class="container">
            <div class="section-heading text-center mb-10">
                <h1 data-aos="fade-left" data-aos-duration="800" class="wf-36">FEATURED FLOORS</h1>
                <div class="underline"></div>
            </div>
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-md-6">
                    <img src="{{ asset('public/files') }}/{{$featured->image}}"
                        alt="3 BHK Luxury Floor" class="img-fluid rounded">
                </div>

                <!-- Text Column -->
                <div class="col-md-6 mt-3 d-flex flex-column justify-content-center">
                    <h3 class="mb-2 wf-36">{{$featured->title}}</h3>
                    <div class="space20"></div>
                    {!!$featured->description!!}
                    <div class="btn-area1 mt-3" data-aos="fade-left" data-aos-duration="1200">
                        <a href="" class="btn me-3">View our Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif


    <!--===== SERVICE AREA STARTS =======-->
    @if ($amenities->isNotEmpty())
    <div class="service4-section-area sp7">
        <div class="container">
            <div class="section-heading text-center mb-10">
                <h1 class="wf-36" data-aos="fade-left" data-aos-duration="800">AMENITIES</h1>
                <div class="underline mb-3"></div>
                <p class="wf-24">Sophisticated Amenities for a Luxurious Living Experience</p>
            </div>
            <div class="row">
                @foreach ($amenities as $a)
                <div class="col-md-3 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                    <div class="service-amenities-boxarea">
                        <div class="img1">
                            <img src="{{ asset($a->icon) }}" alt="">
                        </div>
                        <div class="content-area">
                            <a href="">{{$a->title}}</a>
                        </div>
                        <div class="view-btn">
                            <a href="{{ asset($a->icon) }}">View</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!--===== SERVICE AREA ENDS =======-->
    @if ($galleries->isNotEmpty())
    <div class="gallery4-section-area sp6">
        <div class="container">
            <div class="section-heading text-center mb-10">
                <h1 class="wf-36" data-aos="fade-left" data-aos-duration="800">Our gallery</h1>
                <div class="underline mb-3"></div>
                <p class="wf-24">Explore Our Gallery of Exquisite Floors</p>
            </div>
            <div class="col-md-11 m-auto" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="gallery-images-slider owl-carousel">
                    @foreach ($galleries as $g)
                    <div class="img1 image-anime">
                        <img src="{{ asset($g->image) }}" alt="">
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
    @endif
    <!--===== GALLERY AREA STARTS =======-->
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
                @foreach ($projects as $p)
                <div class="col-md-6 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="apartment-boxarea">
                        <div class="img1">
                            <img src="{{ asset('public/files') }}/{{$p->image}}"
                                alt="">
                        </div>
                        <div class="content-area">
                            <a href="project.php">{{$p->project_name}}</a>
                            <div class="space16"></div>
                       <p>{{$p->discripation}}</p>
                        </div>
                        <div class="arrow">
                            <a href="project.php">View</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--===== APARTMENT AREA ENDS =======-->

    <!--===== PROPERTIES AREA STARTS =======-->



    <!--===== PROPERTIES AREA ENDS =======-->

    <!--===== TESTIMONIAL AREA STARTS =======-->
    @if ($amenities->isNotEmpty())
    <div class="testimonial4-section-area sp1">
        <div class="container">
            <div class="section-heading text-center mb-10">
                <h1 class="wf-36" data-aos="fade-left" data-aos-duration="800">Testimonials</h1>
                <div class="underline mb-3"></div>
                <p class="wf-24">What Client Says</p>
            </div>
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <!-- Card 2 -->
@foreach ($testimonials as $t)
<!-- Card 3 -->
<div class="col-md-4 mb-4">
    <div class="card shadow text-center p-4">
        <div class="mb-2"><i class="fas fa-quote-left text-warning fa-2x"></i></div>
        <div class="text-warning mb-2">★★★★★</div>
        <p class="mb-3">{{$t->message}}.</p>
        <img src="{{ asset('public/files') }}/{{$t->avatar}}"
            alt="Darlene" class="rounded-circle mb-2" width="60">
        <h6 class="fw-bold mb-0">{{$t->name}}</h6>
        <small>{{$t->designation}}</small>
    </div>
</div>
@endforeach
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

@endif
    <!--===== CTA AREA ENDS =======-->
    <div class="about4-section-area sp6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-images2">
                        <div class="img1 reveal image-anime">
                            <img src="{{ asset('public') }}/front-assets/img/floors-images/Rectangle-79.png"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5" style="margin-bottom: 120px;">
                    <div class="about4-header heading4">
                        <div class="container">
                            <form action="{{url('add-contact')}}" method="POST">
                                @csrf
                                <input type="hidden" name="project_id" id="project_id" value="{{$id}}">
                                <div class="form-group mt-4">
                                    <label for="name">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name"
                                        aria-describedby="emailHelp">
                                        @error('name')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email"
                                        aria-describedby="emailHelp">
                                        @error('email')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control  @error('mobile_number') is-invalid @enderror" id="mobile"
                                        aria-describedby="emailHelp" name="mobile_number">
                                        @error('mobile_number')
                                        <div class=" invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <label for="Message">Message</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4"></textarea>
                                </div>
                                @error('message')
                                <div class=" invalid-feedback">{{ $message }}</div>
                            @enderror
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
                <div class="col-md-12">
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
                            <div class="col-md-5 m-auto">
                                <div class="footer-call-area text-center">
                                    <a href="tel:+91 7026600000" style="font-size:24px;">+91-7026600000</a>
                                    <div class="space36"></div>
                                    <ul>
                                        <li><a href="#"> <span><i
                                                        class="fa-solid fa-location-crosshairs"></i></span> <span>Unit No-
                                                    214 , 2nd Floor, Tower 2, DLF Corporate Greens<br
                                                        class="d-md-block d-none"> Sector 74A-Gurgaon</span></a></li>
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
