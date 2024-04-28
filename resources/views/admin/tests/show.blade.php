@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Questions for {{ $test->title }}</div>

                    <div class="card-body">
                        @if ($questions->isEmpty())
                            <p>No questions found.</p>
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Question</th>
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
                                                - {{ $answer->content }} <br>
                                            @endforeach
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
