@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Boss/penangkaran.css') }}">

        <section>
            <div style="margin-top: 15vh;" class="mb-5 container">
                <center>
                    <div class="title mb-5  ">
                        <b>Halaman Master Pembayaran</b>
                        <p>Manage pembayaran yang tersedia di dalam website</p>
                    </div>
                </center>
                <div class="row d-flex justify-content-center mb-4">
                    <div class="col-8">
                        <a href="{{ URL('/penangkaran/create') }}" class="btn btn-orange">Tambah Penangkaran Baru</a>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Search...">
                        </div>
                    </div>
                </div>
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
                        @foreach ( $data as $item )
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td class="text-center">{{ $item->manager->nama_user }}</td>
                                <td class="text-center">{{ $item->lokasi_penangkaran }}</td>
                                <td class="text-center">{{ $item->jumlah_karyawan }}</td>
                                <td class="text-center">
                                    <a href="{{ URL('/penangkaran/'.$item->id.'/edit') }}"><img src="{{ URL('images/btn-edit.svg') }}" alt=""></a>
                                    <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline"
                                        action="{{ URL('/penangkaran/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm position-inline" type="submit"><img
                                                src="{{ URL('images/btn-delete.svg') }}" alt=""></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

{{--
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">Alwan</td>
                            <td class="text-center">Menur 2/2C</td>
                            <td class="text-center">10</td>
                            <td class="text-center">
                                <a href="Edit-penangkarang.html"><img src="../images/btn-edit.svg" alt=""></a>
                                <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline"
                                    action="" method="POST">
                                    <button class="btn btn-sm position-inline" type="submit"><img
                                            src="../images/btn-delete.svg" alt=""></button>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">3</td>
                            <td class="text-center">Wirda</td>
                            <td class="text-center">Padang</td>
                            <td class="text-center">13</td>
                            <td class="text-center">
                                <a href="Edit-penangkarang.html"><img src="../images/btn-edit.svg" alt=""></a>
                                <form onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="d-inline"
                                    action="" method="POST">
                                    <button class="btn btn-sm position-inline" type="submit"><img
                                            src="../images/btn-delete.svg" alt=""></button>
                                </form>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </section>
@endsection
