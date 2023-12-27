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
                        <div style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('{{ URL('foto_barang/'.$data->barang->image) }}')"
                            class="image col-4">
                        </div>
                        <div class="col-7 ms-4 flex-column">
                            <div><b>{{ $data->barang->nama_barang }}</b></div>
                            <b class="harga">Rp.{{ $data->barang->harga }}</b>
                            <p>{{ $data->barang->deskripsi }}</p>
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
                                {{ $data->jumlah_pemesanan }}g
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Total Harga ( {{ $data->jumlah_pemesanan }}g Barang) :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Rp. {{ $data->jumlah_pemesanan/1000 *  $data->barang->harga}}.-
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Total Ongkos Kirim :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Rp.{{ $data->pengiriman->ongkir }}.-
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
                                <b class="harga">Rp.{{ ($data->jumlah_pemesanan/1000 *  $data->barang->harga)+$data->pengiriman->ongkir+7500}}.-</b>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a style="width: 20vh;" href="../Beranda.html" class="btn btn-orange me-3">Beranda</a>
                        <a style="width: 20vh;" href="{{ URL('/pengiriman') }}" class="btn btn-orange">Kembali</a>
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
                                {{ $data->alamat_pengiriman }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Waktu Pengiriman :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                {{ $data->tgl_pengiriman }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Pembayaran :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                {{ $data->pembayaran->nama_pembayaran }}
                            </div>
                        </div>
                        <hr>
                        <p><b>Detail Penerimaan</b></p>
                        <div class="row">
                            <div class="col-6">
                                Waktu Terima :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                {{ $data->pengiriman->created_at }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Alamat Pengiriman :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                {{ $data->alamat_pengiriman }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Nama Kurir :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                {{  $data->pengiriman->id_kurir }}
                            </div>
                        </div>
                        <hr>
                        <p>Nota :</p>
                        <img class="image-nota mb-3" src="{{ URL('foto_pengiriman/foto_nota/'.$data->pengiriman->foto_nota) }}" alt="">
                        <p>Bukti Timbangan :</p>
                        <img class="image" src="{{ asset('foto_pengiriman/foto_timbangan/'.$data->pengiriman->foto_timbangan) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a style="color: white;" href="{{ URL('/pengiriman') }}">Back</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a style="color: white;" href="#">Next</a>
                </div>
            </div>
        </section>
@endsection
