@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Product</h5>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" action="{{route('product.update',$product->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
          <input  type="text" name="title" placeholder="Enter title"  value="{{$product->title}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Type <span class="text-danger">*</span></label>
          <input  type="text" name="type" placeholder="Enter type"  value="{{$product->type}}" class="form-control">
          @error('type')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">SKU <span class="text-danger">*</span></label>
          <input  type="text" name="sku" placeholder="Enter sku"  value="{{$product->sku}}" class="form-control">
          @error('sku')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Designer <span class="text-danger">*</span></label>
          <input  type="text" name="designer" placeholder="Enter Designer"  value="{{$product->designer}}" class="form-control">
          @error('designer')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Gender <span class="text-danger">*</span></label>
          <input  type="text" name="gender" placeholder="Enter Gender"  value="{{$product->gender}}" class="form-control">
          @error('gender')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
       
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Year Introduced <span class="text-danger">*</span></label>
          <input  type="text" name="year_introduced" placeholder="Enter Year Introduced"  value="{{$product->year_introduced}}" class="form-control">
          @error('year_introduced')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Recommended Use <span class="text-danger">*</span></label>
          <input  type="text" name="recommended_use" placeholder="Enter Recommended Use"  value="{{$product->recommended_use}}" class="form-control">
          @error('recommended_use')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">MSRP <span class="text-danger">*</span></label>
          <input  type="text" name="msrp" placeholder="Enter Recommended Use"  value="{{$product->msrp}}" class="form-control">
          @error('msrp')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">URL <span class="text-danger">*</span></label>
          <input type="text" name="url" placeholder="Enter url"  value="{{$product->url}}" class="form-control">
          @error('url')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Upc <span class="text-danger">*</span></label>
          <input type="text" name="upc" placeholder="Enter upc"  value="{{old('upc')}}" class="form-control">
          @error('upc')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="description" class="col-form-label">Description</label>
          <textarea class="form-control" id="description" name="description">{{$product->description}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        

        <div class="form-group">
          <label for="cat_id">Category <span class="text-danger">*</span></label>
          <select name="cat_id[]" multiple class="select2 form-control">
              <option value="">--Select any category--</option>
              @foreach($categories as $key=>$cat_data)
			  @php
			  	$categoryIdsString = $product->cat_id;
				$selectedCategoryIds = explode(',', $categoryIdsString);
			  @endphp
                  <option value='{{$cat_data->id}}' @if(in_array($cat_data->id, $selectedCategoryIds)) selected @endif>{{$cat_data->title}}</option>
              @endforeach
          </select>
        </div>
        
        <div class="form-group" id=''>
          <label for="parent_id">Sub Category</label>
          <select name="sub_cat_id[]"  id="sub_category" multiple class="select2 form-control">
			  <option value="">--Select any category--</option>
              @foreach($subcategory as $key=>$cat_data)
			  @php
			  	$categoryIdsString = $product->sub_cat_id;
				$selectedCategoryIds = explode(',', $categoryIdsString);
			  @endphp
                  <option value='{{$cat_data->id}}' @if(in_array($cat_data->id, $selectedCategoryIds)) selected @endif>{{$cat_data->title}}</option>
              @endforeach
          </select>
        </div>
        
        <div class="form-group" id=''>
          <label for="parent_id">Child Category</label>
          <select name="child_cat_id[]" multiple id="child_category" class="select2 form-control">
			  <option value="">--Select Child category--</option>
              @foreach($childcategory as $key=>$cat_data)
			  @php
			  	$categoryIdsString = $product->child_cat_id;
				$selectedCategoryIds = explode(',', $categoryIdsString);
			  @endphp
                  <option value='{{$cat_data->id}}' @if(in_array($cat_data->id, $selectedCategoryIds)) selected @endif>{{$cat_data->title}}</option>
              @endforeach
          </select>
        </div>
        
        <div class="form-group">
          <label for="price" class="col-form-label">Price<span class="text-danger">*</span></label>
          <input id="price" type="number" name="price" placeholder="Enter price"  value="{{$product->wholsale_price}}" class="form-control">
          @error('price')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
		  
		 <div class="form-group">
          <label for="price" class="col-form-label">Discount Price<span class="text-danger">*</span></label>
          <input id="price" type="number" name="discount_price" placeholder="Enter Discount price"  value="{{$product->discount_price}}" class="form-control">
          @error('discount_price')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="brand_id">Brand</label>
          {{-- {{$brands}} --}}
		      <select id="brand_id" class="form-control" name="brand_id">
              <option value="{{$product->brand_id}}">{{ ($product->brands) ? $product->brands->title : 'Please select category'}}</option>
          </select>
        </div>

        <div class="form-group">
          <label for="stock">Quantity <span class="text-danger">*</span></label>
          <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"  value="{{$product->stock}}" class="form-control">
          @error('stock')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
		  
		<div class="form-group">
          <label for="stock">Size </label>
          : <input type="checkbox" onclick="showsize()" id="size" name="size" @if($product->size =='on') checked @endif >
        </div>

        <span id="customsize">
        @php $row = 0 @endphp
        @foreach($variant as $key => $val)
        @php $row++ @endphp
          <div class="row" id="size-{{$val->id}}" >
            <div class="col-3">
              <div class="form-group">
                  <label>size name</label>
                  <input required="" hidden value="{{$val->id}}" type="text" class="form-control" name="varid[]">
                  <input required="" value="{{$val->size}}" type="text" class="form-control" name="old_size_name[]">
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                  <label>color</label>
                  <input required="" value="{{$val->color}}" type="text" class="form-control" name="old_color[]" >
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                  <label>Retail price</label>
                  <input required="" value="{{$val->price}}" type="number" class="form-control" name="old_size_price[]" >
              </div>
            </div>
			<div class="col-2">
				<div class="form-group">
					<label>Sale Price</label>
					<input required="" type="number" class="form-control" name="size_discount_price[]" >
				</div>
			</div>
            <div class="col-2">
              <div class="form-group">
                  <label>image</label>
                  <input value="{{$val->file}}" type="file" class="form-control" name="old_file[]" >
              </div>
            </div>
            <div class="col-1">
              <div class="form-group">
                @if($row >1)
                <button class="btn btn-danger" type="button" onclick="removeoldsize({{$val->id}})"><i class="fa fa-trash"></i></button>
                @endif
                @if($row == 1)
                <button class="btn btn-info" type="button" onclick="addsize({{$row}})">
                  <i class="fa fa-plus"></i>
                </button>
                @endif
              </div>
            </div>
          </div>
        @endforeach  
        </span>
        
        <div class="form-group">
          <label for="description" class="col-form-label">Note</label>
          <textarea class="form-control" id="summary" name="notes">{{$product->notes}}</textarea>
          @error('notes')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>        
        
        

        
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Large Image <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                  <i class="fas fa-image"></i> Choose
                  </a>
              </span>
          <input id="thumbnail" class="form-control" type="text" name="large_image" value="{{$product->large_image}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;">
          <img src="{{$product->large_image}}" width="150" alt=""></div>
          @error('large_image')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <br>	
        <br>	
        
        
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Small Image <span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfmm" data-input="thumbnaill" data-preview="holderr" class="btn btn-primary text-white">
                  <i class="fas fa-image"></i> Choose
                  </a>
              </span>
              <input id="thumbnaill" class="form-control" type="text" name="small_image" value="{{$product->small_image}}">
          </div>
          <div id="holderr" style="margin-top:15px;max-height:100px;">
            <img src="{{$product->small_image}}" width="150" alt=""></div>
          </div>
          @error('large_image')
            <span class="text-danger">{{$message}}</span>
          @enderror
          <br><br>
        
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($product->status=='active')? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($product->status=='inactive')? 'selected' : '')}}>Inactive</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
      </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
   var count = {{$row}};
   // Size
   function showsize()
   {
      if($('#size').is(':checked'))
      {
         $("#customsize").append('<div class="row" id="size-'+count+'" ><div class="col-2"><div class="form-group"><label>Size</label><input required="" type="text" class="form-control" name="size_name[]"></div></div><div class="col-2"><div class="form-group"><label>Color</label><input required="" type="text" class="form-control" name="color[]" ></div></div><div class="col-2"><div class="form-group"><label>Retail Price</label><input required="" type="number" class="form-control" name="size_price[]" ></div></div><div class="col-2"><div class="form-group"><label>Sale Price</label><input required="" type="number" class="form-control" name="size_discount_price[]" ></div></div><div class="col-2"><div class="form-group"><label>Image</label><input required="" type="file" class="form-control" name="file[]" ></div></div><div class="col-2"><div class="form-group"><button class="btn btn-info" type="button" onclick="addsize('+count+')"><i class="fa fa-plus"></i></button></div></div></div>');
      }
      else
      {
         $("#customsize").empty();
      }
   }
   function addsize(val)
   {
      count++;
      $("#customsize").append('<div class="row" id="size-'+count+'" ><div class="col-2"><div class="form-group"><label>Size</label><input required="" hidden value="0" type="text" class="form-control" name="varid[]"><input required="" type="text" class="form-control" name="size_name[]" ></div></div><div class="col-2"><div class="form-group"><label>Color</label><input required="" type="text" class="form-control" name="color[]" ></div></div><div class="col-2"><div class="form-group"><label>Retail Price</label><input required="" type="number" class="form-control" name="size_price[]" ></div></div><div class="col-2"><div class="form-group"><label>Sale Price</label><input required="" type="number" class="form-control" name="size_discount_price[]" ></div></div><div class="col-2"><div class="form-group"><label>Image</label><input type="file" class="form-control" name="file[]" ></div></div><div class="col-2"><div class="form-group"><button class="btn btn-danger" type="button" onclick="removesize('+count+')"><i class="fa fa-trash"></i></button></div></div></div>');
   }
   function removesize(val)
   {
         $("#size-"+val).remove();
   }
  function removeoldsize(val)
  {
    var userURL = '/admin/variant_delete/'+val;
    if(confirm("Are you sure you want to remove this") == true)
    {
      $.ajax({
        url: userURL,
        type: 'get',
        dataType: 'json',
        success: function(data) {
          $("#size-"+val).remove();
        }
      });
    }
  }
  </script>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush
@push('scripts')

<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('#lfm').filemanager('image');
    $('#lfmm').filemanager('image');

    $(document).ready(function() {
      $('#summary').summernote({
        placeholder: "Write short description.....",
          tabsize: 2,
          height: 100
      });
  
      $('#description').summernote({
        placeholder: "Write detail description.....",
          tabsize: 2,
          height: 150
      });
    });
</script>


<script>
   function sub_cat()
  {
    var parentCategoryId = $('#cat_id').val();
    // alert(parentCategoryId);
    var childCategorySelect = document.getElementById('sub_category');
    childCategorySelect.innerHTML = '<option value="">Select Sub Category</option>';
    
    var url = '/admin/sub_categries/' + parentCategoryId;

    fetch(url)
    .then(response => response.json())
    .then(data => {
        // Populate the child category select options
        data.forEach(function (childCategory) {
            var option = document.createElement('option');
            option.value = childCategory.id;
            option.text = childCategory.title;
            childCategorySelect.appendChild(option);
        });
    });
    getbrand(parentCategoryId);
  }

  function getbrand(parentCategoryId){
		var brandSelect = document.getElementById('brand_id');
	 
	brandSelect.innerHTML = '<option value="">Select Brand</option>';
	var brandurl = '/admin/fetch_brand/' + parentCategoryId;
     //alert(brandurl);
	fetch(brandurl)
    .then(responsee => responsee.json())
    .then(data => {
        // Populate the child category select options
        data.forEach(function (brand) {
            var brandoption = document.createElement('option');
            brandoption.value = brand.id;
            brandoption.text = brand.title;
            brandSelect.appendChild(brandoption);
        });
    });
	}

  // show child category
  function child_cat()
  {
    var parentCategoryId = $('#sub_category').val();
    var childCategorySelect = document.getElementById('child_category');
      
    childCategorySelect.innerHTML = '<option value="">Select Child Category</option>';
    if (parentCategoryId) 
    {
      var url = '/admin/child_categries/' + parentCategoryId;

      fetch(url)
      .then(response => response.json())
      .then(data => {
          // Populate the child category select options
          data.forEach(function (childCategory) {
              var option = document.createElement('option');
              option.value = childCategory.id;
              option.text = childCategory.title;
              childCategorySelect.appendChild(option);
          });
      });
    } 
  }
</script>
@endpush