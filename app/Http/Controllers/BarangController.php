<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = barang::all();
        return view('content.belanja')->with('data', $data);
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang\barang_create');
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

        $request -> validate([
            'nama_barang' => 'required',
            'id_penangkaran' => 'required',
            'jumlah_barang' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ],[
            'nama_barang.required' => 'Nama barang wajib di isi',
            'id_penangkaran.required' => 'id penangkaran wajib di isi',
            'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
            'harga.required' => 'harga barang wajib di isi',
            'deskripsi.required' => 'deskripsi wajib di isi (isi menggunakan - apabila tidak memiliki deskripsi )'
        ]);
        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'id_penangkaran' => '1',
            'jumlah_barang' => $request->input('jumlah_barang'),
            'berat' => $request->input('berat'),
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi')
        ];
        barang::Create($data);
        return redirect('barang')->with('success','Berhasil memasukan data');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = barang::where('id', $id)->first();
        return view('barang/barang_edit')->with('data', $data);
    }

    public function tambah(string $id)
    {
        $data = barang::where('id', $id)->first();
        return view('barang/barang_tambah')->with('data', $data);
    }

    public function kurang(string $id)
    {
        $data = barang::where('id', $id)->first();
        return view('barang/barang_kurang')->with('data', $data);
    }
    public function set(string $id)
    {
        $data = barang::where('id', $id)->first();
        return view('barang/barang_set')->with('data', $data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ],[
            'nama_barang.required' => 'Nama barang wajib di isi',
            'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
            'harga.required' => 'harga barang wajib di isi',
            'deskripsi.required' => 'deskripsi wajib di isi (isi menggunakan - apabila tidak memiliki deskripsi )'
        ]);
        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'jumlah_barang' => $request->input('jumlah_barang'),
            'berat' => $request->input('berat'),
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi')
        ];
        barang::where('id', $id)->update($data);
        return redirect('/barang')->with('success','berhasil melakukan perubahan');
    }

    public function update_tambah(Request $request, string $id)
    {
        $request -> validate([
            'jumlah_barang' => 'required',
            'berat' => 'required',
        ],[
            'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
        ]);

        $data = [
            'jumlah_barang' => (barang::where('id',$id)->first()->jumlah_barang + $request->input('jumlah_barang')) ,
            'berat' => (barang::where('id',$id)->first()->berat + $request->input('berat'))
        ];
        barang::where('id',$id)->update($data);
        return redirect('/barang')->with('success', 'Berhasil Melakukan Update');
    }

    public function update_kurang(Request $request, string $id)
    {
        $request -> validate([
            'jumlah_barang' => 'required',
            'berat' => 'required',
        ],[
            'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
        ]);
        $data = [
            'jumlah_barang' => (barang::where('id',$id)->first()->jumlah_barang - $request->input('jumlah_barang')) ,
            'berat' => (barang::where('id',$id)->first()->berat - $request->input('berat'))
        ];
        if($data['jumlah_barang'] < 0){
            $data['jumlah_barang'] = 0;
        }
        if($data['berat'] < 0){
            $data['berat'] = 0;
        }
        barang::where('id',$id)->update($data);
        return redirect('/barang')->with('success', 'Berhasil Melakukan Update');
    }
    public function update_set(Request $request, string $id){
        $request -> validate([
            'jumlah_barang' => 'required',
            'berat' => 'required',
        ],[
            'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
        ]);
        $data = [
            'jumlah_barang' =>  $request->input('jumlah_barang'),
            'berat' =>$request->input('berat')
        ];
        if($data['jumlah_barang'] < 0){
            $data['jumlah_barang'] = 0;
        }
        if($data['berat'] < 0){
            $data['berat'] = 0;
        }
        barang::where('id',$id)->update($data);
        return redirect('/barang')->with('success', 'Berhasil Melakukan Update');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        barang::where('id', $id)->delete();
        return redirect('/barang')->with('success','Berhasil menghapus data');
    }
}