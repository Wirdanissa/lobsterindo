@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Manager/master-stock.css') }}">

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
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-10">
                <a href="{{ '/barang/create' }}" class="btn btn-orange">Tambah Barang Baru</a>
            </div>
        </div>
        <div class="mt-2 row d-flex justify-content-center g-4">
            @foreach ( $barang as $item )
            <div class="col-5 d-flex justify-content-center">
                <div style="text-decoration: none;" href="">
                  <div class="katalog row d-flex align-items-center" style="padding-left: 1vw">
                    <div
                      style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('{{ URL('foto_barang/'.$item->image) }}')"
                      class="image col-4">
                    </div>
                    <div class="col-5 ms-4 flex-column">
                      <div class="stock">
                        Stock:{{ $item->berat }}g
                      </div>
                      <div><b>{{ $item->nama_barang }}</b></div>
                      <b class="harga">Rp.{{ $item->harga }}</b>
                      <p>{{ $item->deskripsi }}</p>
                    </div>
                    <div class="col-2">
                        <div class="row">
                            <form class="col-6 mb-" action="{{'/barang/'.$item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none"><img src="{{ URL('images/btn-delete.svg') }}" alt=""></button>

                            </form>
                                {{-- <div class="col-6 mb-1"><a href="{{'/barang/'.$item->id }}"><img src="{{ URL('images/btn-delete.svg') }}" alt=""></a></div> --}}
                                <div class="col-6 mb-1"><a href="{{'/barang/'.$item->id }}"><img src="{{ URL('images/btn-edit.svg') }}" alt=""></a></div>
                        </div>
                        <div class="row">
                            <div class="col-6 mb-1"><a href="{{ '/barang/'.$item->id.'/set' }}"><img src="{{ URL('images/btn-setting.svg') }}" alt=""></a></div>
                            <div class="col-6 mb-1"><a href="{{ '/barang/'.$item->id.'/tambah' }}"><img src="{{ URL('images/btn-plus.svg') }}" alt=""></a></div>
                        </div>
                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-6 mb-1"><a href="{{ '/barang/'.$item->id.'/kurang' }}"><img src="{{ URL('images/btn-minus.svg') }}" alt=""></a></div>
                        </div>
                      <!-- <form class="mt-2" action="" method="post">
                          <button style="border: none; background: none;" type="submit" ><img src="../images/btn-delete.svg" alt=""></button>
                        </form> -->
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

        </div>
  </section>
@endsection
