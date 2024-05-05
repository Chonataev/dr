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

                    <div class="card">
                        <div class="card-body">
                            <h3>Адабияттар</h3>
                            <div class="table-responsive">
                                @if(count($literatures)>0)
                                    <table class="table table-striped table-bordered zero-configuration m-0">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Аты</th>
                                            <th>Кочуруу</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($literatures as $index=>$literature)
                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                                <td>{{ $literature->title }}</td>
                                                <td>
                                                    <a href="{{$literature->file_url}}" download>
                                                        Кочуруу
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" style="display: inline-block; vertical-align: text-bottom;"><path d="M2.75 14A1.75 1.75 0 0 1 1 12.25v-2.5a.75.75 0 0 1 1.5 0v2.5c0 .138.112.25.25.25h10.5a.25.25 0 0 0 .25-.25v-2.5a.75.75 0 0 1 1.5 0v2.5A1.75 1.75 0 0 1 13.25 14Z"></path><path d="M7.25 7.689V2a.75.75 0 0 1 1.5 0v5.689l1.97-1.969a.749.749 0 1 1 1.06 1.06l-3.25 3.25a.749.749 0 0 1-1.06 0L4.22 6.78a.749.749 0 1 1 1.06-1.06l1.97 1.969Z"></path></svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>№</th>
                                            <th>Аты</th>
                                            <th>Кочуруу</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    <p> Маалымат жок </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
