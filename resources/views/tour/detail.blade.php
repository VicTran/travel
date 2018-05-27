@extends('layouts.master')
@section('title')
    Travel Tour
@endsection
@section('content')

    <!--page-welcome-area start -->
    <!--tours-details-area-content start -->
    <div class="tours-details-area-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="tours-details-content-left">
                        <div class="tours-gallery-heading">
                            <h2>{{$tour->name}}</h2>
                            <h4>{{$tour->days}} Days</h4>
                        </div>
                        <div class="tours-details-gallery owl-carousel padding-bottom">
                            @foreach($tourDetailImages as $tourDetailImage)
                                <div class="tours-details-gallery-single"
                                     data-dot="<img src='{{asset($tourDetailImage->path)}}' alt=''>">
                                    <img src="{{asset($tourDetailImage->path)}}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tours-details-menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#detail" aria-controls="detail" role="tab" data-toggle="tab">Detail</a></li>
                            <li><a href="#itinerary" aria-controls="itinerary" role="tab" data-toggle="tab">Itinerary</a></li>
                            <li><a href="#map" aria-controls="map" role="tab" data-toggle="tab">Map</a></li>
                            <li><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="tab-content tours-details-tab-content padding-top">
                        <div role="tabpanel" class="tab-pane fade in active" id="detail">
                            <div class="tours-details-menu-bottom">
                                <h2>About Detail </h2>
                                {!! $tour->content !!}
                            </div>
                            <div class="tourist-details-information">
                                <div class="tourist-details-single-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Departure Time</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <p>5 Hours Before Flight Time</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tourist-details-single-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Included And Not</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li>{{$tour->days}} Nights Hotel Accomodation</li>
                                                <li>All Drinks</li>
                                                <li>All Tickets Meuseum</li>
                                                <li class="crossed-list">Guide Service Fee</li>
                                                <li class="crossed-list">Any Private Expenses</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="itinerary">
                            <div class="tourist-details-information">
                                <div class="tourist-details-single-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Departure Time</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <p>5 Hours Before Flight Time</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tourist-details-single-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Included And Not</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li>{{$tour->days}} Nights Hotel Accomodation</li>
                                                <li>All Drinks</li>
                                                <li>All Tickets Meuseum</li>
                                                <li class="crossed-list">Guide Service Fee</li>
                                                <li class="crossed-list">Any Private Expenses</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="map">
                            <div class="tours-details-menu-bottom">
                                <h2>About South America</h2>
                               {!! $tour->content !!}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="reviews">
                            <div class="tourist-details-information">
                                <div class="tourist-details-single-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Departure Time</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <p>5 Hours Before Flight Time</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tourist-details-single-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Included And Not</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li>{{$tour->days}} Nights Hotel Accomodation</li>
                                                <li>All Drinks</li>
                                                <li>All Tickets Meuseum</li>
                                                <li class="crossed-list">Guide Service Fee</li>
                                                <li class="crossed-list">Any Private Expenses</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tours-details-content-right">
                        <div class="right-details-form padding-bottom">
                            <h3><span>Price</span> ${{$tour->price}}</h3>
                            <h4>Book the tour</h4>
                            <form action="{{route('tours.saveBook',['id'=>$tour->id])}}" enctype="multipart/form-data" method="POST">
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
                                <textarea name="details-message" id="details-message" cols="30" rows="10" placeholder="Message"></textarea>
                                <button type="submit" class="pink-btn">Book now</button>
                            </form>
                        </div>

                        <div class="why-book-us">
                            <h4>Why Book With Us?</h4>
                            <a href="#" class="why-book-us-btn"><i class="zmdi zmdi-money"></i> No-hassle best price guarantee</a>
                            <a href="#" class="why-book-us-btn"><i class="zmdi zmdi-account"></i> Customer care available 24/7</a>
                            <a href="#" class="why-book-us-btn"><i class="zmdi zmdi-account"></i> Free Travel Insureance</a>
                        </div>

                        <div class="need-travel-help">
                            <h4>Need Travel Help?</h4>
                            <p>Do not hesitage to give us a call. We are an expert team and we are happy to talk to you.</p>
                            <h3><i class="zmdi zmdi-phone"></i>(799) 376-4681</h3>
                            <a href="mailto:Stroman.rogers@gmail.com"><i class="zmdi zmdi-email"></i> Stroman.rogers@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--tours-details-area-content end -->
    <!--footer-area start -->

    <!--footer-area end -->

    <!--jquery.min.js-->


@endsection

