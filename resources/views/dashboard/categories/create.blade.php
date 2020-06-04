@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
                <h1>{{__('New Category')}} <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
{{--                    <li class="active">{{__('New Category')}}</li>--}}
                </ol>
            </div>
        </div>
    </div><!-- end .page title-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-card margin-b-30">
                <!-- Start .panel -->
                <div class="panel-heading">
                    <h4 class="panel-title"> {{__('New Category')}}</h4>
                </div>
                <div class="panel-body">
                <form role="form" method="POST" action="{{route('dashboard.categories.store')}}">
                    @csrf
                        <div class="form-group @error('name') has-error @enderror">  <!-- form-group has-error -->
                            <label>{{__('Category Name')}}</label>
                            <input
                            type="text"
                            name="name"
                            placeholder="{{__('Enter name')}}"
                            class="form-control"
                            value="{{old('name')}}">
                            @error('name')
                                <p style="color:#a94442" >{{$errors->first('name')}}</p>
                            @enderror
                        </div>
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>{{__('confirm')}}</strong></button>
                        <a href="{{route('dashboard.categories.index')}}" class="btn btn-sm btn-default">{{__('Back')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

