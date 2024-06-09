@extends('layouts.app')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-xl-12 bg-white pt-3 rounded">
                    <div class="mb-4 p-2">
                        <h2>Форумдар</h2>
                    </div>
                    @if(count($forums)>0)
                        @foreach($forums as $forum)
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">{{$forum->title}}</h5>
                                    <p class="card-text">{!! $forum->body !!}</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text d-inline">
                                        <small class="text-muted">{{ $forum->created_at->format('Y-m-d H:i:s') }}</small>
                                    </p>
                                    <a href="/forums/forum/{{$forum->id}}" class="btn btn-primary float-right"> Кененирээк маалымат </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p> Азырынча маалымат жок </p>
                    @endif
                </div>
            </div>

            @if(Auth::check())
                <div class="row">
                    <div class="col-md-12 p-0">
                        <div class="card">
                            <div class="d-flex justify-content-between p-3">
                                <h4 class="card-header"> Түшүнбөгөн тема боюнча коомчулуктан жардам суроо </h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('user.forum.store') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="title">Суроонун темасы</label>
                                        <input type="text" required class="form-control rounded" id="title" name="title">
                                    </div>

                                    <div class="form-group">
                                        <label for="body"> Суроо </label>
                                        <textarea required class="summernote" id="body" name="body">
                                        Текст...
                                    </textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Сактоо</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
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
    <!--**********************************
        Content body end
    ***********************************-->



@endsection
