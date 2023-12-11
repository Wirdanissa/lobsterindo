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
    <link rel="stylesheet" href="../css/proses.css">

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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                    <a style="display: inline-flex;" class="nav-link nav-profile pe-0 d-flex align-items-center"
                        href="#" data-bs-toggle="dropdown">
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
                            <a class="dropdown-item d-flex align-items-center" href="../Boss/Admin.html">
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
            <div style="margin-top: 10vh;" class="container d-flex justify-content-center">
                <div class="box-proses">
                    <div class="status-pemesanan2 d-flex justify-content-center">
                        STATUS PEMESANAN : PROSES PENGIRIMAN
                    </div>
                    <div class="box-pemesanan p-4 row d-flex align-items-center">
                        <div style="background-size:150px 150px; background-repeat: no-repeat; background-image: url('../images/LobsterKonsumsi.png')"
                            class="image col-4">
                        </div>
                        <div class="col-7 ms-4 flex-column">
                            <b>Lobster Air Tawar Konsumsi</b>
                            <b class="harga">Rp.180.000</b>
                            <p>Lobster AirTawar dengan ukuran 4 sampai 6 inc</p>
                        </div>
                    </div>
                    <div class="box-detail-pengiriman">
                        <b>Detail Pengiriman</b>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Alamat Pengiriman :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Jl.Menur 2/2C
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Waktu Pengiriman :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                25/10/2023 - 10.00
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Pembayaran :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Gopay
                            </div>
                        </div>
                    </div>
                    <div class="box-detail-pembayaran">
                        <b>Detail Tagihan</b>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                Jumlah Pemesanan :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                4Kg
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Total Harga (4kg Barang) :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Rp.720.000.-
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Total Ongkos Kirim :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Rp.20.000.-
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Biaya Transaksi :
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                Rp.7.500.-
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <b>Total Tagihan</b>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <b class="harga">Rp.747.500.-</b>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a style="width: 20vh;" href="../Beranda.html" class="btn btn-orange me-3">Beranda</a>
                        <a style="width: 20vh;" href="../Kurir/MasterPengiriman.html" class="btn btn-orange">Kembali</a>
                    </div>
                </div>
                <div class="container-pengiriman">
                    <form action="" method="post">
                        <div class="box-detail-pengiriman">
                            <b>Update Informasi Pengiriman</b>
                            <p>Penangkaran (Jl.Tambak medokan ayu 6c no.68)</p>
                            <hr>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Nota :</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Bukti Timbangan :</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Timbangan :</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Total Harga :</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Note :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <button style="width: 10vw;" class="btn btn-orange">Update</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a style="color: white;" href="proses1.html">Back</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a style="color: white;" href="proses3.html">Next</a>
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