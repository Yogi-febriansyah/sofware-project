<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Dokumen;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index() {
        return view('operator/dashboard');
    }

    public function data() {
        $data = [
            'data' => User::where('role', 'mahasiswa')->get()
        ];
        return view('operator/mhs', $data);
    }

    public function judul($id) {
        $data = [
            'judul' => Judul::where('id_user', $id)->get(),
        ];

        return view('operator/judul', $data);
    }

    public function dokumen() {
        $data = [
            'data' => User::where('role', 'mahasiswa')->get()
        ];
        return view('operator/dokumen', $data);
    }

    public function data_dokumen($id) {
        $data = [
            'data' => Dokumen::where('id_user', $id)->get(),
        ];

        return view('operator/data_dokumen', $data);
    }
}
