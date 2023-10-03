@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<div class="m-5">

    <form method="POST" action="{{ '/penangkaran/'.$data->id }}">
        @csrf
        @method('PUT')
        <a href="/penangkaran" class="btn btn-secondary">Kembali</a>
        <div class="mb-3">
            <h4>id_penangkaran : {{ $data->id }}</h4>
        </div>
        <div class="mb-3">
            <label for="manager_id" class="form-label">Manager ID</label>
            <input type="number" class="form-control" id="manager_id" name="manager_id" value="{{ $data->manager_id }}">
        </div>
        <div class="mb-3">
            <label for="lokasi_penangkaran" class="form-label">Lokasi Penangkaran</label>
            <input type="text" class="form-control" id="lokasi_penangkaran" name="lokasi_penangkaran" value="{{ $data->lokasi_penangkaran }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_karyawan" class="form-label">Jumlah Karyawan</label>
            <input type="number" class="form-control" id="jumlah_karyawan" name="jumlah_karyawan" value="{{ $data->jumlah_karyawan }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
