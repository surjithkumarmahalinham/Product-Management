            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <!-- <div class="topbar-left" style="background-color: #20AFD9;"><br>
                    <a href="/dashboard" class="logo">
                        <span>
                            <img style="margin-top: -40px;
                                margin-left: -105px;" src="{{ URL::asset('assets/images/logo-mr.png')}}" alt="" height="40px;">
                        </span>
                        <div>
                           <h6 style="color: white; margin-top: -61px;
                            margin-left: 55px;">MR FARMS</h6>
                        </div>
                    </a>
                </div> -->
                

                <nav class="navbar-custom" style="background:#f5b225 !important;">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        <!-- <li class="dropdown notification-list d-none d-sm-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0"> 
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form> 

                        </li> -->

                        <li class="dropdown notification-list">
                            
                           <!--  <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ti-bell noti-icon"></i>
                                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                            </a> -->
                            <!-- <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                             
                                <h6 class="dropdown-item-text">
                                    Notifications (258)
                                </h6>
                                <div class="slimscroll notification-item-list">
                                    
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>
                                   
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                    </a>
                                    
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>
                                   
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>
                                   
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                    </a>
                                </div>
                               
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>  -->       
                        </li>
                          <li class="dropdown notification-list d-none d-sm-block">
                            

                        </li>
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                   <h5 style="color:white;margin-top: 20px;">{{ Auth::user()->name }}</h5>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->

                                    <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div> -->

                                    <!-- <a class="dropdown-item text-primary" href=""><i class="mdi mdi-account text-primary"></i> Profile</a>
                                    <a class="dropdown-item text-primary" href=""><i class="mdi mdi-account-key text-primary"></i> Change Password</a> -->
                                    <a class="dropdown-item text-danger" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    
                                </div>                                                                    
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left" style="background:#f5b225 !important;">
                            <button data-widget="pushmenu" class="button-menu-mobile open-left waves-effect" style="background: #f5b225 !important;color: white">
                                <i class="mdi mdi-menu"></i>
                            </button>
                            
                           
                        </li>

                        <!-- <li class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Create
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </li> -->
                    </ul>

                </nav>

            </div>
