@extends('layouts.dashboard')


@section('content')
<div class="content-wrapper container">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
                <h1>Products List <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">Products List</li>
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
                                <strong>ID</strong>
                            </th>
                            <th>
                                <strong>NAME</strong>
                            </th>
                            <th>
                                <strong>CATEGEORY</strong>
                            </th>
                            <th>
                                <strong>PRICE</strong>
                            </th>

                            <th>
                                <strong>SALE PRICE</strong>
                            </th>

                            <th>
                                <strong>QUANTITY</strong>
                            </th>

                            <th>
                                <strong>CREATED AT</strong>
                            </th>
                            <th>
                                <strong>ACTIONS</strong>
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
                            <td>{{$product->created_at}}</td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href=""
                                            onclick="event.preventDefault();
                                                          document.getElementById('edit-form{{$product->id}}').submit();"><i class="fa fa-pencil" aria-hidden="true"></i></i>
                                             {{ __('Edit') }}
                                            </a>
                                            <form id="edit-form{{$product->id}}" action="{{route('dashboard.products.edit', $product)}}" method="GET" style="display: none;">
                                             @csrf\
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




