@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/Boss/pembayaran.css') }}">

    <section>
      <div style="margin-top: 15vh;" class="mb-5 container">
        <center>
          <div class="title mb-5  ">
            <b>Halaman Master Pembayaran</b>
            <p>Manage pembayaran yang tersedia di dalam website</p>
          </div>
        </center>
        <div class="row d-flex justify-content-center">
          <div class="col-6">
            <a href="{{ URL('/pembayaran/create') }}" class="btn btn-orange">Tambah Metode Pembayaran</a>
          </div>
          <div class="col-3">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search...">
            </div>
          </div>
        </div>
        <div class="mt-2 row d-flex justify-content-center g-4">
          @foreach ( $data as $item )
          <div class="col-5 d-flex justify-content-center">
            <div style="text-decoration: none;" href="">
              <div class="katalog p-4 row d-flex align-items-center">
                <div style="background-image: url('{{ URL('logo_pembayaran/'.$item->image)}}')" class="image col-4">
                </div>
                <div class="col-6 ms-4 flex-column">
                  <p class="m-0"><b style=" text-transform: capitalize;">{{ $item->nama_pembayaran }}</b></p>
                  <b class="no-rek">{{ $item->code_bank }}</b>
                  <p>Code bank : {{ $item->code_bank }}</p>
                </div>
                <div class="col-1">
                  <a href="{{ URL('/pembayaran/'.$item->id.'/edit') }}"><img src="{{ URL('images/btn-edit.svg') }}" alt=""></a>
                  <form class="mt-2" action="{{ '/pembayaran/'.$item->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button style="border: none; background: none;" type="submit"><img src="{{ URL('images/btn-delete.svg') }}" alt=""></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach
            {{-- <div class="col-5 d-flex justify-content-center">
            <div style="text-decoration: none;" href="">
              <div class="katalog p-4 row d-flex align-items-center">
                <div style="background-image: url('../images/BCA.svg')" class="image col-4">
                </div>
                <div class="col-6 ms-4 flex-column">
                  <p class="m-0"><b>BCA</b></p>
                  <b class="no-rek">4024 0071 8989 2291</b>
                  <p>Code bank : 4323 2134 3245</p>
                </div>
                <div class="col-1">
                  <a href=""><img src="../images/btn-edit.svg" alt=""></a>
                  <form class="mt-2" action="" method="post">
                    <button style="border: none; background: none;" type="submit"><img src="../images/btn-delete.svg"
                        alt=""></button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-5 d-flex justify-content-center">
            <div style="text-decoration: none;" href="">
              <div class="katalog p-4 row d-flex align-items-center">
                <div style="background-image: url('../images/Mandiri.svg')" class="image col-4">
                </div>
                <div class="col-6 ms-4 flex-column">
                  <p class="m-0"><b>Mandiri</b></p>
                  <b class="no-rek">4024 0071 8989 2291</b>
                  <p>Code bank : 4323 2134 3245</p>
                </div>
                <div class="col-1">
                  <a href=""><img src="../images/btn-edit.svg" alt=""></a>
                  <form class="mt-2" action="" method="post">
                    <button style="border: none; background: none;" type="submit"><img src="../images/btn-delete.svg"
                        alt=""></button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-5 d-flex justify-content-center">
            <div style="text-decoration: none;" href="">
              <div class="katalog p-4 row d-flex align-items-center">
                <div style="background-image: url('../images/Gopay.svg')" class="image col-4">
                </div>
                <div class="col-6 ms-4 flex-column">
                  <p class="m-0"><b>Gopay</b></p>
                  <b class="no-rek">4024 0071 8989 2291</b>
                  <p>Code bank : 4323 2134 3245</p>
                </div>
                <div class="col-1">
                  <a href=""><img src="../images/btn-edit.svg" alt=""></a>
                  <form class="mt-2" action="" method="post">
                    <button style="border: none; background: none;" type="submit"><img src="../images/btn-delete.svg"
                        alt=""></button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-5 d-flex justify-content-center">
            <div style="text-decoration: none;" href="">
              <div class="katalog p-4 row d-flex align-items-center">
                <div style="background-image: url('../images/Ovo.svg')" class="image col-4">
                </div>
                <div class="col-6 ms-4 flex-column">
                  <p class="m-0"><b>Ovo</b></p>
                  <b class="no-rek">4024 0071 8989 2291</b>
                  <p>Code bank : 4323 2134 3245</p>
                </div>
                <div class="col-1">
                  <a href=""><img src="../images/btn-edit.svg" alt=""></a>
                  <form class="mt-2" action="" method="post">
                    <button style="border: none; background: none;" type="submit"><img src="../images/btn-delete.svg"
                        alt=""></button>
                  </form>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
    </section>
@endsection
