<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <link href="{{asset('contents/admin')}}/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('contents/admin')}}/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{asset('contents/admin')}}/css/helper.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="{{asset('contents/admin')}}/images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="{{asset('contents/admin')}}/images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
              								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
              							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
              								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
              							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                              @php
                                  $alluser='App\Contactus'::where('conus_status',1)->count('conus_id');
                              @endphp
                                <ul>
                                    <li>
                                        <div class="drop-title">You have {{$alluser}} new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('contents/admin')}}/images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('contents/admin')}}/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('contents/admin')}}/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="{{asset('contents/admin')}}/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('contents/admin')}}/images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> {{auth::user()->name}}</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Main navigation</li>
                        <li> <a class="has-arrow  " href="{{url('admin')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="nav-devider"></li>
                        <li class="nav-label">all menue</li>
                        <li class="nav-devider"></li>
                        @if(Auth::user()->role_id<='3')
                        <li> <a class="has-arrow  " href="{{url('admin/user')}}" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Users</span></a></li>
                        @endif
                        <li class="nav-devider"></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cogs"></i><span class="hide-menu">Manage Website <span class="label label-rouded label-warning pull-right">6</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-alert.html">Basic information</a></li>
                                <li><a href="ui-button.html">Social media</a></li>
                                <li><a href="ui-dropdown.html">Contact information</a></li>
                                <li><a href="ui-progressbar.html">Contact Message</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Banners</span></a></li>
                        <li class="nav-devider"></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-image-o"></i><span class="hide-menu">Gallery</span></a></li>
                        <li class="nav-devider"></li>
                        <li> <a  href="{{url('admin/message')}}" aria-expanded="false"><i class="fa fa-glove"></i><span class="hide-menu">contact message</span></a></li>
						<li> <a  href="{{url('/')}}" aria-expanded="false"><i class="fa fa-glove"></i><span class="hide-menu">live site</span></a></li>
                        <li class="nav-devider"></li>
                        <li> <a  href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" aria-expanded="false"><i class="fa fa-sign-out"></i><span class="hide-menu">logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>

          	@yield('main-page')

            <footer class="footer"> © 2018 All rights reserved. Template developed by sajib saha <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
    </div>

    <!-- All Jquery -->
    <script src="{{asset('contents/admin')}}/js/lib/jquery/jquery.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/jquery.slimscroll.js"></script>
    <script src="{{asset('contents/admin')}}/js/sidebarmenu.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
     <script src="{{asset('contents/admin')}}/js/lib/morris-chart/raphael-min.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/morris-chart/morris.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/morris-chart/dashboard1-init.js"></script>
	   <script src="{{asset('contents/admin')}}/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/calendar-2/semantic.ui.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/calendar-2/prism.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/calendar-2/pignose.init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="{{asset('contents/admin')}}/js/scripts.js"></script>
    <script src="{{asset('contents/admin')}}/js/custom.min.js"></script>

</body>

</html>
