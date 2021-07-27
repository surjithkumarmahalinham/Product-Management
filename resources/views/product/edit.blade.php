@extends('layouts.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
    .required-field::before {
  content: "*";
  color: red;
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Product</h4>
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                   <li class="breadcrumb-item"><a href="{{route('product.index')}}">Product</a></li>
                   <li class="breadcrumb-item active">Edit Product</li>
               </ol>
           </div>
       </div>
   </div>

    <div class="row">
        <div class="col-12">
           <form method="post" action="{{route('product.update',$pro->id)}}" enctype="multipart/form-data">
           @method('PUT')
            {{ csrf_field() }}
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Category Name<span class="required-field"></span></label>
                                    <select required class="form-control" name="category_id" id="topcat">
                                      <option value="">Choose Category</option>
                                      @foreach($cat as $key => $data)
                                      <option value="{{$data->id}}"{{ $data->id == $pro->category_id ? 'selected' : '' }}>{{$data->category_name}}</option>
                                      @endforeach
                                    </select>
                                    @if($errors->first('category_id'))
                                    <div class="alert-danger">{{$errors->first('category_id')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>SubCategory Name<span class="required-field"></span></label>
                                    <select required class="form-control" name="subcategory_id" id="category">
                                    </select>
                                    @if($errors->first('subcategory_id'))
                                    <div class="alert-danger">{{$errors->first('subcategory_id')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Product Name<span class="required-field"></span></label>
                                    <input id="product_name" type="text" max="5" min="2" class="form-control" name="product_name" value="{{$pro->product_name}}" required placeholder="Product Name">
                                    @if($errors->first('product_name'))
                                    <div class="alert-danger">{{$errors->first('product_name')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Product Code<span class="required-field"></span></label>
                                    <input id="product_code" type="text" max="5" min="2" class="form-control" name="product_code" value="{{$pro->product_code}}" required placeholder="Product Code">
                                    @if($errors->first('product_code'))
                                    <div class="alert-danger">{{$errors->first('product_code')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Amount<span class="required-field"></span></label>
                                    <input id="amount" type="text" class="form-control" name="amount" value="{{$pro->amount}}" required placeholder="Amount">
                                    @if($errors->first('amount'))
                                    <div class="alert-danger">{{$errors->first('amount')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Discount Amount<span class="required-field"></span></label>
                                    <input id="discount_amount" type="text" class="form-control" name="discount_amount" value="{{$pro->discount_amount}}" required placeholder="Discount Amount">
                                    @if($errors->first('discount_amount'))
                                    <div class="alert-danger">{{$errors->first('discount_amount')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Tax<span class="required-field"></span></label>
                                    <input id="tax" type="text" class="form-control" name="tax" value="{{$pro->tax}}" required placeholder="Tax">
                                    @if($errors->first('blog_date'))
                                    <div class="alert-danger">{{$errors->first('blog_date')}}</div>
                                    @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Product Image<span class="required-field"></span></label>
                                    <input id="image" type="file" class="form-control" name="image" value="" required placeholder="Product Image">
                                    <label style="font-size: smaller;color: red;">Format: png, jpeg, jpg, Max: 2MB</label>
                                    @if($errors->first('image'))
                                    <div class="alert-danger">{{$errors->first('image')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{url('/')}}/images/products/{{$pro->image}}" height="60px" width="60px" />
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                <label>Product Description<span class="required-field"></span></label>
                                    <textarea class="form-control" id="product-ckeditor" value="{{$pro->description}}" name="description" required>{{$pro->description}}</textarea>
                                    @if($errors->first('description'))
                                    <div class="alert-danger">{{$errors->first('description')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Meta Title<span class="required-field"></span></label>
                                    <input id="meta_title" type="text" max="5" min="2" class="form-control" name="meta_title" value="{{$pro->meta_title}}" required placeholder="Meta Title">
                                    @if($errors->first('meta_title'))
                                    <div class="alert-danger">{{$errors->first('meta_title')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Meta Keywords</label>
                                   <textarea class="form-control" id="meta_key" value="{{$pro->meta_key}}" name="meta_key">{{$pro->meta_key}}</textarea>
                                    @if($errors->first('meta_key'))
                                    <div class="alert-danger">{{$errors->first('meta_key')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Meta Description</label>
                                    <textarea class="form-control" id="meta_desc" value="{{$pro->meta_desc}}" name="meta_desc">{{$pro->meta_desc}}</textarea>
                                    @if($errors->first('meta_desc'))
                                    <div class="alert-danger">{{$errors->first('meta_desc')}}</div>
                                    @endif
                                    </div>
                                </div>
                                </div>
                                <br>                                <div class="">
                            <button type="submit" class="btn btn-success btn-lg  text-white">Update</button>
                            <a href="{{route('product.index')}}" class="btn btn-lg btn-danger float-right">Cancel</a>
                        </div>   
                    </div>
                </div> 
            </div>
            </form>
        </div>
    </div><!-- end row-->
</div> <!-- container-fluid -->

<script>
  <?php if(isset($pro->category_id)){ ?>
    $( document ).ready(function() {

      var top_cat = "{{$pro->category_id}}";
      ajax(top_cat);
    });
  <?php }?>
  $('#topcat').on('change',function(){
    var top_cat = $(this).val();
    ajax(top_cat);

  });
  function ajax(top_cat) {

    url = '<?= route('product.subcat') ?>';
    $.get(url, {"top_cat": top_cat}, categorylist, 'json');

    function categorylist(d, s) {

      var elSel = document.getElementById('category');
      var i;
      for (i = elSel.length; i >= 0; i--) {
        elSel.remove(i);
      }
      if (d.length > 0) {
        $("#category").append('<option value="">Select Sub Category</option>');
      } else {
        $("#category").append('<option value="">No Sub Category</option>');
      }

      $.each(d,
        function () {
          var str = this.id;
          var name = this.subcategory_name;
          var option = new Option(str, name);
          var dropdownList = document.getElementById("category");
          var option = document.createElement("option");
          if (typeof name == 'undefined') {
            name = '';
        }
        option.appendChild(document.createTextNode(name));
        option.value = str;
        var subcat = "{{$pro->subcategory_id}}";
        if( subcat == str){
            option.setAttribute("selected","selected");
        }
        dropdownList.appendChild(option);
        if (name == 'error') {
        } else {


                        }
                      }
                      );


    }
  }
</script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script>
CKEDITOR.replace( 'product-ckeditor' );
</script>
@endsection