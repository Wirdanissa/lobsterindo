@extends('layouts.default')

@section('title', 'Belanja')

@section('content')
<div class="m-5">
    <link rel="stylesheet" href="{{ asset('css/penangkaran.css') }}">

    <div class="mb-4 rounded-5 bg-body-secondary" style="width: 50%; margin: auto; margin-top: 4rem">
          <div class="">
            <div class="row">
              <div class="col-md-12">
                <h1 class="text-center fs-4 fw-bold mt-4">Tambah Penangkaran</h1>
                <p class="text-center">Data Sensitif, pastikan data yang anda masukan sesuai !</p>
                <div class="p-4 mb-4 mt-5 rounded-4 bg-light">
                <form method="POST" action="{{'/penangkaran/'.$data->id}}">
                @csrf
                @method('PUT')
                    <div class="mb-3 row">
                      <label for="exampleFormControlTextarea1" class="col-md-2 col-form-label">Alamat</label>
                      <div class="col-md-10">
                        <textarea class="rounded-3 form-control border" id="lokasi_penangkaran" placeholder="Jl.Tambak Medokan Ayu 6C/68" name="lokasi_penangkaran" rows="3">{{$data->lokasi_penangkaran}}</textarea>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="exampleInputPassword1" class="col-md-2 col-form-label">Manager</label>
                      <div class="col-md-10">
                        <select class="form-select rounded-3 border" aria-label="Default select example" name="manager_id">
                          <option value="{{$data->manager_id}}" selected>{{$data->manager->nama_user}}</option>
                          @foreach ( $role as $item )
                            @if ($item->id == $data->manager_id)
                            
                            @else
                            <option value="{{ $item->id }}">{{$item->nama_user}}</option>    
                            @endif
                            
                          @endforeach
                        </select>
                      </div>
                    </div>
                </div>
                <div class="row mb-5 justify-content-center">
                  <div class="col-md-4 mb-3">
                    <a href="{{URL('/penangkaran')}}" type="button" class="btn btn-orange">Kembali</a>
                  </div>
                  <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-orange">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
</div>
@endsection
