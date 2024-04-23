@extends('layouts.auth')

@section('content')

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <h4 class="text-center">Log in</h4>

                            <form class="mt-5 mb-5 login-input"  action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}">
                                </div>
                                <button class="btn login-form__btn submit w-100">Sign In</button>
                            </form>
                            <p class="mt-5 login-form__footer">Dont have account? <a href="{{ route('register') }}" class="text-primary">Sign Up</a> now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
