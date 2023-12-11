<div class="container d-flex flex-column align-items-center ">
      <h1 class="mt-3">Informasi Pribadi</h1>
      <p class="text-center">
        Halo Alwan Selamat datang, dihalaman ini kamu dapat <br />
        merubah informasi pribadi milikmu.
      </p>

      <div class="row ">
        <div class="col-6 radius">
          <div class="card p-2 background radius">
            <style>
                .background{
                    background-color: #D9D9D9;
                    border-radius: 10%;
                }
            </style>
            <h5 class="card-title p-2">Informasi Utama</h5>
            <img src="img/profile.png" class="rounded-circle w-50 h-50 mx-auto " alt="" />
            <div class="card-body">
                <div class="form-group row">

                    <label class="col-sm-2 col-form-label" for="inlineFormInputName">Name :</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inlineFormInputName" placeholder="Alwan Hakim  Ramadhani" />
                    </div>
                </div>
              
              <p class="mt-2">
                Gunakan nama dengan benar, agar mempermudah <br />
                <span class="text-center">proses validasi yang dilakukan sistem</span>
              </p>
              <div class="form-group row">
                
                  <label for="exampleInputEmail1" class="col-sm-2">Email : </label>
                  <div class="col-sm-10">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alwan.hakim@gmail.com" />
                    </div>
              </div>
              <div class="mt-5">
                <button type="submit" class="btn btn-danger rounded-pill w-50">Ubah Password</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
            <div class="card p-2 background">
                <style>
                    .background{
                        background-color: rgb(188, 192, 192);
                    }
                </style>
              <div class="card-body">
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text " class="form-control" id="alamat" name="alamat"
                            placeholder="Alamat 1">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="text " class="form-control mt-2" id="alamat" name="alamat"
                            placeholder="Alamat 2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="text " class="form-control mt-2" id="alamat" name="alamat"
                            placeholder="Alamat 3">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nohp" class="col-sm-3 p-2">No Telephone :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control mt-2" id="nohp" name="nohp"
                            placeholder="087345671234">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-2"></label>
                        <div class="col-sm-8">
                            <p class="text-center mt-2">Gunakan Nomor Telepon Aktif</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <button type="submit" class="btn m-1 btn-danger rounded-pill custom-width">Kembali</button>
                        <button type="submit" class="btn m-1 btn-danger rounded-pill custom-width">Simpan Perubahan</button>
                        <style>
                            .custom-width{
                                width: 245px;
                            }
                        </style>
                      </div>

                    
                <!-- <div class="row">
                  <div class="col-2"></div>
                  <div class="span">Alamat</div>
                </div>
                <col-8>
                  <input type="text" /><br />
                  <input type="text" /><br />
                  <input type="text" /><br />
                </col-8> -->
              </div>
            </div>
        </div> 
    </div> 
      </div>
    </div>