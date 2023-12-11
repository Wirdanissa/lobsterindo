@extends('layouts.default')
@section('title', 'Belanja')

@section('content')
<link rel="stylesheet" href="css/changepw.css">
<div class="d-flex justify-content-center">
<div class="layout">
        <div class="judul">
          <p>Kata Sandi Baru</p>
        </div>
        <div class="content">
          <p>Buat kata sandi yang kuat untuk akun dengan e-mail anda ***@gmail.com</p>
        </div>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kata Sandi Baru</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ketik Ulang Kata Sandi Baru</label>
            <input type="password" class="form-control" id="exampleInputPassword1" />
          </div>
          <div class="teks">
            <p align="center">Setelah mengubah kata sandi, <br />silahkan masuk kembali menggunakan kata sandi terbaru pada perangkat anda.</p>
        </form>
        <div class="button">
                <button type="submit" class="btn">Perbarui</button>
        </div>
      </div>
    </div>
@endsection