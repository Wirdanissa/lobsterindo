@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/proses.css') }}">

        <section>
            <div style="margin-top: 10vh;" class="container d-flex justify-content-center align-items-center">
                <div class="box-proses">
                    <div class="status-pemesanan3 d-flex justify-content-center">
                        STATUS PEMESANAN : PEMESANAN SELESAI
                    </div>
                    <div class="box-pemesanan p-4 row d-flex align-items-center">
                        <div style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('../images/LobsterKonsumsi.png')"
                            class="image col-4">
                        </div>
                        <div class="col-7 ms-4 flex-column">
                            <b>Lobster Air Tawar Konsumsi</b>
                            <b class="harga">Rp.180.000</b>
                            <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                        </div>
                    </div>
                    <div class="box-detail-pembayaran">
                        <b>Detail Tagihan</b>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Jumlah Pemesanan :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                4Kg
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Total Harga (4kg Barang) :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Rp.720.000.-
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Total Ongkos Kirim :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Rp.20.000.-
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Biaya Transaksi :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Rp.7.500.-
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <b>Total Tagihan</b>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <b class="harga">Rp.747.500.-</b>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a style="width: 20vh;" href="../Beranda.html" class="btn btn-orange me-3">Beranda</a>
                        <a style="width: 20vh;" href="../Belanja.html" class="btn btn-orange">Belanja lagi</a>
                    </div>
                </div>
                <div class="container-pengiriman">
                    <div class="box-detail-pengiriman">
                        <b>Detail Pengiriman</b>
                        <p>Penangkaran (Jl.Tambak medokan ayu 6c no.68)</p>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Alamat Pengiriman :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Jl.Menur 2/2C
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Waktu Pengiriman :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                25/10/2023 - 10.00
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Pembayaran :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Gopay
                            </div>
                        </div>
                        <hr>
                        <p><b>Detail Penerimaan</b></p>
                        <div class="row">
                            <div class="col-6">
                                Waktu Terima :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                25/10/2023 - 09.55
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Alamat Pengiriman :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Jl.Menur 2/2C
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Nama Kurir :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Naufal
                            </div>
                        </div>
                        <hr>
                        <p>Nota :</p>
                        <img class="image-nota mb-3" src="../images/nota.svg" alt="">
                        <p>Bukti Timbangan :</p>
                        <img class="image" src="../images/timbangan.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a style="color: white;" href="proses2.html">Back</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a style="color: white;" href="#">Next</a>
                </div>
            </div>
        </section>
@endsection
