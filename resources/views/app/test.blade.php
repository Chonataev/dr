@extends('layouts.app')

@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <div class="container-fluid">

            <div class="col-lg-8 m-auto">
                <form class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5> {{ $test->title }} </h5>
                        <div>
                            <a href="{{ url()->previous() }}" class="">
                                <button class="btn btn-primary">< Артка</button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="">

                            @foreach($questions as $index => $question)
                                <div class="basic-form p-3 bg-light mb-3">
                                    <p> <strong>{{$index+1}}-суроо.</strong> {!!$question->question!!}</p>
                                    <div class="form-group mt-5">
                                        @foreach($question->answers as $answer)
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                <input type="radio" name="" class="form-check-input" value="">{{ $answer->content }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                            <div class="basic-form">
                                <button type="submit" class="btn btn-cancel">Cancel</button>
                                <button class="btn btn-success">Send</button>
                            </div>

                        </form>
                    </div>
                </form>
            </div>
        </div>

        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->




@endsection
