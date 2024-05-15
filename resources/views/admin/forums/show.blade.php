@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-header"> Маалымат </h4>
                        <a href="/admin/forums" >
                            <button class="btn btn-primary">Артка </button>
                        </a>
                    </div>

                    <div class="card-body">

                        <ul>
                            <li> <strong>Тема</strong>: {{ $forum->title }} </li>
                            <li> <strong>Суроо</strong>: {!! $forum->body !!} </li>
                        </ul>

                        @if (!empty($disqus))
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Суроо</th>
                                    <th>Иш-аракет</th>
                                    <!-- Additional fields from the disqus table, if any -->
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($disqus as $index=>$item)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{!! $item->body !!}</td>
                                        <td>
                                            <form action="{{ route('disqus.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Очуруу</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No Disqus data found for this forum.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
