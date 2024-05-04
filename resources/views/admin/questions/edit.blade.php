@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5> Суроо озгортуу </h5>
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

                        <form id="question-form" method="POST" action="{{ route('questions.update', $question->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="question">Суроо</label>
                                <textarea class="summernote" id="question" name="question">
                                    {!! $question->question !!}
                                </textarea>
                            </div>

                            <div class="row">
                                <div class=" form-group col-md-6">
                                    <label for="answer1">а</label>
                                    <input type="text" class="form-control rounded" id="answer{{ $answers[0]->id }}" name="answers[{{ $answers[0]->id }}]" value="{{ $answers[0]->content }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="answer2">б</label>
                                    <input type="text" class="form-control rounded" id="answer{{ $answers[1]->id }}" name="answers[{{ $answers[1]->id }}]" value="{{ $answers[1]->content }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="answer3">с</label>
                                    <input type="text" class="form-control rounded" id="answer{{ $answers[2]->id }}" name="answers[{{ $answers[2]->id }}]" value="{{ $answers[2]->content }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="answer4">д</label>
                                    <input type="text" class="form-control rounded" id="answer{{ $answers[3]->id }}" name="answers[{{ $answers[3]->id }}]" value="{{ $answers[3]->content }}">
                                </div>
                            </div>

                            <div class="form-group col-md-5 p-0">
                                <label for="correct_answer">Туура жоопту тандоо</label>
                                <select class="form-control rounded" id="correct_answer" name="questions[1][correct_answer]">
                                    @foreach($answers as $index => $answer)
                                        @if($answer->right)
                                            <option selected value="{{ $answer->id }}">
                                                @if($index == 0)
                                                    а
                                                @elseif($index == 1)
                                                    б
                                                @elseif($index == 2)
                                                    с
                                                @elseif($index == 3)
                                                    д
                                                @endif
                                            </option>
                                        @else
                                            <option value="{{ $answer->id }}">
                                                @if($index == 0)
                                                    а
                                                @elseif($index == 1)
                                                    б
                                                @elseif($index == 2)
                                                    с
                                                @elseif($index == 3)
                                                    д
                                                @endif
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
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

