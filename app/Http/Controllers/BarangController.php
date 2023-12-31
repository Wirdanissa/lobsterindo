<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Penangkaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $barang = barang::all();
        $penangkaran = Penangkaran::all();
        $data = [
            'barang' => $barang,
            'penangkaran' => $penangkaran
        ];
        // return view('content.belanja')->with('data', $data);
        return view('Belanja')->with($data);
    }

    public function index_admin()
    {
        $barang = barang::all();
        $penangkaran = Penangkaran::all();
        $data = [
            'barang' => $barang,
            'penangkaran' => $penangkaran
        ];
        return view('Stock Gudang.Master-Stock')->with($data);
    }

    public function index_manager()
    {
        // return 1;
        $barang = barang::all();
        $penangkaran = Penangkaran::all();
        $data = [
            'barang' => $barang,
            'penangkaran' => $penangkaran
        ];
        // return view('content.belanja')->with('data', $data);
        return view('Manager.Master-Stock')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Penangkaran::all();
        return view('Manager.Create-Barang')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('foto');
        // return $request->foto;
        Session::flash('nama_barang', $request->nama_barang);
        // Session::flash('id_penangkaran', $request->id_penangkaran);
        // Session::flash('jumlah_barang', $request->jumlah_barang);
        Session::flash('berat', $request->berat);
        Session::flash('harga', $request->harga);
        Session::flash('deskripsi', $request->deskripsi);
        // Session::flash('foto', $request->foto);

        $request -> validate([
            'nama_barang' => 'required',
            // 'id_penangkaran' => 'required',
            // 'jumlah_barang' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png'
        ],[
            'nama_barang.required' => 'Nama barang wajib di isi',
            // 'id_penangkaran.required' => 'id penangkaran wajib di isi',
            // 'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
            'harga.required' => 'harga barang wajib di isi',
            'foto.required' => 'Foto Barang wajib di isi',
            'foto.mimes' => 'Foto Barang Hanya diperbolehkan berekstensi JPG, JPEG, PNG',
            'deskripsi.required' => 'deskripsi wajib di isi (isi menggunakan - apabila tidak memiliki deskripsi )'
        ]);
        // return 1;
        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();

        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto_barang'),$foto_nama);

        // return $foto_nama;

        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'id_penangkaran' => '1',
            // 'jumlah_barang' => $request->input('jumlah_barang'),
            'berat' => $request->input('berat'),
            'harga' => $request->input('harga'),
            'image' => $foto_nama,
            'deskripsi' => $request->input('deskripsi'),
        ];

        // return $data['image'];
        barang::Create($data);
        return redirect('barang/index/manager')->with('success','Berhasil memasukan data');
        // return redirect('belanja')->with('success','Berhasil memasukan data');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = barang::where('id', $id)->first();
        $penangkaran = Penangkaran::all();
        $data = [
            'barang' => $barang,
            'penangkaran' => $penangkaran
        ];
        return view('Manager.Edit-Barang')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = barang::where('id', $id)->first();
        $penangkaran = Penangkaran::all();
        $data = [
            'barang' => $barang,
            'penangkaran' => $penangkaran
        ];
        return view('barang/barang_edit')->with($data);
    }

    public function tambah(string $id)
    {
        $data = barang::where('id', $id)->first();
        return view('Stock Gudang.Tambah-Barang')->with('data', $data);
    }

    public function kurang(string $id)
    {
        $data = barang::where('id', $id)->first();
        return view('Stock Gudang.Kurang-Barang')->with('data', $data);
    }
    public function set(string $id)
    {
        $data = barang::where('id', $id)->first();
        return view('Stock Gudang.Set-Barang')->with('data', $data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request -> validate([
            'nama_barang' => 'required',
            // 'jumlah_barang' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ],[
            'nama_barang.required' => 'Nama barang wajib di isi',
            // 'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
            'harga.required' => 'harga barang wajib di isi',
            'deskripsi.required' => 'deskripsi wajib di isi (isi menggunakan - apabila tidak memiliki deskripsi )'
        ]);

        if ($request->hasFile('foto')) {
        $request -> validate([
            'foto' => 'mimes:jpg,jpeg,png'
        ],[
            'foto.mimes' => 'Foto Barang Hanya diperbolehkan berekstensi JPG, JPEG, PNG',
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto_barang'),$foto_nama);

        $barang = barang::where('id', $id)->first();
        File::delete(public_path('foto_barang').'/'.$barang->image);

        $data = [
            'nama_barang' => $request->input('nama_barang'),
            // 'jumlah_barang' => $request->input('jumlah_barang'),
            'berat' => $request->input('berat'),
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi'),
            'image' => $foto_nama
        ];

        } else {
            $data = [
                'nama_barang' => $request->input('nama_barang'),
                // 'jumlah_barang' => $request->input('jumlah_barang'),
                'berat' => $request->input('berat'),
                'harga' => $request->input('harga'),
                'deskripsi' => $request->input('deskripsi')
            ];
        }

        barang::where('id', $id)->update($data);
        return redirect('/barang/'.$id);
    }

    public function update_tambah(Request $request, string $id)
    {
        $request -> validate([
            // 'jumlah_barang' => 'required',
            'berat' => 'required',
        ],[
            // 'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
        ]);

        $data = [
            // 'jumlah_barang' => (barang::where('id',$id)->first()->jumlah_barang + $request->input('jumlah_barang')) ,
            'berat' => (barang::where('id',$id)->first()->berat + $request->input('berat'))
        ];
        barang::where('id',$id)->update($data);
        return redirect('/barang/admin')->with('success', 'Berhasil Melakukan Update');
    }

    public function update_kurang(Request $request, string $id)
    {
        $request -> validate([
            // 'jumlah_barang' => 'required',
            'berat' => 'required',
        ],[
            // 'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
        ]);
        $data = [
            // 'jumlah_barang' => (barang::where('id',$id)->first()->jumlah_barang - $request->input('jumlah_barang')) ,
            'berat' => (barang::where('id',$id)->first()->berat - $request->input('berat'))
        ];
        // if($data['jumlah_barang'] < 0){
        //     $data['jumlah_barang'] = 0;
        // }
        if($data['berat'] < 0){
            $data['berat'] = 0;
        }
        barang::where('id',$id)->update($data);
        return redirect('/barang/admin')->with('success', 'Berhasil Melakukan Update');
    }
    public function update_set(Request $request, string $id){
        $request -> validate([
            // 'jumlah_barang' => 'required',
            'berat' => 'required',
        ],[
            // 'jumlah_barang.required' => 'jumlah barang wajib di isi (berikan 0 apabila barang belum tersedia)',
            'berat.required' => 'berat wajib di isi (berikan 0 apabila barang belum tersedia)',
        ]);
        $data = [
            // 'jumlah_barang' =>  $request->input('jumlah_barang'),
            'berat' =>$request->input('berat')
        ];
        // if($data['jumlah_barang'] < 0){
        //     $data['jumlah_barang'] = 0;
        // }
        if($data['berat'] < 0){
            $data['berat'] = 0;
        }
        barang::where('id',$id)->update($data);
        return redirect('/barang/admin')->with('success', 'Berhasil Melakukan Update');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = barang::where('id', $id)->first();
        File::delete(public_path('foto_barang').'/'.$barang->image);
        barang::where('id', $id)->delete();
        return redirect('/barang')->with('success','Berhasil menghapus data');
    }

}
