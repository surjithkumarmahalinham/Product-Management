<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title','Product Management')</title>
    <meta name="keywords" content="@yield('meta_keywords','Mercury')">
    <meta name="description" content="@yield('meta_desc','Mercury')">
        @include('layouts.head')
  </head>
<body>
    <!-- Begin page -->
        <div id="wrapper">
            @yield('content')
        </div>
    @include('layouts.footer-script')
    </body>
</html>
