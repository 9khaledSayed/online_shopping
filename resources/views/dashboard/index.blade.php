@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
                <h1>{{__('Dashboard')}} <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">{{__('Dashboard')}}</li>
                </ol>
            </div>
        </div>
    </div><!-- end .page title-->
    <div class="row">
        <div class="col-sm-6 col-md-3 margin-b-30">
            <div class="tile">
                <div class="tile-title clearfix">
                    {{__('Total Orders')}}
                </div><!--.tile-title-->
                <div class="tile-body clearfix">
                    <i class="fa fa-cart-plus"></i>
                    <h4 class="pull-right">{{count($orders)}}</h4>
                </div><!--.tile-body-->
                <div class="tile-footer">
                    <a href="{{route('dashboard.orders.index')}}">{{__('View Details...')}}</a>
                </div><!--.tile footer-->
            </div><!-- .tile-->
        </div><!--end .col-->
        <div class="col-sm-6 col-md-3 margin-b-30">
            <div class="tile">
                <div class="tile-title clearfix">
                    {{__('Total Sales')}}
                </div><!--.tile-title-->
                <div class="tile-body clearfix">
                    <i class="fa fa-credit-card"></i>
                    <h4 class="pull-right">{{count($orders)}}</h4>
                </div><!--.tile-body-->
                <div class="tile-footer">
                    <a href="{{route('dashboard.orders.index')}}">{{__('View Details...')}}</a>
                </div><!--.tile footer-->
            </div><!-- .tile-->
        </div><!--end .col-->
        <div class="col-sm-6 col-md-3 margin-b-30">
            <div class="tile">
                <div class="tile-title clearfix">
                    {{__('Total Customers')}}
                </div><!--.tile-title-->
                <div class="tile-body clearfix">
                    <i class="fa fa-users"></i>
                    <h4 class="pull-right">{{count($customers)}}</h4>
                </div><!--.tile-body-->
                <div class="tile-footer">
                    <a href="{{route('dashboard.customers.index')}}">{{__('View Details...')}}</a>
                </div><!--.tile footer-->
            </div><!-- .tile-->
        </div><!--end .col-->
        <div class="col-sm-6 col-md-3 margin-b-30">
            <div class="tile">
                <div class="tile-title clearfix">
                    {{__('Total Products')}}
                </div><!--.tile-title-->
                <div class="tile-body clearfix">
                    <i class="fa fa-cart-plus"></i>
                    <h4 class="pull-right">{{count($products)}}</h4>
                </div><!--.tile-body-->
                <div class="tile-footer">
                    <a href="{{route('dashboard.products.index')}}">{{__('View Details...')}}</a>
                </div><!--.tile footer-->
            </div><!-- .tile-->
        </div><!--end .col-->
    </div><!--end .row-->


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-card recent-activites">
                <!-- Start .panel -->
                <div class="panel-heading">
                    <h4 class="panel-title"> {{__('Recent Orders')}}</h4>
                </div>
                <div class="panel-body pad-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-recent-orders">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('Customer')}}</th>
                                <th>{{__('Product')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('Date')}}</th>
                                <th>{{__('Total')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($recent_orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->customer->name}}</td>
                                    <td>{{$order->product_name}}</td>
                                    <td><span class=@if($order->status == 'pending')"text-danger"@else"text-success"@endif>{{$order->status}}</span></td>
                                    <td>{{$order->created_at->toFormattedDateString()}}</td>
                                    <td>{{$order->product_price}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div><!--end .col-->
    </div><!--end .row-->
</div>
@endsection
