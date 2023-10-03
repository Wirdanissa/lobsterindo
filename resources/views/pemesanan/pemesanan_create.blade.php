@extends('layouts.default')

@section('title', 'Belanja')

@section('content')

<div class="m-5">

    <form method="POST" action="/barang">
        @csrf
        <h1>Id barang = {{ $data->id }}</h1>
        <div class="mb-3">
            <th>id</th>
                <th>pembayaran</th>
                <th>user</th>
                <th>pemesanan</th>
                <th>pembayaran</th>
                <th>pengiriman</th>
                <th>jumlah</th>
                <th>total_pembayaran</th>
                <th>alamat</th>
                <th>deskripsi</th>
                <th>>stat_pembayaran</th>
                <th>stat_pemesanan</th>
                <th>stat_pengiriman</th>
                <th>no_pembayaran</th>
            <label for="id_barang" class="form-label">pembayaran</label>
            <input type="text" class="form-control" id="id_barang" name="id_barang" value="{{ Session::get('id_barang') }}">
        </div>
        <div class="mb-3">
            <label for="id_pembayaran" class="form-label">user</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ Session::get('nama_barang') }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">jumlah</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ Session::get('jumlah_barang') }}">
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label">alamat</label>
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
