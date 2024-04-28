@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Question</div>

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

                        <form id="question-form" method="POST" action="{{ route('questions.store', $test) }}">
                            @csrf

                            <div id="questions-container">
                                <div class="question-block">
                                    <div class="form-group">
                                        <label for="question">Question</label>
                                        <input type="text" class="form-control" id="question" name="questions[1][question]">
                                    </div>

                                    <div class="form-group">
                                        <label for="answer1">Answer 1</label>
                                        <input type="text" class="form-control" id="answer1" name="questions[1][answers][1]">
                                    </div>
                                    <div class="form-group">
                                        <label for="answer2">Answer 2</label>
                                        <input type="text" class="form-control" id="answer2" name="questions[1][answers][2]">
                                    </div>
                                    <div class="form-group">
                                        <label for="answer3">Answer 3</label>
                                        <input type="text" class="form-control" id="answer3" name="questions[1][answers][3]">
                                    </div>
                                    <div class="form-group">
                                        <label for="answer4">Answer 4</label>
                                        <input type="text" class="form-control" id="answer4" name="questions[1][answers][4]">
                                    </div>

                                    <div class="form-group">
                                        <label for="correct_answer">Correct Answer</label>
                                        <select class="form-control" id="correct_answer" name="questions[1][correct_answer]">
                                            <option value="1">Answer 1</option>
                                            <option value="2">Answer 2</option>
                                            <option value="3">Answer 3</option>
                                            <option value="4">Answer 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button id="add-question" type="button" class="btn btn-success">+ Add Another Question</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-question').addEventListener('click', function () {
            var questionsContainer = document.getElementById('questions-container');
            var questionIndex = questionsContainer.querySelectorAll('.question-block').length + 1;

            var newQuestionBlock = document.createElement('div');
            newQuestionBlock.classList.add('question-block');

            newQuestionBlock.innerHTML = `
                <div class="form-group">
                    <label for="question${questionIndex}">Question</label>
                    <input type="text" class="form-control" id="question${questionIndex}" name="questions[${questionIndex}][question]">
                </div>

                <div class="form-group">
                    <label for="answer${questionIndex}1">Answer 1</label>
                    <input type="text" class="form-control" id="answer${questionIndex}1" name="questions[${questionIndex}][answers][1]">
                </div>
                <div class="form-group">
                    <label for="answer${questionIndex}2">Answer 2</label>
                    <input type="text" class="form-control" id="answer${questionIndex}2" name="questions[${questionIndex}][answers][2]">
                </div>
                <div class="form-group">
                    <label for="answer${questionIndex}3">Answer 3</label>
                    <input type="text" class="form-control" id="answer${questionIndex}3" name="questions[${questionIndex}][answers][3]">
                </div>
                <div class="form-group">
                    <label for="answer${questionIndex}4">Answer 4</label>
                    <input type="text" class="form-control" id="answer${questionIndex}4" name="questions[${questionIndex}][answers][4]">
                </div>

                <div class="form-group">
                    <label for="correct_answer${questionIndex}">Correct Answer</label>
                    <select class="form-control" id="correct_answer${questionIndex}" name="questions[${questionIndex}][correct_answer]">
                        <option value="1">Answer 1</option>
                        <option value="2">Answer 2</option>
                        <option value="3">Answer 3</option>
                        <option value="4">Answer 4</option>
                    </select>
                </div>
            `;

            questionsContainer.appendChild(newQuestionBlock);
        });
    </script>
@endsection
