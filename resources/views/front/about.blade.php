
@extends('layouts.web-app')
@section('web-main')
@php
    $a = DB::table('about')->where('id',1)->first();
@endphp
<!--===== HERO AREA STARTS =======-->
<!--===== PROPERTY AREA STARTS =======-->
<div class="property3-section-area sp6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="property-images-area">
                    <div class="img1 reveal image-anime">
                        <img src="{{ asset('public') }}/front-assets/img/all-images/property/property-img13.png" alt="">
                    </div>
                    <div class="img2 reveal image-anime">
                        <img src="{{ asset('public') }}/front-assets/img/all-images/property/property-img5.png" alt="">
                    </div>
                    <div class="elements reveal image-anime">
                        {{-- <img src="{{ asset('public') }}/front-assets/img/elements/elements9.png" alt=""> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="property-content heading3">
                    <h5 data-aos="fade-left" data-aos-duration="800">{{ $a->about_title }}</h5>
                    <div class="space20"></div>
                    <h6>Building More Than Properties — We Build Trust, Comfort & Communities.</h6>
                    <p>At NLD Developers, we believe that a home is more than just four walls — it’s where life happens. That's why we’re committed to crafting spaces that are thoughtfully designed, expertly built, and perfectly located. Whether you're buying your first home, investing in property, or searching for your next business space, we make the journey smooth, transparent, and rewarding.
                    </p>
                </div>
            </div>
        </div>
        <div class="space40"></div>
        <div class="mt-3">
            <h5 class="text-center mb-3">Who We Are</h5>
            <p class="text-center">NLD Developers is a forward-thinking real estate development company focused on delivering high-quality residential and commercial projects. With a strong foundation in construction expertise and a passion for innovation, we've earned the trust of clients through honesty, reliability, and consistent excellence.
            </p>
            <div class="space20"></div>
            <h5 class="text-center my-3">🏡 What We Do</h5>
            <p class="text-center">Residential & Commercial Projects: From cozy apartments to modern office spaces, we develop properties that meet diverse need </p>
            <p class="text-center">Smart Location Planning: We prioritize convenience and connectivity — our developments are always near essential services, transit, and vibrant neighborhoods.
            </p>
            <div class="space20"></div>
            <p class="text-center">Customer-Centric Approach: From inquiry to handover, we stay by your side, offering complete support, transparency, and peace of mind.</p>
            <h5 class="text-center my-3">Our Vision</h5>
            <p class="text-center">To redefine urban living by developing sustainable, community-driven spaces where people can thrive.
            </p>
        </div>
    </div>
</div>
<!--===== PROPERTY AREA ENDS =======-->
<!--===== ABOUT AREA ENDS =======-->
@endsection
