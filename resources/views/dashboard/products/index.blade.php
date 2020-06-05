@extends('layouts.dashboard')


@section('content')
<div class="content-wrapper container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
                <h1>{{__('Products List')}} <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">{{__('Products List')}}</li>
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
                        <a href="{{route('dashboard.products.create')}}" class="btn btn-sm btn-primary">{{__('New Product')}}</a>
                    </div>
                </div>
                <table id="basic-datatables" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width:80px">
                                <strong>#</strong>
                            </th>
                            <th>
                                <strong>{{__('Name')}}</strong>
                            </th>
                            <th>
                                <strong>{{__('Category')}}</strong>
                            </th>
                            <th>
                                <strong>{{__('Price')}}</strong>
                            </th>

                            <th>
                                <strong>{{__('Sale Price')}}</strong>
                            </th>

                            <th>
                                <strong>{{__('Quantity')}}</strong>
                            </th>

                            <th>
                                <strong>{{__('Created')}}</strong>
                            </th>
                            <th>
                                <strong>{{__('Actions')}}</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->sale_price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->created_at->toFormattedDateString()}}</td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">  <span style="padding: 5px;"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href=""
                                            onclick="event.preventDefault();
                                                          document.getElementById('edit-form{{$product->id}}').submit();"><i class="fa fa-pencil" aria-hidden="true"></i></i>
                                             {{ __('Edit') }}
                                            </a>
                                            <form id="edit-form{{$product->id}}" action="{{route('dashboard.products.edit', $product)}}" method="GET" style="display: none;">
                                             @csrf
                                            </form>
                                        </li>
                                        <li><a href=""
                                               onclick="event.preventDefault();
                                                   document.getElementById('delete-form{{$product->id}}').submit();"><i class="fa fa-pencil" aria-hidden="true"></i></i>
                                                {{ __('Delete') }}
                                            </a>
                                            <form id="delete-form{{$product->id}}" action="{{route('dashboard.products.destroy', $product)}}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </li>
                                    </ul>
                                </div>
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

@push('scripts')
    <script src = "{{asset('admin_assets/forms/products.js')}}"
@endpush




