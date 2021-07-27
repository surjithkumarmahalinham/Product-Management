<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title','Product Management')</title>
    <meta name="keywords" content="@yield('meta_keywords','Mercury')">
    <meta name="description" content="@yield('meta_desc','Mercury')">
        @include('layouts.head')
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
  <style type="text/css">
     thead{
        background: #dbdcdc;
    text-transform: uppercase;
  }

  .card-body
  {
    overflow-x: unset!important;
  }

  </style>
          <!-- Begin page -->
          <div id="wrapper">
      @include('layouts.topbar')
      @include('layouts.sidebar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
      @yield('content')
                </div> <!-- content -->
    @include('layouts.footers')
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
          @include('deletemodel')
    @include('layouts.footer-script')

          @yield('js_after')
    </body>
</html>
