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

                        <form method="POST" action="{{ route('books.update', $book) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}">
                            </div>

                            <div class="form-group">
                                <label for="title">Type</label>
                                <input type="text" class="form-control" id="type" name="type" value="{{ old('title', $book->type) }}">
                            </div>

                            <div class="form-group">
                                <label for="title">File/Book</label>
                                <input type="file" class="form-control" id="book" name="file_url">
                            </div>

                            <div class="form-group">
                                <label for="theme_id">Theme</label>
                                <select class="form-control" id="theme_id" name="theme_id">
                                    @foreach ($themes as $theme)
                                        <option value="{{ $theme->id }}" {{ $theme->id == $book->theme_id ? 'selected' : '' }}>{{ $theme->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ old('status', $book->status) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
