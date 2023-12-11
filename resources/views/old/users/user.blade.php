@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="m-5">
    <a class="m-2 btn btn-primary" href="/user/create">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>role</th>
                <th>nama</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Password</th>
                <th style="width: 150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->role }}</td>
                    <td>{{ $item->nama_user }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->password }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm " href="{{ url('/user/'.$item->id.'/edit') }}">edit</a>
                        <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline"
                        action="{{ '/user/'.$item->id }}" method="POST">
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
