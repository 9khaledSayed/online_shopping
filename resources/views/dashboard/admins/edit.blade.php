@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
                <h1>{{__('Update Info')}} <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">{{__('Update Info')}}</li>
                </ol>
            </div>
        </div>
    </div><!-- end .page title-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-card margin-b-30">
                <!-- Start .panel -->
                <div class="panel-heading">
                    <h4 class="panel-title"> {{__('Update Info')}}</h4>
                </div>
                <div class="panel-body">
                <form role="form" method="POST" action="{{route('dashboard.admins.update', $admin)}}">
                    @csrf
                    @method('PUT')
                        <div class="form-group @error('name') has-error @enderror">
                            <label>{{__('Name')}}</label>
                            <input
                            type="text"
                            name="name"
                            placeholder="{{__('Enter name')}}"
                            class="form-control"
                            value="{{old('name') ?? $admin->name}}">
                            @error('name')
                                <p style="color:#a94442" >{{$errors->first('name')}}</p>
                            @enderror
                        </div>
                        <div class="form-group @error('username') has-error @enderror">  <!-- form-group has-error -->
                            <label>{{__('Username')}}</label>
                            <input
                            type="text"
                            name="username"
                            placeholder="{{__('Enter username')}}"
                            class="form-control"
                            value="{{old('username') ?? $admin->username}}">
                            @error('username')
                                <p style="color:#a94442" >{{$errors->first('username')}}</p>
                            @enderror
                        </div>
                        <div class="form-group @error('email') has-error @enderror">  <!-- form-group has-error -->
                            <label>{{__('Email')}}</label>
                            <div class="input-group m-b">
                                <span class="input-group-addon">@</span>
                                <input
                                    type="email"
                                    name="email"
                                    placeholder="{{__('Enter email')}}"
                                    value="{{old('email') ?? $admin->email}}"
                                    class="form-control">
                            </div>
                            @error('email')
                                <p style="color:#a94442" >{{$errors->first('email')}}</p>
                            @enderror
                        </div>
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>{{__('save')}}</strong></button>
                        <a href="{{route('dashboard.admins.index')}}" class="btn btn-sm btn-default">{{__('Back')}}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

