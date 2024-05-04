@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="card-header"> Маалымат </h4>
                        <a href="/admin/themes" >
                            <button class="btn btn-primary">Артка </button>
                        </a>
                    </div>
                    <div class="card-body">
                        <p><strong>Тема:</strong> {{ $theme->title }}</p>
                        <p><strong>Статус:</strong> {{ $theme->status ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Тузулгон датасы:</strong> {{ $theme->created_at }}</p>
                        <p><strong>Текст:</strong> {!! $theme->description !!}</p>
                        <!-- Дополнительные детали, если нужно -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
