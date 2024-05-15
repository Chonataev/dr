@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="card-header"> Суроо озгортуу </h4>
                        <a href="/admin/forums" >
                            <button class="btn btn-primary">Артка </button>
                        </a>
                    </div>

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
                                <label for="title">Суроонун темасы</label>
                                <input type="text" class="form-control rounded" id="title" name="title" value="{{$forum->title}}">
                            </div>

                            <div class="form-group">
                                <label for="body">Суроо</label>
                                <textarea class="summernote" id="body" name="body" rows="5">{!! $forum->body !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Статус</label>
                                <select class="form-control rounded" id="title" name="status">
                                    <option value="true" {{ $forum->status == 'true' ? 'selected' : '' }}>Активный</option>
                                    <option value="false" {{ $forum->status == 'false' ? 'selected' : '' }}>Неактивный</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Сактоо</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
