<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsable Communal Register</title>

    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('loginresp/images/icons/favicon.ico') }}"/>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('registerresp/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('registerresp/css/style.css') }}">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/voirie_gestion.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ route('responsable.createresp') }}" id="signup-form" class="signup-form">

                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                        <h2 class="form-title">Créer un compte</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}"/>
                            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email address" value="{{ old('email') }}"/>
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="commune" placeholder="Enter commune name" value="{{ old('commune') }}" id="commune" />
                            <span class="text-danger">@error('commune'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password"  placeholder="Enter password" value="{{ old('password') }}"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="cpassword" id="cpassword" placeholder="Enter confirm password" value="{{ old('cpassword') }}"/>
                            <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte toutes les déclarations </label>
                            <!-- <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>-->
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                    Avoir déjà un compte ? <a href="{{ route('responsable.login') }}" class="loginhere-link">Connectez-vous ici</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('registerresp/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('registerresp/js/main.js') }}"></script>
</body>
</html>