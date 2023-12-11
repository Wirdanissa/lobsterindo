@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Pemesanan.css') }}">

        <section>
            <form action="Proses/proses1.html" method="post" class="">
                <div class="row container-pemesanan p-5">
                    <div class="container-left col-7 p-5">
                        <div class="title text-center">
                            <b>Detail Pembelian </b>
                            <p>Data Sensitif, pastikan data yang anda masukan sesuai !</p>
                        </div>
                        <div class="pemesanan">
                            <p>Barang yang dibeli :</p>
                            <div class="box-pemesanan row d-flex align-items-center justify-content-center p-4">
                                <div style="background-image: url('images/LobsterKonsumsi.png');"
                                    class="image-pemesanan col-4"></div>
                                <div class="col-5">
                                    <div class="col-10 ms-4 flex-column">
                                        <b>Lobster AirTawar Konsumsi</b>
                                        <b class="harga">Rp.180.000</b>
                                        <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                                    </div>
                                </div>
                                <div style="height: 100%;" class="col-4">
                                    <div class="stock">
                                        Stock: 20Kg
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">Penangkaran (Jl.Tambak medokan ayu 6c no.68)</p>
                        <div class="mb-3 mt-3 row g-2">
                            <div class="col-sm-3 d-flex align-items-center">
                                <label for="inputNama">Jumlah Barang :</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="inputNama" name="nama">
                            </div>
                            <div class="col-sm-1 d-flex align-items-center">
                                Kg
                            </div>
                        </div>
                        <div class="mb-3 mt-3 row g-2">
                            <div class="col-sm-3 d-flex align-items-center">
                                <label for="inputNama">Note (Opsional) :</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </div>
                        <b class="mt-5">Detail Alamat</b>
                        <div class="mb-3 mt-3 row g-2">
                            <div class="col-sm-1 d-flex align-items-center justify-content-center">
                                <input type="radio" id="html" name="fav_language" value="HTML">
                            </div>
                            <div class="col-sm-2 d-flex align-items-center">
                                <label for="inputNama">History Alamat :</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Jl.tambak medokan ayu 6c no.68</option>
                                        <option>Jl.Menur 2/2 C</option>
                                        <option>Lamongan</option>
                                        <option>Padang</option>
                                        <option>Samarinda</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mt-3 row g-2">
                            <div class="col-sm-1 d-flex align-items-center justify-content-center">
                                <input type="radio" id="html" name="fav_language" value="HTML">
                            </div>
                            <div class="col-sm-2 d-flex align-items-center">
                                <label for="inputNama">Alamat Baru</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNama" name="nama">
                            </div>
                        </div>
                        <div class="mb-3 mt-3 row g-2">
                            <div class="col-sm-3 d-flex align-items-center">
                                <label for="inputNama">Metode Pemesanan :</label>
                            </div>
                            <div class=" col-sm-9 ">
                                <input class="me-2" type="radio" id="html" name="metode_pemesanan" value="HTML">
                                <label class="me-5" for="html">Ambil pesanan di Penangkaran</label>
                                <input class="me-2" type="radio" id="css" name="metode_pemesanan" value="CSS">
                                <label class="me-5" for="css">Kirim ke alamat</label>
                            </div>
                        </div>
                        <div class="box-pengiriman">
                            <b>Pengiriman</b>
                            <div class="mb-3 mt-3 row g-2">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <label for="inputNama">Metode Pengiriman :</label>
                                </div>
                                <div class=" col-sm-9 ">
                                    <input class="me-2" type="radio" id="html" name="metode_pengiriman" value="HTML">
                                    <label class="me-5" for="html">Kirim Saat ini</label>
                                    <input class="me-2" type="radio" id="css" name="metode_pengiriman" value="CSS">
                                    <label class="me-5" for="css">Kirim ke alamat</label>
                                </div>
                            </div>
                            <div class="mb-3 mt-3 row g-2">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <label for="inputNama">Tanggal Pengiriman :</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="inputNama" name="nama">
                                </div>
                            </div>
                            <div class="mb-3 mt-3 row g-2">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <label for="inputNama">Waktu Pengiriman :</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="time" class="form-control" id="inputNama" name="nama">
                                </div>
                            </div>
                            <div class="mb-3 mt-3 row g-2">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <label for="inputNama">Jasa Pengiriman :</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Lobsterindo (20.000)</option>
                                            <option>Gojek (40.000)</option>
                                            <option>Grab (42.000)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <b>Pembayaran</b>
                            <div class="Pembayaran">
                                <div class="mb-3">
                                    <input class="me-2" type="radio" id="BCA" name="metode_pengiriman" value="BCA">
                                    <label class="me-5" for="BCA" id="BCA">
                                        <img src="images/BCA.svg" alt="">
                                        <a href="">cara Pembayaran</a>
                                        <b>Rp.725.000.-</b>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="me-2" type="radio" id="GOPAY" name="metode_pengiriman" value="GOPAY">
                                    <label class="me-5" for="GOPAY" id="GOPAY">
                                        <img src="images/Gopay.svg" alt="">
                                        <a href="">cara Pembayaran</a>
                                        <b>Rp.725.000.-</b>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="me-2" type="radio" id="MANDIRI" name="metode_pengiriman"
                                        value="MANDIRI">
                                    <label class="me-5" for="MANDIRI" id="MANDIRI">
                                        <img src="images/Mandiri.svg" alt="">
                                        <a href="">cara Pembayaran</a>
                                        <b>Rp.725.000.-</b>
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <input class="me-2" type="radio" id="OVO" name="metode_pengiriman" value="OVO">
                                    <label class="me-5" for="OVO" id="OVO">
                                        <img src="images/Ovo.svg" alt="">
                                        <a href="">cara Pembayaran</a>
                                        <b>Rp.725.000.-</b>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container-right col-5">
                        <div class="sidebar">
                            <div class="box-promo row">
                                <div class="col-sm-1 me-4">
                                    <img src="images/icon-promo.svg" alt="">
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled>Makin Hemat Menggunakan Promo</option>
                                            <option disabled>Tidak ada Promo yang tersedia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="box-pembelian">
                                <b>Ringkasan Belanja</b>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        Harga 1 Barang :
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        Rp.180.000.-
                                    </div>
                                </div>
                                <hr>
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
                                        7.500.-
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        Total Tagihan
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        Rp.747.500.-
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-5">
                                    <button style="width: 20vw;" type="submit" class="btn btn-orange">Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
@endsection
