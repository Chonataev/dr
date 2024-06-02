@extends('layouts.app')

@section('content')


    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="row page-titles mx-0">
                        <div class="col-lg-4 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center mb-4">
                                        <img class="mr-3" src="{{ asset('/storage/dist/images/student.png')}}" width="80" height="80" alt="">
                                        <div class="media-body">
                                            <h3 class="mb-0">{{$user->name}}</h3>
                                            <p class="text-muted mb-0">Кыргызстан</p>
                                        </div>
                                    </div>

                                    <ul class="card-profile__info">
                                        <li class="mb-1">
                                            <strong class="text-dark mr-4">Email:</strong>
                                            <span> {{$user->email}} </span>
                                        </li>
                                        <li class="mb-1">
                                            <strong class="text-dark mr-4">Тузулгон датасы:</strong>
                                            <span> {{$user->created_at->format('Y-m-d H:i:s A')}} </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between mb-3">
                                        <h5 class="mb-sm-0"> Мен тапшырган тесттер </h5>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th> № </th>
                                                    <th> Студент </th>
                                                    <th> Тесттин темасы </th>
                                                    <th> Жыйынтык </th>
                                                    <th> Тапшарган дата </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($results) > 0)
                                                    @foreach($results as $index => $result)
                                                        <tr>
                                                            <td> {{$index + 1}} </td>
                                                            <td> {{$user->name}} </td>
                                                            <td> {{$result->test_title}} </td>
                                                            <td>
                                                                <a href="{{route('test_result', ['result_test_id' => $result->id])}}">
                                                                    {{$result->answer}}
                                                                    <i class="fa fa-link ml-2"></i>
                                                                </a>
                                                            </td>
                                                            <td> {{$result->created_at->format('Y-m-d H:i:s A')}}  </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--**********************************
        Content body end
    ***********************************-->

@endsection
