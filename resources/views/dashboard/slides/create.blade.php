
@extends('layouts.dashboard')

@section('content')
<div class="col-md-12">
    <div class="panel panel-card margin-b-30">
        <!-- Start .panel -->
        <div class="panel-heading">
            <h4 class="panel-title"> Add New slide</h4>
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
@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('admin_assets/light_blue/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin_assets/light_blue/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/jquery.nanoscroller.min.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/jquery.bootstrap.wizard.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/jquery.validate.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/additional-methods.min.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/pace.min.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/waves.min.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/select/select2.js')}}"></script>
<!--        <script src="js/jquery.nanoscroller.min.js') }}"></script>-->
<script type="text/javascript" src="{{ asset('admin_assets/light_blue/js/custom.js') }}"></script>
<script src="{{ asset('admin_assets/light_blue/js/custom-forms-wizard.js') }}"></script>

<!-- Google Analytics:  -->
<script>
    (function (i, s, o, g, r, a, m)
    {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function ()
        {
            (i[r].q = i[r].q || []).push(arguments);
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-3560057-28', 'auto');
    ga('send', 'pageview');
</script>
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
