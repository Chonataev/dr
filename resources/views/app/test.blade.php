@extends('layouts.app')

@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <div class="container-fluid">

            <div class="col-lg-8 m-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5> {{ $test->title }} </h5>
                        <div>
                            <a href="{{ url()->previous() }}" class="">
                                <button class="btn btn-primary">< Артка</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.test.controller')}}">
                            @csrf
                            <input type="hidden" value="{{$test->id}}" name="test_id">
                            @foreach($questions as $index => $question)
                                <div class="basic-form p-3 bg-light mb-3">
                                    <p><strong>{{$index+1}}-суроо.</strong> {!!$question->question!!}</p>
                                    <ul class="mt-3 pl-3">
                                        @foreach($question->answers as $answer)
                                            <li>
                                                <label class="form-check-label">
                                                    <input type="radio" name="answers[{{$question->id}}]" id="{{$answer->id}}" class="form-check-input" value="{{$answer->id}}">{{ $answer->content }}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach

                            <div class="basic-form">
                                <button type="submit" class="btn btn-success">Текшеруу</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->




@endsection
