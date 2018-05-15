@extends('adminlte::page')

@section('title', 'Danh sách tour ')
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">


@stop

@section('content_header')
        <h1>
            Danh sách tour
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Danh sách tour</li>
        </ol>
@stop

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12" style="padding-bottom: 5px;">
                <a href="{{route('tour.create')}}" class="col-xs-2 btn btn-success btn-lg pull-right"> Tạo mới </a>
            </div>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách tuor</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên tour</th>
                                <th>Giá tour</th>
                                <th>Sô ngày </th>
                                <th>Địa điểm xuất phát</th>
                                <th>Chinh sua</th>
                                <th>Xoa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tours as $tour)
                                <tr>
                                    <td>
                                        {{$tour->id}}
                                    </td>
                                    <td>
                                        {{$tour->price}}
                                    </td>
                                    <td>
                                        {{$tour->price}}
                                    </td>
                                    <td>
                                        {{$tour->starting_point}}
                                    </td>
                                    <td>
                                        {{$tour->created_at}}
                                    </td>
                                    <td>
                                        <a href="{{route('tour.edit',['id' => $tour->id])}}" class="btn btn-block btn-info btn-sm">
                                            <i class="fa fa-edit"></i>Chinh sua
                                        </a>
                                    </td>
                                    <td >
                                        <a href="{{route('tour.delete', ['id' => $tour->id])}}" onclick="return confirm('Are you sure delete?')" class="btn btn-block btn-danger btn-sm">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <div class="col-lg-offset-4">
                            {{ $tours->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop



@section('scripts')
    <script> console.log('Hi!'); </script>
@stop