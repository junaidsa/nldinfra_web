@extends('layouts.web-app')
@section('web-main')
    <!--===== BLOG AREA STARTS =======-->
    <div class="blog-inner-section-area sp6">
        <div class="container">
            @foreach ($blogs as $blog)
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="blog-boxarea">
                            <div class="img1 image-anime">
                                <img src="{{ asset('public/files/' . $blog->image) }}" alt="">
                            </div>
                            <div class="content-area">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('public') }}/front-assets/img/icons/user.svg"
                                                alt=""> </a> Jhon <span> | </span></li>
                                    <li><a href="#"><img
                                                src="{{ asset('public') }}/front-assets/img/icons/calender.svg"
                                                alt="">
                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</a></li>
                                </ul>
                                <div class="space20"></div>
                                <a href="blog-single.html">{{ $blog->short_description }}</a>
                                <div class="space24"></div>
                                <a href="blog-single.html" class="readmore">Read More <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="col-lg-12">
            <div class="space30"></div>
            <div class="pagination-area">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <i class="fa-solid fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">12</a></li>
                        <li class="page-item">
                            <a class="page-link m-0" href="#" aria-label="Next">
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->
@endsection
