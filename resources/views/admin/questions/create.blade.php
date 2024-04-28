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
                                        <label for="answers">Answers</label>
                                        <input type="text" class="form-control" id="answer1" name="questions[1][answers][]">
                                        <input type="text" class="form-control" id="answer2" name="questions[1][answers][]">
                                        <input type="text" class="form-control" id="answer3" name="questions[1][answers][]">
                                        <input type="text" class="form-control" id="answer4" name="questions[1][answers][]">
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
                    <label for="answers">Answers</label>
                    <input type="text" class="form-control" id="answer${questionIndex}_1" name="questions[${questionIndex}][answers][]">
                    <input type="text" class="form-control" id="answer${questionIndex}_2" name="questions[${questionIndex}][answers][]">
                    <input type="text" class="form-control" id="answer${questionIndex}_3" name="questions[${questionIndex}][answers][]">
                    <input type="text" class="form-control" id="answer${questionIndex}_4" name="questions[${questionIndex}][answers][]">
                </div>
            `;

            questionsContainer.appendChild(newQuestionBlock);
        });
    </script>
@endsection
