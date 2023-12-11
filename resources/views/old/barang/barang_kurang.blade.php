@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<div class="m-5">

    <form method="POST" action="{{ '/barang/'.$data->id.'/kurang' }}">
        @csrf
        @method('PUT')
        <a href="/barang" class="btn btn-secondary">Kembali</a>
        <div class="mb-3 mt-3">

            <b><p>id_penangkaran : {{ $data->id_penangkaran }}</p>
            <p>nama_barang : {{ $data->nama_barang }}</p>
            <p>harga : {{ $data->harga }}</p>
            <p>deskripsi : {{ $data->deskripsi }}</p>
            <p>jumlah_barang (saat ini) : {{ $data->jumlah_barang }}</p>
            <p>berat (saat ini) : {{ $data->berat }}</p></b>
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">jumlah_barang berkurang</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang">
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label">berat berkurang</label>
            <input type="number" class="form-control" id="berat" name="berat">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
