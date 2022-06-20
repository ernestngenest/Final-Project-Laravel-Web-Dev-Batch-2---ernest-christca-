@extends('layouts.login-rgs')

@section('content-login')
    <div class="row m-5">
        <div class="col-md-12 rounded">
            <div class="row">
                <div class="col-lg-6 p-0 m-0">
                    <div class="row h-100 py-4 p-5 text-white rounded-3 justify-content-center align-items-center"style="background-color:rgb(25,57,101);">
                        <div class="row justify-content-center py-2">
                            <div class="col-md-9 text-end ms-5 p-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span class="">Start</span>
                                    </div>
                                    <div class="col-md-3">
                                        <h1>BUILD</h1>
                                    </div>
                                    <div class="col-md-3 flex-fill text-start d-flex align-items-end ">
                                        <h5 class="">With Us</h5>
                                    </div>
                                </div>
                            </div>
                            <form action="/register" method="post" enctype="multipart/form-data" class="col-md-8 p-5">
                                @csrf
                                <div class="form-group mb-4 py-1">
                                    <input type="email" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group mb-4 py-1">
                                    <input type="text" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Username">
                                </div>
                                <div class="form-group mb-4 py-1">
                                    <input type="password" class="form-control rounded-pill" name = "password" id="exampleInputPassword1" placeholder="password">
                                </div>
                                <div class="form-group mb-4 py-1">
                                    <input type="password" class="form-control rounded-pill" name = "password_confirmation" id="exampleInputPassword1" placeholder="Confirm Password">
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-outline-light rounded-pill w-25 text-center" type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex p-0 m-0">
                    <img src="{{ asset('assets/Register/Register') }}" class= " flex-fill" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
