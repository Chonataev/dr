@extends('layouts.app')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
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
                                        <small class="text-muted">{{$forum->created_at}}</small>
                                    </p>
                                    <a href="/forums/forum/{{$forum->id}}" class="btn btn-primary float-right"> Кененирээк маалымат </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p> Маалымат жок </p>
                    @endif
                </div>
            </div>
        </div>
        @if(Auth::check())
            <div class="container-fluid">
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
                                        <input type="text" class="form-control rounded" id="title" name="title">
                                    </div>

                                    <div class="form-group">
                                        <label for="body"> Суроо </label>
                                        <textarea class="summernote" id="body" name="body">
                                            Текст...
                                        </textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Сактоо</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
    <!--**********************************
        Content body end
    ***********************************-->



@endsection
