@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>Китеп/Файлдар</div>
                        <div>
                            <a href="{{ route('books.create') }}" class="btn btn-primary">Китеп кошуу</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(count($books) > 0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Аты</th>
                                    <th>Тема</th>
                                    <th>Статус</th>
                                    <th>Файл туру</th>
                                    <th>Uш-аракет</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if( $books )
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->title }}</td>
                                            <td>{{ $book->theme_title }}</td>
                                            <td>{{ $book->status == 1? 'Активдүү' : 'Активдүү эмес' }}</td>
                                            <td>
                                                @if($book->type == 1)
                                                    Улгу
                                                @elseif($book->type == 2)
                                                    Оз алдынча иштоо
                                                @else
                                                    Адабият
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">өзгөртүү</a>
                                                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">өчүрүү</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        @else
                            <p>Азырча файл жок</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
