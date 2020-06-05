
@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
                <h1>{{__('New Slide')}} <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">{{__('New Slide')}}</li>
                </ol>
            </div>
        </div>
    </div><!-- end .page title-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-card margin-b-30">
                <!-- Start .panel -->
                <div class="panel-heading">
                    <h4 class="panel-title">New slide</h4>
                </div>

                <div class="panel-body">
                <form role="form" method="POST" action="{{route('dashboard.slides.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group @error('slide') has-error @enderror">
                        <label class="col-md-2 control-label">Slide</label>
                        <div class="col-md-9">
                            <div class="input-group input-file" name="slide">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-choose" type="button">Choose</button>
                                </span>
                                <input type="text" class="form-control" placeholder='Choose a file...' />
                                <span class="input-group-btn">
                                        <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                </span>
                            </div>
                        @error('slide')
                            <p style="color:#a94442" >{{$errors->first('slide')}}</p>
                        @enderror
                        </div>
                    </div>
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Add</strong></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    function bs_input_file() {
        $(".input-file").before(
            function() {
                if ( ! $(this).prev().hasClass('input-ghost') ) {
                    var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                    element.attr("name",$(this).attr("name"));
                    element.change(function(){
                        element.next(element).find('input').val((element.val()).split('\\').pop());
                    });
                    $(this).find("button.btn-choose").click(function(){
                        element.click();
                    });
                    $(this).find("button.btn-reset").click(function(){
                        element.val(null);
                        $(this).parents(".input-file").find('input').val('');
                    });
                    $(this).find('input').css("cursor","pointer");
                    $(this).find('input').mousedown(function() {
                        $(this).parents('.input-file').prev().click();
                        return false;
                    });
                    return element;
                }
            }
        );
    }
    $(function() {
        bs_input_file();
    });
</script>
@endpush
