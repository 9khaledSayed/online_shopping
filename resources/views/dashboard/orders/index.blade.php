@extends('layouts.dashboard')

@section('content')
    <div class="content-wrapper container">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
                    <h1>Orders List<small></small></h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="active">Orders List</li>
                    </ol>
                </div>
            </div>
        </div><!-- end .page title-->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive table-commerce">
                    <div class="row" style="padding: 15px">
                        <div class="buttons-column" style="padding: 0; margin-bottom:15px">
                            <a href="{{route('dashboard.index')}}" class="btn btn-sm btn-default">{{__('Back')}}</a>
                        </div>
                    </div>
                    <table id="basic-datatables" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th style="width:80px">
                                <strong>#</strong>
                            </th>
                            <th>
                                <strong>{{__('Product Name')}}</strong>
                            </th>
                            <th>
                                <strong>{{__('Price')}}</strong>
                            </th>
                            <th>
                                <strong>{{__('Quantity')}}</strong>
                            </th>
                            <th>
                                <strong>{{__('Amount')}}</strong>
                            </th>
                            <th>
                                <strong>{{__('Created')}}</strong>
                            </th>
                            <th>
                                <strong>{{__('Status')}}</strong>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->product_name}}</td>
                                <td>{{$order->product_price}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->amount}}</td>
                                <td>{{$order->created_at->toFormattedDateString()}}</td>
                                <td class="text-center">
                                    <span class="label label-purple">
                                        {{$order->status}}
                                    </span>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('dashboard.orders.update', $order->id)}}" style="display: inline">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success">{{__('Confirm')}}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection






