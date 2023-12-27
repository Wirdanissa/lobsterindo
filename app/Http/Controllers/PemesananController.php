<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Pemesanan;
use App\Models\Pengiriman;
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

    public function master_pengiriman()
    {
        // return 1;
        $data = Pemesanan::all();
        return view('Kurir.MasterPengiriman')->with('data', $data);
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
        $data = Pemesanan::where('id', $id)->first();
        return view('Proses-Kurir.proses3')->with('data', $data);
    }


    public function show_pengiriman(string $id)
    {
        $data = Pemesanan::where('id',$id)->first();
        return view('Proses-Kurir.proses2')->with('data', $data);
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

    public function update_pengiriman(Request $request, string $id)
    {
        Session::flash('timbangan', $request->timbangan);
        Session::flash('total_harga', $request->total_harga);

        $request -> validate([
            'foto_nota' => 'required|mimes:png,jpg,jpeg,HEIC ',
            'foto_timbangan' => 'required|mimes:png,jpg,jpeg,HEIC ',
            'timbangan' => 'required|numeric',
            'total_harga' => 'required|numeric',
        ],[
            'foto_nota.required' => 'Foto Bukti Nota wajib diisi',
            'foto_timbangan.required' => 'Foto Bukti Timbangan wajib diisi',
            'timbangan.required' => 'Total timbangan wajib diisi',
            'total_harga.required' => 'Total harga wajib diisi',
            'foto_nota.mimes' => 'foto harus berekstensi png,jpg,jpeg,heic',
            'foto_timbangan.mimes' => 'foto harus berekstensi png,jpg,jpeg,heic',
            'timbangan.numeric' => 'Timbangan hanya menerima input angka',
            'total_harga.numeric' => 'Total Harga hanya menerima input angka',
        ]);

        $foto_nota = $request->file('foto_nota');
        $foto_nota_ekstensi = $foto_nota->extension();

        $foto_nota_nama = date('ymdhis').".".$foto_nota_ekstensi;
        $foto_nota->move(public_path('foto_pengiriman/foto_nota'),$foto_nota_nama);

        $foto_timbangan = $request->file('foto_timbangan');
        $foto_timbangan_ekstensi = $foto_timbangan->extension();

        $foto_timbangan_nama = date('ymdhis').".".$foto_timbangan_ekstensi;
        $foto_timbangan->move(public_path('foto_pengiriman/foto_timbangan'),$foto_timbangan_nama);

        $data = [
            'foto_nota' => $foto_nota_nama,
            'foto_timbangan' => $foto_timbangan_nama,
            'note' => $request->input('note'),
            'ongkir' => 20000,
            'timbangan' => $request->input('timbangan'),
            'total_harga' => $request->input('total_harga')
        ];

        Pengiriman::create($data);

        $pemesanan = Pemesanan::find($id);
        $pemesanan->id_pengiriman = Pengiriman::max('id');
        $pemesanan->status = 2;
        $pemesanan->save();
        // Pemesanan::where('id', $id)->update($data);

        return redirect('/pengiriman')->with('success', 'Berhasil Melakukan Update');
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
