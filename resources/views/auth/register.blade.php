@extends('users.pages.template')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Male Hair Salon Register Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .login-form-container {
                border-radius: 15px;
                /* Smooth, rounded corners */
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.15);
                /* Softer shadow for depth */
                background-color: #ffffff;
                /* Contrasting white background */
                padding: 40px;
                /* Balanced padding for card */
                margin: 5% auto;
                /* Center and top margin */
                width: 90%;
                /* Responsive width */
                max-width: 700px;
                /* Maximum width for larger screens */
            }

            .login-form-container h2 {
                color: #333;
                /* Dark grey for good contrast */
                font-weight: bold;
                margin-bottom: 25px;
                text-align: center;
            }

            .form-control {
                border-radius: 8px;
                /* Smooth, rounded input fields */
                box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
                /* Subtle inner shadow */
                border: 1px solid #343a40;
                /* Consistent border */
                background-color: #ffffff;
                /* Light background for inputs */
                color: #333;
                /* Standard text color */
                padding: 10px;
                /* Comfortable padding */
                transition: all 0.3s ease;
                /* Smooth transition on focus */
            }

            .form-control:focus {
                border-color: #007bff;
                /* Highlight border on focus */
                box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
                /* Bright focus shadow */
            }

            .form-control option {
                background-color: #343a40;
                /* Dark background for dropdown options */
                color: #ffffff;
                /* White text in options */
            }

            .btn-primary,
            .custom-btn {
                background-color: #007bff;
                /* Primary blue */
                color: #ffffff;
                /* White text */
                border: none;
                border-radius: 8px;
                padding: 12px 20px;
                transition: background-color 0.3s ease;
                /* Smooth transition */
                cursor: pointer;
            }

            .btn-primary:hover,
            .custom-btn:hover {
                background-color: #0056b3;
                /* Darker blue on hover */
            }

            .invalid-feedback {
                font-size: 0.9em;
                /* Smaller text for feedback */
                color: #e63946;
                /* Red color for visibility */
                margin-top: 5px;
                /* Spacing above error messages */
            }

            .create-account {
                text-align: center;
                margin-top: 20px;
            }

            a {
                color: #007bff;
                /* Link color consistent with primary button */
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
            }

            .custom-link {
                color: #333;
                /* Consistent link color */
                text-decoration: none;
            }

            .custom-link:hover {
                color: #007bff;
                /* Hover color to match theme */
                text-decoration: underline;
            }

            /* Apply specific styles to the gender select */
            #gender {
                background-color: #ffffff;
                /* White background for the select dropdown */
                color: #333;
                /* Dark text color */
                border-radius: 8px;
                /* Rounded corners */
                border: 1px solid #343a40;
                /* Consistent border */
                padding: 10px;
                /* Padding for the select box */
                box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
                /* Inner shadow */
                -webkit-appearance: none;
                /* Remove default dropdown styles in WebKit browsers */
                -moz-appearance: none;
                /* Remove default dropdown styles in Firefox */
                appearance: none;
                /* Standardize appearance across browsers */
            }

            /* Make sure the options have a white background */
            #gender option {
                background-color: #ffffff;
                /* White background for options */
                color: #333;
                /* Dark text color for contrast */
            }
        </style>






    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                    <div class="card login-form-container">
                        <h2>{{ __('Register') }}</h2>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <!-- Name Field -->
                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email Field -->
                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Mobile Field -->
                                <div class="row mb-3">
                                    <label for="mobile"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Mobile') }}</label>
                                    <div class="col-md-6">
                                        <input id="mobile" type="text"
                                            class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                            value="{{ old('mobile') }}" autocomplete="mobile">
                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Age Field -->
                                <div class="row mb-3">
                                    <label for="age"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>
                                    <div class="col-md-6">
                                        <input id="age" type="number"
                                            class="form-control @error('age') is-invalid @enderror" name="age"
                                            value="{{ old('age') }}" autocomplete="age">
                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="gender"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                                    <div class="col-md-6">
                                        <select id="gender" class="form-control @error('gender') is-invalid @enderror"
                                            name="gender">
                                            <option value="">{{ __('Select Gender') }}</option>
                                            <option value="Male">{{ __('Male') }}</option>
                                            <option value="Female">{{ __('Female') }}</option>
                                            <option value="Other">{{ __('Other') }}</option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <!-- Address Field -->
                                <div class="row mb-3">
                                    <label for="address"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ old('address') }}" autocomplete="address">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="role"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
                                    <div class="col-md-6">
                                        <select class="form-control @error('role') is-invalid @enderror" id="role"
                                            name="role" required>
                                            <option value="2" {{ old('role') == '2' ? 'selected' : '' }}>User</option>
                                            <option value="1" {{ old('role') == '1' ? 'selected' : '' }}>Staff
                                            </option>
                                            <option value="0" {{ old('role') == '0' ? 'selected' : '' }}>Admin
                                            </option>
                                        </select>
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <!-- Password Field -->
                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <!-- Submit Button and Login Link -->
                                <div class="row mb-2">
                                    <div class="col-md-6 offset-md-4 d-flex align-items-center">
                                        <button type="submit" class="btn custom-btn">
                                            {{ __('Register') }}
                                        </button>
                                        <a href="{{ route('login') }}"
                                            class="ms-3 custom-link">{{ __('Already have an account? Login') }}</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
