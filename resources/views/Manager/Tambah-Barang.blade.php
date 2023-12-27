@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Manager/master-stock.css') }}">

        <section>
            <form method="POST" action="Penangkaran.html">
                <div class="mb-5 rounded-5 box-create" style="width: 50%; margin: auto; margin-top: 7rem">
                    <div class="">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-center fs-4 fw-bold mt-4">Tambah Stock Barang</h1>
                                <p class="text-center">Data Sensitif, pastikan data yang anda masukan sesuai !</p>
                                <div class="row p-4 mb-4 mt-5 rounded-4 box-form d-flex align-items-center">
                                    <div style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('../images/LobsterKonsumsi.png')"
                                        class="image col-4">
                                    </div>
                                    <div class="col-8 ms-4 flex-column">
                                        <b>Penangkaran (Jl.Tambak Medokan Ayu 6C no.68 )</b>
                                        <b>Lobster AirTawar Konsumsi</b>
                                        <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                                        <div class="stock">
                                            Stock: 20Kg
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 row d-flex align-items-center">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Berat :</label>
                                    <div style="display: inline-flex;" class="col-sm-8 d-flex align-items-center">
                                        <b class="me-2">+</b>
                                        <input type="password" class="form-control" id="inputPassword">
                                    </div>
                                    <div class="col-sm-2">
                                        gram
                                    </div>
                                </div>
                                <div class="row mb-5 justify-content-center">
                                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                                        <a style="width: 15vw;" href="Master-Stock.html" type="button"
                                            class="btn btn-orange">Kembali</a>
                                    </div>
                                    <div class="col-md-4 mb-3 d-flex justify-content-center">
                                        <button style="width: 15vw;" type="submit"
                                            class="btn btn-orange">Perbarui</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
@endsection
