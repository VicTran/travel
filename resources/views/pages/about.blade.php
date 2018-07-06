@extends('layouts.master')
@section('title')
    Travel
@endsection
@section('slide-index')
    <div class="page-title-area black-overlay text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner">
                        <div class="page-title-inner-table-cell">
                            <h1>About us</h1>
                            <div class="page-title-menu">
                                <ul>
                                    <li><a href="{{route("index")}}">Home</a></li>
                                    <li><a href="#">About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>@endsection

@section('content')

    <div class="aboutus-page-content-area section-padding">
        <div class="welcome-to-travel-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="welcome-to-travel-inner">
                            <div class="welcome-to-travel-inner-left">
                                <h2>Welcome To Travel</h2>
                                <p><span class="big-letter">A</span><span class="big-letter-right-text">fter the sandstorm swept across northern China in the early hours of Thursday.</span> <span class="big-letter-right-text">Sand industrial pollution airpocalypse in the middle of spring Li added</span>China’s official news
                                    Xinhua said at least nine Chinese regions  from Xinjiang and Gansu in the west to Hebei and
                                    Heilongjiang further east would be affected by the air pollution between Thursday and Friday
                                    Visibility in Beijing had plummeted to about capital and wase.</p>
                                <p>Nicotine shaded mist loomed over Beijing on Thursday after a massive sandstorm slammed into the Chinese capital bringing the latest airpocalypse to this smog-choked city Dozens of flig
                                    hts were reportedly cancelled at Beijing’s airport, the world’s second busiest, and authorities
                                    urged residents to stay indoors after levels of tiny .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="welcome-to-travel-inner-right">
                            <img src="assets/img/about-us-top-img1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="counter-up-area text-center counter-up-about section-padding">
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

        <div class="section-title text-center rockstar-section-title padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <h1>Rockstar eam</h1>
                        <p>Explore a different way to travel</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-members-area padding-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="team-member-carousel-about owl-carousel">
                            <div class="single-team-member">
                                <div class="team-member-image team-member-image1">
                                    <div class="team-member-image-inner">
                                        <div class="team-member-socials">
                                             <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h4>Trần Thanh Tùng</h4>
                                <p>Sinh viên lớp việt nhật A - K57</p>
                            </div>
                            <div class="single-team-member">
                                <div class="team-member-image team-member-image2">
                                    <div class="team-member-socials">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </div>
                                </div>
                                <h4>TS.Phạm Văn Hải </h4>
                                <p>Chuyên gia CNTT,  WB, VINASA Ins., FIRST, Enzan In.t
                                    Giảng viên, Bộ môn Hệ thống thông tin, viện Công nghệ Thông tin - Truyền Thông</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-title text-center why-best-title-about padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1>Why We Are Best</h1>
                        <p>Explore a different way to travel</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop