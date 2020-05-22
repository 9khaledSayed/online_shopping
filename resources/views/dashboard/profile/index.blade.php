@extends('layouts.dashboard')

@section('content')
<div class="col-md-12 margin-b-30">
    <div class="profile-overview">
        <div class="avtar text-center">
            <img alt="image" class="img-thumbnail" width="137.95px" height="137.95px" src="{{asset($user->profile_photo)}}">
            <h3>{{$user->name}}</h3>
            <hr>
            <ul class="socials list-inline">
                <form method="POST" action="{{route('dashboard.profile.updateProfilePicture')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group @error('profile_photo') has-error @enderror">
                        <label class="file">
                            <input type="file" id="file" aria-label="File browser example" name="profile_photo">
                            <span class="file-custom"></span>
                        </label>
                        @error('profile_photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- COMPONENT END -->
                    <button class="btn btn-primary btn-choose" type="submit"><i class="fa fa-camera" style="margin: 3px;"></i> {{__('Update Photo')}}</button>

                </form>
            </ul>
            <hr>
        </div>
    </div>
</div>

<div class="col-md-12 margin-b-30">
    <div class="profile-edit">
            <h4 class="mb-lg" style="font-weight: 900;margin:15px"></h4>
            <fieldset>
                <legend style="border-bottom:0px">{{__('Personal Information')}}</legend>
                <form class="form-horizontal" method="POST" action="{{route('dashboard.profile.update', $user)}}">
                    @csrf
                    @method('PUT')

                        <div class="form-group">
                            <label class="col-md-4 control-label" style="text-align:center" for="profileFirstName">{{__('Name')}}</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="profileFirstName" name="name" value="{{$user->name}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" style="text-align:center" for="email">{{__('Email')}}</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" style="cursor: not-allowed;" id="email" name="email" value="{{$user->email}}" readonly>
                            </div>
                        </div>


{{--                        <div class="form-group">--}}
{{--                            <label class="col-md-4 control-label" style="text-align:center" for="phone">{{__('Phone')}}</label>--}}
{{--                            <div class="col-md-8">--}}
{{--                                <input type="text" class="form-control" style="cursor: not-allowed;" id="phone" name="phone" value="{{$user->phone}}" readonly>--}}
{{--                              </div>--}}
{{--                        </div>--}}
                        <div class="form-group @error('password') is-invalid @enderror">
                            <label class="col-md-4 control-label" style="text-align:center" for="profileNewPassword">{{__('New Password')}}</label>
                            <div class="col-md-8">
                                <input
                                type="password"
                                class="form-control"
                                name="password"
                                autocomplete="new-password"
                                id="profileNewPassword">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" style="text-align:center" >{{__('Repeat New Password')}}</label>
                            <div class="col-md-8">
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    autocomplete="new-password">
                            </div>
                        </div>
                    <div class="form-group" style="text-align: center">
                        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                    </div>
                </form>

            </fieldset>
    </div>
</div>

@endsection
