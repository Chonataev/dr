@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Content Details</div>

                    <div class="card-body">
                        <p><strong>Title:</strong> {{ $forum->title }}</p>
                        <p><strong>Status:</strong> {{ $forum->body }}</p>
                        <p><strong>Status:</strong> {{ $forum->importance }}</p>
                        <p><strong>Status:</strong> {{ $forum->status ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Created At:</strong> {{ $forum->created_at }}</p>
                        <p><strong>Updated At:</strong> {{ $forum->updated_at }}</p>
                        <!-- Дополнительные детали, если нужно -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
