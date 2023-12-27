@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Boss/penjualan.css') }}">

    <div class="container-penjualan">
      <div class="row d-flex justify-content-center">
        <div class="col-6 me-4">
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Tahun</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>2023</option>
                  <option>2022</option>
                  <option>2021</option>
                  <option>2020</option>
                  <option>2019</option>
                </select>
              </div>
            </div>
            <div class="col-8">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Penangkaran</label>
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
          <div class="row">
            <div>
              <canvas id="data-pemasukan" class="data-pemasukan"></canvas>
            </div>
          </div>
          <div class="row">
            <div>
              <canvas id="data-pengeluaran" class="data-pengeluaran"></canvas>
            </div>
          </div>
        </div>
        <div class="col-5 desc-penjualan">
          <div class="row mb-2">
            <div class="col-6">
              Rata-rata Penjualan :
            </div>
            <div style="text-align: end;" class="col-6">
              500 Produk
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-6">
              Produk Paling Banyak Terjual :
            </div>
            <div style="text-align: end;" class="col-6">
              Lobster Air tawar Konsumsi
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-6">
              User Pembelian terbanyak :
            </div>
            <div style="text-align: end;" class="col-6">
              Dragon Hotpot ( jl.Imam bonjol )
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-6">
              Rata-rata pemasukan (tahun) :
            </div>
            <div style="text-align: end;" class="col-6">
              372.000.000 / tahun
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-6">
              Rata-rata mengeluaran (tahun) :
            </div>
            <div style="text-align: end;" class="col-6">
              150.000.000 / tahun
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-6">
              Rata-rata pemasukan (bulan) :
            </div>
            <div style="text-align: end;" class="col-6">
              30.000.000 / bulan
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-6">
              Rata-rata mengeluaran (bulan) :
            </div>
            <div style="text-align: end;" class="col-6">
              15.000.000 / bulan
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-6">
              Bulan Pemasukan Tertinggi :
            </div>
            <div style="text-align: end;" class="col-6">
              Juni
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-6">
              Bulan Pengeluaran Tertinggi :
            </div>
            <div style="text-align: end;" class="col-6">
              January
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-6">
              Penangkaran Pemasukan terbanyak :
            </div>
            <div style="text-align: end;" class="col-6">
              Jl.tambak medokan ayu 6c no 68
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="exampleFormControlTextarea1" class="">Note :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="">Evaluasi Tahunan :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
      </div>
      <!-- riwayat -->
    </div>
    <section>
      <div class="container-riwayat">
        <div class="row d-flex justify-content-center">
          <div class="row d-flex justify-content-center">
            <div class="col-9">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
              </div>
            </div>
            <div class="row d-flex justify-content-center mt-3">
              <div class="col-4 d-flex align-items-center">
                <input type="radio" id="html" name="fav_language" value="HTML">
                <label class="me-3" for="html">Indukan/Konsumsi</label>
                <input type="radio" id="css" name="fav_language" value="CSS">
                <label class="me-3" for="css">Bibit</label>
                <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                <label class="me-3" for="javascript">Pakan</label>
                <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                <label class="me-3" for="javascript">Gendong Telur</label>
              </div>
              <div style="display: inline-flex; align-items: center;" class="col-5">
                Tanggal
                <input type="email" class="form-control ms-2" id="exampleFormControlInput1" placeholder="Tanggal">

                <input type="email" class="form-control ms-2" id="exampleFormControlInput1" placeholder="Bulan">

                <input type="email" class="form-control ms-2" id="exampleFormControlInput1" placeholder="Search...">
              </div>

            </div>
          </div>
        </div>
        <div class="mt-2 mb-5 row d-flex justify-content-center g-4">

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-1 mb-2">Menunggu</div>
                      <a style="width: 8vw;" href="../Proses/proses1.html" class="btn btn-orange">Lihat</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-1 mb-2">Menunggu</div>
                      <a style="width: 8vw;" href="../Proses/proses1.html" class="btn btn-orange">Lihat</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-2 mb-2">Proses Kirim</div>
                      <a style="width: 8vw;" href="../Proses/proses2.html" class="btn btn-orange">Lihat</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-3 mb-2">Terkirim</div>
                      <a style="width: 8vw;" href="../Proses/proses3.html" class="btn btn-orange">Lihat</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-3 mb-2">Terkirim</div>
                      <a style="width: 8vw;" href="../Proses/proses3.html" class="btn btn-orange">Lihat</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection
