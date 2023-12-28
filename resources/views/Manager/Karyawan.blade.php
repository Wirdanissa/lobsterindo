@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Manager/karyawan.css') }}">

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
            <select class="form-select rounded-3 border" aria-label="Default select example" name="manager_id">
              <option disabled selected>Pilih Penangkaran</option>
              @foreach ( $penangkaran as $item )
                <option> {{ $item->lokasi_penangkaran }}</option>
              @endforeach
            </select>
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
      <p><b>Daftar Pegawai</b></p>
      <a style="width: 15vw;" href="{{ URL('/karyawan/create') }}" class="btn btn-orange">Tambah Pegawai</a>

      <!-- daftar pegawai -->
      <div class="container-daftar-karyawan mt-2 row d-flex justify-content-center g-3">
        @foreach ( $karyawan as $item )
        <div class="col-6 d-flex justify-content-center">
            <div style="text-decoration: none;" href="">
              <div class="katalog p-4 row d-flex align-items-center">
                <div style="background-image: url('../images/profile.png')" class="image col-4">
                </div>
                <div class="col-3 ms-4 flex-column">
                  <div class="name">
                    <b>{{ $item->nama_user }}</b>
                    @if ( $item->role == 2)
                        <p>Boss</p>
                    @elseif ( $item->role  == 3)
                        <p>Manager</p>
                    @elseif ( $item->role  == 4)
                        <p>Admin Gudang</p>
                    @elseif ( $item->role  == 5)
                        <p>Kurir</p>
                    @endif

                  </div>
                  <a style="width: 7vw;" href="Detail-pegawai.html" class="btn btn-orange">Detail</a>
                </div>
                <div class="col-5 flex-column">
                  <form action="{{ 'user/'.$item->id.'/role' }}" method="post">
                    @csrf
                    @method('PUT')
                  <div class="box-profesi">
                    <center>
                      <div class="mb-2">
                        <select class="form-select rounded-3 border" aria-label="Default select example"
                          name="role_id">
                          <option selected value="{{ $item->role }}">
                            @if ( $item->role == 2)
                                Boss
                            @elseif ( $item->role  == 3)
                                Manager
                            @elseif ( $item->role  == 4)
                                Admin Gudang
                            @elseif ( $item->role  == 5)
                                Kurir
                            @endif
                          </option>
                            @if ( $item->role == 2)
                            @elseif ( $item->role  == 3)
                              <option value="4"> Admin Gudang </option>
                              <option value="5"> Kurir </option>
                            @elseif ( $item->role  == 4)
                              <option value="3"> Manager </option>
                              <option value="5"> Kurir </option>
                            @elseif ( $item->role  == 5)
                              <option value="3"> Manager </option>
                              <option value="4"> Admin Gudang </option>
                            @endif
                        </select>
                      </div>
                      <button type="submit" class="btn btn-orange">Alihkan Profesi</button>
                    </center>
                  </div>
                </form>
                  <form class="mt-2 d-flex justify-content-center" action="{{ 'user/'.$item->id.'/pecat' }}" method="post">
                    @csrf
                    @method('PUT')
                    <button style="width: 10vw;" type="submit" class="btn btn-orange">Pecat</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        @endforeach
{{--
        <div class="col-6 d-flex justify-content-center">
          <div style="text-decoration: none;" href="">
            <div class="katalog p-4 row d-flex align-items-center">
              <div style="background-image: url('../images/profile.png')" class="image col-4">
              </div>
              <div class="col-3 ms-4 flex-column">
                <div class="name">
                  <b>Kasiran Rajasa</b>
                  <p>Admin Gudang</p>
                </div>
                <a style="width: 7vw;" href="Detail-pegawai.html" class="btn btn-orange">Detail</a>
              </div>
              <div class="col-5 flex-column">
                <div class="box-profesi">
                  <center>
                    <div class="mb-2">
                      <select class="form-select rounded-3 border" aria-label="Default select example"
                        name="manager_id">
                        <option disabled selected>Admin Gudang</option>
                        <option> Manager </option>
                        <option> Kurir</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-orange">Alihkan Profesi</button>
                  </center>
                </div>
                <form class="mt-2 d-flex justify-content-center" action="" method="post">
                  <button style="width: 10vw;" type="submit" class="btn btn-orange">Pecat</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6 d-flex justify-content-center">
          <div style="text-decoration: none;" href="">
            <div class="katalog p-4 row d-flex align-items-center">
              <div style="background-image: url('../images/profile.png')" class="image col-4">
              </div>
              <div class="col-3 ms-4 flex-column">
                <div class="name">
                  <b>Kasiran Rajasa</b>
                  <p>Admin Gudang</p>
                </div>
                <a style="width: 7vw;" href="Detail-pegawai.html" class="btn btn-orange">Detail</a>
              </div>
              <div class="col-5 flex-column">
                <div class="box-profesi">
                  <center>
                    <div class="mb-2">
                      <select class="form-select rounded-3 border" aria-label="Default select example"
                        name="manager_id">
                        <option disabled selected>Admin Gudang</option>
                        <option> Manager </option>
                        <option> Kurir</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-orange">Alihkan Profesi</button>
                  </center>
                </div>
                <form class="mt-2 d-flex justify-content-center" action="" method="post">
                  <button style="width: 10vw;" type="submit" class="btn btn-orange">Pecat</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6 d-flex justify-content-center">
          <div style="text-decoration: none;" href="">
            <div class="katalog p-4 row d-flex align-items-center">
              <div style="background-image: url('../images/profile.png')" class="image col-4">
              </div>
              <div class="col-3 ms-4 flex-column">
                <div class="name">
                  <b>Kasiran Rajasa</b>
                  <p>Admin Gudang</p>
                </div>
                <a style="width: 7vw;" href="Detail-pegawai.html" class="btn btn-orange">Detail</a>
              </div>
              <div class="col-5 flex-column">
                <div class="box-profesi">
                  <center>
                    <div class="mb-2">
                      <select class="form-select rounded-3 border" aria-label="Default select example"
                        name="manager_id">
                        <option disabled selected>Admin Gudang</option>
                        <option> Manager </option>
                        <option> Kurir</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-orange">Alihkan Profesi</button>
                  </center>
                </div>
                <form class="mt-2 d-flex justify-content-center" action="" method="post">
                  <button style="width: 10vw;" type="submit" class="btn btn-orange">Pecat</button>
                </form>
              </div>
            </div>
          </div>
        </div> --}}

      </div>
    </div>
@endsection
