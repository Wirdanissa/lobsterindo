@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="m-5">
    <a class="m-2 btn btn-primary" href="/penangkaran/create">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>manager_id</th>
                <th>manager_name</th>
                <th>lokasi_penangkaran</th>
                <th>jumlah_karyawan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->manager_id }}</td>

                    {{-- Syntax untuk memanggil table yang terhubung dengan item --}}
                    <td>{{ $item->manager->nama_user }}</td>

                    <td>{{ $item->lokasi_penangkaran }}</td>
                    <td>{{ $item->jumlah_karyawan }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ url('/penangkaran/'.$item->id.'/set') }}">set</a>
                        <a class="btn btn-warning btn-sm" href="{{ url('/penangkaran/'.$item->id.'/edit') }}">edit</a>
                        <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline"
                        action="{{ '/penangkaran/'.$item->id }}" method="POST">
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
