<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Magang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MagangController extends Controller
{
    public function index() {
        $data = [
            'magang' => Magang::where('id_user', Auth::id())->get()
        ];
        return view('mhs/magang', $data);
    }

    public function tambah(Request $request) {
        $item = [
            'tempat' => $request->tempat,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'id_user' => $request->id_user,
        ];

        Magang::create($item);
        return redirect('/mahasiswa/magang');
    }

    public function edit($id) {
        $data = [
            'ma' => Magang::where('id', $id)->first()
        ];
        return view('mhs/edit_magang', $data);
    }

    public function update(Request $request, $id) {
        $data = [
            'tempat' => $request->tempat,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
        ];

        Magang::where ('id', $id)->update($data);
        return redirect('/mahasiswa/magang');
    }

    public function delete(Request $request, $id) {
        $data = [
            'tempat' => $request->tempat,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'id_user' => $request->id_user,
            'validasi' => $request->validasi,
        ];

        Magang::where ('id', $id)->delete($data);
        return redirect('/mahasiswa/magang');
    }

    public function magang() {
        $data = [
            'data' => User::where('role', 'mahasiswa')->where('id_dosen', Auth::User()->id)->get()
        ];
        return view('dospem/magang', $data);
    }

    public function detail($id) {
        $data = [
            'judul' => Magang::where('id_user', $id)->get(),
            'nama' => User::find($id)
        ];
        return view('dospem/detail_magang', $data);
    }

    public function validasi(Request $request, $id) {
        $data = [
            'validasi' => $request->validasi,
        ];

        Magang::where ('id', $id)->update($data);
        return back();
    }

    public function mahasiswa_magang() {
        $data = [
            'data' => User::where('role', 'mahasiswa')->get()
        ];
        return view('operator/magang', $data);
    }

    public function magang_detail($id) {
        $data = [
            'judul' => Magang::where('id_user', $id)->get(),
        ];

        return view('operator/detail', $data);
    }
}
