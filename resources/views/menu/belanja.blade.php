@extends('layouts.default')
@section('title', 'Belanja')
{{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/belanja.css') }}">

@section('content')
    <div style="margin-top: -3rem">
        <img src="{{ url('images/belanja.png') }}" alt="">
    </div>
    <a class="ms-5 mt-3 btn-gradient" href="/belanja/create">Tambah</a>
    <div class="mt-5 row d-flex justify-content-center">
        @foreach ( $data as $items )
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
@endsection
