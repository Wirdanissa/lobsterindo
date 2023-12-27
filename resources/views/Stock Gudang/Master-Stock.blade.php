@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Stock Gudang/master-stock.css') }}">

  <section>
    <div style="margin-top: 15vh;" class="mb-5 container">
      <center>
        <div class="title mb-5  ">
          <b>Halaman Master Stock Barang</b>
          <p>Data Sensitif, pastikan data yang anda masukan sesuai !</p>
      </center>
    </div>
    <div>
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

        <div class="mt-2 row d-flex justify-content-center g-4">
            @foreach ($barang as $item )
                <div class="col-5 d-flex justify-content-center">
                    <div style="text-decoration: none;" href="{{ '/pemesanan/create/' }}">
                    <div class="katalog p-4 row d-flex align-items-center">
                        <div
                        style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('{{ URL('foto_barang/'.$item->image) }}')"
                        class="image col-4">
                        </div>
                        <div class="col-6 ms-4 flex-column">
                        <div class="stock">
                            Stock: {{ $item->berat }}g
                        </div>
                        <div><b>{{ $item->nama_barang }}</b></div>
                        <div><b class="harga">Rp. {{ $item->harga }}</b></div>
                        <p>{{ $item->deskripsi }}</p>
                        </div>
                        <div class="col-1">
                        <div class="mb-1"><a href="{{ URL('barang/'.$item->id.'/set') }}"><img src="../images/btn-Setting.svg" alt=""></a></div>
                        <div class="mb-1"><a href="{{ URL('barang/'.$item->id.'/tambah') }}"><img src="../images/btn-plus.svg" alt=""></a></div>
                        <div class="mb-1"><a href="{{ URL('barang/'.$item->id.'/kurang') }}"><img src="../images/btn-minus.svg" alt=""></a></div>
                        <!-- <form class="mt-2" action="" method="post">
                            <button style="border: none; background: none;" type="submit" ><img src="../images/btn-delete.svg" alt=""></button>
                            </form> -->
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach


          {{-- <div class="col-5 d-flex justify-content-center">
            <div style="text-decoration: none;" href="{{ '/pemesanan/create/' }}">
              <div class="katalog p-4 row d-flex align-items-center">
                <div
                  style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('../images/LobsterKonsumsi.png')"
                  class="image col-4">
                </div>
                <div class="col-6 ms-4 flex-column">
                  <div class="stock">
                    Stock: 20Kg
                  </div>
                  <b>Lobster AirTawar Konsumsi</b>
                  <b class="harga">Rp.180.000</b>
                  <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                </div>
                <div class="col-1">
                  <div class="mb-1"><a href="Set-Barang.html"><img src="../images/btn-Setting.svg" alt=""></a></div>
                  <div class="mb-1"><a href="Tambah-Barang.html"><img src="../images/btn-plus.svg" alt=""></a></div>
                  <div class="mb-1"><a href="Kurang-Barang.html"><img src="../images/btn-minus.svg" alt=""></a></div>
                  <!-- <form class="mt-2" action="" method="post">
                      <button style="border: none; background: none;" type="submit" ><img src="../images/btn-delete.svg" alt=""></button>
                    </form> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-5 d-flex justify-content-center">
            <div style="text-decoration: none;" href="{{ '/pemesanan/create/' }}">
              <div class="katalog p-4 row d-flex align-items-center">
                <div
                  style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('../images/LobsterKonsumsi.png')"
                  class="image col-4">
                </div>
                <div class="col-6 ms-4 flex-column">
                  <div class="stock">
                    Stock: 20Kg
                  </div>
                  <b>Lobster AirTawar Konsumsi</b>
                  <b class="harga">Rp.180.000</b>
                  <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                </div>
                <div class="col-1">
                  <div class="mb-1"><a href="Set-Barang.html"><img src="../images/btn-Setting.svg" alt=""></a></div>
                  <div class="mb-1"><a href="Tambah-Barang.html"><img src="../images/btn-plus.svg" alt=""></a></div>
                  <div class="mb-1"><a href="Kurang-Barang.html"><img src="../images/btn-minus.svg" alt=""></a></div>
                  <!-- <form class="mt-2" action="" method="post">
                      <button style="border: none; background: none;" type="submit" ><img src="../images/btn-delete.svg" alt=""></button>
                    </form> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-5 d-flex justify-content-center">
            <div style="text-decoration: none;" href="{{ '/pemesanan/create/' }}">
              <div class="katalog p-4 row d-flex align-items-center">
                <div
                  style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('../images/LobsterKonsumsi.png')"
                  class="image col-4">
                </div>
                <div class="col-6 ms-4 flex-column">
                  <div class="stock">
                    Stock: 20Kg
                  </div>
                  <b>Lobster AirTawar Konsumsi</b>
                  <b class="harga">Rp.180.000</b>
                  <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                </div>
                <div class="col-1">
                  <div class="mb-1"><a href="Set-Barang.html"><img src="../images/btn-Setting.svg" alt=""></a></div>
                  <div class="mb-1"><a href="Tambah-Barang.html"><img src="../images/btn-plus.svg" alt=""></a></div>
                  <div class="mb-1"><a href="Kurang-Barang.html"><img src="../images/btn-minus.svg" alt=""></a></div>
                  <!-- <form class="mt-2" action="" method="post">
                      <button style="border: none; background: none;" type="submit" ><img src="../images/btn-delete.svg" alt=""></button>
                    </form> -->
                </div>
              </div>
            </div>
          </div> --}}
        </div>
  </section>
@endsection
