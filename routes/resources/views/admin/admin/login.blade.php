
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->


    {{-- <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('asset/css/all.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assetbackend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetbackend/css/all.css') }}">

    <link href="{{ asset('assetbackend/css/style.css') }}" rel="stylesheet">

    <title>Welcome!</title>
</head>

<body class="vh-100 login-wrap">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form login-form">
                                    <div class="form-header text-center">
                                        <h2>Admin Login Portal</h2>
                                        <h5>Looking for our amazing services pricing &amp; Info? Go to Home Page</h5>
                                    </div>

                                    <form method="POST" action="{{ route('login-user') }}">
                                        @csrf
                                        <div class="form-label-group">


                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" placeholder="Email" required
                                                autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror


                                            <label for="form_username">Email</label>


                                        </div>
                                        <div class="form-label-group">

                                            <input id="password" type="password" placeholder="Password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror


                                            <label for="inputPassword">Password</label>
                                        </div>

                                        <div class="forgot-pass">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                        <div class="text-center form-action">
                                            <button type="submit" class="btn btn-primary text-uppercase">Login</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assetbackend/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('assetbackend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assetbackend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetbackend/js/script.js') }}"></script>


</body>

</html>
