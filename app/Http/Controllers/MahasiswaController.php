<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function index() {
        $user = Auth::user(); // User yang login
        $dosen = User::find($user->id_dosen);
        return view('mhs/dashboard', compact('user', 'dosen'));
    }
}
