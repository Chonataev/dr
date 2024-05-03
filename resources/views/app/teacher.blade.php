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
                                    <div class="media align-items-center mb-4">
                                        <img class="mr-3" src="{{ asset('/storage/dist/images/avatar/11.png')}}" width="80" height="80" alt="">
                                        <div class="media-body">
                                            <h3 class="mb-0">Асан Асанов</h3>
                                            <p class="text-muted mb-0">Кыргызстан</p>
                                        </div>
                                    </div>

                                    <h4>Мен жонундо</h4>
                                    <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                                    <ul class="card-profile__info">
                                        <li class="mb-1">
                                            <strong class="text-dark mr-4">Университет:</strong>
                                            <span>КТУ Манас</span>
                                        </li>
                                        <li class="mb-1">
                                            <strong class="text-dark mr-4">Телефон:</strong>
                                            <span>01793931609</span>
                                        </li>
                                        <li>
                                            <strong class="text-dark mr-4">Телеграм:</strong>
                                            <span>name@domain.com</span>
                                        </li>
                                        <li class="mb-1">
                                            <strong class="text-dark mr-4">WhatsApp:</strong>
                                            <span>01793931609</span>
                                        </li>
                                        <li>
                                            <strong class="text-dark mr-4">Email:</strong>
                                            <span>name@domain.com</span>
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
                                                    <h5 class="mb-sm-0"> Образование: </h5>
                                                </div>
                                                <p>
                                                    Доктор наук в области физики, с опытом работы в академической сфере и преподавания.
                                                </p>

                                                <div class="d-sm-flex justify-content-between mb-2">
                                                    <h5 class="mb-sm-0"> Опыт: </h5>
                                                </div>
                                                <p>
                                                    Более 15 лет преподавания физики на уровнях средней и высшей школы. Активное участие в исследованиях в области физики, публикации статей в журналах.
                                                </p>

                                                <div class="d-sm-flex justify-content-between mb-2">
                                                    <h5 class="mb-sm-0"> Описание профиля: </h5>
                                                </div>
                                                <p>
                                                    Доктор Иванов — вдохновленный исследователь и опытный преподаватель физики, чья страсть к науке заразительна. Он подходит к преподаванию с пониманием, что физика - это не просто набор формул, а ключ к пониманию мира вокруг нас. Его уроки не только основаны на теории, но и обогащены практическими экспериментами и демонстрациями, которые делают материал более доступным и увлекательным для студентов.
                                                </p>


                                                <div class="d-sm-flex justify-content-between mb-2">
                                                    <h5 class="mb-sm-0"> Достижение: </h5>
                                                </div>
                                                <ul class="card-profile__info pl-3">
                                                    <li class="mb-1">
                                                        <strong> Научные публикации: </strong>
                                                        <span> Публикации статей в рецензируемых научных журналах по различным аспектам физики, что свидетельствует о его активном участии в научном сообществе. </span>
                                                    </li>
                                                    <li class="mb-1">
                                                        <strong> Участие в научных конференциях: </strong>
                                                        <span> Принятие участия в научных конференциях и симпозиумах, как приглашенный докладчик или участник, где он представлял результаты своих исследований. </span>
                                                    </li>
                                                    <li class="mb-1">
                                                        <strong> Признание в области образования: </strong>
                                                        <span>  Получение наград и признаний за выдающиеся достижения в области образования и преподавания, возможно, как на уровне школы, так и на уровне области или страны. </span>
                                                    </li>
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
        <!-- #/ container -->
    </div>
@endsection
