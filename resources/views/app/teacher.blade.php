@extends('layouts.app')

@section('content')

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
                    <div class="row page-titles mx-0">
                        <div class="col-lg-4 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-start mb-4 ">
                                        <img class="mr-3 rounded" src="{{ asset('/storage/dist/images/avatar/img.png')}}" width="80" height="100" alt="">
                                        <div class="media-body">
                                            <h3 class="mb-0">Мээрим Имаш Кызы</h3>
                                            <p class="text-muted mb-0">
                                                Теоретическая физика, Теоретическая механика, Термодинамика, Астрофизика.
                                            </p>
                                        </div>
                                    </div>

                                    <h4 class="mb-3">Мен жонундо</h4>

                                    <ul class="card-profile__info">
                                        <li class="mb-1">
                                            <strong class="text-dark mr-4">Университет:</strong>
                                            <span>КТУ Манас</span>
                                        </li>
                                        <li class="mb-1">
                                            <strong class="text-dark mr-4">Телефон:</strong>
                                            <span>492788</span>
                                        </li>
                                        <li>
                                            <strong class="text-dark mr-4">Телеграм:</strong>
                                            <span>01793931609</span>
                                        </li>
                                        <li class="mb-1">
                                            <strong class="text-dark mr-4">WhatsApp:</strong>
                                            <span>01793931609</span>
                                        </li>
                                        <li>
                                            <strong class="text-dark mr-4">Email:</strong>
                                            <span>meerim.imashkyzy@manas.edu.kg</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media-body">

                                        <div class="media mt-3">
                                            <div class="media-body">
                                                <div class="d-sm-flex justify-content-between mb-2">
                                                    <h5 class="mb-sm-0"> Сабактар </h5>
                                                </div>
                                                <div class="d-sm-flex justify-content-between mb-2">
                                                    <ul>
                                                        <li><p class="text-muted">MAT-307 ТЕОРЕТИЧЕСКАЯ МЕХАНИКА Математика</p></li>
                                                        <li><p class="text-muted">UME-110 ФИЗИКА Биология</p></li>
                                                        <li><p class="text-muted">UME-111 ФИЗИКА I Электроника и электрическая инженерия</p></li>
                                                        <li><p class="text-muted">UME-111 ФИЗИКА I Промышленная инженерия</p></li>
                                                        <li><p class="text-muted">UME-112 ФИЗИКА II Электроника и электрическая инженерия</p></li>
                                                        <li><p class="text-muted">UME-114 ФИЗИКА Прикладная математика и информатика</p></li>
                                                        <li><p class="text-muted">UME-116 ФИЗИКА Плодоовощеводств</p></li>
                                                        <li><p class="text-muted">UME-116 ФИЗИКА Защита растений</p></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

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
        <!-- #/ container -->
    </div>
@endsection
