<?php

namespace App\Http\Controllers;

use App\Models\Judul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JudulController extends Controller
{
    public function index() {
        $data = [
            'judul' => Judul::where('id_user', Auth::id())->get()
        ];
        return view('mhs/judul', $data);
    }

    public function tambah(Request $request) {
        $item = [
            'judul' => $request->judul,
            'id_user' => $request->id_user,
        ];

        Judul::create($item);
        return redirect('/mahasiswa/judul');
    }

    public function edit($id) {
        $data = [
            'judul' => Judul::where('id', $id)->first()
        ];
        return view('mhs/edit', $data);
    }

    public function update(Request $request, $id) {
        $data = [
            'judul' => $request->judul,
        ];

        Judul::where ('id', $id)->update($data);
        return redirect('/mahasiswa/judul');
    }

    public function detail($id) {
        $data = [
            'judul' => Judul::where('id', $id)->first()
        ];
        return view('mhs/detail', $data);
    }

    public function delete(Request $request, $id) {
        $data = [
            'judul' => $request->judul,
            'catatan' => $request->catatan,
            'status' => $request->status,
            'id_user' => $request->id_user,
        ];

        Judul::where ('id', $id)->delete($data);
        return redirect('/mahasiswa/judul');
    }
}
