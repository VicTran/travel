@extends('layouts.master')
@section('title')
    Travel Tour
@endsection
@section('slide-index')
    <div class="page-title-area black-overlay text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner">
                        <div class="page-title-inner-table-cell">
                            <h1>Hotel details</h1>
                            <div class="page-title-menu">
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="#">Hotel details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="car-details-page-content-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="car-details-left-content">
                        <div class="car-details-left-top">
                            <h3>{{$hotel->name}}</h3>
                            <div class="single-car-rating">
                                @for ($i = 1; $i <= $hotel->star; $i++)
                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                @endfor
                            </div>
                            <div class="car-price">
                                <h4>${{$hotel->price}} <span>Per night</span></h4>
                            </div>
                            <div class="car-details-box">
                                <img src="{{asset($hotel->img)}}" alt="">
                                <h4>Description</h4>
                                {!! $hotel->description !!}
                            </div>
                        </div>
                        <div class="car-list-bottom-popular padding-top">
                            <h3>Popular Hotel</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="car-list-single-box">
                                        <div class="car-list-single-box-image hotel-list-single-box-image3">
                                            <div class="car-list-image-inner">
                                                <h3>Sarina Hotel</h3>
                                                <div class="single-car-rating">
                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-list-single-box-text">
                                            <h4>$250 <span>Per night</span></h4>
                                            <p>Saturn and its innermost ring on April 26, the
                                                first of 22 such encounters before will plunge
                                                into’s atmosphere in September.</p>
                                            <div class="car-list-buttons">
                                                <a href="cart.html" class="pink-btn">Book now</a>
                                                <a href="#" class="car-share-btn"><i class="zmdi zmdi-share"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="car-list-single-box">
                                        <div class="car-list-single-box-image hotel-list-single-box-image4">
                                            <div class="car-list-image-inner">
                                                <h3>Amasya Hotel</h3>
                                                <div class="single-car-rating">
                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-list-single-box-text">
                                            <h4>$250 <span>Per night</span></h4>
                                            <p>Pound oculus, a lens that will give the impres
                                                sion of seeing the fish from the bottom huge
                                                cocktail glass iry and exposition. </p>
                                            <div class="car-list-buttons">
                                                <a href="cart.html" class="pink-btn">Book now</a>
                                                <a href="#" class="car-share-btn"><i class="zmdi zmdi-share"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-details-right-sidebar">
                        <div class="car-details-right-sidebar-single car-details-map">
                            <div class="car-details-address">
                                <h2>Map</h2>
                                <p> {{$hotel->address}}</p>
                                <a href="tel:{{$hotel->phone}}"><i class="zmdi zmdi-phone"></i>{{$hotel->phone}}</a>
                                <a href="mailto:ecollier@gmail.com"><i class="zmdi zmdi-star"></i>{{$hotel->email}}</a>
                                <a href="#"><i class="zmdi zmdi-star"></i>{{$hotel->web_address}}</a>
                            </div>
                        </div>
                        <div class="car-details-right-sidebar-single car-details-booking">
                            <h3>Booking Details</h3>
                            <ul>
                                <li><b>Category</b> : Hotels</li>
                                <li><b>Price</b> : ${{$hotel->price}}/ Par Person</li>
                                <li><b>Date</b> : {{$hotel->date}}</li>
                                <li><b>Number of People</b> : {{$hotel->number_people}} Adult</li>
                                <li><b>Hotel Class</b> : {{$hotel->star}} Star</li>
                                <li><b>Cable Tv</b> : @if($hotel->cable_tv ==1 ) Free @else No @endif</li>
                                <li><b>Telephone</b> : @if($hotel->telephone_service ==1 ) Free @else No @endif</li>
                                <li><b>Room Service</b> : @if($hotel->room_service ==1 ) Included @else No @endif</li>
                                <li><b>Cancellation</b> : @if($hotel->room_service ==1 ) Strict @else Included @endif
                                </li>
                            </ul>
                        </div>
                        <br>
                        <div class="car-details-right-sidebar-single car-details-booking">
                            <h3>Book the tour</h3>
                            <form action="{{route('tours.saveBook',['id'=>$hotel->id])}}" enctype="multipart/form-data"
                                  method="POST">
                                {{ csrf_field() }}
                                <input type="text" placeholder="Name" name="name">
                                <input type="email" placeholder="Email" name="email">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="select-item-adults-kids">
                                            Adults
                                            <select name="adult-select" id="adult-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="select-item-adults-kids">
                                            Kids
                                            <select name="kids-select" id="kids-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" placeholder="Phone" name="phone">
                                <input type="text" placeholder="Date Book" name="date-book">
                                <button type="submit" class="pink-btn">Book now</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-widget para-widget">
                        <img src="assets/img/footer-logo.png" class="footer-logo" alt="">
                        <p>Chinese state media captured the severity of the an
                            city’s latest air pollution crisis which local authorities
                            blamed largely on sand that winds .</p>
                        <p>&copy; 2017 Crazycafe.All Rights Reserved.<br>
                            Designed by <i class="zmdi zmdi-favorite-outline"></i> <a href="#">crazycafe.net</a></p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="footer-widget list-widget">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">Press Centre</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Travel News</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget list-widget">
                        <h4>Recent Posts</h4>
                        <ul>
                            <li><a href="#">Standard Blog Post</a></li>
                            <li><a href="#">Amazing Fullwidth Post</a></li>
                            <li><a href="#">Amazing Place</a></li>
                            <li><a href="#">Quote Post</a></li>
                            <li><a href="#">Link Post</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget pink-icon-widget">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><a href="tel:(799)-376-4681">(799) 376-4681</a></li>
                            <li><a href="mailto:Stroman.rogers@gmail.com">Stroman.rogers@gmail.com</a></li>
                            <li><a href="#">6281 Liana Extensions,
                                    Lemkeport, NY </a></li>
                        </ul>

                        <div class="social-links-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

