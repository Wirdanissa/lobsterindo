<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pembayaran::all();
        return view('Boss.Pembayaran')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Boss.Create-Pembayaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_pembayaran', $request->nama_pembayaran);
        Session::flash('code_bank', $request->code_bank);

        $request->validate([
            'nama_pembayaran' => 'required',
            'code_bank' => 'required|numeric',
            'logo_pembayaran' => 'required|mimes:jpg,jpeg,png,svg'
        ], [
            'nama_pembayaran.required' => 'Nama Pembayaran wajib diisi',
            'code_bank.required' => 'Code Bank wajib diisi',
            'logo_pembayaran.required' => 'Foto Barang wajib di isi',
            'logo_pembayaran.mimes' => 'Foto Barang Hanya diperbolehkan berekstensi JPG, JPEG, PNG, SVG'
        ]);

        $foto_file = $request->file('logo_pembayaran');
        $foto_ekstensi = $foto_file->extension();

        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('logo_pembayaran'),$foto_nama);

        // return $foto_nama;
        $data = [
            'nama_pembayaran' => $request->input('nama_pembayaran'),
            'image' => $foto_nama,
            'code_bank' => $request->input('code_bank'),
        ];

        Pembayaran::Create($data);
        return redirect('/pembayaran')->with('success','Berhasil memasukan data');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pembayaran::where('id', $id)->first();
        return view('')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pembayaran::where('id', $id)->first();
        return view('Boss.Edit-Pembayaran')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pembayaran' => 'required',
            'code_bank' => 'required|numeric',
        ], [
            'nama_pembayaran.required' => 'Nama Pembayaran wajib diisi',
            'code_bank.required' => 'Code Bank wajib diisi',
        ]);

        if ($request->hasFile('logo_pembayaran')) {
        $request -> validate([
            'logo_pembayaran' => 'mimes:jpg,jpeg,png,svg'
        ],[
            'logo_pembayaran.mimes' => 'Foto Barang Hanya diperbolehkan berekstensi JPG, JPEG, PNG, SVG'
        ]);

        $foto_file = $request->file('logo_pembayaran');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('logo_pembayaran'),$foto_nama);

        $pembayaran = Pembayaran::where('id', $id)->first();
        File::delete(public_path('logo_pembayaran').'/'.$pembayaran->image);

        $data = [
            'nama_pembayaran' => $request->input('nama_pembayaran'),
            'image' => $foto_nama,
            'code_bank' => $request->input('code_bank'),
        ];

        } else {
            $data = [
                'nama_pembayaran' => $request->input('nama_pembayaran'),
                'code_bank' => $request->input('code_bank')
            ];
        }

        Pembayaran::where('id', $id)->update($data);
        return redirect('/pembayaran/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::where('id', $id)->first();
        File::delete(public_path('foto_pembayaran$pembayaran').'/'.$pembayaran->image);
        Pembayaran::where('id', $id)->delete();
        return redirect('/pembayaran')->with('success','Berhasil menghapus data');
    }
}
