@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/belanja.css') }}">

    <section>
      <div style="background-image: url('images/belanja.png');"
        class="img-big d-flex align-items-end justify-content-center">
        <div class="mb-4">
          <b>Komoditas Terbaik</b>
          <p>Kami Selalu Mengutamakan Kualitas dan Keramahan Karyawan Kami</p>
        </div>
      </div>
      <div class="mt-5 mb-5 container">
        <div class="row d-flex justify-content-center">
          <div class="col-6">
            <div class="mb-2">
              <select class="form-select rounded-3 border" aria-label="Default select example" name="manager_id">
                <option disabled selected>Pilih Penangkaran</option>
                <option> Jl.tambak medokan ayu</option>
              </select>
            </div>
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label for="html">Indukan/Konsumsi</label>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">Bibit</label>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Pakan</label>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Gendong Telur</label>
          </div>
          <div class="col-3">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
            </div>
          </div>
        </div>
        <div class="mt-2 row d-flex justify-content-center g-3">
          <div class="col-5 d-flex justify-content-center">
            <a style="text-decoration: none;" href="Pemesanan.html">
              <div class="katalog p-4 row d-flex align-items-center">
                <div
                  style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('images/LobsterKonsumsi.png')"
                  class="image col-4">
                </div>
                <div class="col-7 ms-4 flex-column">
                  <div class="stock">
                    Stock: 20Kg
                  </div>
                  <b>Lobster AirTawar Konsumsi</b>
                  <b class="harga">Rp.180.000</b>
                  <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 d-flex justify-content-center">
            <a style="text-decoration: none;" href="Pemesanan.html">
              <div class="katalog p-4 row d-flex align-items-center">
                <div
                  style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('images/LobsterKonsumsi.png')"
                  class="image col-4">
                </div>
                <div class="col-7 ms-4 flex-column">
                  <div class="stock">
                    Stock: 20Kg
                  </div>
                  <b>Lobster AirTawar Konsumsi</b>
                  <b class="harga">Rp.180.000</b>
                  <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 d-flex justify-content-center">
            <a style="text-decoration: none;" href="Pemesanan.html">
              <div class="katalog p-4 row d-flex align-items-center">
                <div
                  style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('images/LobsterKonsumsi.png')"
                  class="image col-4">
                </div>
                <div class="col-7 ms-4 flex-column">
                  <div class="stock">
                    Stock: 20Kg
                  </div>
                  <b>Lobster AirTawar Konsumsi</b>
                  <b class="harga">Rp.180.000</b>
                  <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-5 d-flex justify-content-center">
            <a style="text-decoration: none;" href="Pemesanan.html">
              <div class="katalog p-4 row d-flex align-items-center">
                <div
                  style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('images/LobsterKonsumsi.png')"
                  class="image col-4">
                </div>
                <div class="col-7 ms-4 flex-column">
                  <div class="stock">
                    Stock: 20Kg
                  </div>
                  <b>Lobster AirTawar Konsumsi</b>
                  <b class="harga">Rp.180.000</b>
                  <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                </div>
              </div>
            </a>
          </div>
        </div>
    </section>
@endsection
