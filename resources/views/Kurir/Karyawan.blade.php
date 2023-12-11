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
    <link rel="stylesheet" href="../css/Kurir/karyawan.css">

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