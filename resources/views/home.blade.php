@extends('layouts.master')
@section('title')
   Travel
@endsection
@section('content')
    <div class="slider-bottom-form-carousel-area-hp1 padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="slider-bottom-form-hp1">
                        <div class="slider-bottom-menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                                          data-toggle="tab">Tours</a></li>
                                <!-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                           data-toggle="tab">Tours</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                                           data-toggle="tab">Thuê xe</a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab"
                                                           data-toggle="tab">Chuyến bay</a></li> -->
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="s-bottom-form">
                                    <form action="http://static.crazycafe.net/crazycafe/travel/index.html">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="name-input-arrow"><input type="text" id="hotel-name-input"
                                                                                   name="hotel-name"
                                                                                   placeholder="Tên khách sạn"></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="city-select" id="city-select">
                                                    <option value="1">Chọn thành phố</option>
                                                    <option value="2">Thành phố - 1</option>
                                                    <option value="3">Thành phố - 2</option>
                                                    <option value="4">Thành phố - 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="adults-select" id="adults-select">
                                                    <option value="1">Người lớn</option>
                                                    <option value="2">Có</option>
                                                    <option value="3">Không</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="kids-select" id="kids-select">
                                                    <option value="1">Trẻ em</option>
                                                    <option value="2">Trẻ em - 1</option>
                                                    <option value="3">Trẻ em - 2</option>
                                                    <option value="4">Trẻ em - 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="min-price-select" id="min-price-select">
                                                    <option value="1">Giá nhỏ nhất</option>
                                                    <option value="2">$50</option>
                                                    <option value="3">$50</option>
                                                    <option value="4">$50</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="max-price-select" id="max-price-select">
                                                    <option value="1">Giá lớn nhất</option>
                                                    <option value="2">$25</option>
                                                    <option value="3">$50</option>
                                                    <option value="4">$100</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="date-input-arrow"><input type="date" name="date"></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="date-input-arrow"><input type="date" name="date"></p>
                                            </div>
                                        </div>
                                        <button type="submit" class="pink-btn">Tìm khách sạn</button>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="s-bottom-form">
                                    <form action="http://static.crazycafe.net/crazycafe/travel/index.html" method="POST">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" id="hotel-name-input2" name="hotel-name2"
                                                       placeholder="Hotel name here">
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="city-select2" id="city-select2">
                                                    <option value="1">Choose City</option>
                                                    <option value="2">City Name - 1</option>
                                                    <option value="3">City Name - 2</option>
                                                    <option value="4">City Name - 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="adults-select2" id="adults-select2">
                                                    <option value="1">Adults</option>
                                                    <option value="2">Yes</option>
                                                    <option value="3">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="kids-select2" id="kids-select2">
                                                    <option value="1">Kids</option>
                                                    <option value="2">Kids - 1</option>
                                                    <option value="3">Kids - 2</option>
                                                    <option value="4">Kids - 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="min-price-select2" id="min-price-select2">
                                                    <option value="1">Min Price</option>
                                                    <option value="2">$50</option>
                                                    <option value="3">$50</option>
                                                    <option value="4">$50</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="max-price-select2" id="max-price-select2">
                                                    <option value="1">Max Price</option>
                                                    <option value="2">$25</option>
                                                    <option value="3">$50</option>
                                                    <option value="4">$100</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="date-input-arrow"><input type="date" name="date"></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="date-input-arrow"><input type="date" name="date"></p>
                                            </div>
                                        </div>
                                        <button type="submit" class="pink-btn">Find Tours</button>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <div class="s-bottom-form">
                                    <form action="http://static.crazycafe.net/crazycafe/travel/index.html">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" id="hotel-name-input3" name="hotel-name3"
                                                       placeholder="Hotel name here">
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="city-select3" id="city-select3">
                                                    <option value="1">Choose City</option>
                                                    <option value="2">City Name - 1</option>
                                                    <option value="3">City Name - 2</option>
                                                    <option value="4">City Name - 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="adults-select3" id="adults-select3">
                                                    <option value="1">Adults</option>
                                                    <option value="2">Yes</option>
                                                    <option value="3">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="kids-select3" id="kids-select3">
                                                    <option value="1">Kids</option>
                                                    <option value="2">Kids - 1</option>
                                                    <option value="3">Kids - 2</option>
                                                    <option value="4">Kids - 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="min-price-select3" id="min-price-select3">
                                                    <option value="1">Min Price</option>
                                                    <option value="2">$50</option>
                                                    <option value="3">$50</option>
                                                    <option value="4">$50</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="max-price-select3" id="max-price-select3">
                                                    <option value="1">Max Price</option>
                                                    <option value="2">$25</option>
                                                    <option value="3">$50</option>
                                                    <option value="4">$100</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="date-input-arrow"><input type="date" name="date"></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="date-input-arrow"><input type="date" name="date"></p>
                                            </div>
                                        </div>
                                        <button type="submit" class="pink-btn">Find Cars</button>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="settings">
                                <div class="s-bottom-form">
                                    <form action="http://static.crazycafe.net/crazycafe/travel/index.html">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" id="hotel-name-input4" name="hotel-name4"
                                                       placeholder="Hotel name here">
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="city-select4" id="city-select4">
                                                    <option value="1">Choose City</option>
                                                    <option value="2">City Name - 1</option>
                                                    <option value="3">City Name - 2</option>
                                                    <option value="4">City Name - 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="adults-select4" id="adults-select4">
                                                    <option value="1">Adults</option>
                                                    <option value="2">Yes</option>
                                                    <option value="3">No</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="kids-select4" id="kids-select4">
                                                    <option value="1">Kids</option>
                                                    <option value="2">Kids - 1</option>
                                                    <option value="3">Kids - 2</option>
                                                    <option value="4">Kids - 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="min-price-selec4t" id="min-price-select4">
                                                    <option value="1">Min Price</option>
                                                    <option value="2">$50</option>
                                                    <option value="3">$50</option>
                                                    <option value="4">$50</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="max-price-select4" id="max-price-select4">
                                                    <option value="1">Max Price</option>
                                                    <option value="2">$25</option>
                                                    <option value="3">$50</option>
                                                    <option value="4">$100</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="date-input-arrow"><input type="date" name="date"></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="date-input-arrow"><input type="date" name="date"></p>
                                            </div>
                                        </div>
                                        <button type="submit" class="pink-btn">Find Flights</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="slider-bottom-gallery-hp1 owl-carousel">
                        <div class="slider-bottom-single-gallery"
                             data-dot="<img src='assets/img/slider-bottom-hp1-gallery1.jpg' alt=''>">
                            <img src="assets/img/slider-bottom-hp1-gallery1.jpg" alt="">
                        </div>
                        <div class="slider-bottom-single-gallery"
                             data-dot="<img src='assets/img/slider-bottom-hp1-gallery2.jpg' alt=''>">
                            <img src="assets/img/slider-bottom-hp1-gallery2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-destination-area">
        <div class="section-title text-center section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1>Top điểm đến được yêu thích</h1>
                        <p>Khám phá những chân trời mới</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-destination-columns padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hp1-top-destination-carousel owl-carousel">
                            <div class="single-top-destination-item top-destination-item-bg1 black-overlay">
                                <div class="single-top-destination-item-inner">
                                    <h2>New York</h2>
                                    <a href="#" class="pink-btn">$1250</a>
                                </div>
                            </div>
                            <div class="single-top-destination-item top-destination-item-bg2 black-overlay">
                                <div class="single-top-destination-item-inner">
                                    <h2>Thailand</h2>
                                    <a href="#" class="pink-btn">$530</a>
                                </div>
                            </div>
                            <div class="single-top-destination-item top-destination-item-bg3 black-overlay">
                                <div class="single-top-destination-item-inner">
                                    <h2>Paris</h2>
                                    <a href="#" class="pink-btn">$750</a>
                                </div>
                            </div>
                            <div class="single-top-destination-item top-destination-item-bg4 black-overlay">
                                <div class="single-top-destination-item-inner">
                                    <h2>Prague</h2>
                                    <a href="#" class="pink-btn">$950</a>
                                </div>
                            </div>
                            <div class="single-top-destination-item top-destination-item-bg3 black-overlay">
                                <div class="single-top-destination-item-inner">
                                    <h2>Prague</h2>
                                    <a href="#" class="pink-btn">$950</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-sea-tours-area">
        <div class="section-title text-center section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1>Các tours đi biển tuyệt vời nhất</h1>
                        <p>Khám phá bãi biển tuyệt đẹp</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="sea-tours-columns padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sea-tours-carousel-hp1-columns owl-carousel">
                            <div class="single-sea-tours-item">
                                <div class="single-sea-tours-image single-sea-tours-image1 black-overlay ">
                                    <a href="#" class="pink-btn">$1500</a>
                                    <h2>South America</h2>
                                </div>
                                <div class="single-sea-tours-text">
                                    <h5><a href="tours-details.html">South America - 5 Days in Lake Tahoe</a></h5>
                                    <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 5 Days</a>
                                    </span>
                                    <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline dark-star"></i></a>
                                    </span>
                                    <span class="post-review-count"><a href="#">(2 Reviews)</a></span>
                                </div>
                            </div>
                            <div class="single-sea-tours-item">
                                <div class="single-sea-tours-image single-sea-tours-image2 black-overlay">
                                    <a href="#" class="pink-btn">$1150</a>
                                    <h2>British Islands</h2>
                                </div>
                                <div class="single-sea-tours-text">
                                    <h5><a href="tours-details.html">Islands - 7 Days in Popular Place</a></h5>
                                    <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 7 Days</a>
                                    </span>
                                    <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline dark-star"></i></a>
                                    </span>
                                    <span class="post-review-count"><a href="#">(5 Reviews)</a></span>
                                </div>
                            </div>
                            <div class="single-sea-tours-item">
                                <div class="single-sea-tours-image single-sea-tours-image3 black-overlay">
                                    <a href="#" class="pink-btn">$1150</a>
                                    <h2>Banff</h2>
                                </div>
                                <div class="single-sea-tours-text">
                                    <h5><a href="tours-details.html">Banff - 3 Days in Popular Place</a></h5>
                                    <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 3 Days</a>
                                    </span>
                                    <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline dark-star"></i></a>
                                    </span>
                                    <span class="post-review-count"><a href="#">(3 Reviews)</a></span>
                                </div>
                            </div>
                            <div class="single-sea-tours-item">
                                <div class="single-sea-tours-image single-sea-tours-image2 black-overlay">
                                    <a href="#" class="pink-btn">$1150</a>
                                    <h2>British Islands</h2>
                                </div>
                                <div class="single-sea-tours-text">
                                    <h5><a href="tours-details.html">Islands - 7 Days in Popular Place</a></h5>
                                    <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 7 Days</a>
                                    </span>
                                    <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline dark-star"></i></a>
                                    </span>
                                    <span class="post-review-count"><a href="#">(5 Reviews)</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="weekend-europe-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Weekend tour in Europe, Paris</h1>
                        <h4>$350</h4>
                        <p>Northern Ireland’s is now contingent. Britain is getting a divorce Northern Ireland is being
                            offered a trial separation for Britain there is a one</p>
                        <a href="tours.html" class="pink-btn">View more Tours</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="padding-bottom footer-top-area">
        <div class="counter-up-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-counter-up-item">
                            <div class="single-counter-up-item-image">
                                <img src="assets/img/counter-up-img1.png" alt="">
                            </div>
                            <div class="single-counter-up-item-text">
                                <h1><span class="counter">15,050</span></h1>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-counter-up-item">
                            <div class="single-counter-up-item-image">
                                <img src="assets/img/counter-up-img2.png" alt="">
                            </div>
                            <div class="single-counter-up-item-text">
                                <h1><span class="counter">2130</span></h1>
                                <p>Amazing Tours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-counter-up-item">
                            <div class="single-counter-up-item-image">
                                <img src="assets/img/counter-up-img3.png" alt="">
                            </div>
                            <div class="single-counter-up-item-text">
                                <h1><span class="counter">5050</span></h1>
                                <p>In Business</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-counter-up-item">
                            <div class="single-counter-up-item-image">
                                <img src="assets/img/counter-up-img4.png" alt="">
                            </div>
                            <div class="single-counter-up-item-text">
                                <h1><span class="counter">106</span></h1>
                                <p>Award Winning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-title text-center clients-speech-title-hp1 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <h1>Phản hồi khách hàng</h1>
                        <!-- <p>Explore a different way to travel</p> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="happy-clients-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="happy-clients-carousel owl-carousel">
                            <div data-dot="1" class="happy-client-single-item">
                                <div class="client-details-div">
                                    <div class="client-image-box client-image-one"></div>
                                    <div class="client-name-text">
                                        <h5>Reta Schmidt</h5>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="client-quote-para">
                                    <p>Seconds because, when I came to again I was still la
                                        ughing at Jonah timothy Simons the actor who plays
                                        Jonah responded on Twitter hahahahahahaha oh my
                                        god oh my god He promised. </p>
                                </div>
                            </div>
                            <div data-dot="2" class="happy-client-single-item">
                                <div class="client-details-div">
                                    <div class="client-image-box client-image-two"></div>
                                    <div class="client-name-text">
                                        <h5>Daphnee Schoen</h5>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="client-quote-para">
                                    <p>Significant slowdown in the rate of air quality impro
                                        vement as a result of the ramping up of industrial
                                        activity around Beijing Li claimed Last December ten
                                        of thousands of smog refugees .</p>
                                </div>
                            </div>
                            <div data-dot="3" class="happy-client-single-item">
                                <div class="client-details-div">
                                    <div class="client-image-box client-image-three"></div>
                                    <div class="client-name-text">
                                        <h5>Danielle Bechtelar</h5>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="client-quote-para">
                                    <p>Alongside Rouhani Referring to the marginalisation
                                        of reformists after the 2009 disputed presidential
                                        vote which gave hardliner Mahmoud Ahmadinejad
                                        a second term in office Jahangiri.</p>
                                </div>
                            </div>
                            <div data-dot="4" class="happy-client-single-item">
                                <div class="client-details-div">
                                    <div class="client-image-box client-image-one"></div>
                                    <div class="client-name-text">
                                        <h5>Reta Schmidt</h5>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="client-quote-para">
                                    <p>Seconds because, when I came to again I was still la
                                        ughing at Jonah timothy Simons the actor who plays
                                        Jonah responded on Twitter hahahahahahaha oh my
                                        god oh my god He promised. </p>
                                </div>
                            </div>
                            <div data-dot="" class="happy-client-single-item">
                                <div class="client-details-div">
                                    <div class="client-image-box client-image-three"></div>
                                    <div class="client-name-text">
                                        <h5>Danielle Bechtelar</h5>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="client-quote-para">
                                    <p>Seconds because, when I came to again I was still la
                                        ughing at Jonah timothy Simons the actor who plays
                                        Jonah responded on Twitter hahahahahahaha oh my
                                        god oh my god He promised. </p>
                                </div>
                            </div>
                            <div data-dot="" class="happy-client-single-item">
                                <div class="client-details-div">
                                    <div class="client-image-box client-image-two"></div>
                                    <div class="client-name-text">
                                        <h5>Daphnee Schoen</h5>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="client-quote-para">
                                    <p>Seconds because, when I came to again I was still la
                                        ughing at Jonah timothy Simons the actor who plays
                                        Jonah responded on Twitter hahahahahahaha oh my
                                        god oh my god He promised. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop