@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<div class="m-5">

    <form method="POST" action="{{ '/pembayaran/'.$data->id }}">
        @csrf
        @method('PUT')
        <a href="/pembayaran" class="btn btn-secondary mb-2">Kembali</a>
        <div class="mb-3">
            <h4>ID Pembayaran : {{ $data->id }}</h4>
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">nama pembayaran</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $data->nama_pembayaran }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">code bank</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ $data->code_bank }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
