@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}">

        <div class="utama">
            <div class="containerlogin" id="containerlogin">
                <div class="form-containerlogin sign-up-containerlogin">
                    <form method="POST" action="login.html">
                        <h1>Create Account</h1>
                        <input id="name" type="text" class="form-control " name="name" required autocomplete="name"
                            placeholder="Nama">
                        <!-- <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span> -->
                        <input id="email" type="email" class="form-control " name="email" required autocomplete="email"
                            placeholder="Email">
                        <!-- <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span> -->
                        <input id="password" type="password" class="form-control " name="password" required
                            autocomplete="new-password" placeholder="Password">

                        <!-- <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span> -->
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="confirm-password">
                        <button style="width: auto;" type="submit" class="btn btn-orange mt-2">
                            Register
                        </button>
                    </form>
                </div>


                <div class="form-containerlogin sign-in-containerlogin">
                    <form method="POST" action="Beranda.html">

                        <h1>Sign in</h1>
                        <input id="email" type="email" class="form-control " name="email" required autocomplete="email"
                            autofocus placeholder="Email">

                        <!-- <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span> -->


                        <input id="password" type="password" class="form-control" name="password" required
                            autocomplete="current-password" placeholder="Password">

                        <!-- <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span> -->



                        <a class="btn btn-link" href="forgot-password.html">
                            Forgot Your Password?
                        </a>

                        <button style="width: 10vw;" type="submit" class="btn btn-orange mt-2">
                            Login
                        </button>
                    </form>
                </div>
                <div class="overlay-containerlogin">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1>Welcome Back!</h1>
                            <p>To keep connected with us please login with your personal info</p>
                            <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1>Hello, Friend!</h1>
                            <p>Enter your personal details and start journey with us</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/login.js"></script>
@endsection
