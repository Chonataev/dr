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
                                <small class="m-2"> {{$forum->created_at}} </small>
                            </div>

                            @if(count($discussions)>0)
                                @foreach($discussions as $index => $discussion)
                                    <div class="card">
                                        <h4 class="card-title">Жооп {{$index+1}} <small class="mt-0"> {{$discussion->user->name}} </small> </h4>
                                        <div class="border p-3 rounded">
                                            {!! $discussion->body !!}
                                        </div>
                                        <small class="m-2"> {{$discussion->created_at}} </small>
                                    </div>
                                @endforeach
                            @else
                                <p> Маалымат жок </p>
                            @endif

                            @if(Auth::check())
                                <form class="form card-body p-0" method="post" action="{{ route('user.forum.comment.store') }}">
                                    @csrf
                                    <h4 class="card-title"> Жооп беруу </h4>
                                    <input type="hidden" value="{{$forum->id}}" name="forum_id">
                                    <div class="basic-form">
                                        <form>
                                            <div class="form-group">
                                        <textarea class="summernote" id="comment" name="comment">
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
                        <p> Маалымат жок </p>
                    @endif
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


@endsection
