@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>Книги/Файлы</div>
                        <div>
                            <a href="{{ route('books.create') }}" class="btn btn-primary">create</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Тема</th>
                                <th>Путь к файлу</th>
                                <th>Статус</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if( $books )
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->theme_title }}</td>
                                        <td>{{ $book->file_url }}</td>
                                        <td>{{ $book->status }}</td>
                                        <td>
                                            <a href="{{ route('books.show', $book) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('books.edit', $book) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
