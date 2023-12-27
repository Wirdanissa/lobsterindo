@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Kurir/admin.css') }}">

        <div class="container-admin flex-column">
            <div>
                <div style="text-align: center;" class="admin-title">
                    <b>Hi Courier!</b>
                </div>
                <p class="admin-desc mt-2">Sebagai Karyawan Lobsterindo Selalu jaga kualitas perusahaan, jangan lupa
                    tersenyum, dan bekerja penuh semangat !</p>
            </div>
            <div class="row menu-admin px-3">
                <div class="col-3 flex-column">
                    <center>
                        <div style="background-image: url('{{ URL('images/icon-Kurir.svg') }}');" class="box-icon"></div>

                        <div style="text-align: center;" class="text-menu mb-3">
                            <b>PENGIRIMAN</b>
                            <p>Pastikan setiap pengiriman telah terjadwal dengan baik</p>
                        </div>
                        <a style="width: 10vw;" href="{{ URL('/pengiriman') }}" class="btn btn-orange"> Go </a>
                    </center>
                </div>

                <div class="col-3 flex-column">
                    <center>
                        <div style="background-image: url('{{ URL('images/icon-manage-karyawan.svg') }}');" class="box-icon">
                        </div>

                        <div style="text-align: center;" class="text-menu mb-3">
                            <b>ABSENSI</b>
                            <p>Jadwal kerja, dan absensi pegawai</p>
                        </div>
                        <a style="width: 10vw;" href="{{ URL('/karyawan') }}" class="btn btn-orange"> Go </a>
                    </center>
                </div>
            </div>
        </div>
@endsection
