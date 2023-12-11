@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">

        <main class="pt-5">
            <div style="margin-bottom: 15vh;">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div style="background-image: url('images/lobster thumbnail 3.png');" class="img-big">
                            </div>
                            <div style="color: white;" class="carousel-caption d-none d-md-block">
                                <h5>Kualitas dan pelayanan Terbaik</h5>
                                <p>Kami selalu menjaga Kualitas barang dan jasa yang kami sediakan</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div style="background-image: url('images/lobster thumbnail 2.png');" class="img-big">
                            </div>
                            <div style="color: white;" class="carousel-caption d-none d-md-block">
                                <h5>Bekerjasama Membangun Negeri</h5>
                                <p>Kami telah mengajarkan Budidaya lobster airtawar Kepada puluhan desa yang ada di
                                    indonesia</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div style="background-image: url('images/lobster thumbnail 1.png');" class="img-big">
                            </div>
                            <div style="color: white;" class="carousel-caption d-none d-md-block">
                                <h5>Dengan asupan pakan terbaik</h5>
                                <p>Kami memberikan pakan terbaik untuk menjaga kualitas barang kami</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="mt-5 ms-5 me-5">
                    <div class="row g-1">
                        <div class="col d-flex justify-content-center">
                            <img src="images/logo (3).png" alt="">
                        </div>
                        <div class="col d-flex justify-content-center align-items-center">
                            <div style="max-width: 600px;">
                                <div><b>Apa itu LobsterIndo ?</b></p>
                                    <div>LobsterIndo adalah perusahaan yang berjalan di bidang agrikultural yang
                                        berfokus dalam budidaya lobster air tawar, kami berjalan mulai dari
                                        tahun 2019 sebagai pembudidaya lobster air tawar rumahan , dan
                                        berkembang sebagai perusahaan yang menyediakan layanan
                                        pembelajaran untuk berbudidaya lobster air.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-1">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div style="max-width: 600px;">
                                    <div><b>Pengaruh apa yang telah dilakukan Lobsterindo?</b></div>
                                    <div>Saat ini kami telah menjadi Suplayer Lobster Air Tawar diberbagai Restauran
                                        besar
                                        yang
                                        berada di Jawa Timur dan sekitarnya. Serta kami memiliki berbagai macam cabang
                                        yang
                                        tersebar di berbagai provinsi mulai dari Jawa Timur, Jawa Tengah, Jawa Barat,
                                        Kalimantan
                                        Barat, Serta Kalimantan Selatan.</div>
                                    <div class="d-flex justify-content-center mt-5">
                                        <a style="width: 20vw;" class="btn btn-orange" href="login.html">Daftar
                                            Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <img src="images/Mask group2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 d-flex justify-content-center">
                        <div style="text-align: center;">
                            <div><b>Partnership</b></div>
                            <div>Cari tau tentang partnership kami</div>
                        </div>
                    </div>
                    <div class="row ms-5 me-5 mt-5 d-flex justify-content-center g-1">

                        <div class="col d-flex justify-content-center">
                            <div class="d-flex flex-column">
                                <img src="images/Mask group (0).png" alt="">
                                <div style="text-align: center;">Raja Lobster</div>
                                <div style="text-align: center;">( Surabaya )</div>
                            </div>
                        </div>

                        <div class="col d-flex justify-content-center">
                            <div class="d-flex flex-column">
                                <img src="images/Mask group (1).png" alt="">
                                <div style="text-align: center;">Sang Seafood </div>
                                <div style="text-align: center;">De Meer</div>
                                <div style="text-align: center;">( Surabaya )</div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="d-flex flex-column">
                                <img src="images/Group 117.png" alt="">
                                <div style="text-align: center;">Dragon Hotpot</div>
                                <div style="text-align: center;">( Surabaya )</div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="d-flex flex-column">
                                <img src="images/Mask group (2).png" alt="">
                                <div style="text-align: center;">Rumah Makan</div>
                                <div style="text-align: center;">Indra Giri</div>
                                <div style="text-align: center;">( Surabaya )</div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="d-flex flex-column">
                                <img src="images/Group 118.png" alt="">
                                <div style="text-align: center;">Layar Seafood</div>
                                <div style="text-align: center;">( Surabaya )</div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="d-flex flex-column">
                                <img src="images/Mask group (3).png" alt="">
                                <div style="text-align: center;">Xing Fu Hai</div>
                                <div style="text-align: center;">Cuisine</div>
                                <div style="text-align: center;">( Surabaya )</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
