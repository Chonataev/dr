@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>
                            <a href="{{  route('tests.index')  }}" class=""><<- артка</a>
                        </div>
                        <div>
                            {{ $test->title }}
                        </div>
                        <div>
                            <a href="{{  route('questions.create', $test->id)  }}"> суроо кошу->></a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($questions->isEmpty())
                            <p>No questions found.</p>
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
                                    <th>Actions</th> <!-- Add this line for the Actions column -->
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($questions as $question)
                                    <tr>
                                        <td>{{ $question->id }}</td>
                                        <td>
                                            <strong>Question:</strong> {{ $question->question }} <br>
                                            <strong>Answers:</strong><br>
                                            @foreach($question->answers as $answer)
                                                <span
                                                    @if($answer->right == 1)
                                                        style="color:red"
                                                    @endif
                                                >
                                                    {{ $answer->content }} <br>
                                                </span>
                                            @endforeach
                                        </td>
                                        <td> <!-- Add this cell for the Actions -->
                                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
