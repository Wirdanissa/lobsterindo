@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="m-5">
    <a class="m-2 btn btn-primary" href="/barang/create">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>id_penangkaran</th>
                <th>nama_barang</th>
                <th>jumlah_barang</th>
                <th>berat</th>
                <th>harga</th>
                <th>deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->id_penangkaran }}</td>

                    {{-- Syntax untuk memanggil table yang terhubung dengan item --}}
                    {{-- <td>{{ $item->penangkaran->lokasi_penangkaran }}</td> --}}

                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->jumlah_barang }}</td>
                    <td>{{ $item->berat }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" id="id_barang" name="id_barang" href="{{ url('/pemesanan/'.$item->id.'/create') }}">beli</a>
                        <a class="btn btn-warning btn-sm"  href="{{ url('/barang/'.$item->id.'/tambah') }}">+</a>
                        <a class="btn btn-warning btn-sm" href="{{ url('/barang/'.$item->id.'/kurang') }}">-</a>
                        <a class="btn btn-warning btn-sm" href="{{ url('/barang/'.$item->id.'/set') }}">set</a>
                        <a class="btn btn-warning btn-sm" href="{{ url('/barang/'.$item->id.'/edit') }}">edit</a>
                        <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline"
                        action="{{ '/barang/'.$item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm position-inline" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
