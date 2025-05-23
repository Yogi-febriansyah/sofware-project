<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    public function index() {
        $data = [
            'doc' => Dokumen::where('id_user', Auth::id())->get()
        ];
        return view('mhs.dokumen', $data);
    }

    public function tambah(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' => 'required',
            'dokumen' => 'required|file|mimes:pdf,doc,docx',
        ]);

        // Upload file
        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $fileName = time().'_'.$file->getClientOriginalName(); // nama file unik
            $file->storeAs('dokumen', $fileName, 'public'); // simpan di storage/app/public/dokumen

            // Simpan ke database
            Dokumen::create([
                'nama' => $request->nama,
                'dokumen' => $fileName,
                'id_user' => $request->id_user
            ]);

            return redirect('/mahasiswa/dokumen');
        }
    }

    public function detail($id) {
        $data = [
            'dok' => Dokumen::where('id', $id)->first()
        ];
        return view('mhs/detail_dok', $data);
    }

    public function edit($id) {
        $data = [
            'dok' => Dokumen::where('id', $id)->first()
        ];
        return view('mhs/edit_dok', $data);
    }
    
    public function update(Request $request, $id)
    {
        $upload = Dokumen::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $data = [
            'nama' => $request->nama,
        ];

        if ($request->hasFile('dokumen')) {
            // Hapus file lama jika ada
           $dok = 'dokumen/'.$upload->dokumen;

            if (Storage::disk('public')->exists($dok)) {
                Storage::disk('public')->delete($dok);
            }

            // Upload file baru
            $file = $request->file('dokumen');
            $fileName = time().'_'.$file->getClientOriginalName();
            $filePath = $file->storeAs('dokumen', $fileName, 'public');

            $data = [
                'dokumen' => $fileName,
            ];
        }

        // Update data
        $upload->update($data);

        return redirect('/mahasiswa/dokumen');
    }

    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);

        // Hapus file dari storage
        $dok = 'dokumen/'.$dokumen->dokumen;
        if (Storage::disk('public')->exists($dok)) {
            Storage::disk('public')->delete($dok);
        }

        // Hapus data dari database
        $dokumen->delete();

        return redirect('/mahasiswa/dokumen');
    }

}
