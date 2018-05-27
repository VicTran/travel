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
                        <h1>Rockstar Team</h1>
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
                                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                            <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <h4>Dixie Armstrong</h4>
                                <p>CEO</p>
                            </div>
                            <div class="single-team-member">
                                <div class="team-member-image team-member-image2">
                                    <div class="team-member-socials">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    </div>
                                </div>
                                <h4>Katlynn Pouros</h4>
                                <p>Marketing Manager</p>
                            </div>
                            <div class="single-team-member">
                                <div class="team-member-image team-member-image3">
                                    <div class="team-member-socials">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    </div>
                                </div>
                                <h4>Daphnee Schoen</h4>
                                <p>Customer Support</p>
                            </div>
                            <div class="single-team-member">
                                <div class="team-member-image team-member-image4">
                                    <div class="team-member-socials">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    </div>
                                </div>
                                <h4>Norbert Wunsch</h4>
                                <p>Europe Tour Expert</p>
                            </div>
                            <div class="single-team-member">
                                <div class="team-member-image team-member-image8">
                                    <div class="team-member-socials">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    </div>
                                </div>
                                <h4>Gerard Parisian</h4>
                                <p>Europe Tour Expert</p>
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

        <div class="best-for-clients-columns text-center hp2-area-bg about-us-best-for-c">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="best-for-clients-single-item">
                            <img src="assets/img/best-for-clients-pink-img-1.png" alt="">
                            <h4>Best Destinations</h4>
                            <p>West to Hebei and Heilon gjiang further east
                                would be affectd by the air pollution betwen
                                Visibility in Beijing had plummeted .</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="best-for-clients-single-item">
                            <img src="assets/img/best-for-clients-pink-img-2.png" alt="">
                            <h4>Best Price Guarantee</h4>
                            <p>Significant slowdown in the rate of air quality
                                improvement as a result of the ramping up of
                                industrial activity around Beijing.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="best-for-clients-single-item">
                            <img src="assets/img/best-for-clients-pink-img-3.png" alt="">
                            <h4>Super Fast Booking</h4>
                            <p>Concentrations of particulates such as PM10
                                and PM2.5 had been linked to lung cancer an
                                strokes Li the Greenpeace activist.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop