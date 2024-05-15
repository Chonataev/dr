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
        </div>
        <!-- #/ container -->
    </div>
@endsection
