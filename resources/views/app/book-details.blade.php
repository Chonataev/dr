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
                    <div class="card">
                        <div class="card-body">
                            <h4> Теория </h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores repellendus molestiae exercitationem voluptatem tempora quo dolore nostrum dolor consequuntur itaque, alias fugit. Architecto rerum animi velit, beatae corrupti quos nam saepe asperiores aliquid quae culpa ea reiciendis ipsam numquam laborum aperiam. Id tempore consequuntur velit vitae corporis, aspernatur praesentium ratione!</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4> Улгу мисалдар </h4>
                            <ul class="card-profile__info pl-3">
                                <li class="mb-1"> <a href="#"> file name link </a> </li>
                                <li class="mb-1"> <a href="#"> file name link </a> </li>
                                <li class="mb-1"> <a href="#"> file name link </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4> Оз алдынча мисалдар </h4>
                            <ul class="card-profile__info pl-3">
                                <li class="mb-1"> <a href="#"> file name link </a> </li>
                                <li class="mb-1"> <a href="#"> file name link </a> </li>
                                <li class="mb-1"> <a href="#"> file name link </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4> Тест </h4>
                            <ul class="card-profile__info pl-3">
                                <li class="mb-1"> <a href="#"> file name link </a> </li>
                                <li class="mb-1"> <a href="#"> file name link </a> </li>
                                <li class="mb-1"> <a href="#"> file name link </a> </li>
                            </ul>
                        </div>
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
