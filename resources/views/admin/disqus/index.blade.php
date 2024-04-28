@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>Content List </div>
                        <div><a href="{{ route('disqus.create') }}">create</a></div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Body</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($disqus as $item)
                                <tr>
                                    <td>{{ $item->body }}</td>
                                    <td>
                                        <form action="{{ route('disqus.destroy', $item) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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
