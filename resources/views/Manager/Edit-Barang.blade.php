@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Manager/master-stock.css') }}">

        <section>
                <div class="mb-5 rounded-5 box-create" style="width: 50%; margin: auto; margin-top: 7rem">
                    <div class="">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center fs-4 fw-bold mt-4">Perbarui informasi Barang</h1>
                                <p class="text-center">Data Sensitif, pastikan data yang anda masukan sesuai !</p>
                                <form method="POST" action="{{ '/barang/'.$barang->id }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row p-4 mb-4 mt-5 rounded-4 box-form">
                                        {{-- <form action="" method="post">
                                            @csrf
                                            @method('PUT') --}}
                                                <div class="row d-flex align-items-start justify-content-center">
                                                        <div style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('{{ URL('foto_barang/'.$barang->image) }}')"
                                                        class="image col-4">
                                                    </div>
                                                    <div class="col-8 ms-4 flex-column">
                                                        <div class="row">
                                                            <label for="foto" class="form-label">Foto Barang :</label>
                                                        </div>
                                                        <div class="row">
                                                            <input style="width: 100%" type="file" class="form-control" name="foto" id="foto">
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="alert alert-danger">File foto hanya dapat menanpung file dengan ekstensi PNG, JPG, JPEG !</div>
                                                        </div>
                                                        {{-- <div class="row mt-2">
                                                            <button class="btn btn-orange" style="width: 100%">Submit</button>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            {{-- </form> --}}
                                        <div class="row mt-3">
                                           <b>Penangkaran (Jl.Tambak Medokan Ayu 6C no.68 )</b>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label for="nama_barang" class="form-label">Nama Barang :</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label for="deskripsi" class="form-label">Deskripsi :</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $barang->deskripsi }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label for="harga" class="form-label">Harga :</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label for="berat" class="form-label">Berat :</label>
                                            </div>
                                            <div class="col-7">
                                                <input type="number" class="form-control" id="berat" name="berat" value="{{ $barang->berat }}">
                                            </div>
                                            <div class="col-2">
                                                gram
                                            </div>
                                        </div>
                                    </div>
                                <div class="row mb-5 justify-content-center">
                                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                                        <a style="width: 15vw;" href="{{ '/barang/index/manager' }}" type="button"
                                            class="btn btn-orange">Kembali</a>
                                    </div>
                                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                                        <button style="width: 15vw;" type="submit"
                                            class="btn btn-orange">Perbarui</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
@endsection
