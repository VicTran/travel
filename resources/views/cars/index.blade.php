@extends('adminlte::page')

@section('title', 'List cars ')
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">


@stop

@section('content_header')
    <h1>
        List Customer
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List cars</li>
    </ol>
@stop

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12" style="padding-bottom: 5px;">
                <a href="{{route('car.create')}}" class="col-xs-2 btn btn-success btn-lg pull-right"> Create </a>
            </div>
            <div class="col-xs-12">
                @if(count($cars) > 0)
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List customers</h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Number of People</th>
                                    <th>Cary bag</th>
                                    <th>Date</th>
                                    <th>Created at</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($cars as $key => $car)
                                    <tr>
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$car->name}}
                                        </td>
                                        <td>
                                            {{$car->price}}
                                        </td>
                                        <td>
                                            {{$car->number_people}}
                                        </td>
                                        <td>
                                            {{$car->cary_bag}}
                                        </td>
                                        <td>
                                            {{$car->date->format('l jS \\of F Y')}}
                                        </td>
                                        <td>
                                            {{$car->created_at}}
                                        </td>
                                        <td>
                                            <a href="{{route('car.edit',['id' => $car->id])}}"
                                               class="btn btn-block btn-info btn-sm">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('car.delete', ['id' => $car->id])}}"
                                               onclick="return confirm('Are you sure delete?')"
                                               class="btn btn-block btn-danger btn-sm">
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
                                {{ $cars->links() }}
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                @else
                    <div><h1> Sorry, no customers </h1></div>
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