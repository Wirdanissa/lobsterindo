@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/partnership.css') }}">


    <section style="background-image: url(images/Partnershipbg.png);" class="container-flex p-5 background-partnership"
      id="portfolio">
      <div class="row mt-5 py-3">
        <div class="mt-5 col-12 d-flex flex-column text-center justify-content-center">
          <h2>PARTNERSHIP</h2>
          <h5 class="text-secondary fw-normal py-2 fst">Cari tau tentang partnership kami.</h5>
        </div>
        <div class="row mt-5 mx-0 justify-content-center align-items-center g-4">
          <div class="col-lg-3 col-md-4 col-12">
            <center>
              <div style="background-size: 180px; background-image: url('images/sangseafood.png')"
                class="card-lobster shadow">
                <!-- <img src="imG/sangseafood.png" class="img-fluid" alt="portfolio-img" /> -->
              </div>
              <div class="card-body text-center">
                <h6 class="card-title mt-2">
                  Sang Seafood <br />
                  De Meer <br />
                  ( Surabaya )
                </h6>
              </div>
            </center>
          </div>
          <div class="col-lg-3 col-md-4">
            <center>
              <div style="background-size: 130px; background-image: url('images/DragonHotPot.png')"
                class="card-lobster shadow"></div>
              <div class="card-body text-center">
                <h6 class="card-title mt-2">
                  Dragon Hotpot <br />
                  ( Surabaya )
                </h6>
              </div>
            </center>
          </div>
          <div class="col-lg-3 col-md-4">
            <center>
              <div style="background-size: 180px; background-image: url('images/indragiri.jpg')"
                class="card-lobster shadow"></div>
              <div class="card-body text-center">
                <h6 class="card-title mt-2">
                  Rumah Makan <br />
                  Indragiri <br />
                  ( Surabaya )
                </h6>
              </div>
            </center>
          </div>
          <div class="col-lg-3 col-md-4">
            <center>
              <div style="background-size: 130px; background-image: url('images/layar.png')"
                class="card-lobster shadow"></div>
              <div class="card-body text-center">
                <h6 class="card-title mt-2">
                  Layar Seafood <br />
                  ( Surabaya )
                </h6>
              </div>
            </center>
          </div>
          <div class="col-lg-3 col-md-4">
            <center>
              <div style="background-size: 130px; background-image: url('images/rajalobster.png')"
                class="card-lobster shadow"></div>
              <div class="card-body text-center">
                <h6 class="card-title mt-2">Raja Lobster <br />( Surabaya )</h6>
              </div>
            </center>
          </div>
          <div class="col-lg-3 col-md-4">
            <center>
              <div style="background-size: 180px; background-image: url('images/Xiang\ Fu\ Hai\ Cuisine.png')"
                class="card-lobster shadow"></div>
              <div class="card-body text-center">
                <h6 class="card-title mt-2">
                  Xiang Fu Hai Cuisine <br />
                  ( Surabaya )
                </h6>
              </div>
            </center>
          </div>
        </div>
      </div>
    </section>

@endsection
