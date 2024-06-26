@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4> Суроолор </h4>
                        <div>
                            <a href="{{ route('forums.create') }}" class="btn btn-primary"> Суроо тузуу </a>
                        </div>
                    </div>

                    <div class="card-body">

                        @if(count($forums) > 0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Темасы</th>
                                    <th>Суроо</th>
                                    <th>Автор</th>
                                    <th>Uш-аракет</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($forums as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{!! $item->body !!}</td>
                                        <td>{{ $item->owner }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('forums.show', $item) }}" class="btn btn-primary mr-1">көрүү</a>
                                            <a href="{{ route('forums.edit', $item) }}" class="btn btn-warning mr-1">өзгөртүү</a>
                                            <form action="{{ route('forums.destroy', $item) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">өчүрүү</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Азырынча маалымат киргизиле элек</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
