@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Manager/admin.css') }}">

        <div class="container-admin flex-column">
            <div>
                <div style="text-align: center;" class="admin-title">
                    <b>Hi Manager!</b>
                </div>
                <p class="admin-desc mt-2">Selamat Datang Manager, Terimakasih atas kerja kerasnya. Pastikan kualitas
                    dan kondisi perusahaan tetap memenuhi standar.</p>
            </div>
            <div class="row menu-admin px-3">
                <div class="col-3 flex-column">
                    <center>
                        <div style="background-image: url('{{ 'images/icon-manage-karyawan.svg' }}');" class="box-icon">
                        </div>

                        <div style="text-align: center;" class="text-menu mb-3">
                            <b>KARYAWAN</b>
                            <p>Informasti Karyawan, Pastikan Semua karyawan terdaftar</p>
                        </div>
                        <a style="width: 10vw;" href="{{ URL('/manager/karyawan') }}" class="btn btn-orange"> Go </a>
                    </center>
                </div>
                <div class="col-3 flex-column">
                    <center>
                        <div style="background-image: url('{{ URL('/images/icon-penjualan.svg') }}');" class="box-icon"></div>

                        <div style="text-align: center;" class="text-menu mb-3">
                            <b>PENJUALAN</b>
                            <p>Data penjualan, pastikan kualitas setiap penangkaran tetap terjaga</p>
                        </div>
                        <a style="width: 10vw;" href="{{ URL('/manager/penjualan') }}" class="btn btn-orange"> Go </a>
                    </center>
                </div>
                <div class="col-3 flex-column">
                    <center>
                        <div style="background-image: url('{{ URL('images/icon-manage-datastock.svg') }}');" class="box-icon">
                        </div>

                        <div style="text-align: center;" class="text-menu mb-3">
                            <b>PENDATAAN STOCK</b>
                            <p>Stock dipenangkaran harus selalu terjaga</p>
                        </div>
                        <a style="width: 10vw;" href="{{ URL('/barang/index/manager') }}" class="btn btn-orange"> Go </a>
                    </center>
                </div>
            </div>
        </div>
@endsection
