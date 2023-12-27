@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Kurir/riwayat.css') }}">

    <section>
      <div class="container-riwayat">
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
        <div class="mt-2 mb-5 row d-flex justify-content-center g-4">

            @foreach ( $data as $item )

            <div class="col-9 d-flex justify-content-center">
                <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
                  <div class="row">
                    <div class="col-2">
                      <div style="background-image: url('{{ URL('foto_barang/'.$item->barang->image) }}') ;" class="img-barang"></div>
                    </div>
                    <div class="col-3 d-flex align-items-center">
                      <div class="detail-beli">
                        <b>{{ $item->barang->nama_barang }}</b>
                        <p style="margin: 0;">Jumlah Pembelian : {{ $item->jumlah_pemesanan }}</p>
                        <b class="harga">Rp.{{ $item->total_pembayaran }}.-</b>
                      </div>
                    </div>
                    <div class="col-5 d-flex align-items-center">
                      <div class="detail-pengiriman">
                        <p>Nama Pembeli : {{ $item->user->nama_user }}</p>
                        <p>Alamat Pengiriman : {{ $item->alamat_pengiriman }}</p>
                        <p>Tanggal Pemesanan : {{ $item->tgl_pemesanan }}</p>
                        <p>TanggalPengiriman :
                            @if ($item->tgl_pengiriman )
                            {{ $item->tgl_pengiriman }}
                            @else

                            @endif
                        </p>
                      </div>
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                      <div>
                        <center>

                            @if ($item->status == 2)
                            <div class="proses-3 mb-2">Terkirim</div>
                            <a style="width: 8vw;" href="{{ URL('/pemesanan/'.$item->id) }}" class="btn btn-orange">Lihat</a>
                            @elseif ($item->status == 1)
                            <div class="proses-2 mb-2">Proses Kirim</div>
                            <a style="width: 8vw;" href="{{ URL('/pengiriman/'.$item->id) }}" class="btn btn-orange">Lihat</a>
                            @else
                            <div class="proses-1 mb-2"> Menunggu </div>
                            @endif

                          <!-- <a style="width: 8vw;" href="../Proses/proses1.html" class="btn btn-orange">Lihat</a> -->
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            @endforeach

          {{-- <div class="col-9 d-flex justify-content-center">
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
                      <!-- <a style="width: 8vw;" href="../Proses/proses1.html" class="btn btn-orange">Lihat</a> -->
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>  --}}

          {{-- <div class="col-9 d-flex justify-content-center">
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
                      <a style="width: 8vw;" href="../Proses-Kurir/proses2.html" class="btn btn-orange">Lihat</a>
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
                      <a style="width: 8vw;" href="../Proses-Kurir/proses3.html" class="btn btn-orange">Lihat</a>
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
                      <a style="width: 8vw;" href="../Proses-Kurir/proses3.html" class="btn btn-orange">Lihat</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}

    </section>
@endsection
