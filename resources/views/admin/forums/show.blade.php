@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <a href="{{ route('forums.index') }}"><<- Back</a>
                        </div>
                        <div>
                            {{ $forum->title }}
                        </div>
                        <div>
                            <a href="{{ route('disqus.create', $forum->id) }}">Add Disqus ->></a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (!empty($disqus))
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Disqus ID</th>
                                    <th>Disqus Body</th>
                                    <th>Action</th>
                                    <!-- Additional fields from the disqus table, if any -->
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($disqus as $item)
                                    <tr>
                                        <td>{{ $item->disqus_id }}</td>
                                        <td>{{ $item->body }}</td>
                                        <td>
                                            <form action="{{ route('disqus.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No Disqus data found for this forum.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
