@extends('admin.layout')

@section('content')
<div class="col-sm-12">



    <div class="panel panel-card recent-activites">
        <!-- Start .panel -->
        <div class="panel-heading">
            <h4 class="panel-title">Add New Product</h4>
            <div class="panel-actions">
                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
            </div>
        </div>
        <div class="panel-body text-center">
            <div id="wizard" class="bwizard">
                <!-- Start .bwizard -->
                <ul class="bwizard-steps list-inline">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">
                            <span class="step-number">1</span>
                            <span class="step-text">Product Info</span>
                        </a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <span class="step-number">2</span>
                            <span class="step-text">Category Info</span>
                        </a>
                    </li>
                </ul>
            <form class="form-horizontal" action="{{route('dashboard.products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf    
                <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="form-group @error('name') has-error @enderror">
                                <label class="col-md-2 control-label">Product Name</label>
                                <div class="col-md-9">
                                    <input 
                                        type="text" 
                                        name="name" 
                                        placeholder="Enter product" 
                                        class="form-control"
                                        value="{{old('name')}}">
                                @error('name') 
                                    <p style="color:#a94442" >{{$errors->first('name')}}</p>
                                @enderror
                                </div>
                            </div>
                            
                            <div class="form-group @error('price') has-error @enderror">
                                <label class="col-md-2 control-label">Product Price</label>
                                <div class="col-md-9">
                                    <div class="input-group m-b">
                                        <span class="input-group-addon">$</span> 
                                        <input 
                                            type="number"
                                            class="form-control"
                                            name="price"
                                            placeholder="Enter price" 
                                            value="{{old('price')}}">
                                    </div>
                                    @error('price') 
                                        <p style="color:#a94442" >{{$errors->first('price')}}</p>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="form-group @error('sale_price') has-error @enderror">
                                <label class="col-md-2 control-label">Sale Price</label>
                                <div class="col-md-9">
                                    <div class="input-group m-b">
                                        <span class="input-group-addon">$</span> 
                                        <input 
                                            type="number"
                                            class="form-control"
                                            placeholder="Enter sale price" 
                                            name="sale_price"
                                            value="{{old('sale_price')}}">
                                            <span class="input-group-addon">.00</span>  
                                    </div>
                                @error('sale_price') 
                                    <p style="color:#a94442" >{{$errors->first('sale_price')}}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group @error('volume') has-error @enderror">
                                <label class="col-md-2 control-label">Volume</label>
                                <div class="col-md-9">
                                    <input 
                                            type="number"
                                            class="form-control"
                                            placeholder="Enter sale price" 
                                            name="volume"
                                            value="{{old('volume')}}">
                                @error('volume') 
                                    <p style="color:#a94442" >{{$errors->first('volume')}}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group @error('quantity') has-error @enderror">
                                <label class="col-md-2 control-label">Quantity</label>
                                <div class="col-md-9">
                                    <input 
                                            type="number"
                                            class="form-control"
                                            placeholder="Enter quantityd" 
                                            name="quantity"
                                            value="{{old('quantity')}}">
                                @error('quantity') 
                                    <p style="color:#a94442" >{{$errors->first('quantity')}}</p>
                                @enderror
                                </div>
                                
                            </div>

                            <div class="form-group @error('description') has-error @enderror">
                                <label class="col-md-2 control-label">Description</label>
                                <div class="col-md-9">
                                    <textarea 
                                        class="form-control" 
                                        name="description" 
                                        placeholder="Product description"
                                        aria-label="With textarea">{{old('description')}}</textarea>
                                
                                @error('description') 
                                    <p style="color:#a94442" >{{$errors->first('description')}}</p>
                                @enderror
                                </div>
                            </div>
 
                                        
                            <!-- COMPONENT START -->       
                            <div class="form-group @error('image1') has-error @enderror">
                                <label class="col-md-2 control-label">Image1</label>
                                <div class="col-md-9">
                                    <div class="input-group input-file" name="image1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Choose</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Choose a file...' />
                                        <span class="input-group-btn">
                                                <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                @error('image1') 
                                    <p style="color:#a94442" >{{$errors->first('image1')}}</p>
                                @enderror
                                </div>
                                
                            </div>
                            <!-- COMPONENT END -->

                            <!-- COMPONENT START -->       
                            <div class="form-group @error('image2') has-error @enderror">
                                <label class="col-md-2 control-label">Image2</label>
                                <div class="col-md-9">
                                    <div class="input-group input-file" name="image2">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Choose</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Choose a file...' />
                                        <span class="input-group-btn">
                                                <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                
                                @error('image2') 
                                    <p style="color:#a94442" >{{$errors->first('image2')}}</p>
                                @enderror
                                </div>
                            </div>
                            <!-- COMPONENT END -->

                            <!-- COMPONENT START -->       
                            <div class="form-group @error('image3') has-error @enderror">
                                <label class="col-md-2 control-label">Image3</label>
                                <div class="col-md-9">
                                    <div class="input-group input-file" name="image3">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-choose" type="button">Choose</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder='Choose a file...' />
                                        <span class="input-group-btn">
                                                <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                        </span>
                                    </div>
                                @error('image3') 
                                    <p style="color:#a94442" >{{$errors->first('image3')}}</p>
                                @enderror
                                </div>
                            </div>
                             <!-- COMPONENT END -->
                             <!-- End .control-group  -->
                        </div>
                        <div class="tab-pane" id="tab2">

                            <div class="form-group @error('category_id') has-error @enderror">
                                <label class="col-lg-2 col-md-3 control-label" for="">Choose Category</label>
                                <div class="col-lg-10 col-md-9">
                                    <select 
                                        class="form-control select2"
                                        name="category_id" 
                                        placeholder="Product category">
                                        <optgroup label="Categories">
                                            <option></option>
                                        @forelse ($categories as $category)
                                            <option value="{{$category->id}}" >{{$category->name}}</option>
                                        @empty
                                            <option disabled>there is no categories</option>
                                        @endforelse
                                        </optgroup>   
                                    </select>
                                @error('category_id') 
                                <p style="color:#a94442" >{{$errors->first('category_id')}}</p>
                                @enderror
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Back</a>
                        </li>
                        <li class="next"><a href="#">Next &rarr;</a>
                        </li>
                        <li class="next finish" style="display:none;">
                        <a><button 
                            style=
                                "display: inline-block;
                                padding: 5px 14px;
                                background-color: rgba(0, 0, 0, 0.1);
                                border: 1px solid rgba(0,0,0,0.02);
                                border-radius: 15px;" 
                            type="submit">Finish</button></a>
                        </li>
                    </ul>
                </form>
                


            </div>
            <!-- End .bwizard -->
        </div>
    </div><!-- End .panel --> 
</div>
@endsection



@push('scripts')
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/jquery.validate.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/additional-methods.min.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/custom-forms-wizard.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/select/select2.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/select/fancySelect.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/input-mask/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/slider/bootstrap-slider.min.js')}}"></script>
<script src="{{ asset('admin_assets/light_blue/' . App::getLocale() . '/js/custom-advanced-form.js')}}"></script>

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