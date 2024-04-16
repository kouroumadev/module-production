@extends('layouts.app')

@section('content')
    <div class="login-page">

        <div class="login-header box-shadow">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <div class="brand-logo mt-2">
                    <a href="login.html">
                        <img src="{{ asset('logos/top-logo.png') }}" alt="">
                    </a>
                </div>
                <div class="login-menu">
                    <ul>
                        {{-- <li><a href="register.html">Register</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>

        <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <img src="{{ asset('theme/vendors/images/login-page-img.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="login-box bg-success box-shadow border-radius-10">
                            <div class="login-title text-center">
                                {{-- <img src="{{ asset('logos/main-logo.png') }}" alt="" style="height: 200px"> --}}
                                <h2 class="text-center text-white">Changement de Mot de passe</h2>
                            </div>
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <form method="POST" action="{{ route('first-login') }}">
                                @csrf

                                <input type="hidden" name="id" value="{{ $id }}">

                                <div class="input-group custom">
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        placeholder="Nouveau Mot de passe">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="input-group custom">
                                    <input type="password" class="form-control form-control-lg" name="password_confirmation"
                                        placeholder="Confirmer votre mot de passe">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                    </div>
                                </div>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">


                                            <input class="btn btn-warning btn-lg btn-block" type="submit" value="Save">


                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
