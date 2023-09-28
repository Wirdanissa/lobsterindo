<link rel="stylesheet" href="{{ asset('css/nav.css') }}">

<nav class="navbar navbar-expand-md navbar-dark bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/beranda') }}">
           <b style="font-size: 1.3em" >LobsterIndo</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="ms-4 collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <ul class="ms-4 navbar-nav me-auto">
                        <li class="nav-item me-4">
                            <a class="nav-link" href=" ">Beranda</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href=" ">Partnership</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href=" ">Budidaya</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href=" ">Belanja</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href=" ">Riwayat Belanja</a>
                        </li>
            </ul>
        </div>
    </div>
</nav>
