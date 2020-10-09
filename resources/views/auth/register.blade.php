<<<<<<< HEAD
@extends('layouts.app')
=======
>>>>>>> 45c54ab96e3048c2b5ee628989258a2cce0f3746

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('colorlib/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('colorlib/css/style.css')}}">
</head>
<body>

    <div class="main">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="{{ asset('colorlib/images/signin-image.jpg')}}" alt="sing up image"></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Register</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <div class="col-md-6">
                                <input placeholder="nama" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <div class="col-md-6">
                                <input placeholder="E-Mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <div class="col-md-6">
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <div class="col-md-6">
                                <input placeholder="Konfirmasi Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group from-button">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" onclick="window.history.go(-1); return false;">
                                    {{ __('Kembali') }}
                                </button>
                              </div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>