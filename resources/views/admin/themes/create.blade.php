@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Content</div>

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

                        <form method="POST" action="{{ route('themes.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="theme_id">Theme</label>
                                <select class="form-control" id="theme_id" name="theme_id">
                                    <option></option>
                                    @if (isset ($themes))
                                        @foreach ($themes as $theme)
                                            <option value="{{ $theme->id }}">{{ $theme->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
