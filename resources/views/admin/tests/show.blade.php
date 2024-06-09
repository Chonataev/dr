@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>{{ $test->title }}</h5>
                        <div>
                            <a href="{{  route('tests.index')  }}" class="">
                                <button class="btn btn-primary">< Артка</button>
                            </a>
                            <a href="{{  route('questions.create', $test->id)  }}">
                                <button class="btn btn-primary">Суроо кошуу</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($questions->isEmpty())
                            <p> Азырынча суроолор жок </p>
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Суроо</th>
                                    <th>Жооптор</th>
                                    <th>Actions</th> <!-- Add this line for the Actions column -->
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($questions as $question)
                                    <tr>
                                        <td class="align-top">{{ $question->id }}</td>
                                        <td class="align-top">{!! $question->question !!}</td>
                                        <td class="d-flex align-top">
                                            <ui>
                                                @foreach($question->answers as $index => $answer)
                                                    @if($answer->right == 1)
                                                        <li class="mb-1">
                                                            {{$index + 1}}. {{ $answer->content }}
                                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 12 12" width="12" height="12"><path d="M6 0a6 6 0 1 1 0 12A6 6 0 0 1 6 0Zm-.705 8.737L9.63 4.403 8.392 3.166 5.295 6.263l-1.7-1.702L2.356 5.8l2.938 2.938Z"></path></svg>
                                                        </li>
                                                    @else
                                                        <li class="mb-1"> {{$index + 1}}. {{ $answer->content }} </li>
                                                    @endif
                                                @endforeach
                                            </ui>
                                        </td>
                                        <td class="align-top"> <!-- Add this cell for the Actions -->
                                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-primary btn-sm">өзгөртүү</a>
                                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">өчүрүү</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
