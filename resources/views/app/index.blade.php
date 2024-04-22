@extends('layouts.app')

@section('content')
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

                    @foreach ($themes as $theme)
                        <li class="nav-label">{{$theme->title}}</li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false">
                                <i class="icon-notebook menu-icon"></i>
                                <span class="nav-text">{{$theme->title}}</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="">subtitle 1</a></li>
                            </ul>
                        </li>
                    @endforeach
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

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
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





@endsection

