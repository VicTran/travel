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
                            <h1>Hotels List</h1>
                            <div class="page-title-menu">
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('hotels.index')}}">Hotels list</a></li>
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
    <div class="car-list-page-content-area padding-bottom  hotel-list-page-content-area">
        <div class="car-list-top-form padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="car-list-top-form-inner" hidden>
                            <form action="" method="POST">
                                <div class="hp2-form-single-div hp2-form-single-destination">
                                    <h6>Find your hotel</h6>
                                    <input type="text" name="find-hotel" placeholder="Find hotel">
                                </div>
                                <div class="hp2-form-single-div hp2-form-single-adventure">
                                    <h6>Where?</h6>
                                    <select name="flight-form-select" id="flight-form-select">
                                        <option value="1">Choose location</option>
                                        <option value="2">All Categories</option>
                                        <option value="3">All Categories</option>
                                        <option value="4">All Categories</option>
                                        <option value="5">All Categories</option>
                                    </select>
                                </div>
                                <div class="hp2-form-single-div hp2-form-single-counter1">
                                    <h6>Adult:</h6>
                                    <input type="number" name="number" value="1">
                                </div>
                                <div class="hp2-form-single-div hp2-form-single-counter2">
                                    <h6>Child:</h6>
                                    <input type="number" name="number" value="1">
                                </div>
                                <div class="hp2-form-single-div  hp2-form-single-button">
                                    <button type="submit" class="pink-btn">Find Hotel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="car-lists-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="car-list-boxes">
                            <div class="row">
                                @foreach($hotels as $hotel)
                                    <div class="col-sm-4">
                                        <div class="car-list-single-box">
                                            <div class="car-list-single-box-image hotel-list-single-box-image1" style="background-image: url('{{$hotel->img}}')">
                                                <div class="car-list-image-inner">
                                                    <h3>{{$hotel->name}}</h3>
                                                    <div class="single-car-rating">
                                                        @for ($i = 1; $i <= $hotel->star; $i++)
                                                            <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="car-list-single-box-text">
                                                <h4>${{$hotel->price}} <span>Per night</span></h4>
                                                {!! $hotel->description !!}
                                                <div class="car-list-buttons">
                                                    <a href="{{route("hotels.show",["id"=>$hotel->id])}}" class="pink-btn">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

