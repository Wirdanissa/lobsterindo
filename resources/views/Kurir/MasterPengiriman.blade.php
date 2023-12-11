<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/Kurir/riwayat.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-white shadow-sm">
      <div class="navbar-lobster">
        <a class="navbar-brand" href="../Beranda.html">
          <b style="font-size: 1.3em">Lobsterindo</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="row align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item me-4">
              <a class="nav-link" href="../Beranda.html">Beranda</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="../Partnership.html">Partnership</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="../Budidaya.html">Budidaya</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="../Belanja.html">Belanja</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="../RiwayatBelanja.html">Riwayat Belanja</a>
            </li>
          </ul>
        </div>
        <div class="nav-item dropdown pe-3">
          <a style="display: inline-flex;" class="nav-link nav-profile pe-0 d-flex align-items-center" href="#"
            data-bs-toggle="dropdown">
            <div style="background-image: url('../images/pp.png');" class="circle"></div>
            <span class="d-none d-md-block dropdown-toggle ps-2">Alwan Hakim</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu profile">
            <li class="dropdown-header">
              <h6>Alwan Hakim</h6>
              <span>Manager</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../Profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="Admin.html">
                <i class="bi bi-gear"></i>
                <span>Admin Page</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
                      <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                        <i class="bi bi-question-circle"></i>
                        <span>Need Help?</span>
                      </a>
                    </li> -->
            <!-- <li>
                      <hr class="dropdown-divider">
                    </li> -->

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../login.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- <div class="profile">
                  <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                      <circle cx="28" cy="28" r="28" fill="#D2D2D2" />
                  </svg>
              </div> -->
      </div>
    </nav> <!-- End Navbar -->
    <section>
      <div class="container-riwayat">
        <div class="row d-flex justify-content-center">
          <div class="col-6">
            <div class="mb-2">
              <select class="form-select rounded-3 border" aria-label="Default select example" name="manager_id">
                <option disabled selected>Pilih Penangkaran</option>
                <option> Jl.tambak medokan ayu</option>
              </select>
            </div>
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label for="html">Indukan/Konsumsi</label>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">Bibit</label>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Pakan</label>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Gendong Telur</label>
          </div>
          <div class="col-3">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
            </div>
          </div>
        </div>
        <div class="mt-2 mb-5 row d-flex justify-content-center g-4">

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-1 mb-2">Menunggu</div>
                      <!-- <a style="width: 8vw;" href="../Proses/proses1.html" class="btn btn-orange">Lihat</a> -->
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-1 mb-2">Menunggu</div>
                      <!-- <a style="width: 8vw;" href="../Proses/proses1.html" class="btn btn-orange">Lihat</a> -->
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-2 mb-2">Proses Kirim</div>
                      <a style="width: 8vw;" href="../Proses-Kurir/proses2.html" class="btn btn-orange">Lihat</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-3 mb-2">Terkirim</div>
                      <a style="width: 8vw;" href="../Proses-Kurir/proses3.html" class="btn btn-orange">Lihat</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-9 d-flex justify-content-center">
            <div style="text-decoration: none; width: 100%;" href=" " class="katalog p-3">
              <div class="row">
                <div class="col-2">
                  <div style="background-image: url('../images/LobsterKonsumsi.png') ;" class="img-barang"></div>
                </div>
                <div class="col-3 d-flex align-items-center">
                  <div class="detail-beli">
                    <b>Lobster Air Tawar Konsumsi</b>
                    <p style="margin: 0;">Jumlah Pembelian : 5Kg</p>
                    <b class="harga">Rp.900.000.-</b>
                  </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                  <div class="detail-pengiriman">
                    <p>Alamat Pengiriman : Jl.Tambak Medokan Ayu IVC/68</p>
                    <p>Tanggal Pemesanan : 19/02/2022</p>
                    <p>TanggalPengiriman : 22/02/2022</p>
                  </div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                  <div>
                    <center>
                      <div class="proses-3 mb-2">Terkirim</div>
                      <a style="width: 8vw;" href="../Proses-Kurir/proses3.html" class="btn btn-orange">Lihat</a>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
      <div class="">
        <div class="footer-content">
          <div class="row" style="width: 100%">
            <div class="col">
              <ul class="footer-links">
                <p class="title">LOBSTERINDO</p>
                <li style="margin-bottom: 0.5rem;">Penangkaran :</li>
                <li><a href="#">Jl. Tambak Medokan ayu VIC/68 (Surabaya)</a></li>
                <li><a href="#">Menur 2/2C (Surabaya)</a></li>
                <li><a href="#">Lamongan (Lamongan)</a></li>
                <li><a href="#">Sragen (Sragen)</a></li>
                <li><a href="#">Bandung (Bandung)</a></li>
                <li><a href="#">Padang (Padang)</a></li>
                <li><a href="#">Samarinda (Samarinda)</a></li>
                <br>
                <p>&copy; 2023 Lobster Indo</p>
              </ul>
            </div>
            <div class="col">
              <ul class="footer-links">
                <li style="margin-bottom: 0.5rem;">Layanan Kami :</li>
                <li><a href="#">Pembelian Lobster air tawar</a></li>
                <li><a href="#">Tatacara Budidaya</a></li>
                <li><a href="#">Join Partnership</a></li>
                <li><a href="#">Join our Member</a></li>
                <li style="margin-bottom: 10px"><a href="#">Tentang kami</a></li>
                <li>Ikuti Kami</li>
                <li class="sosmed">
                  <a href=""><img src="images/instagram.png" alt=""></a>
                  <a href=""><img src="images/facebook.png" alt=""></a>
                  <a href=""><img src="images/twitter.png" alt=""></a>
                </li>
              </ul>

            </div>
            <div class="col-4 position-relative logo_bahasa">
              <div class="logo" style=" background-image: url('images/lobsterindoputih.png');">
              </div>
              <!-- <div class="overlap-3">
                          <div class="overlap-group-2">
                              <div class="text-wrapper-21">Indonesia</div>
                          </div>
                          <div class="text-wrapper-22">English</div>
                          <div class="text-wrapper-23">Mandarin</div>
                      </div> 
                  </div>
              </div>
              </d-6iv>
          </div>
   <!-- End Footer -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  </div>

</body>

</html>