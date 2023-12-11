@extends('layouts.default')

@section('title', 'Belanja')

@section('content')

<div class="m-5">

    <form method="POST" action="/user">
        @csrf

        <a href="/user" class="btn btn-secondary">Kembali</a>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ Session::get('nama') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ Session::get('email') }}">
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telephone</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{ Session::get('no_telp') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ Session::get('password') }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection
