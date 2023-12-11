@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/budidaya.css') }}">


    <div class="container-education-site">
      <div class="row">

        <!-- sidebar -->
        <!-- Kolom Pertama (Lebar 8) -->
        <div id="sidebar" class="col-md-10 d-md-block sidebar">
          <div class="position-sticky">
            <h2 class="mb-5">
              Lobsterindo <br />
              <span>Education Site</span>
            </h2>
            <ul class="nav flex-column mt-3 ms-2">
              <li class="sidebar-item">
                <a class="sidebar-link" href="intro.html"> Introduction </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="lobster-airtawar.html"> Lobster Air Tawar </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="habitat.html"> Habitat </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link active" href="makanan.html"> Makanan </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="ukuran.html"> Ukuran </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="pemijahan.html"> Proses Pemijahan </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="pembesaran.html"> Pembesaran </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="penjualan.html"> Penjualan </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- end sidebar -->
        <!-- Kolom Kedua (Lebar 4) -->
        <main class="col-md-4 ms-sm-5 col-lg-8">
            <!--Content Start-->
            <section id="content">
                <div class="container mt-3 mb-5">
                <div class="row align-items-center">
                    <div class="col-md-12">
                    <main class="content">
                        <img src="../images/makanan.jpeg" alt="" style="height: auto; width: 100%; margin-top: 3rem;">
                        <h2 class="fw-bold mt-5">4. Makanan</h2>
                        <p class="fw-bold">industry. Lorem Ipsum has been the industry's</p>
                        <p class="mt-3 mb-5">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </main>
                </div>
                <div class="col-md-12">
                        <h5 class="fw-bold">industry. Lorem Ipsum has been the industry's standard dummy text <br>ever since the 1500s, when an unknown printer took a galley</h5>

                        <p class="mt-3 mb-3">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                </div>
            </section>
            <!--Content End-->
        </main>
      </div>
    </div>
@endsection
