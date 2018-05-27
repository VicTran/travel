@extends('adminlte::page')

@section('title', 'Tạo tour')

@section('content_header')
    <h1>
        Danh sách tour
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('tour.index') }}"><i class="fa fa-dashboard"></i> Danh sách tour</a></li>
        <li class="active">Tạo tour</li>
    </ol>
@stop

@section('content')
    <form class="form" method="POST" action="{{route('tour.update',['id'=>$tour->id])}}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <!-- text input -->
                <div class="form-group">
                    <label>Name tour</label>
                    <input name="name" type="text" class="form-control" value="{{$tour->name}}">
                </div>
                <div class="form-group">
                    <label>Starting Point</label>
                    <input name="starting_point" type="text" class="form-control"
                           value="{{$tour->starting_point}}">
                </div>
                <div class="form-group">
                    <label>Start date:</label>

                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="start_date" class="form-control pull-right" id="datepicker"
                               value="{{$tour->date_start}}">
                    </div>
                    <!-- /.input group -->
                </div>
                <div class="form-group">
                    <label>Price tour:</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input name="price" type="number" class="form-control"
                               value="{{$tour->price}}">
                        <span class="input-group-addon">VND</span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Cartegory Tour</label>
                    <select class="form-control" name="cartegory_tour">
                        <option value="1" @if($tour->cartegory_tour ==1 ) selected @endif> Sea </option>
                        <option value="2" @if($tour->cartegory_tour ==2 ) selected @endif>Mountain</option>
                        <option value="3" @if($tour->cartegory_tour ==3 ) selected @endif>ity</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Number booking:</label>
                    <div class="input-group">
                        <span class="input-group-addon"> <span class="fa fa-user"></span></span>
                        <input name="number_booking" type="number" value="{{$tour->number_booking}}" class="form-control">
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Tour Detail</h3>
                    </div>
                    <div class="box-body">
                        <div id="option_product" class="container col-md-12">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#description" data-toggle="tab" class="hidden"> Description </a>
                                </li>
                                <li>
                                    <a href="#detail" data-toggle="tab" class="hidden"> Detail </a>
                                </li>
                                <li>
                                    <a href="#spec" data-toggle="tab"> Description </a>
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
                                                      rows="3">{{old('detail_default')}}</textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane active" id="spec">
                                    <div class="specs">
                                        <div class="col-md-12">
                                            <h4> Description </h4>
                                            <textarea name="txtContent" class="form-control "
                                                      id="editor1">{{$tour->content}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="images">
                                    <div class="col-md-6">
                                        <div class="form-group product_image">
                                            <label>Tour Images</label>
                                            <img src="{{url(''.$tour->image.'')}}" alt="{{$tour->image}}" width="150"
                                                 height="150"> <br/><br/>
                                            <input type="file" name="image"> <br/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group images">
                                            <label>Images Detail</label>
                                            @foreach($tour_images as $tour_image)
                                                <div class="image_detail" data-image-id="{{$tour_image->id}}" id="image_detail_{{$tour_image->id}}">
                                                    <img src="{{url(''.$tour_image->path.'')}}"
                                                         alt="{{url(''.$tour_image->path.'')}}" width="150"
                                                         height="150">

                                                    <button type="button"
                                                            onclick="return confirm('are you delete this image?')"
                                                            class="btn btn-danger delete_image"><i
                                                                class="fa fa-times-circle"></i></button>
                                                </div>

                                            @endforeach
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
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-success btn-lg">Update</button>
                <a type="button" class="btn btn-primary btn-lg" href="{{route('tour.index')}}">Cancel</a>
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
        $('document').ready(function () {
            $('.add_image').click(function () {
                $('.images').append('<input type="file" name="fImages[]"><br/>');
            });
            $('.delete_image').click(function () {
                // /confirm('are you delete this image?');
                $(this).closest('.image_detail').hide();

                $.ajax({
                    url: 'remove/img',
                    type: 'POST',
                    data: {
                        _token: $('input[name="_token"]').val(),
                        tour_image: $(this).closest('.image_detail').find('img').attr('src'),
                        tour_image_id: $(this).closest('.image_detail').attr('data-image-id')
                    },
                    success: function (data) {
                        if (data) {
                            $(this).closest('.image_detail').remove();
                        }
                    },
                    error: function () {
                    }
                })

            })
        });

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
    </script>
@stop