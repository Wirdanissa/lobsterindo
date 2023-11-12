@extends('layouts.default')

@section('title', 'Belanja')

@section('content')

<div class="m-5">

    <form method="POST" action="/pemesanan">
        @csrf
        <h1>Id barang = {{ $data->id }}</h1>
        <div class="mb-3">
            <th>id</th>
            <label for="id_barang" class="form-label">pembayaran</label>
            <input type="text" class="form-control" id="id_barang" name="id_barang" value="{{ Session::get('id_barang') }}">
        </div>
        <div class="mb-3">
            <label for="id_pembayaran" class="form-label">id user</label>
            <input type="text" class="form-control" id="id_user" name="id_user" value="{{ Session::get('id_user') }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">jumlah</label>
            <input type="number" max="{{ $data->jumlah_barang }}" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ Session::get('jumlah_barang') }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ Session::get('alamat') }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea value="{{ Session::get('deskripsi') }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection
