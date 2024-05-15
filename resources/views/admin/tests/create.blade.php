@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="card-header"> Жаны тузуу </h4>
                        <a href="/admin/tests" >
                            <button class="btn btn-primary"> Артка </button>
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

                        <form method="POST" action="{{ route('tests.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="title">Тесттин темасы</label>
                                <input type="text" class="form-control rounded" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="theme_id">Темалар</label>
                                <select class="form-control rounded" id="theme_id" name="themes_id">
                                    @if (isset ($themes))
                                        <option value="">Темалар</option>
                                        @foreach ($themes as $theme)
                                            <option value="{{ $theme->id }}">{{ $theme->title }}</option>
                                        @endforeach
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
