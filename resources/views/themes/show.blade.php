@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Content Details</div>

                    <div class="card-body">
                        <p><strong>Title:</strong> {{ $theme->title }}</p>
                        <p><strong>Status:</strong> {{ $theme->status ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Created At:</strong> {{ $theme->created_at }}</p>
                        <p><strong>Updated At:</strong> {{ $theme->updated_at }}</p>
                        <!-- Дополнительные детали, если нужно -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
