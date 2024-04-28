@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>Темы</div>
                        <div>
                            <a href="{{ route('themes.create') }}" class="btn btn-primary">create</a>
                        </div>
                    </div>
                    <div class="card-body">
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
                            @foreach ($themes as $theme)
                                <tr>
                                    <td>{{ $theme->title }}</td>
                                    <td>{{ $theme->name }}</td>
                                    <td>{{ $theme->description }}</td>
                                    <td>{{ $theme->status }}</td>
                                    <td>
                                        <a href="{{ route('themes.show', $theme) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('themes.edit', $theme) }}" class="btn btn-secondary">Edit</a>
                                        <form action="{{ route('themes.destroy', $theme) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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
