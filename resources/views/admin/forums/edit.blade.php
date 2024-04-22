@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Content</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('forums.update', $forum) }}">
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$forum->title}}">
                            </div>

                            <div class="form-group">
                                <label for="body"></label>
                                <textarea class="form-control" id="body" name="body" rows="5">{{$forum->body}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">importance</label>
                                <input type="text" class="form-control" id="title" name="importance" value="{{$forum->importance}}">
                            </div>
                            <div class="form-group">
                                <label for="title">status</label>
                                <input type="text" class="form-control" id="title" name="status" value="{{$forum->status}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
