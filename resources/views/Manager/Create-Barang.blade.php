@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Manager/master-stock.css') }}">

        <section>
            <form method="POST" action="{{ '/barang' }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-5 rounded-5 box-create" style="width: 50%; margin: auto; margin-top: 7rem">
                    <div class="">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center fs-4 fw-bold mt-4">Tambah Barang Baru</h1>
                                <p class="text-center">Data Sensitif, pastikan data yang anda masukan sesuai !</p>
                                    <div class="row p-4 mb-4 mt-5 rounded-4 box-form">
                                        <div class="row mt-3">
                                           <b>Penangkaran (Jl.Tambak Medokan Ayu 6C no.68 )</b>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Barang :</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label for="exampleFormControlInput1" class="form-label">Deskripsi :</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label for="exampleFormControlInput1" class="form-label">Harga :</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="number" class="form-control" name="harga" id="harga" >
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label for="exampleFormControlInput1" class="form-label">Berat :</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="number" class="form-control" name="berat" id="berat" >
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <label for="exampleFormControlInput1" class="form-label">Foto Barang :</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="file" class="form-control" name="foto" id="foto" >
                                            </div>
                                        </div>
                                    </div>
                                <div class="row mb-5 justify-content-center">
                                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                                        <a style="width: 15vw;" href="Master-Stock.html" type="button"
                                            class="btn btn-orange">Kembali</a>
                                    </div>
                                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                                        <button style="width: 15vw;" type="submit"
                                            class="btn btn-orange">Tambahkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
@endsection
