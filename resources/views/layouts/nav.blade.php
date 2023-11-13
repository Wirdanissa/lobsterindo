<link rel="stylesheet" href="{{ asset('css/nav.css') }}">

<nav class="navbar navbar-expand-md navbar-dark bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
           <b style="font-size: 1.3em" >Lobsterindo</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="ms-4 collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <ul class="ms-4 navbar-nav me-auto">
                        <li class="nav-item me-4">
                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="{{ url('/partnership') }}">Partnership</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="{{ url('/budidaya') }}">Budidaya</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="{{ url('/barang') }}">Belanja</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="{{ url('/riwayat') }}">Riwayat Belanja</a>
                        </li>
            </ul>
        </div>
        <div class="profile">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                <circle cx="28" cy="28" r="28" fill="#D2D2D2"/>
              </svg>
        </div>
    </div>
</nav>
