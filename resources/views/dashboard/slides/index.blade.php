@extends('layouts.dashboard')


@section('content')
<div class="content-wrapper container">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
                <h1>Slides <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">Slides</li>
                </ol>
            </div>
        </div>
    </div><!-- end .page title-->
    <div class="row">
        <div class="col-md-12 gallery-col">

              <!-- The four columns -->
              <div class="row">
                  @forelse ($slides as $slide)
                    <div class="column">
                        <img src="{{asset($slide->path)}}" alt="Nature" style="width:100%" onclick="myFunction(this);">
                        <div class="content">
                            <form action="{{route('dashboard.slides.destroy', $slide)}}" method="POST" style="text-align: center;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove <i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                  @empty
                      <h2>There Is No Slides Yet !!</h2>
                  @endforelse

              </div>

              <div class="container" style="width: 949px;">
                <span id="closeBtn1" style='display:none' onclick="this.parentElement.style.display='none'" class="closebtn"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                <img id="expandedImg" style="width:100%">
                <div id="imgtext"></div>
              </div>

            <div class="clearfix"></div>
        </div>
    </div>

</div>

@endsection



@push('scripts')
<script>
    function myFunction(imgs) {
    document.getElementById('closeBtn1').style.display = 'block';
      var expandImg = document.getElementById("expandedImg");
      var imgText = document.getElementById("imgtext");
      expandImg.src = imgs.src;
      imgText.innerHTML = imgs.alt;
      expandImg.parentElement.style.display = "block";
    }
    </script>
@endpush

