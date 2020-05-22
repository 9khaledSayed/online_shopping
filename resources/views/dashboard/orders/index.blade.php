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
                    <table id="basic-datatables" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th style="width:80px">
                                <strong>Id</strong>
                            </th>
                            <th>
                                <strong>Product Name</strong>
                            </th>
                            <th>
                                <strong>Product Price</strong>
                            </th>
                            <th>
                                <strong>Quantity</strong>
                            </th>
                            <th>
                                <strong>Amount</strong>
                            </th>
                            <th>
                                <strong>Status</strong>
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
                                <td class="text-center">
                                    <span class="label label-purple">
                                        {{$order->status}}
                                    </span>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('dashboard.orders.update', $order->id)}}" style="display: inline">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success">Confirm</button>
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






