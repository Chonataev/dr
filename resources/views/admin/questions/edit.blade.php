@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Question</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="question-form" method="POST" action="{{ route('questions.update', $question->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" class="form-control" id="question" name="question" value="{{ $question->question }}">
                            </div>

                            @foreach($answers as $answer)
                                <div class="form-group">
                                    <input type="text" class="form-control" id="answer{{ $answer->id }}" name="answers[{{ $answer->id }}]" value="{{ $answer->content }}">
                                </div>
                            @endforeach

                            <div class="form-group">
                                <label for="correct_answer">Correct Answer</label>
                                <select class="form-control" id="correct_answer" name="correct_answer">
                                    @foreach($answers as $answer)
                                        <option value="{{ $answer->id }}" @if($question->correct_answer == $answer->id) selected @endif>{{ $answer->content }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

