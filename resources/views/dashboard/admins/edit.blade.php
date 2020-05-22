@extends('layouts.dashboard')

@section('content')
<div class="col-md-12">
    <div class="panel panel-card margin-b-30">
        <!-- Start .panel -->
        <div class="panel-heading">
            <h4 class="panel-title"> Update Admin Info</h4>
        </div>

        <div class="panel-body">
        <form role="form" method="POST" action="{{route('dashboard.admins.update', $admin)}}">
            @csrf
            @method('PUT')
                <div class="form-group @error('name') has-error @enderror">  <!-- form-group has-error -->
                    <label>Name</label>
                    <input
                    type="text"
                    name="name"
                    placeholder="Enter admin Name"
                    class="form-control"
                    value="{{old('name') ?? $admin->name}}">
                    @error('name')
                        <p style="color:#a94442" >{{$errors->first('name')}}</p>
                    @enderror
                </div>
                <div class="form-group @error('username') has-error @enderror">  <!-- form-group has-error -->
                    <label>UserName</label>
                    <input
                    type="text"
                    name="username"
                    placeholder="username"
                    class="form-control"
                    value="{{old('username') ?? $admin->username}}">
                    @error('username')
                        <p style="color:#a94442" >{{$errors->first('username')}}</p>
                    @enderror
                </div>
                <div class="form-group @error('email') has-error @enderror">  <!-- form-group has-error -->
                    <label>Email</label>
                    <div class="input-group m-b">
                        <span class="input-group-addon">@</span>
                        <input
                            type="email"
                            name="email"
                            placeholder="Enter Email"
                            value="{{old('email') ?? $admin->email}}"
                            class="form-control">
                    </div>
                    @error('email')
                        <p style="color:#a94442" >{{$errors->first('email')}}</p>
                    @enderror
                </div>
                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>submit</strong></button>
            </form>
        </div>
    </div>
</div>
@endsection

