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
            <label for="password_lama" class="form-label">Password Lama</label>
            <input type="password" class="form-control" id="password_lama" name="password_lama">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password Baru</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password_baru" class="form-label">Ulangi Password Baru</label>
            <input type="password" class="form-control" id="password_baru" name="password_baru">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Rubah Password Password</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

</div>
@endsection
