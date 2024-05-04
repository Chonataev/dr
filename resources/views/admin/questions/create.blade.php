@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5> Суроо кошуу </h5>
                        <div>
                            <a href="{{ url()->previous() }}" class="">
                                <button class="btn btn-primary">< Артка</button>
                            </a>
                        </div>
                    </div>

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
                                        <label for="question">Суроо</label>
                                        <textarea class="summernote" id="question" name="questions[1][question]">
                                            Суроо...
                                        </textarea>
                                    </div>

                                    <div class="row">
                                        <div class=" form-group col-md-6">
                                            <label for="answer1">а</label>
                                            <input type="text" class="form-control rounded" id="answer1" name="questions[1][answers][1]">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="answer2">б</label>
                                            <input type="text" class="form-control rounded" id="answer2" name="questions[1][answers][2]">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="answer3">с</label>
                                            <input type="text" class="form-control rounded" id="answer3" name="questions[1][answers][3]">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="answer4">д</label>
                                            <input type="text" class="form-control rounded" id="answer4" name="questions[1][answers][4]">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-5 p-0">
                                        <label for="correct_answer">Туура жоопту тандоо</label>
                                        <select class="form-control rounded" id="correct_answer" name="questions[1][correct_answer]">
                                            <option value="1">а</option>
                                            <option value="2">б</option>
                                            <option value="3">с</option>
                                            <option value="4">д</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 p-0 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Сактоо</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
