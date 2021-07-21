<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./material-pro/assets/images/favicon.png">
    <title>Pick & Bet - @yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="./material-pro/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="./material-pro/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="./material-pro/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="./material-pro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="./material-pro/assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./material-pro/material/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="./material-pro/material/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('welcome')}}">
                    <span style="color: white; font-weight: bolder">PICK & BET</span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./material-pro/assets/images/users/user.jpg" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="./material-pro/assets/images/users/user.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4>{{Auth::user()->name}}</h4>
                                            <p class="text-muted" style="font-size: 0.5em;">{{Auth::user()->email}}</p><a href="{{route('dashboard')}}" class="btn btn-rounded btn-danger btn-sm">Mi perfil</a></div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{route('dashboard')}}"><i class="ti-user"></i> Mi perfil</a></li>
                                <li role="separator" class="divider"></li>
{{--                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>--}}
{{--                                <li role="separator" class="divider"></li>--}}
                                <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Language -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-es"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile" style="background: url(./material-pro/assets/images/background/user-info.jpg) no-repeat;">
                <!-- User profile image -->
                <div class="profile-img"> <img src="./material-pro/assets/images/users/user.jpg" alt="user" /> </div>
                <!-- User profile text-->
                <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{Auth::user()->name . ' ' . Auth::user()->lastName}}</a>
                    <div class="dropdown-menu animated flipInY">
                        <a href="{{route('dashboard')}}" class="dropdown-item"><i class="ti-user"></i> Mi perfil</a>
                        <a href="{{route('logout')}}" class="dropdown-item"><i class="ti-power-off"></i> Cerrar sesión</a>
                    </div>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">PERSONAL</li>
                    <li> <a class="has-arrow " href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Mi perfil </span></a>

                    </li>

                    @if(!Auth::user()->hasRole('admin'))
                        <li> <a class="has-arrow " href="{{route('premiumPicks')}}" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Premium Picks</span></a>

                        </li>
                        <li> <a class="has-arrow " href="{{route('freePicks')}}" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Free Picks</span></a>

                        </li>

                    @endif

                    @role('admin')
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Usuarios</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('users.index')}}">Todos</a></li>
                            <li><a href="{{route('users.create')}}">Crear</a></li>

                        </ul>
                    </li>

                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Forecasts</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('forecasts.index')}}">Todos</a></li>
                            <li><a href="{{route('forecasts.create')}}">Crear</a></li>

                        </ul>
                    </li>
                    @endrole
                    <li> <a class="has-arrow " href="{{route('welcome')}}" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a>

                    </li>


                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
            <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
            <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
            <!-- item--><a href="{{route('logout')}}" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
        <!-- End Bottom points-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <div class="col-md-7 col-4 align-self-center">
                    <div class="d-flex m-t-10 justify-content-end">
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                <h4 class="m-t-0 text-info">$58,356</h4></div>
                            <div class="spark-chart">
                                <div id="monthchart"></div>
                            </div>
                        </div>
                        <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                            <div class="chart-text m-r-10">
                                <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                <h4 class="m-t-0 text-primary">$48,356</h4></div>
                            <div class="spark-chart">
                                <div id="lastmonthchart"></div>
                            </div>
                        </div>
                        <div class="">
                            <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->

            @yield('content')

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Panel de Servicio <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>Con Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>Con Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2021 <a  target="_blank" href="https://smartbis.com.mx/">Smartbis</a> </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="./material-pro/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="./material-pro/assets/plugins/popper/popper.min.js"></script>
<script src="./material-pro/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="./material-pro/material/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="./material-pro/material/js/waves.js"></script>
<!--Menu sidebar -->
<script src="./material-pro/material/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="./material-pro/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="./material-pro/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="./material-pro/material/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
{{--<script src="./material-pro/assets/plugins/chartist-js/dist/chartist.min.js"></script>--}}
{{--<script src="./material-pro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>--}}
<!--c3 JavaScript -->
<script src="./material-pro/assets/plugins/d3/d3.min.js"></script>
<script src="./material-pro/assets/plugins/c3-master/c3.min.js"></script>
<!-- Chart JS -->
{{--<script src="./material-pro/material/js/dashboard1.js"></script>--}}
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="./material-pro/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
