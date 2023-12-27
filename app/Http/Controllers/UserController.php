<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 123;
        $data = User::all();
        return view('users.user')->with('data', $data);
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ],[
            'email.required' => 'Email Wajib diisi',
            'password.required' => 'Password Wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'email.email' => 'Masukan Email dengan benar'
        ]);

        $infologin = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if(Auth::attempt($infologin)){
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('email', $request->email);
        Session::flash('no_telp', $request->no_telp);
        Session::flash('password', $request->password);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users|email',
            'no_telp' => 'required',
            'password' => 'required|min:6'
        ],[
            'nama.required' => 'Nama Wajib diisi',
            'email.required' => 'Email Wajib diisi',
            'no_telp.required' => 'No Telephone Wajib diisi',
            'password.required' => 'Password Wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
            'email.unique' => 'Email yang anda gunakan telah terdaftar, gunakan email lain',
            'email.email' => 'Masukan Email dengan benar'
        ]);

        $data = [
            'nama_user' => $request->input('nama'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'password' => Hash::make($request->input('password'))
        ];
        User::create($data);
        return redirect('/login')->with('success', 'Berhasil mendaftarkan user baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::where('id', $id)->first();
        return view('Profile')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::where('id', $id)->first();
        return view('users.user_edit')->with('data', $data);
    }
    public function edit_password(string $id)
    {
        $data = User::where('id', $id)->first();
        return view('change-password')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'no_telp' => 'required',
        ],[
            'nama.required' => 'Nama Wajib diisi',
            'no_telp.required' => 'No Telephone Wajib diisi',
        ]);


        if ($request->input('role')) {
            $data = [
                'nama_user' => $request->input('nama'),
                'no_telp' => $request->input('no_telp'),
                'alamat' => $request->input('alamat'),
                'role' => $request->input('role'),
            ];
        }
        else{
            $data = [
                'nama_user' => $request->input('nama'),
                'no_telp' => $request->input('no_telp'),
                'alamat' => $request->input('alamat'),
            ];
        }
        User::where('id', $id)->update($data);
        return redirect('/user')->with('success', 'Berhasil Melakukan Update');

    }

    public function update_password(Request $request, string $id)
    {

    }


    public function update_role (Request $request, string $id)
    {
        // return $request->input('role_id');
        User::where('id', $id)->update(
            ['role' => $request->input('role_id')]
        );
        return redirect('/karyawan')->with('success', 'Berhasil Melakukan Update');
    }


    public function pecat (Request $request, string $id)
    {
        User::where('id', $id)->update(
            ['role' => 1]
        );
        return redirect('/karyawan')->with('success', 'Berhasil Melakukan Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect('/user')->with('success', 'Berhasil menghapus data');
    }
}
