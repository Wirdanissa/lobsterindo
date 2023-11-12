@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<div class="m-5">

    <form method="POST" action="{{ '/barang/'.$data->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <br><br>
        <a href="/barang" class="btn btn-secondary">Kembali</a>
        <div class="mb-3">
            <h4>id_penangkaran : {{ $data->id_penangkaran }}</h4>
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">nama_barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $data->nama_barang }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">jumlah_barang</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ $data->jumlah_barang }}">
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label">berat</label>
            <input type="number" class="form-control" id="berat" name="berat" value="{{ $data->berat }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $data->harga }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi</label>
            <input class="form-control" id="deskripsi" rows="3" name="deskripsi" value="{{ $data->deskripsi }}" >
        </div>
        <img style="max-height: 150px" src="{{ url('foto_barang/'.$data->image) }}" alt="">
        <div class="mb-3">
            <label for="foto" class="form-label">Foto Barang</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
