<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Penangkaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = User::where('role','<>',1)->get();
        $penangkaran = Penangkaran::all();

        $data = [
            'karyawan' => $karyawan,
            'penangkaran' => $penangkaran
        ];
        return view('Manager.Karyawan')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Penangkaran::all();
        return view('Boss.Create-pegawai')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('penangkaran', $request->penangkaran);
        Session::flash('role', $request->role);
        Session::flash('user', $request->user);
        // Session::flash('jumlah_karyawan', $request->jumlah_karyawan);

        $request->validate([
            'penangkaran'=>'required',
            'role'=>'required',
            'user'=>'required'
            // 'jumlah_karyawan'=>'required|numeric'
        ], [
            'penangkaran.required' => 'Penangkaran wajib diisi',
            'role.required' => 'role Wajib diisi',
            'user.required' => 'user Wajib diisi',
            // 'jumlah_karyawan.required' => 'Jumlah Karyawan Wajib diisi',
            // 'jumlah_karyawan.numeric' => 'Jumlah Karyawan hanya menerima input angka',
        ]);
        $data = [
            'penangkaran_id' => $request->penangkaran,
            'user_id' => $request->user
        ];

        $role = [
            'role' => $request->role
        ];

        User::where('id', $request->user)->update($role);
        Karyawan::create($data);
        return redirect('/karyawan')->with('success', 'Berhasil Menambahkan Data');
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
        //
    }
}
