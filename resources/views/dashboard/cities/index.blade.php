@extends('layouts.dashboard')


@section('content')
    <div class="content-wrapper container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
                    <h1>Cities List <small></small></h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="active">Cities List</li>
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
                            <a href="{{route('dashboard.cities.create')}}" class="btn btn-sm btn-primary">{{__('New City')}}</a>
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
                                <strong>{{__('Created')}}</strong>
                            </th>
                            <th>
                                <strong>{{__('Actions')}}</strong>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($cities as $city)
                            <tr>
                                <td>{{$city->id}}</td>
                                <td>{{$city->name}}</td>
                                <td>{{$city->created_at->toFormattedDateString()}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">  <span style="padding: 5px;"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href=""
                                                   onclick="event.preventDefault();
                                                              document.getElementById('delete-form').submit();"><i class="fa fa-trash" aria-hidden="true"></i>
                                                    {{ __('Delete') }}
                                                </a>
                                                <form id="delete-form{{$city->id}}" action="{{route('dashboard.cities.destroy', $city)}}" method="POST" style="display: none;">
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






