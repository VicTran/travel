@extends('adminlte::page')

@section('title', 'List hotel ')
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">


@stop

@section('content_header')
    <h1>
        List hotel
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List hotel</li>
    </ol>
@stop

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12" style="padding-bottom: 5px;">
                <a href="{{route('hotel.create')}}" class="col-xs-2 btn btn-success btn-lg pull-right"> Tạo mới </a>
            </div>
            <div class="col-xs-12">
                @if(count($hotels) > 0)
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List hotel</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Hotel Name</th>
                                <th>Price</th>
                                <th>Address </th>
                                <th>Phone</th>
                                <th>Create at</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($hotels as $hotel)
                                <tr>
                                    <td>
                                        {{$hotel->id}}
                                    </td>
                                    <td>
                                        {{$hotel->name}}
                                    </td>
                                    <td>
                                        {{$hotel->price}}
                                    </td>
                                    <td>
                                        {{$hotel->address}}
                                    </td>
                                    <td>
                                        {{$hotel->phone}}
                                    </td>
                                    <td>
                                        {{$hotel->created_at}}
                                    </td>
                                    <td>
                                        <a href="{{route('hotel.edit',['id' => $hotel->id])}}" class="btn btn-block btn-info btn-sm">
                                            <i class="fa fa-edit"></i>Chinh sua
                                        </a>
                                    </td>
                                    <td >
                                        <a href="{{route('hotel.delete', ['id' => $hotel->id])}}" onclick="return confirm('Are you sure delete?')" class="btn btn-block btn-danger btn-sm">
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
                            {{ $hotels->links() }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                @else
                    <div><h1> Sorry, no hotels </h1></div>
                @endif
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop



@section('scripts')
    <script> console.log('Hi!'); </script>
@stop