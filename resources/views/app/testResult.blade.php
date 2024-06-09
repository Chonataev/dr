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
                        @if ($questions->isEmpty())
                            <p>Азырынча суроолор жок </p>
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Суроо</th>
                                    <th>Жооптор</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($questions as $question)
                                    <tr>
                                        <td class="align-top">{{ $question->id }}</td>
                                        <td class="align-top">{!! $question->question !!}</td>
                                        <td class="d-flex align-top">
                                            <ui>
                                                @foreach($question->answers as $index => $answer)
                                                    @if($answer->right && $answer->id == $question->user_answer_id)
                                                        <li class="mb-1">
                                                            {{$index + 1}}. {{ $answer->content }}
                                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 12 12" width="12" height="12"><path d="M6 0a6 6 0 1 1 0 12A6 6 0 0 1 6 0Zm-.705 8.737L9.63 4.403 8.392 3.166 5.295 6.263l-1.7-1.702L2.356 5.8l2.938 2.938Z"></path></svg>
                                                        </li>
                                                    @elseif(!$answer->right && $answer->id == $question->user_answer_id)
                                                        <li class="mb-1">
                                                            {{$index + 1}}. {{ $answer->content }}
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0 0 48 48">
                                                                <path fill="#f44336" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"></path><path fill="#fff" d="M29.656,15.516l2.828,2.828l-14.14,14.14l-2.828-2.828L29.656,15.516z"></path><path fill="#fff" d="M32.484,29.656l-2.828,2.828l-14.14-14.14l2.828-2.828L32.484,29.656z"></path>
                                                            </svg>

                                                        </li>
                                                    @else
                                                        <li class="mb-1"> {{$index + 1}}. {{ $answer->content }} </li>
                                                    @endif
                                                @endforeach
                                            </ui>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                        <p>Туурасы: {{$testResult->answer}}</p>
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
