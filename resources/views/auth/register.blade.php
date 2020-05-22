@extends('layouts.app')

@section('content')
<div class="account-col text-center">
    <h1 class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</h1>

    @isset($url)
        <form class="m-t" method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
    @else
{{--        <form class="m-t" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">--}}
    @endisset
       @csrf
        <div class="form-group @error('name') has-error @enderror">
            <input
                id="name"
                type="text"
                placeholder="{{__('Name')}}"
                class="form-control "
                name="name"
                value="{{ old('name') }}" required
                autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group @error('email') has-error @enderror">
            <input
                id="email"
                type="email"
                placeholder="{{__('Email')}}"
                class="form-control"
                name="email" value="{{ old('email') }}"
                required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
{{--        <div class="form-group @error('phone') has-error @enderror">--}}
{{--            <input--}}
{{--                id="phone"--}}
{{--                type="number"--}}
{{--                placeholder="{{__('Phone')}}"--}}
{{--                class="form-control"--}}
{{--                name="phone" value="{{ old('phone') }}"--}}
{{--                required autocomplete="phone">--}}

{{--            @error('phone')--}}
{{--                <span class="invalid-feedback" role="alert">--}}
{{--                    <strong>{{ $message }}</strong>--}}
{{--                </span>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <div class="form-group @error('gender') has-error @enderror">--}}
{{--                <select--}}
{{--                    class="form-control"--}}
{{--                    name="gender"--}}
{{--                    place->--}}
{{--                    <option default value="">Choose your gender</option>--}}
{{--                    <option value="male" >--}}
{{--                        {{__('Male')}}--}}
{{--                    </option>--}}
{{--                    <option value="female" >--}}
{{--                        {{__('Female')}}--}}
{{--                    </option>--}}
{{--                </select>--}}
{{--            @error('gender')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                <strong>{{ $message }}</strong>--}}
{{--            </span>--}}
{{--            @enderror--}}
{{--        </div>--}}
        <div class="form-group @error('password') has-error @enderror">
            <input
                id="password"
                type="password"
                placeholder="{{__('Password')}}"
                class="form-control"
                name="password" required
                autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input
                id="password-confirm"
                type="password"
                placeholder="{{__('Retype Password')}}"
                class="form-control"
                name="password_confirmation" required
                autocomplete="new-password">
        </div>
        <button type="submit" class="btn btn-primary btn-block ">{{ __('Register') }}</button>
        <a href="#"><small></small></a>
        <p class=" text-center"><small>{{__('Already have an account?')}}</small></p>
        <a class="btn  btn-default btn-block" href="{{url("login/$url")}}">{{__('Log into account')}}</a>
        <p>{{__('online shopping')}} &copy; 2020</p>
    </form>
</div>
@endsection


