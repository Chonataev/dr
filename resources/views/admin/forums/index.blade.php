@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>Content List </div>
                        <div><a href="{{ route('forums.create') }}">create</a></div>
                    </div>

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
                                <th>Body</th>
                                <th>Owner</th>
                                <th>Importance</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Comments</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($forum as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->body }}</td>
                                    <td>{{ $item->owner }}</td>
                                    <td>{{ $item->importance }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ route('forums.show', $item) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('forums.edit', $item) }}" class="btn btn-secondary">Edit</a>
                                        <form action="{{ route('forums.destroy', $item) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('disqus.edit', $item->id) }}" class="btn btn-secondary">Коммнтарии</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
