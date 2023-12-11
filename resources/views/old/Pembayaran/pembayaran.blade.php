@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="m-5">
    <a class="m-2 btn btn-primary" href="/pembayaran/create">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nama pembayaran</th>
                <th>code bank</th>
                <th>Aksi</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_pembayaran }}</td>
                    <td>{{ $item->code_bank }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ url('/pembayaran/'.$item->id.'/edit') }}">edit</a>
                        <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline"
                        action="{{ '/pembayaran/'.$item->id }}" method="POST">
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
