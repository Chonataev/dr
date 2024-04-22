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

                        <form method="POST" action="{{ route('themes.update', $theme) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $theme->title) }}">
                            </div>

                            <div class="form-group">
                                <label for="theme_id">Theme</label>
                                <select class="form-control" id="theme_id" name="theme_id">
                                    <option value="{{ $theme->id }}> {{ $theme->title }}</option>
                                    @if (isset ($themes))
                                        @foreach ($themes as $theme)
                                            <option value="{{ $theme->id }}">{{ $theme->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ old('status', $theme->status) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
