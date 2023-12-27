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
                                <form method="POST" action="{{ '/pembayaran/'.$data->id}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row p-4 mb-4 mt-5 rounded-4 box-form">
                                                <div class="row d-flex align-items-start justify-content-center">
                                                        <div style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('{{ URL('logo_pembayaran/'.$data->image) }}')"
                                                        class="image col-4">
                                                    </div>
                                                    <div class="col-8 ms-4 flex-column">
                                                        <div class="row">
                                                            <label for="logo_pembayaran" class="form-label">Logo pembayaran :</label>
                                                        </div>
                                                        <div class="row">
                                                            <input style="width: 100%" type="file" class="form-control" name="logo_pembayaran" id="logo_pembayaran">
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="alert alert-danger">File logo hanya dapat menanpung file dengan ekstensi PNG, JPG, JPEG, SVG !</div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <div class="row mt-2">
                                            <div class="col-4">
                                                <label for="nama_pembayaran" class="form-label">Nama Pembayaran :</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" name="nama_pembayaran" class="form-control" id="nama_pembayaran" value="{{ $data->nama_pembayaran }}">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-4">
                                                <label for="code_bank" class="form-label">Code Bank :</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="code_bank" name="code_bank" value="{{ $data->code_bank }}">
                                            </div>
                                        </div>
                                    </div>
                                <div class="row mb-5 justify-content-center">
                                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                                        <a style="width: 15vw;" href="{{ '/pembayaran' }}" type="button"
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
