@extends('layouts.default')

@section('title', 'Belanja')

@section('content')

<div class="m-5">

    <form method="POST" action="/barang">
        @csrf
        <a href="/pembayaran" class="btn btn-secondary mb-2">Kembali</a>
        <div class="mb-3">
            <label for="nama_pembayaran" class="form-label">Nama Pembayaran</label>
            <input type="text" class="form-control" id="nama_pembayaran" name="nama_pembayaran" value="{{ Session::get('nama_pembayaran') }}">
        </div>
        <div class="mb-3">
            <label for="code_bank" class="form-label">Code Bank</label>
            <input type="text" class="form-control" id="code_bank" name="code_bank" value="{{ Session::get('code_bank') }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection
