<!-- resources/views/users/index.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5> Колдонуучулар </h5>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Аты</th>
                                <th>Email</th>
                                <th>Ролу</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role == 1? 'Мугалим' : 'Студент' }}</td>
                                    <td>{{ $user->status == 1? 'Активдүү' : 'Активдүү эмес' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Озгортуу</a>
                                        <form class="ml-1" action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Очуруу</button>
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
