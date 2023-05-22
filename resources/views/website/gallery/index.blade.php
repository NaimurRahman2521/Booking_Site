@extends('website.master')

@section('title')
    Gallery
@endsection

@section('body')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0"  data-bs-bg="{{asset('/')}}website/img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Gallery</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area mb-90">
        <div class="container-fluid">
            <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{asset('/')}}website/img/img-slide/31.jpg" data-rel="lightcase:myCollection">
                            <img src="{{asset('/')}}website/img/img-slide/31.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{asset('/')}}website/img/img-slide/32.jpg" data-rel="lightcase:myCollection">
                            <img src="{{asset('/')}}website/img/img-slide/32.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{asset('/')}}website/img/img-slide/33.jpg" data-rel="lightcase:myCollection">
                            <img src="{{asset('/')}}website/img/img-slide/33.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{asset('/')}}website/img/img-slide/34.jpg" data-rel="lightcase:myCollection">
                            <img src="{{asset('/')}}website/img/img-slide/34.jpg" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{asset('/')}}website/img/img-slide/35.jpg" data-rel="lightcase:myCollection">
                            <img src="{{asset('/')}}website/img/img-slide/35.jpg" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

@endsection
