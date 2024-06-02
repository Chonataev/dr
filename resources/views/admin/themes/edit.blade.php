@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="card-header"> Озгортуу </h4>
                        <a href="/admin/themes" >
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

                        <form method="POST" action="{{ route('themes.update', $theme) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Темасы</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $theme->title) }}">
                            </div>

                            <div class="form-group">
                                <label for="theme_id">Кайсы темага караштуу</label>
                                <select class="form-control" id="theme_id" name="theme_id">
                                    <option  value="">Темалар</option>
                                    @if (isset ($themes))
                                        @foreach ($themes as $th)
                                            @if($theme->theme_id == $th->id)
                                                <option selected value="{{ $th->id }}">{{ $th->title }}</option>
                                            @else
                                                <option value="{{ $th->id }}">{{ $th->title }}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Статус</label>
                                <select class="form-control" id="status" name="status">
                                    @if($theme->status == 1)
                                        <option selected value="{{ $theme->status }}"> Активдүү </option>
                                        <option value="0"> Активдүү эмес </option>
                                    @else
                                        <option value="1"> Активдүү </option>
                                        <option selected value="{{ $theme->status }}"> Активдүү эмес </option>
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="body">Мазмуну</label>
                                <textarea class="summernote" id="description" name="description">
                                    {!! $theme->description !!}
                                </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Сактоо</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
