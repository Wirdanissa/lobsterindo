@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    <section>
      <div class="container-profile">
        <div class="flex-colum">
          <center>
            <p class="title">Halaman Informasi Pegawai</p>
            <p class="title-desc">Data Sensitif, pastikan data yang anda masukan sesuai !
            </p>
          </center>
        </div>
      </div>
      <form action="Karyawan.html" method="post">
        <div style="margin-bottom: 15vh;" class="row d-flex justify-content-center">
          <div class="col-3 box me-3">
            <p class="profile-title">Informasi Utama</p>
            <center>
              <div style="background-image: url('../images/pp.png');" class="img-profile"></div>
            </center>
            <div class=" mt-3 row g-2">
              <div class="col-sm-3">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
              </div>
              <div class="col-sm-9 d-flex align-items-center">
                : Alwan Hakim
              </div>
            </div>
            <div class="mb-3 row g-2">
              <div class="col-sm-3">
                Email
              </div>
              <div class="col-sm-9">
                : Alwan.Hakim@gmail.com
              </div>
            </div>
            <div class="mb-3 row g-2">
              <div class="col-sm-3">
                No. Telp
              </div>
              <div class="col-sm-9">
                : 082231923585
              </div>
            </div>
            <div class="mb-3 row g-2">
              <div class="col-sm-3">
                Alamat
              </div>
              <div class="col-sm-9">
                <p class="m-0">: Jl.Tambak medokan ayu 6C no.68</p>
                <p>Jl.Menur 2/2 C</p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div style="width: 35vw;" class="row box mb-5">
              <b>Informasi Pegawai</b>
              <div class="mt-3 row g-2">
                <div class="row mb-2">
                  <div class="col-sm-4">
                    Penangkaran
                  </div>
                  <div class="col-sm-8">
                    : Jl.Tambak Medokan Ayu 6c no.68
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-sm-4">
                    Jabatan
                  </div>
                  <div class="col-sm-8">
                    : Admin Gudang
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-sm-6">
                    Jumlah Absen (bulan ini)
                  </div>
                  <div class="col-sm-6">
                    : 0
                  </div>
                </div>
                <div class="mb-2 row mb-2">
                  <div class="col-md-4 d-flex">
                    <label for="exampleFormControlTextarea1" class="col-form-label">Masa Jabatan :</label>
                  </div>
                  <div class="col-md-3 d-flex align-items-center">
                    Saat ini s/d
                  </div>
                  <div class="col-md-5">
                    <input type="date" class="form-control" id="exampleFormControlInput1"
                      placeholder="name@example.com">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="exampleFormControlTextarea1" class="col-md-4 col-form-label">Gaji Bulan ini :</label>
                  <div class="col-md-8">
                    <input type="number" class="form-control" id="exampleFormControlInput1" min="0" value="2400000">
                  </div>
                </div>
                <div class="row d-flex justify-content-center">
                  <a style="width: 40%;" href="Karyawan.html"
                    class="btn btn-orange me-3 d-flex align-items-center justify-content-center">Kembali</a>
                  <button style="width: 40%;" type="submit"
                    class="btn btn-orange d-flex align-items-center justify-content-center">Simpan Perubahan</button>
                </div>
              </div>
            </div>
      </form>
    </section>
@endsection
