@extends('adminlte::page')

@section('title', 'Create customer')

@section('content_header')
    <h1>
        Create Customer
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('customer.index') }}"><i class="fa fa-dashboard"></i> List Customer</a></li>
        <li class="active">Create customer</li>
    </ol>
@stop

@section('content')
    <form class="form" method="POST" action="{{route('customer.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">General Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- text input -->
                <div class="form-group">
                    <label>First Name :</label>
                    <input name="first_name" type="text" class="form-control"1
                           placeholder="" value="{{old('first_name')}}">
                </div>
                <div class="form-group">
                    <label>Last Name :</label>
                    <input name="last_name" type="text" class="form-control"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label>Email :</label>
                    <input name="email" type="email" class="form-control"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label>Phone Number :</label>
                    <input name="phone" type="number" class="form-control"
                           placeholder="" value="{{old('phone')}}">
                </div>
                <div class="form-group">
                    <label>Birth Day : </label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" name="birthdate">
                    </div>
                    <!-- /.input group -->
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="gender">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="box-footer">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-success btn-lg">Create</button>
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('customer.index')}}">Cancel</a>
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