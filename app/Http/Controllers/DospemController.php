<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DospemController extends Controller
{
    public function index() {
        return view('dospem/dashboard');
    }

    public function judul() {
        $data = [
            'data' => User::where('role', 'mahasiswa')->where('id_dosen', Auth::User()->id)->get()
        ];
        return view('dospem/judul', $data);
    }

    public function detail($id) {
        $data = [
            'judul' => Judul::where('id_user', $id)->get(),
            'nama' => User::find($id)
        ];
        return view('dospem/detail_judul', $data);
    }

    public function update(Request $request, $id) {
        $data = [
            'status' => $request->status,
        ];

        Judul::where ('id', $id)->update($data);
        return back();
    }

    public function revisi($id) {
        $data = [
            'revisi' => Judul::find($id)
        ];

        return view('dospem/revisi', $data);
    }

    public function catatan(Request $request, $id) {
        $data = [
            'status' => $request->status,
            'catatan' => $request->catatan
        ];

        Judul::where ('id', $id)->update($data);
        return redirect('/dospem/judul');
    }

    public function data() {
        $data = [
            'data' => User::where('role', 'mahasiswa')->where('id_dosen', Auth::id())->get()
        ];

        return view('dospem/data_mhs', $data);
    }
    public function data_judul($id) {
        $data = [
            'judul' => Judul::where('id_user', $id)->where('status', 'terima')->get(),
            'nama' => User::find($id)
        ];

        return view('dospem/data_judul', $data);
    }
    public function dokumen() {
        $data = [
            'data' => User::where('role', 'mahasiswa')->where('id_dosen', Auth::User()->id)->get()
        ];
        return view('dospem/dokumen', $data);
    }

    public function detail_dokumen($id) {
        $data = [
            'data' => Dokumen::where('id_user', $id)->get(),
            'nama' => User::find($id)
        ];
        return view('dospem/detail_dokumen', $data);
    }

    public function kritik($id) {
        $data = [
            'revisi' => Dokumen::find($id)
        ];

        return view('dospem/catatan', $data);
    }

    public function catatan_dokumen(Request $request, $id) {
        $data = [
            'catatan' => $request->catatan
        ];

        Dokumen::where ('id', $id)->update($data);
        return redirect('/dospem/dokumen');
    }
}
