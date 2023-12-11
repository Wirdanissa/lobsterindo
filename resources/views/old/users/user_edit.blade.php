@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<div class="m-5">

    <form method="POST" action="{{ '/user/'.$data->id }}">
        @csrf
        @method('PUT')
        <a href="/user" class="btn btn-secondary">Kembali</a>
        <div class="mb-3">
            <h4>id_user : {{ $data->id }}</h4>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama_user }}">
        </div>

        <select id="role" name="role" class="form-select" aria-label="Default select example">
            <option selected>Role</option>
            <option value="2">Boss</option>
            <option value="1">Pembeli</option>
            <option value="4">Manager Cabang</option>
            <option value="3">Admin Gudang</option>
            <option value="5">Kurir</option>

          </select>

        <div class="mb-3">
            <label for="no_telp" class="form-label">No. Telephone</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{ $data->no_telp }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
        </div>
        <div class="mb-3">
            <a class="btn btn-primary" href="{{ '/user/'.$data->id.'/password' }}">Rubah Password Password</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

</div>
@endsection
