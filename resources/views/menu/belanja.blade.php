@extends('layouts.default')
@section('title', 'Belanja')
{{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/belanja.css') }}">

@section('content')
    <div style="background-image: url('{{ url('images/belanja.png') }}')" class="img-big">
        {{-- <img src="{{ url('images/belanja.png') }}" alt=""> --}}
    </div>
    <div style="margin-top: 23rem" class="container">
    {{-- <a class="ms-5 mt-3 btn-gradient" href="/barang/create">Tambah</a> --}}
    <div class="row d-flex justify-content-center">
        <div class="col-6">
                <div class="mb-2">
                  <select class="form-select rounded-3 border" aria-label="Default select example" name="manager_id">
                    <option disabled selected>Pilih Penangkaran</option>
                    @foreach ( $penangkaran as $item )
                      <option value="{{ $item->id }}"> {{$item->lokasi_penangkaran}}</option>
                    @endforeach
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
        @foreach ( $barang as $items )
        <div class="col-5 d-flex justify-content-center">
            <a style="text-decoration: none;" href="{{ '/pemesanan/create/'.$items->id }}">
                <div class="katalog p-4 row d-flex align-items-center">
                        <div style="background-size:150px 150px; no-repeat; ;background-image: url('{{ url('foto_barang/'.$items->image) }}')" class="image col-4">
                        </div>
                        <div class="col-7 ms-4 flex-column">
                                <div class="stock">
                                    Stock: {{ $items->berat }}Kg
                                </div>
                                <b>{{ $items->nama_barang }}</b>
                                <b class="harga">Rp.{{ $items->harga }}</b>
                                <p>{{ $items->deskripsi }}</p>
                        </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
