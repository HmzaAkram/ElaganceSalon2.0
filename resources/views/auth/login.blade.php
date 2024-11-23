@extends('users.pages.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Male Hair Salon Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      background-color: #e9ecef; /* Light grey background for a clean look */
      font-family: 'Arial', sans-serif; /* Clean font */
    }
    .login-form-container {
      border-radius: 15px; /* Rounded corners */
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2); /* Soft shadow */
      background-color: #ffffff; /* White background for contrast */
      padding: 40px; /* Padding around the card */
      margin-top: 5%; /* Margin from the top */
    }
    .login-form-container h2 {
      color: #343a40; /* Dark grey color for the heading */
      font-weight: bold; /* Bold text for emphasis */
      margin-bottom: 25px; /* Space below heading */
      text-align: center; /* Center the heading */
    }
    .form-control {
      border-radius: 8px; /* Rounded input fields */
      box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle inner shadow */
      border: 1px solid #343a40; /* Dark grey border */
    }
    .form-control:focus {
      border-color: #343a40; /* Dark grey focus border color */
      box-shadow: 0 0 0.2rem rgba(52, 58, 64, 0.25); /* Focus shadow */
    }
    .btn-primary {
      background-color: #007bff; /* Classic blue for the button */
      border: none; /* Remove border */
      border-radius: 8px; /* Rounded button */
      padding: 12px 20px; /* Padding for button */
      transition: background-color 0.3s; /* Transition effect */
    }
    .btn-primary:hover {
      background-color: #0056b3; /* Darker blue on hover */
    }
    .invalid-feedback {
      font-size: 0.9em; /* Smaller error message */
    }
    .create-account {
      text-align: center; /* Centered text */
      margin-top: 20px; /* Space above */
    }
    a {
      color: #007bff; /* Link color */
      text-decoration: none; /* No underline */
    }
    a:hover {
      text-decoration: underline; /* Underline on hover */
    }
  </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card login-form-container">
                <h2>{{ __('Login') }}</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div> --}}

                        <div class="mb-3" style="margin-left: 160px;">
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                            @if (Route::has('password.request'))
                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> --}}
                            @endif
                        </div>

                        <div class="create-account">
                            <p>Don't have an account? <a href="{{ route('register') }}">Create one</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
</body>
@endsection
