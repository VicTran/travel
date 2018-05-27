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
                            <h1>Our Tours</h1>
                            <div class="page-title-menu">
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('tours.index')}}">Tours</a></li>
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
    <div class="destinations-page-content-area section-padding">
        <div class="sea-tours-columns padding-bottom">
            <div class="container">
                <div class="row">
                    @foreach($tours as $tour)
                        <div class="col-sm-4">
                            <div class="single-sea-tours-item">
                                <div class="single-sea-tours-image single-sea-tours-image1 black-overlay ">
                                    <a href="{{route('tours.show',['id'=>$tour->id])}}" class="pink-btn">${{$tour->price}}</a>
                                    <h2>{{$tour->name}}</h2>
                                </div>
                                <div class="single-sea-tours-text">
                                    <a href="{{route('tours.show',['id'=>$tour->id])}}"> <h5>{{$tour->name}}</h5></a>
                                    <span class="post-day-count">
                                        <i class="zmdi zmdi-time"></i> {{$tour->days}} ngàys
                                    </span>
                                    <span class="post-review-stars">
                                        @for ($i = 1; $i <= $tour->star; $i++)
                                            <i class="zmdi zmdi-star-outline"></i>
                                        @endfor
                                    </span>
                                    <span class="post-review-count">({{$tour->number_booking}} Reviews)</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4">
                    {{$tours->links()}}
                </div>
            </div>
        </div>
        <div class="sea-tours-columns padding-bottom" hidden>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-sea-tours-item">
                            <div class="single-sea-tours-image single-sea-tours-image1 black-overlay ">
                                <a href="#" class="pink-btn">$1500</a>
                                <h2>Nam Mỹ</h2>
                            </div>
                            <div class="single-sea-tours-text">
                                <h5>Nam Mỹ - 5 ngày ở hồ Tahoe</h5>
                                <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 5 ngày</a>
                                    </span>
                                <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </span>
                                <span class="post-review-count"><a href="#">(5 Reviews)</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-sea-tours-item">
                            <div class="single-sea-tours-image single-sea-tours-image2 black-overlay">
                                <a href="#" class="pink-btn">$1500</a>
                                <h2>Nam Mỹ</h2>
                            </div>
                            <div class="single-sea-tours-text">
                                <h5>Nam Mỹ- 5 ngày ở hồ Tahoe</h5>
                                <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 5 ngày</a>
                                    </span>
                                <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </span>
                                <span class="post-review-count"><a href="#">(5 Reviews)</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-sea-tours-item">
                            <div class="single-sea-tours-image single-sea-tours-image3 black-overlay">
                                <a href="#" class="pink-btn">$1500</a>
                                <h2>Nam Mỹ</h2>
                            </div>
                            <div class="single-sea-tours-text">
                                <h5>Nam Mỹ - 5 ngày ở hồ Tahoe</h5>
                                <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 5 ngày</a>
                                    </span>
                                <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </span>
                                <span class="post-review-count"><a href="#">(5 Reviews)</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sea-tours-columns" hidden>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-sea-tours-item">
                            <div class="single-sea-tours-image single-sea-tours-image1 black-overlay ">
                                <a href="#" class="pink-btn">$1500</a>
                                <h2>Nam Mỹ</h2>
                            </div>
                            <div class="single-sea-tours-text">
                                <h5>Nam Mỹ - 5 ngày ở hồ Tahoe</h5>
                                <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 5 Days</a>
                                    </span>
                                <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </span>
                                <span class="post-review-count"><a href="#">(5 Reviews)</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-sea-tours-item">
                            <div class="single-sea-tours-image single-sea-tours-image2 black-overlay">
                                <a href="#" class="pink-btn">$1500</a>
                                <h2>Nam Mỹ</h2>
                            </div>
                            <div class="single-sea-tours-text">
                                <h5>Nam Mỹ - 5 ngày ở hồ Tahoe</h5>
                                <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 5 ngày</a>
                                    </span>
                                <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </span>
                                <span class="post-review-count"><a href="#">(5 Reviews)</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-sea-tours-item">
                            <div class="single-sea-tours-image single-sea-tours-image3 black-overlay">
                                <a href="#" class="pink-btn">$1500</a>
                                <h2>Nam Mỹ</h2>
                            </div>
                            <div class="single-sea-tours-text">
                                <h5>Nam Mỹ - 5 ngày ở hồ Tahoe</h5>
                                <span class="post-day-count">
                                        <a href="#"><i class="zmdi zmdi-time"></i> 5 ngày</a>
                                    </span>
                                <span class="post-review-stars">
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                    </span>
                                <span class="post-review-count"><a href="#">(5 Reviews)</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

