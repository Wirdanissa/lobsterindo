<?php

namespace App\Http\Controllers;

use App\Models\Penangkaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenangkaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Penangkaran::all();
        return view('Boss.Penangkaran')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = User::where('role',3)->get();
        return view('Boss.Create-penangkaran')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('manager_id', $request->manager_id);
        Session::flash('lokasi_penangkaran', $request->lokasi_penangkaran);
        // Session::flash('jumlah_karyawan', $request->jumlah_karyawan);

        $request->validate([
            'manager_id'=>'required|numeric',
            'lokasi_penangkaran'=>'required',
            // 'jumlah_karyawan'=>'required|numeric'
        ], [
            'manager_id.required' => 'Manager ID wajib diisi',
            'manager_id.numeric' => 'Manager ID hanya menerima input angka',
            'lokasi_penangkaran.required' => 'Lokasi penangkaran Wajib diisi',
            // 'jumlah_karyawan.required' => 'Jumlah Karyawan Wajib diisi',
            // 'jumlah_karyawan.numeric' => 'Jumlah Karyawan hanya menerima input angka',
        ]);
        $data = [
            'manager_id' => $request->manager_id,
            'lokasi_penangkaran' => $request->lokasi_penangkaran,
            'jumlah_karyawan' => 1
        ];

        Penangkaran::create($data);
        return redirect('penangkaran')->with('success', 'Berhasil Menambahkan Data');
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
        $role = User::where('role',3)->get();
        $data_penangkaran = Penangkaran::where('id', $id)->first();
        $data = [
            'data' => $data_penangkaran,
            'role' => $role
        ];
        return view('Boss.Edit-penangkarang')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'manager_id' => 'required|numeric',
            'lokasi_penangkaran' => 'required',
            // 'jumlah_karyawan' => 'required|numeric'
        ],[
            'manager_id.required' => 'Manager ID wajib diisi',
            'manager_id.numeric' => 'Manager ID hanya menerima input angka',
            'lokasi_penangkaran.required' => 'Lokasi penangkaran Wajib diisi',
            // 'jumlah_karyawan.required' => 'Jumlah Karyawan Wajib diisi',
            // 'jumlah_karyawan.numeric' => 'Jumlah Karyawan hanya menerima input angka',
        ]);

        $data = [
            'manager_id' => $request->manager_id,
            'lokasi_penangkaran' => $request->lokasi_penangkaran,
            // 'jumlah_karyawan' => $request->jumlah_karyawan
        ];

        Penangkaran::where('id',$id)->update($data);
        return redirect('/penangkaran/'.$id.'/edit')->with('success', 'Berhasil Melakukan Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Penangkaran::where('id', $id)->delete();
        return redirect('penangkaran');
    }
}
