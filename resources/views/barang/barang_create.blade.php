@extends('layouts.default')

@section('title', 'Belanja')

@section('content')

<div class="m-5">

    <form method="POST" action="/barang">
        @csrf

        <div class="mb-3">
            <label for="id_penangkaran" class="form-label">id_penangkaran</label>
            <input type="text" class="form-control" id="id_penangkaran" name="id_penangkaran" value="{{ Session::get('id_penangkaran') }}">
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">nama_barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ Session::get('nama_barang') }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">jumlah_barang</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ Session::get('jumlah_barang') }}">
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label">berat</label>
            <input type="number" class="form-control" id="berat" name="berat" value="{{ Session::get('berat') }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ Session::get('harga') }}">
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
