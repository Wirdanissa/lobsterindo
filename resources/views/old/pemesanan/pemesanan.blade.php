@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="m-5">
    <a class="m-2 btn btn-primary" href="/barang">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>barang</th>
                <th>pembayaran</th>
                <th>user</th>
                <th>pemesanan</th>
                <th>pembayaran</th>
                <th>pengiriman</th>
                <th>jumlah</th>
                <th>total_pembayaran</th>
                <th>alamat</th>
                <th>deskripsi</th>
                <th>>stat_pembayaran</th>
                <th>stat_pemesanan</th>
                <th>stat_pengiriman</th>
                <th>no_pembayaran</th>
                <th style="width: 250px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item )
                <tr>

                    <td>{{ $item->id }}</td>
                    <td>{{ $item->id_barang }}</td>
                    <td>{{ $item->id_pembayaran }}</td>
                    <td>{{ $item->id_user }}</td>
                    <td>{{ $item->tgl_pemesanan }}</td>
                    <td>{{ $item->tgl_pembayaran }}</td>
                    <td>{{ $item->tgl_pengiriman }}</td>
                    <td>{{ $item->jumlah_pemesanan }}</td>
                    <td>{{ $item->total_pembayaran }}</td>
                    <td>{{ $item->alamat_pengiriman }}</td>
                    <td>{{ $item->deskripsi_pemesanan }}</td>
                    <td>{{ $item->status_pembayaran }}</td>
                    <td>{{ $item->status_pemesanan }}</td>
                    <td>{{ $item->status_pengiriman }}</td>
                    <td>{{ $item->no_pembayaran }}</td>

                    <td>
                        <a class="btn btn-success btn-sm mb-2 " href="{{ url('/pemesanan/'.$item->id.'/edit') }}">Pemesanan</a>
                        <a class="btn btn-success btn-sm mb-2" href="{{ url('/pemesanan/'.$item->id.'/edit') }}">Pengiriman</a>
                        <a class="btn btn-warning btn-sm mb-2" href="{{ url('/pemesanan/'.$item->id.'/edit') }}">edit</a>
                        <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline"
                        action="{{ '/pemesanan/'.$item->id }}" method="POST">
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
