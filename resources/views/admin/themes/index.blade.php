@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Темалар</h4>
                        <div>
                            <a href="{{ route('themes.create') }}" class="btn btn-primary">Жаны тузуу</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(count($themes) > 0)
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Тема</th>
                                <th>Темага караштуу</th>
                                <th>Статус</th>
                                <th>Uш-аракет</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($themes as $theme)
                                    <tr>
                                        <td>{{ $theme->title }}</td>
                                        <td>{{ $theme->name }}</td>
                                        <td>{{ $theme->status }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('themes.show', $theme) }}" class="btn btn-primary mr-1"> Коруу </a>
                                                <a href="{{ route('themes.edit', $theme) }}" class="btn btn-warning mr-1"> Озгортуу </a>
                                                <form action="{{ route('themes.destroy', $theme) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Очуруу</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <p> Нет записей </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
