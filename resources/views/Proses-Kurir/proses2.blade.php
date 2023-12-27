@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/proses.css') }}">

        <section>
            <div style="margin-top: 10vh;" class="container d-flex justify-content-center">
                <div class="box-proses">
                    <div class="status-pemesanan2 d-flex justify-content-center">
                        STATUS PEMESANAN : PROSES PENGIRIMAN
                    </div>
                    <div class="box-pemesanan p-4 row d-flex align-items-center">
                        <div style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('../images/LobsterKonsumsi.png')"
                            class="image col-4">
                        </div>
                        <div class="col-7 ms-4 flex-column">
                            <div><b>{{ $data->barang->nama_barang }}</b></div>
                            <b class="harga">Rp.{{ $data->barang->harga }}</b>
                            <p>{{ $data->barang->deskripsi }}</p>
                        </div>
                    </div>
                    <div class="box-detail-pengiriman">
                        <b>Detail Pengiriman</b>
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
                                Total Harga ({{ $data->jumlah_pemesanan }}g Barang) :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Rp.{{ $data->jumlah_pemesanan/1000 *  $data->barang->harga}}.-
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
                                Rp.{{ $data->total_pembayaran }}.-
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <b>Total Tagihan</b>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <b class="harga">Rp.{{ $data->total_pembayaran }}.-</b>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a style="width: 20vh;" href="../Beranda.html" class="btn btn-orange me-3">Beranda</a>
                        <a style="width: 20vh;" href="../Kurir/MasterPengiriman.html" class="btn btn-orange">Kembali</a>
                    </div>
                </div>
                <div class="container-pengiriman">
                    <form action="{{ '/pengiriman/'.$data->id.'/update' }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-detail-pengiriman">
                            <b>Update Informasi Pengiriman</b>
                            <p>Penangkaran (Jl.Tambak medokan ayu 6c no.68)</p>
                            <hr>
                            <div class="mb-3 row">
                                <label for="foto_nota" class="col-sm-4 col-form-label">Nota :</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" id="foto_nota" name="foto_nota">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="foto_timbangan" class="col-sm-4 col-form-label">Bukti Timbangan :</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" id="foto_timbangan" name="foto_timbangan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="timbangan" class="col-sm-3 col-form-label">Timbangan :</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="timbangan" name="timbangan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="total_harga" class="col-sm-3 col-form-label">Total Harga :</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="total_harga" name="total_harga">
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="note" class="col-sm-3 col-form-label">Note :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="note" name="note">
                                </div>
                            </div>
                            <button style="width: 10vw;" class="btn btn-orange">Update</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a style="color: white;" href="proses1.html">Back</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a style="color: white;" href="proses3.html">Next</a>
                </div>
            </div>
        </section>
@endsection
