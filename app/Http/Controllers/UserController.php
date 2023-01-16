<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'status' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $user = new User();
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = bcrypt('password');
        $user->status = $request->status;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->role = 'petani';
        $user->save();

        return redirect()->route('user.index')
            ->with('success', 'User berhasil ditambahkan, password login : password');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'status' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        
        $user = User::find($id);
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = bcrypt('password');
        $user->status = $request->status;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->role = 'petani';
        $user->save();

        return redirect()->route('user.index')
            ->with('success', 'User berhasil diupdate');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')
            ->with('success', 'User berhasil dihapus');
    }
}
