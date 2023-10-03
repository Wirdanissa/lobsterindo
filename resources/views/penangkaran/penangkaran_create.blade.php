@extends('layouts.default')

@section('title', 'Belanja')

@section('content')

<div class="m-5">

    <form method="POST" action="/penangkaran">
        @csrf
        <div class="mb-3">
            <label for="manager_id" class="form-label">Manager ID</label>
            <input type="number" class="form-control" id="manager_id" name="manager_id" value="{{ Session::get('manager_id') }}">
        </div>
        <div class="mb-3">
            <label for="lokasi_penangkaran" class="form-label">Lokasi Penangkaran</label>
            <input type="text" class="form-control" id="lokasi_penangkaran" name="lokasi_penangkaran" value="{{ Session::get('lokasi_penangkaran') }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_karyawan" class="form-label">jumlah_karyawan</label>
            <input type="number" class="form-control" id="jumlah_karyawan" name="jumlah_karyawan" value="{{ Session::get('jumlah_karyawan') }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection
