@extends('layouts.master')

@section('css')
@endsection

@section('content')
<style>
  .mb-4, .my-4 {
    margin-bottom: -0.5rem!important;
  }
  .metismenu > li {
    border-bottom:1px solid #eee;
  }

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container-fluid">

  <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        <h4 class="page-title"></h4>
        <ol class="breadcrumb">

        </ol>

      </div>
    </div>
  </div>
  <!-- end row -->

  <div class="row" style="margin-top: 10px;">
              <div class="col-md-4">
                <a href="" style="text-decoration: none;">
                  <div class="card newrad mini-stat bg-danger">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                             <i class="fa fa-clipboard-list float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3">Total Products</h6>
                              <h4 class="mb-4">
                                
                              </h4>
                              </span>
                          </div>
                      </div>
                  </div>
                </a>
              </div>


              <div class="col-md-4">
                <a href="" style="text-decoration: none;">
                  <div class="card newrad mini-stat bg-primary">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="mdi mdi-buffer float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3"> </h6>
                              <h4 class="mb-4">
                                
                              </h4>
                            </span>
                          </div>
                      </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" style="text-decoration: none;">
                  <div class="card newrad mini-stat bg-success">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="fa fa-image float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3"> </h6>
                              <h4 class="mb-4">
                                
                              </h4>
                            </span>
                          </div>
                      </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" style="text-decoration: none;">
                  <div class="card newrad mini-stat bg-info">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="fa fa-question float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3"> </h6>
                             <h4 class="mb-4">
                                
                              </h4>
                            </span>
                          </div>
                      </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" style="text-decoration: none;">
                  <div class="card newrad mini-stat bg-warning">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="fa fa-building float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3"> </h6>
                              <h4 class="mb-4">
                                
                              </h4>
                            </span>
                            </span>
                          </div>
                      </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="" style="text-decoration: none;">
                  <div class="card newrad mini-stat bg-primary">
                      <div class="card-body mini-stat-img">
                          <div class="mini-stat-icon">
                              <i class="fa fa-users float-right"></i>
                          </div>
                          <div class="text-white">
                              <h6 class="text-uppercase mb-3"> </h6>
                              <h4 class="mb-4">
                                
                              </h4>
                            </span>
                          </div>
                      </div>
                  </div>
                </a>
              </div>

            
                          




  </div>

</div>

                          


<!-- end row -->

<!-- container-fluid -->
@endsection

@section('script')

<script src="{{ URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js')}}"></script>
@endsection
