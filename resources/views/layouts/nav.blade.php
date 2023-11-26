<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-white shadow-sm">
    <div class="navbar-lobster">
        <a class="navbar-brand" href="Beranda.html">
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
                    <a class="nav-link" href="{{ URL('/') }}">Beranda</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ URL('/Partnership') }}">Partnership</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ URL('/Budidaya') }}">Budidaya</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ URL('barang') }}">Belanja</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ URL('/RiwayatBelanja') }}">Riwayat Belanja</a>
                </li>
            </ul>
        </div>
        <div class="nav-item dropdown pe-3">
            <a style="display: inline-flex;" class="nav-link nav-profile pe-0 d-flex align-items-center"
                href="#" data-bs-toggle="dropdown">
                <div style="background-image: url('images/pp.png');" class="circle"></div>
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
                    <a class="dropdown-item d-flex align-items-center" href="Profile.html">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="Boss/Admin.html">
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
                    <a class="dropdown-item d-flex align-items-center" href="login.html">
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
