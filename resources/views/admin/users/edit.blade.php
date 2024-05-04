@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5> Колдонуучунун маалыматын озгортуу </h5>
                        <div>
                            <a href="{{ url()->previous() }}" class="">
                                <button class="btn btn-primary">< Артка</button>
                            </a>
                        </div>
                    </div>

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

                        <form method="POST" action="{{ route('users.update', $user) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Аты</label>
                                <input type="text" class="form-control rounded" id="name" name="name" value="{{ old('name', $user->name) }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control rounded" id="email" name="email" value="{{ old('email', $user->email) }}">
                            </div>

                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control rounded" id="password" name="password">
                            </div>

                            <div class="form-group">
                                <label for="role">Ролу</label>
                                <input type="text" class="form-control rounded" id="role" name="role" value="{{ old('role', $user->role) }}">
                            </div>

                            <div class="form-group">
                                <label for="status">Статус</label>
                                <input type="text" class="form-control rounded" id="status" name="status" value="{{ old('status', $user->status) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Сактоо</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
