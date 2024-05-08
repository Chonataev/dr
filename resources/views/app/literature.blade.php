@extends('layouts.app')

@section('content')

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
                    <div class="mb-4 p-2">
                        <h2>Адабияттар</h2>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Адабияттар тизмеси</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Аты</th>
                                        <th>Title</th>
                                        <th>Кочуруу</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($files))
                                        @foreach($files as $file)
                                            <tr>
                                                <td>{{$file->id}}</td>
                                                <td>{{$file->title}}</td>
                                                <td>{{$file->file_url}}</td>
                                                <td>
                                                    <a href="{{ route('download', ['fileName' => $file->file_url]) }}">Файлды кочуруу</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>№</th>
                                        <th>Аты</th>
                                        <th>Title</th>
                                        <th>Кочуруу</th>
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
@endsection
