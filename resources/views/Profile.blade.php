@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <section>
      <div class="container-profile">
        <div class="flex-colum">
          <center>
            <p class="title">Halaman Informasi Pribadi</p>
            <p class="title-desc">Halo Alwan Selamat datang, dihalaman ini kamu dapat merubah informasi pribadi milikmu.
            </p>
          </center>
        </div>
      </div>
      <form action="Beranda.html" method="post">
        <div style="margin-bottom: 15vh;" class="row d-flex justify-content-center">
          <div class="col-3 box me-3">
            <p class="profile-title">Informasi Utama</p>
            <center>
              <div style="background-image: url('images/pp.png');" class="img-profile"></div>
            </center>
            <div class="mb-3 mt-3 row g-2">
              <div class="col-sm-3">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama:</label>
              </div>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputNama" name="nama" value="Alwan Hakim">
              </div>
            </div>
            <p style="text-align: center; color: grey;">Gunakan nama dengan benar, agar mempermudah
              proses validasi yang dilakukan sistem</p>
            <div class="mb-3 mt-3 row g-2">
              <div class="col-sm-3">
                Email :
              </div>
              <div class="col-sm-9">
                Alwan.Hakim@gmail.com
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="row box mb-5">
              <div class="mt-3 row g-2">
                <div class="col-sm-3">
                  <label for="inputNama" class="col-sm-2 col-form-label">Alamat:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputNama" name="nama"
                    value="Jl.Tambak medokan ayu 6C no.68">
                </div>
              </div>
              <div class="row g-2">
                <div class="col-sm-3">
                  <label for="inputNama" class="col-sm-2 col-form-label"></label>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputNama" name="nama" value="Menur 2/2C">
                </div>
              </div>
              <div class="row g-2">
                <div class="col-sm-3">
                  <label for="inputNama" class="col-sm-2 col-form-label"></label>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputNama" name="nama">
                </div>
              </div>
              <div class="mt-3 row g-2">
                <div class="col-sm-3">
                  <label for="inputNama" class="form-label">No Telp:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputNama" name="nama" value="082231923585">
                  <p style="color: grey;" class="mt-2">Gunakan No.Telephone aktif</p>
                </div>
              </div>
              <a class="change-password d-flex justify-content-end" href="change-password.html">Rubah password</a>
            </div>
            <div class="row d-flex justify-content-center">
              <a style="width: 40%;" href="Beranda.html"
                class="btn btn-orange me-3 d-flex align-items-center justify-content-center">Kembali</a>
              <button style="width: 40%;" type="submit"
                class="btn btn-orange d-flex align-items-center justify-content-centere">Simpan Perubahan</button>
            </div>
          </div>
        </div>
      </form>
    </section>
@endsection
