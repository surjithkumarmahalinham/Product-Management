@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Category</h4>
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                   <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
                   <li class="breadcrumb-item active">Edit Category</li>
               </ol>
           </div>
       </div>
   </div>

    <div class="row">
        <div class="col-12">
           <form method="post" action="{{route('subcategory.update',$subcat->id)}}" enctype="multipart/form-data">
           @method('PUT')
            {{ csrf_field() }}
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>Category Name</label>
                                    <select required class="form-control" name="category_id">
                                              <option value="">Choose Category</option>
                                             @foreach($cat as $key => $data)
                                      <option value="{{$data->id}}"{{ $data->id == $subcat->category_id ? 'selected' : '' }}>{{$data->category_name}}</option>
                                      @endforeach
                                            </select>
                                    @if($errors->first('category_id'))
                                    <div class="alert-danger">{{$errors->first('category_id')}}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                <label>SubCategory Name</label>
                                    <input id="subcategory_name" type="text" max="5" min="2" class="form-control" name="subcategory_name" value="{{$subcat->subcategory_name}}" required placeholder="SubCategory Name">
                                    @if($errors->first('category_name'))
                                    <div class="alert-danger">{{$errors->first('category_name')}}</div>
                                    @endif
                                    </div>
                                </div>
                                </div>
                                <br>                                <div class="">
                            <button type="submit" class="btn btn-success btn-lg  text-white">Update</button>
                            <a href="{{route('subcategory.index')}}" class="btn btn-lg btn-danger float-right">Cancel</a>
                        </div>   
                    </div>
                </div> 
            </div>
            </form>
        </div>
    </div><!-- end row-->
</div> <!-- container-fluid -->

<!-- 
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script>
CKEDITOR.replace( 'product-ckeditor' );
</script> -->
@endsection