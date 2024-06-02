@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="card-header"> Файл озгортуу </h4>
                        <a href="/admin/books" >
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

                        <form method="POST" action="{{ route('books.update', $book) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Аты</label>
                                <input type="text" required class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}">
                            </div>

                            <div class="form-group">
                                <label for="status">Файл туру</label>
                                <select class="form-control rounded" id="type" name="type">
                                    <option selected value="1"> Улгу </option>
                                    <option value="2"> Оз алдынча иштоо </option>
                                    <option value="3"> Адабият </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Файл/Китеп</label>
                                <input type="file" class="form-control" id="book" name="file_url">
                            </div>

                            <div class="form-group">
                                <label for="theme_id">Темалар</label>
                                <select class="form-control" id="theme_id" name="theme_id">
                                    <option value="">Темалар</option>
                                    @foreach ($themes as $theme)
                                        @if( $theme->id == $book->themes_id)
                                            <option selected value="{{ $theme->id }}">{{ $theme->title }}</option>
                                        @else
                                            <option value="{{ $theme->id }}">{{ $theme->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Статус</label>
                                <select class="form-control" id="status" name="status">
                                    @if($book->status == 1)
                                        <option selected value="{{ $book->status }}"> Активдүү </option>
                                        <option value="0"> Активдүү эмес </option>
                                    @else
                                        <option value="1"> Активдүү </option>
                                        <option selected value="{{ $book->status }}"> Активдүү эмес </option>
                                    @endif
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
