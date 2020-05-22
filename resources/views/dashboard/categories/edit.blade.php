@extends('layouts.dashboard')

@section('content')
<div class="col-md-12">
    <div class="panel panel-card margin-b-30">
        <!-- Start .panel -->
        <div class="panel-heading">
            <h4 class="panel-title"> Add New Category</h4>
        </div>

        <div class="panel-body">
        <form role="form" method="POST" action="{{route('dashboard.categories.update', $category)}}">
            @csrf
            @method('PUT')
                <div class="form-group @error('name') has-error @enderror">  <!-- form-group has-error -->
                    <label>Category Name</label>
                    <input
                    type="name"
                    name="name"
                    placeholder="Enter category name"
                    class="form-control"
                    value="{{$category->name}}">
                    @error('name')
                        <p style="color:#a94442" >{{$errors->first('name')}}</p>
                    @enderror
                </div>
                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>submit</strong></button>
            </form>
        </div>
    </div>
</div>
@endsection

