
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
    <link rel="stylesheet" href="{{ asset('/storage/dist//plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('/storage/dist/css/style.css') }}" rel="stylesheet">
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
        <div class="header-left">
            <nav class="navbar navbar-expand-sm h-100 bg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('main') }}">
                            <span class="navbar-text lead">Башкы бет</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('forums') }}">
                            <span class="navbar-text lead">Форум</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('literature') }}">
                            <span class="navbar-text lead">Адабияттар</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teacher') }}">
                            <span class="navbar-text lead">Мугалим</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <img src="{{ asset('/storage/dist/images/student.png') }}" height="40" width="40" alt="">

                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                @if(Auth::check())
                                    <li>
                                        <a href="{{ asset('/profile') }}"><i class="icon-user"></i> <span>Profile</span></a>
                                    </li>
                                    <hr class="my-2">
                                    <li>
                                        <a href="{{ asset('/auth/logout') }}"><i class="icon-logout"></i> <span>Logout</span></a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ asset('/auth/login') }}"><i class="icon-login"></i> <span>Login</span></a>
                                    </li>
                                @endif
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
            <li class="nav-label">Темалар тизмеси</li>

            @if(count($themes) > 0)
                @foreach ($themes as $theme)
                    @if(count($theme->themes) > 0)
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-globe-alt menu-icon"></i>
                                <span class="nav-text">{{$theme->title}}</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="/book/title/{{$theme->id}}">{{ $theme->title }}</a></li>
                            @foreach($theme->themes as $subTheme)
                                <li><a href="/book/title/{{$subTheme->id}}">{{ $subTheme->title }}</a></li>
                            @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="/book/title/{{$theme->id}}">{{$theme->title}}</a></li>
                    @endif
                @endforeach
            @else
                <li class="nav-label text-warning">Тема отсутствует</li>
            @endif
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
    @yield('content')

<!--**********************************
    Scripts
***********************************-->
<script src="{{ asset('/storage/dist/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('/storage/dist/js/custom.min.js') }}"></script>
<script src="{{ asset('/storage/dist/js/settings.js') }}"></script>
<script src="{{ asset('/storage/dist/js/gleek.js') }}"></script>
<script src="{{ asset('/storage/dist/js/styleSwitcher.js') }}"></script>

<script src="{{ asset('/storage/dist/js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ asset('/storage/dist//plugins/tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/storage/dist/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/storage/dist/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

</body>
</html>
