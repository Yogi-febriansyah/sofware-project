<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataAkunController extends Controller
{
    public function index() {
        $data = [
            'dosen_id' => User::where('role', 'dospem')->inRandomOrder()->value('id'),
            'data_dosen'=> User::where('role', 'dospem')->get(),
            'data_mhs'=> User::where('role', 'mahasiswa')->get(),
        ];
        return view('operator/data', $data);
    }

    public function mahasiswa(Request $request) {
        $validasi = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'nim' => 'required|numeric|unique:users',
            'password' => 'required|min:5',
            'id_dosen' => 'required',
            'jabatan' => 'required',
            'role' => 'required',
        ]);

        $validasi['password'] = Hash::make($validasi['password']);
        
        User::create($validasi);
        return redirect('/operator/dataAkun');
    }

    public function dosen(Request $request) {
        $validasi = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'nim' => 'required|numeric|unique:users',
            'password' => 'required|min:5',
            'jabatan' => 'required',
            'id_dosen' => 'required',
            'role' => 'required',
        ]);

        $validasi['password'] = Hash::make($validasi['password']);
        
        User::create($validasi);
        return redirect('/operator/dataAkun');
    }

    public function edit($id) {
        $data = [
            'ma' => User::where('id', $id)->first()
        ];
        return view('operator/edit', $data);
    }

    public function update(Request $request, $id) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'nim' => $request->nim,
            'role' => $request->role,
            'jabatan' => $request->jabatan,
        ];

        User::where ('id', $id)->update($data);
        return redirect('/operator/dataAkun');
    }

    public function delete(Request $request, $id) {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect('/operator/dataAkun');
        }
    }
}
