@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/penangkaran.css') }}">

<div class="m-5">
        <div class="d-flex align-items-center flex-column" style="margin-top: 5rem;">
        <h4 class="text-center"><b>Halaman Master Stock Barang</b></h4>
        <p class="text-center">Data Sensitif, pastikan data yang anda masukan sesuai !</p>
        </div>
        <input type="search" class="form-control ds-input m-3" id="search-input" placeholder="Search..." aria-label="Search docs for..." autocomplete="off" data-bd-docs-version="5.0" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
    <a class="m-2 btn btn-gradient" href="/penangkaran/create">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">manager_name</th>
                <th class="text-center">lokasi_penangkaran</th>
                <th class="text-center">jumlah_karyawan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item )
                <tr>
                    <td class="text-center">{{ $item->id }}</td>

                    {{-- Syntax untuk memanggil table yang terhubung dengan item --}}
                    <td class="text-center">{{ $item->manager->nama_user }}</td>

                    <td class="text-center">{{ $item->lokasi_penangkaran }}</td>
                    <td class="text-center">{{ $item->jumlah_karyawan }}</td>
                    <td class="text-center">
                        <a href="{{ url('/penangkaran/'.$item->id.'/edit') }}"><img src="{{ asset('images/edit.svg') }}" alt=""></a>
                        <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline"
                        action="{{ '/penangkaran/'.$item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm position-inline" type="submit"><img src="{{ asset('images/delete.svg') }}" alt=""></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
