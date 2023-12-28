@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Boss/create-pegawai.css') }}">

        <section>
            <div style="margin-top: 15vh;" class="mb-5 container">
                <center>
                  <div class="title mb-5  ">
                      <b>Tambahkan Pegawai</b>
                      <p>Data Sensitif, pastikan data yang anda masukan sesuai !</p>
                  </div>
              </center>
            </div>
            <form action="{{ URL('/karyawan') }}" method="post">
            @csrf
            <div class="flex-colum">
                <center>
                <div  class="mb-2">
                    <select style="width: 30%;" class="form-select rounded-3 border" aria-label="Default select example" name="penangkaran">
                      <option disabled selected>Pilih Penangkaran</option>
                      @foreach ( $data as $item )
                        <option value="{{ $item->id }}">{{ $item->lokasi_penangkaran }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="box-create-pegawai">
                    <div class="mb-3 row">
                        <label for="exampleFormControlTextarea1" class="col-md-2 col-form-label">Id User</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="exampleFormControlInput1" min="0" name="user">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="exampleInputPassword1" class="col-md-2 col-form-label">Jabatan</label>
                        <div class="col-md-10">
                          <select class="form-select rounded-3 border" aria-label="Default select example" name="role">
                            <option disabled selected>Jabatan</option>
                              <option value="3"> Manager</option>
                              <option value="4"> Admin Gudang</option>
                              <option value="5"> Kurir</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <div class="col-md-4 d-flex">
                            <label for="exampleFormControlTextarea1" class="col-form-label">Masa Jabatan :</label>
                        </div>
                        <div class="col-md-3 d-flex align-items-center">
                            Saat ini  s/d
                        </div>
                        <div class="col-md-5">
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                      </div>
                  </div>
                  <div style="width: 40%;" class="row d-flex justify-content-center mb-5">
                    <a style="width: 40%;" href="Karyawan.html" class="btn btn-orange me-3 d-flex align-items-center justify-content-center">Kembali</a>
                    <button style="width: 40%;" type="submit" class="btn btn-orange d-flex align-items-center justify-content-center">Simpan Perubahan</button>
                  </div>
                </center>
            </div>
        </form>
        </section>
@endsection
