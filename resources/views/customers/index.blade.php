@extends('adminlte::page')

@section('title', 'List customers ')
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">


@stop

@section('content_header')
    <h1>
        List Customer
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List customers</li>
    </ol>
@stop

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12" style="padding-bottom: 5px;">
                <a href="{{route('customer.create')}}" class="col-xs-2 btn btn-success btn-lg pull-right"> Create </a>
            </div>
            <div class="col-xs-12">
                @if(count($customers) > 0)
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Birth Day</th>
                                    <th>Gender</th>
                                    <th>Created at</th>
                                    <th>Exit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($customers as $key => $customer)
                                    <tr>
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$customer->first_name}}
                                        </td>
                                        <td>
                                            {{$customer->last_name}}
                                        </td>
                                        <td>
                                            {{$customer->email}}
                                        </td>
                                        <td>
                                            {{$customer->phone}}
                                        </td>
                                        <td>
                                            {{$customer->birthdate}}
                                        </td>
                                        <td>
                                            @if($customer->gender ==1)
                                                Male
                                            @else
                                                Female
                                            @endif
                                        </td>
                                        <td>
                                            {{$customer->created_at}}
                                        </td>
                                        <td>
                                            <a href="{{route('customer.edit',['id' => $customer->id])}}"
                                               class="btn btn-block btn-info btn-sm">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('customer.delete', ['id' => $customer->id])}}"
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
                                {{ $customers->links() }}
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