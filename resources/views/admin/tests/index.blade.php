@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Тесттер</h4>
                        <div>
                            <a href="{{ route('tests.create') }}" class="btn btn-primary">Жаны кошуу</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Темасы</th>
                                <th>Автору</th>
                                <th>Касы темага байланыштуу</th>
                                <th>Статус</th>
                                <th>Иш-аракет</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tests as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->theme_title }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a href="{{ route('questions.index', ['test' => $item]) }}" class="btn btn-primary">Коруу</a>
                                        <a href="{{ route('tests.edit', $item) }}" class="btn btn-warning">Озгортуу</a>
                                        <form action="{{ route('tests.destroy', $item) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Очуруу</button>
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
