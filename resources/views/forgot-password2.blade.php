@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}">

    <!--forgot password-->
    <div class="container-forgot">

      <div class="kotak">
        <a style="width:10vw;" class="btn btn-orange ms-5 mt-4" href="forgot-password.html">Kembali</a>
        <div class="kotak2">
          <form action="change-password.html" class="container-reset">
            <div style="text-align: center;" class="title">
              <b>Masukkan OTP Anda</b>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1" class="form-label">Kami Telah mengirimkan code OTP ke Nomer
                anda!</label>
              <a style="color: #FF4A2B;" href="forgot-password2.html">Kirim Ulang</a>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Search..."
                name="otp">
            </div>
            <div class="d-flex justify-content-center mt-4">
              <button style="width: 10vw;" type="submit" class="btn btn-orange">Konfirmasi</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--forgot password-->

@endsection
