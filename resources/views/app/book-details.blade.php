@extends('layouts.app')

@section('content')

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

                    @if($theme)
                        <div class="card">
                            <div class="card-body" style="color: black">
                                <h4> {{$theme->title}} </h4>
                                @if($theme->description)
                                    <p>{!! $theme->description !!}</p>
                                @else
                                    <p> Азырынча маалымат жок </p>
                                @endif
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Үлгү мисалдар </h5>
                            </div>
                            <div class="card-body">
                                @if(count($examples)>0)
                                    <ul class="card-profile__info pl-3">
                                        @foreach($examples as $index=>$example)
                                            <li class="mb-3 d-flex">
                                                {{$index+1}}.
                                                <a class="ml-2" href="{{ route('download', ['fileName' => $example->file_url]) }}" download>
                                                    {{ $example->title }}
                                                    <i class="fa fa-download ml-2"></i>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Үлгү мисалдар азырынча киргизиле элек</p>
                                @endif
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5>Өз алдынча мисалдар</h5>
                            </div>
                            <div class="card-body">
                                @if(count($exercises)>0)
                                    <ul class="card-profile__info">
                                        @foreach($exercises as $index=>$exercise)
                                            <li class="mb-3 d-flex">
                                                {{$index+1}}.
                                                <a class="ml-2" href="{{ route('download', ['fileName' => $exercise->file_url]) }}" download>
                                                    {{ $exercise->title }}
                                                    <i class="fa fa-download ml-2"></i>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Өз алдынча мисалдар азырынча киргизиле элек</p>
                                @endif
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Адабияттар</h5>
                            </div>
                            <div class="card-body">
                                @if(count($literatures)>0)
                                    <ul class="card-profile__info pl-3">
                                        @foreach($literatures as $index=>$literature)
                                            <li class="mb-3 d-flex">
                                                {{$index+1}}.
                                                <a class="ml-2" href="{{ route('download', ['fileName' => $literature->file_url]) }}" download>
                                                    {{ $literature->title }}
                                                    <i class="fa fa-download ml-2"></i>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Адабияттар азырынча киргизиле элек</p>
                                @endif
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Билимди бекемдөө үчүн тест</h5>
                            </div>
                            <div class="card-body">
                                @if(count($tests) > 0)
                                    <ul class="card-profile__info pl-3">
                                        @foreach($tests as $index=>$test)
                                            <li class="mb-1">
                                                {{$index+1}}.
                                                <a class="ml-2" href="/test/{{$test->id}}">

                                                    {{ $test->title }}
                                                    <i class="fa fa-star  ml-2"></i>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Тест азырынча киргизиле элек</p>
                                @endif
                            </div>
                        </div>
                    @else
                        <p> Маалымат азырынча киргизиле элек </p>
                    @endif
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
    <!--**********************************
        Content body end
    ***********************************-->

@endsection
