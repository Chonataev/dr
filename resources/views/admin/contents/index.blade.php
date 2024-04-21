@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Content List</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Theme</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <a href="{{ route('contents.create') }}" class="btn btn-primary">create</a>
                            @if( $contents )
                                @foreach ($contents as $content)
                                    <tr>
                                        <td>{{ $content->title }}</td>
                                        <td>{{ $content->theme->title }}</td>
                                        <td>{{ $content->status }}</td>
                                        <td>
                                            <a href="{{ route('contents.show', $content) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('contents.edit', $content) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{ route('contents.destroy', $content) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
