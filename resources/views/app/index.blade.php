@extends('layouts.app')

@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 ">

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
                                <div class="row">
                                    <div class="col-md-7 d-flex align-items-center justify-content-center display-6" style="color: #1F5692; font-weight: bold;">
                                        ФИЗИКА КУРСУ
                                    </div>
                                    <div class="col-md-5 d-flex align-items-center justify-content-center">
                                        <img width="80%" src="{{asset('/storage/dist/images/books.png')}}" alt="books">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7 d-flex align-items-center justify-content-center display-6" style="color: #1F5692; font-weight: bold;">
                                        НЕГИЗГИ БӨЛҮКТӨР
                                    </div>
                                    <div class="col-md-5 d-flex align-items-center justify-content-center">
                                        @if(count($themes)>0)
                                            <ul>
                                                @foreach($themes as $theme)
                                                    @if($theme->theme_id == null)
                                                        <li class="mb-4">
                                                            <a href="/book/title/{{$theme->id}}">
                                                                <button class="btn btn-primary btn-lg" style="font-weight: bold; font-size: 25px;">
                                                                    {{$theme->title}}
                                                                </button>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @else
                                            <p>Жок</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7 d-flex align-items-center">
                                        <ul>
                                            <li style="color: #1F5692; font-weight: bold; font-size: 40px" class="mb-4">
                                                Сайт тууралуу
                                            </li>
                                            <li style="color: #39485e; font-weight: bold; font-size: 20px" class="mb-3">
                                                - Сайт толугу менен бекер жана билим берүүгө арналган
                                            </li>
                                            <li style="color: #39485e; font-weight: bold; font-size: 20px" class="mb-3">
                                                - Ар бир бөлүк үчүн темалар
                                            </li>
                                            <li style="color: #39485e; font-weight: bold; font-size: 20px" class="mb-3">
                                                - Ар бир темада өз алдынча иштөө үчүн маселелер жана адабияттар
                                            </li>
                                            <li style="color: #39485e; font-weight: bold; font-size: 20px" class="mb-3">
                                                - Тема өткөн соң билимди текшерүү үчүн онлайн тесттер
                                            </li>
                                            <li style="color: #39485e; font-weight: bold; font-size: 20px" class="mb-3">
                                                - Бардык тапшырган  тесттердин жыйынтыгын профильден көрүү
                                            </li>
                                            <li style="color: #39485e; font-weight: bold; font-size: 20px" class="mb-3">
                                                - Курстан тышкары да көптөгөн адабияттарды алуу мүмкүнчүлүгү
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 d-flex align-items-center justify-content-center">
                                        <img width="80%" src="{{asset('/storage/dist/images/books2.png')}}" alt="books">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row bg-light rounded py-5">
                    <div class="col">
                        <div class="card footer-card-list">
                            <div class="card-body ">
                                <h5 class="card-title">Байланыш</h5>
                                <ul class="card-text">
                                    <li class="mb-2"> <strong> Телефон :</strong> 492788</li>
                                    <li class="mb-2"> <strong> Почта :</strong> meerim.imashkyzy@manas.edu.kg</li>
                                    <li class="mb-2"> <strong> WhatsApp :</strong> 01793931609</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card footer-card-list">
                            <div class="card-body">
                                <h5 class="card-title">Навигация</h5>
                                <ul class="card-text">
                                    <li class="mb-2"><a href="{{route('main')}}">Башкы бет</a></li>
                                    <li class="mb-2"><a href="{{route('forums')}}">Форум</a></li>
                                    <li class="mb-2"><a href="{{route('literature')}}">Адабияттар</a></li>
                                    <li class="mb-2"><a href="{{route('teacher')}}">Мугалим</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card footer-card-list">
                            <div class="card-body">
                                <h5 class="card-title">Соц. баракчалар</h5>
                                <ul class="card-text">
                                    <li class="mb-2"> <i class="fa fa-instagram mr-2"></i> instagram</li>
                                    <li class="mb-2"> <i class="fa fa-facebook mr-2"> </i> facebook</li>
                                    <li class="mb-2"> <i class="fa fa-twitter mr-2"></i> twitter</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection

