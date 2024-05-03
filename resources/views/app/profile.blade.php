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
                                            <h3 class="mb-0">Асан Асанов</h3>
                                            <p class="text-muted mb-0">Кыргызстан</p>
                                        </div>
                                    </div>

                                    <ul class="card-profile__info">
                                        <li class="mb-1">
                                            <strong class="text-dark mr-4">Email:</strong>
                                            <span> asan@gmail.com </span>
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
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Асан Асанов </td>
                                                    <td> Физика элементарных частиц </td>
                                                    <td> 10/20 </td>
                                                    <td> 03-12-2024 10:13 </td>
                                                </tr>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Асан Асанов </td>
                                                    <td> Физика элементарных частиц </td>
                                                    <td> 10/20 </td>
                                                    <td> 03-12-2024 10:13 </td>
                                                </tr>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Асан Асанов </td>
                                                    <td> Физика элементарных частиц </td>
                                                    <td> 10/20 </td>
                                                    <td> 03-12-2024 10:13 </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th> № </th>
                                                    <th> Студент </th>
                                                    <th> Тесттин темасы </th>
                                                    <th> Жыйынтык </th>
                                                    <th> Тапшарган дата </th>
                                                </tr>
                                            </tfoot>
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