<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/dist/images/atom.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('/storage/dist/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('/storage/dist/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/storage/dist/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('/storage/dist/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('/storage/dist/plugins/summernote/dist/summernote.css') }}" rel="stylesheet">

</head>
<body style="height: 100vh">
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

        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <img src="{{ asset('/storage/dist/images/teacher.png') }}" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="{{ route('logout') }}"><i class="icon-key"></i> <span>Logout</span></a>
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
        <ul class="metismenu" id="menu"><li>
                <a href="{{ route('themes.index') }}"> <i class="icon-user"></i> <span>Темалар</span></a>
            </li>

            <li>
                <a href="{{ route('forums.index') }}"> <i class="icon-user"></i> <span>Форум</span></a>
            </li>

            <li>
                <a href="{{ route('books.index') }}"> <i class="icon-home"></i> <span>Китеп\Файлдар</span></a>
            </li>
            <li>
                <a href="{{ route('tests.index') }}"> <i class="icon-notebook"></i> <span>Тесттер</span></a>
            </li>
            <li>
                <a href="{{ route('users.index') }}"> <i class="icon-user"></i> <span>Колдонуучулар</span></a>
            </li>
        </ul>

    </div>
</div>
<ul>
    <li>
        <ul aria-expanded="false">
            {{--                        <li><a href="./app-profile.html">Profile</a></li>--}}
            {{--                        <li><a href="./app-calender.html">Calender</a></li>--}}
        </ul>
    </li>
</ul>
<!--**********************************
    Sidebar end
***********************************-->
<!-- Здесь будет основное содержимое страницы -->
    <div class="content-body">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
<!--**********************************
    Scripts
***********************************-->
    <script src="{{ asset('/storage/dist/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('/storage/dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('/storage/dist/js/settings.js') }}"></script>
    <script src="{{ asset('/storage/dist/js/gleek.js') }}"></script>
    <script src="{{ asset('/storage/dist/js/styleSwitcher.js') }}"></script>

    <script src="{{ asset('/storage/dist/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('/storage/dist//plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('/storage/dist//plugins/summernote/dist/summernote-init.js') }}"></script>
</body>
</html>
