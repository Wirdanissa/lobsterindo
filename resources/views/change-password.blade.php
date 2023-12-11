@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/change-password.css') }}">

        <!--forgot password-->
        <div class="container-forgot">
            <div class="kotak">
                <a style="width:10vw; z-index: 2;" class="btn btn-orange ms-5 mt-4" href="login.html">Kembali</a>
                <div class="kotak2">
                    <form action="login.html" class="container-reset">
                        <div style="text-align: center;" class="title">
                            <b>Masukan Kata sandi baru Anda</b>
                        </div>
                        <a>Buat kata sandi yang kuat untuk akun dengan e-mail anda
                            ***@gmail.com </a>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="Search...">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Kata Sandi Baru</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="Search...">
                        </div>
                        <label for="exampleFormControlInput1" class="form-label">Setelah mengubah kata sandi, silahkan
                            masuk kembali menggunakan kata sandi terbaru pada perankat anda.</label>
                        <div class="d-flex justify-content-center mt-4">
                            <button style="width: 10vw;" type="submit" class="btn btn-orange"
                                href="#">Konfirmasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--forgot password-->

@endsection
