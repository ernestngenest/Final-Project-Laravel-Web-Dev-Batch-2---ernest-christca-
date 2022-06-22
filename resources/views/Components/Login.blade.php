@extends('layouts.login-rgs')

@section('content-login')
<div class="row m-5">
    @if(@session()->has('LoginError'))
        <div class="alert alert-danger text-dark alert-dismissible fade show" role="alert">
            <strong>{{ session('LoginError') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(@session()->has('RegisterSuccess'))
        <div class="alert alert-success text-dark alert-dismissible fade show" role="alert">
            <strong>{{ session('RegisterSuccess') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-md-12 rounded">
        <div class="row">
            <div class="col-lg-6 p-0 m-0">
                <div class="row h-100 align-items-center py-4 p-5 text-white rounded-3 justify-content-center align-items-center"style="background-color:rgb(25,57,101);">
                    <div class="row justify-content-center py-2">
                        <div class="col-md-9 p-3 text-center">
                            <h1 class="p-0">Welcome Back</h1>
                        </div>
                        <form action="/auth/login" method="POST" enctype="multipart/form-data" class="col-md-8 p-5">
                            @csrf
                            <div class="form-group py-2">
                                <input type="email" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" value = "@error('email') {{ old('email') }} @enderror">
                            </div>
                            @error('email')
                                <span class="text-danger px-3" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="form-group py-3">
                                <input type="password" class="form-control rounded-pill" name = "password" placeholder="password">
                            </div>
                            @error('password')
                                <span class="text-danger px-3" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="text-center">
                                <button class="btn btn-outline-light rounded-pill w-25 text-center" type="submit">Login</button>
                            </div>
                        </form>
                        <div class="row justify-content-center p-0 m-0">
                            <div class="col-md-12 text-center">
                                <span class="text-white">Doesn't have an account?</span>
                                <a href="/auth/register" class="text-success text-decoration-none">Register</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 d-flex p-0 m-0">
                <img src="{{ asset('assets/Register/Login') }}" class= " flex-fill" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
