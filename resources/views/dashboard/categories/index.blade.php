@extends('layouts.dashboard')


@section('content')
<div class="content-wrapper container">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
                <h1>Categories List <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">Categories List</li>
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
                                <strong>CREATED AT</strong>
                            </th>
                            <th>
                                <strong>ACTIONS</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href=""
                                            onclick="event.preventDefault();
                                                          document.getElementById('edit-form').submit();"><i class="fa fa-pencil" aria-hidden="true"></i></i>
                                             {{ __('Edit') }}
                                            </a>
                                            <form id="edit-form" action="{{route('dashboard.categories.edit', $category)}}" method="GET" style="display: none;">
                                             @csrf

                                            </form>
                                        </li>
                                        <li>
                                            <a href=""
                                            onclick="event.preventDefault();
                                                          document.getElementById('delete-form').submit();"><i class="fa fa-trash" aria-hidden="true"></i>
                                             {{ __('Delete') }}
                                            </a>
                                            <form id="delete-form" action="{{route('dashboard.categories.destroy', $category)}}" method="POST" style="display: none;">
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






