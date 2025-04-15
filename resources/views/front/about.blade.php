
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
                        <img src="{{ asset('public') }}/front-assets/img/elements/elements9.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="property-content heading3">
                    <h5 data-aos="fade-left" data-aos-duration="800">{{ $a->about_title }}</h5>
                    <div class="space20"></div>

                    {!! $a->about !!}
                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                        <a href="{{url('/')}}" class="header-btn4">View Our Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== PROPERTY AREA ENDS =======-->
<!--===== ABOUT AREA ENDS =======-->
@endsection
