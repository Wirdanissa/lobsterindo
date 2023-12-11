@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/belanja.css') }}">
<form method="POST" action="/barang" enctype="multipart/form-data">
@csrf

<div class="mb-4 rounded-5 bg-body-secondary" style="width: 50%; margin: auto; margin-top: 7rem">
      <div class="">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center fs-4 fw-bold mt-4">Tambah Barang</h1>
            <p class="text-center">Data Sensitif, pastikan data yang anda masukan sesuai !</p>
            <div class="p-4 mb-4 mt-5 rounded-4 bg-light">
            <div class="mb-3 row">
                <label for="exampleInputPassword1" class="col-md-3 col-form-label">Foto Barang</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="foto">
                </div>
            </div>
                <div class="mb-3 row">
                  <label for="exampleInputPassword1" class="col-md-3 col-form-label">Penangkaran</label>
                  <div class="col-md-9">
                    <select class="form-select rounded-3 border" aria-label="Default select example" name="id_penangkaran">
                      <option disabled selected>Pilih Penangkaran</option>
                      @foreach ( $data as $item )
                        <option value=" {{ $item->id }}"> {{$item->lokasi_penangkaran}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleInputPassword1" class="col-md-3 col-form-label">Nama Barang</label>
                    <div class="col-md-9">
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ Session::get('nama_barang') }}">
                    </div>
                </div>

                  <div class="mb-3 row">
                    <label for="exampleInputPassword1" class="col-md-3 col-form-label">Jumlah Barang</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ Session::get('jumlah_barang') }}">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="exampleInputPassword1" class="col-md-3 col-form-label">Berat Barang</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="berat" name="berat" value="{{ Session::get('berat') }}">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="exampleInputPassword1" class="col-md-3 col-form-label">Harga Barang</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ Session::get('harga') }}">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="exampleInputPassword1" class="col-md-3 col-form-label">Deskripsi Barang</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi">{{ Session::get('deskripsi') }}</textarea>
                    </div>
                  </div>
            </div>
            <div class="row mb-5 justify-content-center">
              <div class="col-md-4 mb-3">
                <a href="{{URL('/barang')}}" type="button" class="btn btn-orange">Kembali</a>
              </div>
              <div class="col-md-4 mb-3">
                <button type="submit" class="btn btn-orange">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
@endsection

{{-- 
@extends('layouts.default')

@section('title', 'Belanja')

@section('content')

<div class="m-5">

    <form method="POST" action="/barang" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="id_penangkaran">Penangkaran</label>
            <select class="form-control" id="id_penangkaran" name="id_penangkaran">
                <option value=""> Pilih Penangkaran</option>
              @foreach ( $penangkaran as $items )
                <option value="{{ $items->id }}" >{{$items->lokasi_penangkaran}}</option>
              @endforeach
            </select>
          </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">nama_barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ Session::get('nama_barang') }}">
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">jumlah_barang</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ Session::get('jumlah_barang') }}">
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label">berat</label>
            <input type="number" class="form-control" id="berat" name="berat" value="{{ Session::get('berat') }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ Session::get('harga') }}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto Barang</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea value="{{ Session::get('deskripsi') }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection --}}
