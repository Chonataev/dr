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

                        <form method="POST" action="{{ route('questions.store', $test) }}">
                            @csrf

                            <div class="form-group">
                                <label for="question">Суроо</label>
                                <input type="text" class="form-control" id="question" name="question">
                            </div>

                            <div class="form-group">
                                <label for="answers">Жооп</label>
                                <input type="text" class="form-control" id="answer1" name="answers[]">
                                <input type="text" class="form-control" id="answer2" name="answers[]">
                                <input type="text" class="form-control" id="answer3" name="answers[]">
                                <input type="text" class="form-control" id="answer4" name="answers[]">
                            </div>

                            <button type="submit" class="btn btn-primary">Тузуу</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
