@extends('adminlte::page')

@section('title', 'Create rules')

@section('content_header')
    <h1>
        Create Rules
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('rules.index') }}"><i class="fa fa-dashboard"></i> List Rules</a></li>
        <li class="active">Create customer</li>
    </ol>
@stop

@section('content')
    <form class="form" method="POST" action="{{route('rules.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">General Rules</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- text input -->
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
                <div class="form-group">
                    <label>Tour :</label>
                    <select class="form-control" name="tour_id">
                        @foreach($tours as $tour)
                            <option value="{{$tour->id}}">{{$tour->name}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="row">
                <div class="box-footer">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-success btn-lg">Create</button>
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('rules.index')}}">Cancel</a>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </form>
@stop

@section('css')
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

@stop

@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
        CKEDITOR.replace('editor1', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });

        $('document').ready(function() {
            $('.add_image').click(function(){
                $('.images').append('<input type="file" name="fImages[]"><br/>');
            });
        })
    </script>
@stop