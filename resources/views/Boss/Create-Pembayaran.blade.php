@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Manager/master-stock.css') }}">

        <section>
            <form method="POST" action="{{ '/pembayaran' }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-5 rounded-5 box-create" style="width: 50%; margin: auto; margin-top: 7rem">
                    <div class="">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center fs-4 fw-bold mt-4">Tambah Pembayaran Baru</h1>
                                <p class="text-center">Data Sensitif, pastikan data yang anda masukan sesuai !</p>
                                    <div class="row p-4 mb-4 mt-5 rounded-4 box-form">
                                        <div class="row mt-3">
                                           {{-- <b>Penangkaran (Jl.Tambak Medokan Ayu 6C no.68 )</b> --}}
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-4">
                                                <label for="nama_pembayaran" class="form-label">Nama Pembayaran :</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" name="nama_pembayaran" id="nama_pembayaran">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-4">
                                                <label for="code_bank" class="form-label">Code bank :</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="number" class="form-control" name="code_bank" id="code_bank" >
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-4">
                                                <label for="logo_pembayaran" class="form-label">Logo Pembayaran :</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="file" class="form-control" name="logo_pembayaran" id="logo_pembayaran" >
                                            </div>
                                        </div>
                                    </div>
                                <div class="row mb-5 justify-content-center">
                                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                                        <a style="width: 15vw;" href="{{ URL('/pembayaran') }}" type="button"
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
