@extends('adminlte::page')

@section('title', 'List rules ')
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">


@stop

@section('content_header')
    <h1>
        List Rules
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List rules</li>
    </ol>
@stop

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12" style="padding-bottom: 5px;">
                <a href="{{route('rules.create')}}" class="col-xs-2 btn btn-success btn-lg pull-right"> Create </a>
            </div>
            <div class="col-xs-12">
                @if(count($rules) > 0)
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List rules</h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Expense</th>
                                    <th>Time</th>
                                    <th>Vehicle</th>
                                    <th>Range</th>
                                    <th>Scenery</th>
                                    <th>Tour</th>
                                    <th>Created at</th>
                                    <th>Exit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($rules as $key => $rule)
                                    <tr>
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            @if($rule->expense =="e1")
                                                Low
                                            @elseif($rule->expense =="e2")
                                                Medium
                                            @elseif($rule->expense =="e3")
                                                High
                                            @endif
                                        </td>
                                        <td>
                                            @if($rule->time =="e4")
                                                During the day
                                            @elseif($rule->time =="e5")
                                                2 -5 Days
                                            @elseif($rule->time =="e6")
                                                5 -7 Days
                                            @endif
                                        </td>
                                        <td>
                                            @if($rule->vehicle =="e7")
                                                Bicycle
                                            @elseif($rule->vehicle =="e8")
                                                Motorbike
                                            @elseif($rule->vehicle =="e9")
                                                Bus
                                            @elseif($rule->vehicle =="e10")
                                                Coach
                                            @elseif($rule->vehicle =="e11")
                                                Car
                                            @endif
                                        </td>
                                        <td>
                                            @if($rule->range =="e12")
                                                <100 KM
                                            @elseif($rule->range =="e13")
                                                100-200KM
                                            @elseif($rule->range =="e14")
                                                <200 KM
                                            @endif
                                        </td>

                                        <td>
                                            @if($rule->scenery =="e15")
                                                Sea
                                            @elseif($rule->scenery =="e16")
                                                Mountain
                                            @elseif($rule->scenery =="e17")
                                                Relic
                                            @endif
                                        </td>
                                        <td>
                                            @foreach($tours as $tour)
                                                @if($rule->tour_id == $tour->id )
                                                    {{$tour->name}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            {{$rule->created_at}}
                                        </td>
                                        <td>
                                            <a href="{{route('rules.edit',['id' => $rule->id])}}"
                                               class="btn btn-block btn-info btn-sm">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{route('rules.delete', ['id' => $rule->id])}}"
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
                                {{ $rules->links() }}
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                @else
                    <div><h1> Sorry, no rules </h1></div>
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