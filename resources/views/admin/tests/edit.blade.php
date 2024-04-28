@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Test</div>

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

                        <form method="POST" action="{{ route('tests.update', $test) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $test->title) }}">
                            </div>

                            <div class="form-group">
                                <label for="theme_id">Theme</label>
                                <select class="form-control" id="theme_id" name="themes_id">
                                    @foreach ($themes as $theme)
                                        <option value="{{ $theme->id }}" {{ $theme->id == $test->themes_id ? 'selected' : '' }}>{{ $theme->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="true" {{ $test->status == 'true' ? 'selected' : '' }}>Active</option>
                                    <option value="false" {{ $test->status == 'false' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
