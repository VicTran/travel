@extends('adminlte::page')

@section('title', 'Edit car')

@section('content_header')
    <h1>
        Edit car
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('car.index') }}"><i class="fa fa-dashboard"></i> List car</a></li>
        <li class="active">Edit car</li>
    </ol>
@stop

@section('content')
    <form class="form" method="POST" action="{{route('car.update',['id'=> $car->id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">General Element Car</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- text input -->
                <div class="form-group">
                    <label>Category car</label>
                    <input name="name" type="text" class="form-control"
                           placeholder="Input name car...." value="{{$car->name}}">
                </div>
                <div class="form-group">
                    <label>Star</label>
                    <select class="form-control" name="star">
                        <option value="1" @if($car->star ==1) active @endif>1</option>
                        <option value="2" @if($car->star ==2) active @endif>2</option>
                        <option value="3" @if($car->star ==3) active @endif>3</option>
                        <option value="4" @if($car->star ==4) active @endif>4</option>
                        <option value="5" @if($car->star ==5) active @endif>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Number of People</label>
                    <input name="number_people" type="number" class="form-control" value="{{$car->number_people}}"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label>Cary bag</label>
                    <input name="cary_bag" type="number" class="form-control" value="{{$car->cary_bag}}"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label>Date:</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" name="date" value="{{$car->date}}">
                    </div>
                    <!-- /.input group -->
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <div class="input-group">
                        <input name="price" type="number" class="form-control"
                               placeholder="Input price: 1000" value="{{$car->price}}">
                        <span class="input-group-addon">$</span>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Input Detail</h3>
                    </div>
                    <div class="box-body">
                        <div id="option_product" class="container col-md-12">
                            <ul class="nav nav-tabs">
                                <li >
                                    <a href="#description" data-toggle="tab" class="hidden"> Description </a>
                                </li>
                                <li>
                                    <a href="#detail" data-toggle="tab" class="hidden"> Detail </a>
                                </li>
                                <li class="active">
                                    <a href="#spec" data-toggle="tab"  > Specs </a>
                                </li>
                                <li>
                                    <a href="#images" data-toggle="tab"> Image </a>
                                </li>
                                <li>
                                    <a href="#seo" data-toggle="tab" class="hidden"> SEO </a>
                                </li>
                            </ul>

                            <div class="tab-content col-md-12 clearfix">
                                <div class="tab-pane" id="description">
                                    <div class="description_language">
                                        <div class="col-md-12">
                                            <h4> Description </h4>
                                            <textarea class="form-control summernote" name="description_default"
                                                      rows="3">{{old('description_default')}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="detail">
                                    <div class="details">
                                        <div class="col-md-12">
                                            <h4> Details </h4>
                                            <textarea class="form-control summernote" name="detail_default"
                                                      rows="3">{{$car->description}}</textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane active" id="spec">
                                    <div class="specs">
                                        <div class="col-md-12">
                                            <h4> Description </h4>
                                            <textarea name="txtContent" class="form-control " id="editor1">{{$car->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="images">
                                    <div class="col-md-6">
                                        <div class="form-group product_image">
                                            <label> Image Car</label>
                                            <br/>
                                            <img src="{{url(''.$car->image_src.'')}}" alt="{{$car->image_src}}" width="150"
                                                 height="150">
                                            <br/>
                                            <input type="file" name="image"> <br/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group images">
                                            <label>Images Detail Car</label>
                                            <br>
                                            <img src="{{url(''.$car->image_detail_src.'')}}" alt="{{$car->image_detail_src}}" width="150"
                                                 height="150">
                                            <br>
                                            <input type="file" name="fImages[]"> <br/>
                                        </div>
                                        <button type="button" class="btn btn-primary add_image"><i
                                                    class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="tab-pane" id="seo">
                                    <div class="col-md-12">
                                        <div class="sectionseparate" id="sectionseos">
                                            <h3>Search engine listing preview</h3>
                                            <p>Add a description to see how this collection might appear in a search
                                                engine
                                                listing.</p>
                                            <hr>
                                            <div class="ui-form__label-wrapper">
                                                <label class="next-label" for="seo-title-tag">Meta title</label>
                                                <span class="type--subdued" bind="titleCharsRemainingText()"> 0 of 70 characters used</span>
                                            </div>
                                            <input name="meta_title" class="form-control" autofocus="autofocus"
                                                   type="text"
                                                   value="{{old('meta_title')}}">
                                            <br>
                                            <div class="ui-form__label-wrapper">
                                                <label class="next-label" for="seo-description-tag">Meta
                                                    description</label>
                                                <span class="type--subdued" bind="descriptionCharsRemainingText()"> 0 of 160 characters used</span>
                                            </div>
                                            <textarea name="meta_description"
                                                      class="form-control">{{old('meta_description')}}</textarea>
                                            <br>
                                            <div class="ui-form__label-wrapper">
                                                <label class="next-label" for="object-handle">URL and handle</label>
                                            </div>
                                            <div class="input-group"><span class="urlandhandle input-group-addon">http://etordev.life/products/</span>
                                                <input name="slug" class="form-control" type="text"
                                                       value="{{old('slug')}}">
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.form group -->

                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="row">
                <div class="box-footer">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-success btn-lg">Update</button>
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('car.index')}}">Cancel</a>
                    </div>
                </div>
            </div>
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