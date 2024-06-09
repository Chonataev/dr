@extends('layouts.app')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    @if($forum)
                        <div class="card p-5">
                            <div class="card">
                                <h4 class="card-title mb-2">{{$forum->title}}</h4>
                                <small class="mb-2">{{$forum->user->name}}</small>
                                <div class="border p-3 rounded">
                                    {!! $forum->body!!}
                                </div>
                                <small class="m-2"> {{ $forum->created_at->format('Y-m-d H:i:s') }} </small>
                            </div>

                            @if(count($discussions)>0)
                                @foreach($discussions as $index => $discussion)
                                    <div class="card">
                                        <h4 class="card-title">Жооп {{$index+1}} <small class="mt-0"> {{$discussion->user->name}} </small> </h4>
                                        <div class="border p-3 rounded">
                                            {!! $discussion->body !!}
                                        </div>
                                        <small class="m-2"> {{$discussion->created_at->format('Y-m-d H:i:s')}} </small>
                                    </div>
                                @endforeach
                            @else
                                <p> Азырынча маалымат жок </p>
                            @endif

                            @if(Auth::check())
                                <form class="form card-body p-0" method="post" action="{{ route('user.forum.comment.store') }}">
                                    @csrf
                                    <h4 class="card-title"> Жооп жазуу </h4>
                                    <input type="hidden" value="{{$forum->id}}" name="forum_id">
                                    <div class="basic-form">
                                        <form>
                                            <div class="form-group">
                                        <textarea required class="summernote" id="comment" name="comment">
                                            Текст
                                        </textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success"> Сактоо </button>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                            @endif
                        </div>
                    @else
                        <p> Азырынча маалымат жок </p>
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
