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
                            <form class="form" method="POST" action="{{route('page.search')}}"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Expense :</label>
                                    <select class="form-control" name="expense">
                                        <option value="e1">Low</option>
                                        <option value="e2">Medium</option>
                                        <option value="e3">High</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Time :</label>
                                    <select class="form-control" name="time">
                                        <option value="e4">During the day</option>
                                        <option value="e5">2-5 Days</option>
                                        <option value="e6">5-7 Days</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle :</label>
                                    <select class="form-control" name="vehicle">
                                        <option value="e7">Bicycle</option>
                                        <option value="e8">Motorbike</option>
                                        <option value="e9">Bus</option>
                                        <option value="e10">Coach</option>
                                        <option value="e11">Car</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Range :</label>
                                    <select class="form-control" name="range">
                                        <option value="e12"><100 KM</option>
                                        <option value="e13">100-200KM</option>
                                        <option value="e14"><200 KM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Scenery :</label>
                                    <select class="form-control" name="scenery">
                                        <option value="e15">Sea</option>
                                        <option value="e16">Mountain</option>
                                        <option value="e17">Relic</option>
                                    </select>
                                </div>
                                <br>
                                <div class=" col-md-offset-4 col-md-8" style="padding-top: 20px;">
                                    <div class="hp2-form-single-div  hp2-form-single-button">
                                        <button type="submit" class="pink-btn">Find Hotel</button>
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
        </div>
    </div>


@endsection

