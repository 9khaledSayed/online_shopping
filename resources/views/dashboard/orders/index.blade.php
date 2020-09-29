@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
                    <h1>{{__('Orders List')}}<small></small></h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="active">{{__('Orders List')}}</li>
                    </ol>
                </div>
            </div>
        </div>
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
                            <strong>{{__('Name')}}</strong>
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
                            <strong>{{__('Phone')}}</strong>
                        </th>
                        <th>
                            <strong>{{__('Address')}}</strong>
                        </th>
                        <th>
                            <strong>{{__('Status')}}</strong>
                        </th>
                        <th>
                            <strong>{{__('Actions')}}</strong>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->product_name}}</td>
                            <td>{{$order->product_price}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->amount}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->address}}</td>
                            <td class="text-center">
                                <span  class=@if($order->status == 'pending')"label label-danger" style="margin-top:8%;font-size:15px" @else"label label-success" style='font-size:13px'@endif>
                                    {{$order->status}}
                                </span>
                            </td>
                            <td>
                                @if($order->status == 'pending')
                                    <form method="POST" action="{{route('dashboard.orders.update', $order->id)}}" style="display: inline">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-primary" style="padding: 0px 12px;">{{__('Confirm')}}</button>
                                    </form>
                                @else
{{--                                    <button type="submit" class="btn btn-primary" disabled style="padding: 0px 12px;">{{__('Confirm')}}</button>--}}
                                    <p type="submit"  style="padding: 0px 12px;">{{__('Confirmed')}}</p>
                                @endif
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






