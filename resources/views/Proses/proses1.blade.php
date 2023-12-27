@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/proses.css') }}">

        <section>
            <div style="margin-top: 10vh;" class="container d-flex justify-content-center align-items-center">
                <div class="box-proses">
                    <div class="status-pemesanan1 d-flex justify-content-center">
                        STATUS PEMESANAN : MENUNGGU PEMBAYARAN
                    </div>
                    <div class="batas ">
                        <center>
                            <p class="medium-text">Selesaikan pembayaran dalam </p>
                            <b class="waktu">23:20:33</b>
                            <p class="small-text">Batas akhir pembayaran </p>
                            <p class="medium-text">Kamis, 5 Oktober 2023 00:41</p>
                        </center>
                    </div>
                    <div class="box-pembayaran">
                        <div class="d-flex justify-content-between">
                            <p class="medium-text">Gopay</p>
                            <img src="../images/Gopay.svg" alt="">
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <p class="medium-text">Code Pembayaran :</p>
                                <b class="big-text">AC082231923585</b>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a style="text-decoration: none; color: #ff4a2b;" href="">Salin</a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <p class="medium-text">Total Pembayaran :</p>
                                <b class="big-text">Rp.747.500.-</b>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a style="text-decoration: none; color: #ff4a2b;" href="">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a style="width: 20vh;" href="../Beranda.html" class="btn btn-orange me-3">Beranda</a>
                        <a style="width: 20vh;" href="../Belanja.html" class="btn btn-orange">Belanja lagi</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a style="color: white;" href="#">Back</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a style="color: white;" href="proses2.html">Next</a>
                </div>
            </div>
        </section>
@endsection
