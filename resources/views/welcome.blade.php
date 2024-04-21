<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>Main page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/dist/images/atom.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('/storage/dist/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('/storage/dist/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/storage/dist/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('/storage/dist/css/style.css') }}" rel="stylesheet">

</head>

<body>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header d-flex justify-content-center align-items-center">
        <img src="{{ asset('/storage/dist/images/atom.png') }}" width="55" height="55" alt="">
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content clearfix">
            <div class="header-left">
                <nav class="navbar navbar-expand-sm h-100 bg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="navbar-text lead">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="navbar-text lead">Forms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <span class="navbar-text lead">Docs</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header-right">
                <ul class="clearfix">
                    <!-- <li class="icons dropdown d-none d-md-flex">
                        <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                            <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                        </a>
                        <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li><a href="javascript:void()">English</a></li>
                                    <li><a href="javascript:void()">Dutch</a></li>
                                </ul>
                            </div>
                        </div>
                    </li> -->
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{ asset('/storage/dist/images/user/1.png') }}" height="40" width="40" alt="">

                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="{{ asset('app-profile.html') }}"><i class="icon-user"></i> <span>Profile</span></a>
                                    </li>
                                    <hr class="my-2">
                                    <li>
                                        <a href="{{ asset('app-profile.html') }}"><i class="icon-key"></i> <span>Logout</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Topics in physics</li>
                <li>
                    <a class="has-arrow" href="" aria-expanded="false">
                        <i class="icon-notebook menu-icon"></i>
                        <span class="nav-text">Title 1</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="">subtitle 1</a></li>
                        <li><a href="">subtitle 1</a></li>
                        <li><a href="">subtitle 1</a></li>
                        <li><a href="">subtitle 1</a></li>
                        <li><a href="">subtitle 1</a></li>
                        <li><a href="">subtitle 1</a></li>
                    </ul>
                </li>
                <li class="mega-menu mega-menu-sm">
                    <a class="has-arrow" href="" aria-expanded="false">
                        <i class="icon-notebook menu-icon"></i>
                        <span class="nav-text">Title 2</span>
                    </a>
                    <ul aria-expanded="false">
{{--                        <li><a href="./inde1.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde2.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde3.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde5.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde6.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde7.html">subtitle 1</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="" aria-expanded="false">
                        <i class="icon-notebook menu-icon"></i>
                        <span class="nav-text">Title 3</span>
                    </a>
                    <ul aria-expanded="false">
{{--                        <li><a href="./inde7.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde4.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde4.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde3.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde4.html">subtitle 1</a></li>--}}
{{--                        <li><a href="./inde5.html">subtitle 1</a></li>--}}
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="" aria-expanded="false">
                        <i class="icon-notebook menu-icon"></i>
                        <span class="nav-text">Title 4</span>
                    </a>
                    <ul aria-expanded="false">
{{--                        <li><a href="./app-profile.html">Profile</a></li>--}}
{{--                        <li><a href="./app-calender.html">Calender</a></li>--}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Lorem ipsum title </h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores repellendus molestiae exercitationem voluptatem tempora quo dolore nostrum dolor consequuntur itaque, alias fugit. Architecto rerum animi velit, beatae corrupti quos nam saepe asperiores aliquid quae culpa ea reiciendis ipsam numquam laborum aperiam. Id tempore consequuntur velit vitae corporis, aspernatur praesentium ratione!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Pysics 2024</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<script src="{{ asset('/storage/dist/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('/storage/dist/js/custom.min.js') }}"></script>
<script src="{{ asset('/storage/dist/js/settings.js') }}"></script>
<script src="{{ asset('/storage/dist/js/gleek.js') }}"></script>
<script src="{{ asset('/storage/dist/js/styleSwitcher.js') }}"></script>

<script src="{{ asset('/storage/dist/js/dashboard/dashboard-1.js') }}"></script>


</body>

</html>
