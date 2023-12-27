<link rel="stylesheet" href="{{ asset('css/budidaya.css') }}">
<div id="sidebar" class="col-md-10 d-md-block sidebar">
    <div class="position-sticky">
      <h2 class="mb-5">
        Lobsterindo <br />
        <span>Education Site</span>
      </h2>
      <ul class="nav flex-column mt-3 ms-2">
        <li class="sidebar-item">
          <a class="sidebar-link {{ (request()->is('Budidaya/intro')) ? 'active' : '' }}" href="{{ URL('/Budidaya/intro') }}"> Introduction </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ (request()->is('Budidaya/lobster-airtawar')) ? 'active' : '' }}" href="{{ URL('/Budidaya/lobster-airtawar') }}"> Lobster Air Tawar </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ (request()->is('Budidaya/habitat')) ? 'active' : '' }}" href="{{ URL('/Budidaya/habitat') }}"> Habitat </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ (request()->is('Budidaya/makanan')) ? 'active' : '' }}" href="{{ URL('/Budidaya/makanan') }}"> Makanan </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ (request()->is('Budidaya/ukuran')) ? 'active' : '' }}" href="{{ URL('/Budidaya/ukuran') }}"> Ukuran </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ (request()->is('Budidaya/pemijahan')) ? 'active' : '' }}" href="{{ URL('/Budidaya/pemijahan') }}"> Proses Pemijahan </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ (request()->is('Budidaya/pembesaran')) ? 'active' : '' }}" href="{{ URL('/Budidaya/pembesaran') }}"> Pembesaran </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ (request()->is('Budidaya/penjualan')) ? 'active' : '' }}" href="{{ URL('/Budidaya/penjualan') }}"> Penjualan </a>
        </li>
      </ul>
    </div>
  </div>
