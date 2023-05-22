@extends('website.master')

@section('title')
    Popular Online Booking System
@endsection

@section('body')
    <div class="pt-30 pb-50 bg-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="slide-item-car-dealer-form">
                        <div class="section-title-area ltn__section-title-2 text-center"></div>
                        <div class="ltn__car-dealer-form-tab">
                            <div class="tab-content pb-10 search-bg">
                                <div class="tab-pane fade active show">
                                    <div class="car-dealer-form-inner">
                                        <h1 class="section-title text-color-white text-center">Find Your <span class="ltn__secondary-color-3">Perfect</span> Guest House</h1>
                                        <hr/>
                                        <form action="#" class="ltn__car-dealer-form-box row">
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-location col-md-3">
                                                <select class="nice-select">
                                                    <option>Select Location</option>
                                                    <option>Bonani</option>
                                                    <option>Rampura</option>
                                                    <option>Kathalbagan</option>
                                                    <option>Demra</option>
                                                    <option>Mouchak</option>
                                                </select>
                                            </div>

                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-md-3">
{{--                                                <input class="form-control form-control-solid nice-select btn_width" id="datepicker-date" placeholder="Pick date rage">--}}
                                                <div class="input-group">

                                                    <input type="text" class="form-control form-control-solid nice-select btn_width" id="datepicker-date" placeholder="Select Checkin Date" type="text">
                                                </div>
                                            </div>


                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-adult col-md-3">
                                                <div class="dropdown">
                                                    <selector class="nice-select" id="dropdownMenuButton" data-bs-toggle="dropdown">Guests</selector>
                                                    <div class="dropdown-menu w-100 rounded-0" style="font-family: Poppins" aria-labelledby="dropdownMenuButton">
                                                        <div class="col">
                                                            <div class="row mb-2">
                                                                <label for="" class="col">Adult</label>
                                                                <div class="col rounded-0"><input type="number" class="form-control" placeholder="1" min="1" max="100"></div>
                                                            </div>
                                                            <div class="row mb-2">
                                                                <label for="" class="col">Child</label>
                                                                <div class="col rounded-0"><input type="number" class="form-control" placeholder="0" min="0" max="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-md-3">
                                                <div class="btn-wrapper text-center mt-0 search-box-size">
                                                    <label style="color: #E8E8E8"></label>
                                                    <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase btn_width form-label">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title"> Available Apartments in Banani</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-three-active slick-arrow-1">
                <!-- ltn__product-item -->
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="{{route('detail')}}"><img src="{{asset('/')}}website/img/product-3/4.jpg" alt="#"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">Apartment, Private Room</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="{{route('detail')}}">Private Room at Bashundhara Block B</a></h2>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>244/7 </span>
                                    Lift & Generator
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>TK 1999<label> /Day</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="shop-grid.html"><img src="{{asset('/')}}website/img/product-3/5.jpg" alt="#"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">Apartment, Entire Place</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="shop-grid.html">3 BEd Room Family Flat at Baridhara</a></h2>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>24/7 </span>
                                    Lift & Generator
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>TK 5500<label>/Day</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="shop-grid.html"><img src="{{asset('/')}}website/img/product-3/6.jpg" alt="#"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">Apartment, Entire Place</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="shop-grid.html">4 Bed Full Apartment at Aftabnagar</a></h2>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>247 </span>
                                    Lift & Generator
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>Tk 8500<label>/Day</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->



    <!-- COUNTER UP AREA START -->
    <div class="ltn__counterup-area section-bg-1 pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-select"></i>
                        </div>
                        <h1><span class="counter">560</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Total Area Sq</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-office"></i>
                        </div>
                        <h1><span class="counter">197</span><span class="counterUp-letter">K</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Apartments Sold</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-excavator"></i>
                        </div>
                        <h1><span class="counter">268</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Total Constructions</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-color-white---">
                        <div class="counter-icon">
                            <i class="flaticon-armchair"></i>
                        </div>
                        <h1><span class="counter">340</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Apartio Rooms</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COUNTER UP AREA END -->
    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title"> Available Apartments in Aftabnagor</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-three-active slick-arrow-1">
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href=""><img src="{{asset('/')}}website/img/product-3/4.jpg" alt="#"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">Apartment, Private Room</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="shop-grid.html">Private Room at Bashundhara Block B</a></h2>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>244/7 </span>
                                    Lift & Generator
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>TK 1999<label> /Day</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="shop-grid.html"><img src="{{asset('/')}}website/img/product-3/5.jpg" alt="#"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">Apartment, Entire Place</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="shop-grid.html">3 BEd Room Family Flat at Baridhara</a></h2>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>24/7 </span>
                                    Lift & Generator
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>TK 5500<label>/Day</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="shop-grid.html"><img src="{{asset('/')}}website/img/product-3/6.jpg" alt="#"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">Apartment, Entire Place</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="shop-grid.html">4 Bed Full Apartment at Aftabnagar</a></h2>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>247 </span>
                                    Lift & Generator
                                </li>
                            </ul>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>Tk 8500<label>/Day</label></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- VIDEO AREA START -->
    <div class="ltn__video-popup-area ltn__video-popup-margin---">
        <div class="ltn__video-bg-img ltn__video-popup-height-600--- bg-overlay-black-30 bg-image bg-fixed ltn__animation-pulse1" data-bs-bg="{{asset('/')}}website/img/bg/19.jpg">
            <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&amp;showinfo=0" data-rel="lightcase:myCollection">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div>
    <!-- VIDEO AREA END -->


    <!-- TESTIMONIAL AREA START (testimonial-7) -->
    <div class="ltn__testimonial-area section-bg-1--- bg-image-top pt-115 pb-70" data-bs-bg="{{asset('/')}}website/img/bg/20.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonial</h6>
                        <h1 class="section-title">Clients Feedback</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-5-active slick-arrow-1">
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i>
                                Precious ipsum dolor sit amet
                                consectetur adipisicing elit, sed dos
                                mod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad min
                                veniam, quis nostrud Precious ips
                                um dolor sit amet, consecte</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{asset('/')}}website/img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Jacob William</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i>
                                Precious ipsum dolor sit amet
                                consectetur adipisicing elit, sed dos
                                mod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad min
                                veniam, quis nostrud Precious ips
                                um dolor sit amet, consecte</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{asset('/')}}website/img/testimonial/2.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Kelian Anderson</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i>
                                Precious ipsum dolor sit amet
                                consectetur adipisicing elit, sed dos
                                mod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad min
                                veniam, quis nostrud Precious ips
                                um dolor sit amet, consecte</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{asset('/')}}website/img/testimonial/3.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Adam Joseph</h5>
                                    <label>Selling Agents</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL AREA END -->


@endsection
