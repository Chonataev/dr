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
                    <div class="card">
                        <div class="card-body">
                            <h4> {{$theme->title}} </h4>
                            @if($theme->description)
                                <p>{!! $theme->description !!}</p>
                            @else
                                <p>Маалымат жок</p>
                            @endif
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4> Улгу мисалдар </h4>
                            @if(count($examples)>0)
                                <ul class="card-profile__info pl-3">
                                    @foreach($examples as $index=>$example)
                                        <li class="mb-1">
                                            {{$index+1}}.
                                            {{ $example->title }}
                                            <a class="ml-5" href="{{url($example->file_url)}}">
                                                <button class="btn mb-1 btn-primary">
                                                    Ачуу
                                                    <span class="btn-icon-right">
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </button>
                                            </a>
                                            <a href="{{url($example->file_url)}}" download>
                                                <button class="btn mb-1 btn-primary">
                                                    Кочуруу
                                                    <span class="btn-icon-right">
                                                        <i class="fa fa-download"></i>
                                                    </span>
                                                </button>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Улгулор жок</p>
                            @endif
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4> Оз алдынча мисалдар </h4>
                            @if(count($exercises)>0)
                                <ul class="card-profile__info pl-3">
                                    @foreach($exercises as $index=>$exercise)
                                        <li class="mb-1">
                                            {{$index+1}}.
                                            {{ $exercise->title }}
                                            <a class="ml-5" href="{{url($exercise->file_url)}}">
                                                <button class="btn mb-1 btn-primary">
                                                    Ачуу
                                                    <span class="btn-icon-right">
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </button>
                                            </a>
                                            <a href="{{url($exercise->file_url)}}" download>
                                                <button class="btn mb-1 btn-primary">
                                                    Кочуруу
                                                    <span class="btn-icon-right">
                                                        <i class="fa fa-download"></i>
                                                    </span>
                                                </button>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Оз алдынча мисалдар жок</p>
                            @endif
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4> Адабияттар </h4>
                            @if(count($literatures)>0)
                                <ul class="card-profile__info pl-3">
                                    @foreach($literatures as $index=>$literature)
                                        <li class="mb-1">
                                            {{$index+1}}.
                                            {{ $literature->title }}
                                            <a class="ml-5" href="{{url($literature->file_url)}}">
                                                <button class="btn mb-1 btn-primary">
                                                    Ачуу
                                                    <span class="btn-icon-right">
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </button>
                                            </a>
                                            <a href="{{url($literature->file_url)}}" download>
                                                <button class="btn mb-1 btn-primary">
                                                    Кочуруу
                                                    <span class="btn-icon-right">
                                                        <i class="fa fa-download"></i>
                                                    </span>
                                                </button>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Адабияттар жок</p>
                            @endif
                        </div>
                    </div>
                        <div class="card">
                            <div class="card-body">
                                <h4> Тест </h4>
                                @if(count($tests) > 0)
                                    <ul class="card-profile__info pl-3">
                                        @foreach($tests as $index=>$test)
                                            <li class="mb-1">
                                                {{$index+1}}.
                                                {{ $test->title }}
                                                <a class="ml-5" href="/test/{{$test->id}}">
                                                    <button class="btn mb-1 btn-primary">
                                                        Ачуу
                                                        <span class="btn-icon-right">
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    </button>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Тест жок</p>
                                @endif
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
