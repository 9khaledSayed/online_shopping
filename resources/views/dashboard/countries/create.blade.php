@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
                <h1>{{__('New Country')}} <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">{{__('New Country')}}</li>
                </ol>
            </div>
        </div>
    </div><!-- end .page title-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-card margin-b-30">
                <!-- Start .panel -->
                <div class="panel-heading">
                    <h4 class="panel-title">{{__('New Country')}}</h4>
                </div>

                <div class="panel-body">
                    <form role="form" method="POST" action="{{route('dashboard.countries.store')}}">
                        @csrf
                        <div class="form-group @error('name') has-error @enderror">  <!-- form-group has-error -->
                            <label>{{__('Name')}}</label>
                            <input
                                type="text"
                                name="name"
                                placeholder="{{__('Enter Country Name')}}"
                                class="form-control"
                                value="{{old('name')}}">
                            @error('name')
                            <p style="color:#a94442" >{{$errors->first('name')}}</p>
                            @enderror
                        </div>

                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>{{__('Confirm')}}</strong></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

