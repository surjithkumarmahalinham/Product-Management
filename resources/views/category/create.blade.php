@extends('layouts.master')

@section('content')
            <div class="container-fluid">
                @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Category</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
                                       <li class="breadcrumb-item active">Add Category</li>
                                    </ol>


                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                        <form method="post" class="user" action="{{ route('category.store') }}" autocomplete="off" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                <div class="card m-b-20">
                                    <div class="card-body">

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                <label>Category Name</label>
                                    <input id="category_name" type="text" max="5" min="2" class="form-control" name="category_name" value="" required placeholder="Category Name">
                                    @if($errors->first('category_name'))
                                    <div class="alert-danger">{{$errors->first('category_name')}}</div>
                                    @endif
                                    </div>
                                </div>
                                </div>
                                <br>
                                <div class="">
                    <button type="submit" class="btn btn-success btn-lg  text-white">Create</button>
                    <a href="{{route('category.index')}}">
                    <button type="button" class="btn btn-danger btn-lg float-right text-white ">Close</button></a>
                          </div>






                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

        </form>
                    </div> <!-- container-fluid -->


<!-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script>
CKEDITOR.replace( 'product-ckeditor' );
</script> -->
@endsection
