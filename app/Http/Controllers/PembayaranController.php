<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pembayaran::all();
        return view('Pembayaran.pembayaran')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pembayaran.pembayaran_create');
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
        ], [
            'nama_pembayaran.required' => 'Nama Pembayaran wajib diisi',
            'code_bank.required' => 'Code Bank wajib diisi'
        ]);

        // $data = [
        //     'nama_pembayaran' => $request->input('nama_pembayaran');
        //     'nama_pembayaran' => $request->input('+;
        // ]

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
        $data = Pembayaran::where('id', $id)->first();
        return view('Pembayaran.pembayaran_edit')->with('data',$data);
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
