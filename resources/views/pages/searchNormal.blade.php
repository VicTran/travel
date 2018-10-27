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
                        <h1>Tours List</h1>
                        <div class="page-title-menu">
                            <ul>
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('tours.index')}}">Tours list</a></li>
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
                    <div class="car-list-top-form-inner">
                        <form class="form" method="POST" action="{{route('page.searchNormal')}}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group" >
                                <label>Name Tour :</label>
                               <input name="nameTour" type="text">
                            </div>

                            <div class=" col-md-8" >
                                <div class="hp2-form-single-div  hp2-form-single-button" >
                                    <button type="submit" style="margin-top: 32px;">Find Hotel</button>
                                </div>
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
                @foreach($tours as $tour)
                <div class="col-sm-4">
                    <div class="single-sea-tours-item">
                        <div class="single-sea-tours-image single-sea-tours-image1 black-overlay ">
                            <a href="{{route('tours.show',['id'=>$tour->id])}}" class="pink-btn">${{$tour->price}}</a>
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
    </div>
</div>


@endsection

