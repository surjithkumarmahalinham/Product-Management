<!-- Main Sidebar Container -->
@php

$c = Request::segment(1);
$m = Request::segment(2);
@endphp

<style type="text/css">
  .mdi{
    font-size: 16px;
  }
</style>
<aside class="main-sidebar sidebar-primary elevation-3" style="background-color: #f5b225">
    <!-- Brand Logo -->
    <a href="/home">
      
      <span class="brand-text font-weight-light" style="font-size: 24px;line-height: 2.6;padding-left: 10px;font-weight: bold !important;color: #0071a9;"><left>Project</left></span>
    </a><hr style="border-bottom: blue 1px;"><!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                    <a href="{{route('home')}}" style="" class="nav-link @if($c == 'home') active @endif ">
                        <i class="mdi mdi-view-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
           <li class="nav-item">
                    <a href="{{route('category.index')}}" style="" class="nav-link @if($c == 'category') active @endif ">
                        <i class="mdi mdi-view-dashboard"></i>
                        <p>Category</p>
                    </a>
          </li>
           <li class="nav-item">
                    <a href="{{route('subcategory.index')}}" style="" class="nav-link @if($c == 'subcategory') active @endif ">
                        <i class="mdi mdi-view-dashboard"></i>
                        <p>Subcategory</p>
                    </a>
           </li>
            <li class="nav-item">
                    <a href="{{route('product.index')}}" style="" class="nav-link @if($c == 'product') active @endif ">
                        <i class="mdi mdi-view-dashboard"></i>
                        <p>Product</p>
                    </a>
                </li>
                
                
          </ul>
      </nav>
      <br><br><br>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
