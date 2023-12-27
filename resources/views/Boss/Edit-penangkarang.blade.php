@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Boss/penangkaran.css') }}">

        <section>
            <form method="POST" action="{{ URL('/penangkaran/'.$data->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-5 rounded-5 box-create" style="width: 50%; margin: auto; margin-top: 7rem">
                <div class="">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center fs-4 fw-bold mt-4">Edit Penangkaran</h1>
                            <p class="text-center">Data Sensitif, pastikan data yang anda masukan sesuai !</p>
                            <div class="p-4 mb-4 mt-5 rounded-4 box-form">
                                    <div class="mb-3 row">
                                        <label for="exampleFormControlTextarea1"
                                            class="col-md-2 col-form-label">Alamat</label>
                                        <div class="col-md-10">
                                            <textarea class="rounded-3 form-control border" id="lokasi_penangkaran"
                                                name="lokasi_penangkaran"
                                                rows="3">{{ $data->lokasi_penangkaran }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="exampleInputPassword1"
                                            class="col-md-2 col-form-label">Manager</label>
                                        <div class="col-md-10">
                                            <select name="manager_id" class="form-select rounded-3 border"
                                                aria-label="Default select example" name="manager_id">
                                                <option value="{{ $data->id }}" selected>{{ $data->manager->nama_user }}</option>
                                                @foreach ( $role as $item )
                                                    @if ($item->nama_user == $data->manager->nama_user)

                                                    @else
                                                        <option value="{{ $item->id }}"> {{ $item->nama_user }}</option>
                                                    @endif
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="row mb-5 justify-content-center">
                                <div class="col-md-4 mb-3 d-flex justify-content-center">
                                    <a style="width: 15vw;" href="{{ URL('/penangkaran') }}" type="button"
                                        class="btn btn-orange">Kembali</a>
                                </div>
                                <div class="col-md-4 mb-3 d-flex justify-content-center">
                                    <button style="width: 15vw;" type="submit" class="btn btn-orange">Perbarui</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </section>
@endsection
