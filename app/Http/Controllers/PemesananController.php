<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pemesanan::all();
        return view('pemesanan.pemesanan')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $data = barang::where('id', $id)->first();
        return view('pemesanan.pemesanan_create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('id_penangkaran', $request->id_penangkaran);
        Session::flash('jumlah_barang', $request->jumlah_barang);
        Session::flash('berat', $request->berat);
        Session::flash('harga', $request->harga);
        Session::flash('deskripsi', $request->deskripsi);
        // Session::flash('foto', $request->foto);

        $request -> validate([
            'nama_barang' => 'required',
            'id_penangkaran' => 'required',
            'jumlah_barang' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpg,jpeg,png'
        ],[
            'nama_barang.required' => 'Nama barang wajib di isi',
            'id_penangkaran.required' => 'id penangkaran wajib di isi',
            'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
            'harga.required' => 'harga barang wajib di isi',
            'foto.required' => 'Foto Barang wajib di isi',
            'foto.mimes' => 'Foto Barang Hanya diperbolehkan berekstensi JPG, JPEG, PNG',
            'deskripsi.required' => 'deskripsi wajib di isi (isi menggunakan - apabila tidak memiliki deskripsi )'
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto_barang'),$foto_nama);

        // return $foto_nama;

        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'id_penangkaran' => '1',
            'jumlah_barang' => $request->input('jumlah_barang'),
            'berat' => $request->input('berat'),
            'harga' => $request->input('harga'),
            'image' => $foto_nama,
            'deskripsi' => $request->input('deskripsi'),
        ];

        // return $data['image'];
        barang::Create($data);
        return redirect('belanja')->with('success','Berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function riwayat(){
        $data = Pemesanan::where('id_user',1)->get();
        return view('menu.riwayat_belanja')->with('data', $data);
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pemesanan::where('id', $id)->delete;
        return redirect('/pemesanan')->with('success', 'Berhasil menghapus data');
    }
}
