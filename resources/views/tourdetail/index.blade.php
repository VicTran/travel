@extends('adminlte::page')

@section('title', 'List tours')
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">


@stop

@section('content_header')
        <h1>
            List tours
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List tours</li>
        </ol>
@stop

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12" style="padding-bottom: 5px;">
                <a href="{{route('tour.create')}}" class="col-xs-2 btn btn-success btn-lg pull-right">Create Tour</a>
            </div>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List Tours</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tour Name</th>
                                <th>Price</th>
                                <th>Starting Point </th>
                                <th>Created at</th>
                                <th>Edit Tour</th>
                                <th>Delete Tour</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tours as $key => $tour)
                                <tr>
                                    <td>
                                        {{$key +1 }}
                                    </td>
                                    <td>
                                        {{$tour->name}}
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
                                            <i class="fa fa-edit"></i>Edit
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