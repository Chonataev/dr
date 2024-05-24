@extends('layouts.app')

@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <div class="container-fluid">

            <div class="col-lg-8 m-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5> {{ $test->title }} </h5>
                        <div>
                            <a href="{{ url()->previous() }}" class="">
                                <button class="btn btn-primary">< Артка</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.test.controller')}}">
                            @csrf
                            <input type="hidden" value="{{$test->id}}" name="test_id">
                            @foreach($questions as $index => $question)
                                <div class="basic-form p-3 bg-light mb-3">
                                    <p><strong>{{$index+1}}-суроо.</strong> {!!$question->question!!}</p>
                                    <ul class="mt-3 pl-3">
                                        @foreach($question->answers as $answer)
                                            <li>
                                                <label class="form-check-label">
                                                    <input type="radio" name="answers[{{$question->id}}]" id="{{$answer->id}}" class="form-check-input" value="{{$answer->id}}">{{ $answer->content }}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach

                            <div class="basic-form">
                                <button type="submit" class="btn btn-success">Текшеруу</button>
                            </div>

                        </form>
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
    <!--**********************************
        Content body end
    ***********************************-->




@endsection
