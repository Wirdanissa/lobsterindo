@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Kurir/karyawan.css') }}">

        <div class="container-karyawan">
            <center>
                <div class="title">
                    <b>Halaman Informasi Pegawai</b>
                    <p>Penangkaran Jl.Tambak Medokan Ayu 6c/68</p>
                </div>
            </center>
            <div class="row mx-3 mb-3">
                <div class="col-6">
                    <div class="form-group row">
                        <div class="col-3 d-flex align-items-center">
                            <label for="exampleFormControlSelect1">Jadwal Pegawai</label>
                        </div>
                        <div class="col-4">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>2023</option>
                                <option>2022</option>
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Januari</option>
                                <option>Febuari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-2">
                        <input class="form-control" type="text" value="Penangkaran : Jl.tambak medokan ayu"
                            aria-label="Disabled input example" disabled readonly>
                    </div>
                </div>
            </div>
            <!-- Tabel Jadwal Karyawan -->
            <table class="table">
                <thead>
                    <tr>
                        <th class="p-4 jadwal-nama" rowspan="2">NAMA</th>
                        <th class="p-4 jadwal-jabatan" rowspan="2">JABATAN</th>
                        <th class="jadwal-tanggal" colspan="31">TANGGAL</th>
                    </tr>
                    <tr>
                        <!-- <th scope="col">Karyawan</th> -->
                        <!-- <th scope="col">Jabatan</th> -->
                        <th scope="col">1</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                        <th scope="col">4</th>
                        <th scope="col">5</th>
                        <th scope="col">6</th>
                        <th scope="col">7</th>
                        <th scope="col">8</th>
                        <th scope="col">9</th>
                        <th scope="col">10</th>
                        <th scope="col">11</th>
                        <th scope="col">12</th>
                        <th scope="col">13</th>
                        <th scope="col">14</th>
                        <th scope="col">15</th>
                        <th scope="col">16</th>
                        <th scope="col">17</th>
                        <th scope="col">18</th>
                        <th scope="col">19</th>
                        <th scope="col">20</th>
                        <th scope="col">21</th>
                        <th scope="col">22</th>
                        <th scope="col">23</th>
                        <th scope="col">24</th>
                        <th scope="col">25</th>
                        <th scope="col">26</th>
                        <th scope="col">27</th>
                        <th scope="col">28</th>
                        <th scope="col">29</th>
                        <th scope="col">30</th>
                        <!-- <th scope="col">31</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Alwan</th>
                        <th scope="col">Manager</th>
                        <td class="jadwal-done" scope="col">M</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">N</td>
                        <td class="jadwal-done jadwal-libur" scope="col">X</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">M</td>
                        <td class="jadwal-libur jadwal-done" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">N</td>
                        <td class="jadwal-libur" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">M</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">N</td>
                        <td class="jadwal-libur" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">M</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">N</td>
                        <td class="jadwal-libur" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">M</td>
                        <td scope="col">E</td>
                    </tr>
                    <tr>
                        <th scope="col">Dodi</th>
                        <th scope="col">Kurir</th>
                        <td class="jadwal-izin" scope="col">E</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">N</td>
                        <td class="jadwal-done jadwal-libur" scope="col">X</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">M</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">N</td>
                        <td class="jadwal-libur" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">M</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">N</td>
                        <td class="jadwal-libur" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">M</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">N</td>
                        <td class="jadwal-libur" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">M</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                    </tr>
                    <tr>
                        <th scope="col">Wildan</th>
                        <th scope="col">Admin Gudang</th>
                        <td class="jadwal-done" scope="col">N</td>
                        <td class="jadwal-done jadwal-libur" scope="col">X</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">M</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-done" scope="col">E</td>
                        <td class="jadwal-izin" scope="col">N</td>
                        <td class="jadwal-done jadwal-libur" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">M</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">N</td>
                        <td class="jadwal-libur" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">M</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">N</td>
                        <td class="jadwal-libur" scope="col">X</td>
                        <td scope="col">E</td>
                        <td scope="col">M</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">E</td>
                        <td scope="col">N</td>
                        <td class="jadwal-libur" scope="col">X</td>
                    </tr>
                </tbody>
            </table>
            <!-- End tabel jadwal karyawan -->
            <div class="note row d-flex justify-content-end align-items-center">
                <form action="" method="post">
                    <button type="submit" style="width: 15vw;" class="btn btn-orange me-5"> Absen </button>
                    Note :
                    <div class="col-9 note-box ms-3">
                        <div class="mx-3">M = Morning (Pagi)</div>
                        <div class="mx-3">E = Evening (Siang)</div>
                        <div class="mx-3">N = Night (Malam)</div>
                        <div class="box-done mx-2"></div> = Masuk
                        <div class="box-libur mx-2"></div> = Jatah Libur
                        <div class="box-izin mx-2"></div> = Izin / Tidak Masuk
                    </div>
                </form>
            </div>
        </div>
@endsection
