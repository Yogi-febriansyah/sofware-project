@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
          <div class="card">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Ubah Judul Skripsi</h5>
                <form method="POST" action="/mahasiswa/updatemagang/{{ $ma->id }}">
                @csrf
                <div class="mb-3">
                  <label for="judul" class="form-label">Tempat</label>
                  <input type="text" class="form-control" id="tempat" value="{{ $ma->tempat }}" name="tempat">
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" value="{{ $ma->alamat }}" name="alamat">
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Kontak</label>
                  <input type="number" class="form-control" id="kontak" value="{{ $ma->kontak }}" name="kontak">
                </div>
                <a href="/mahasiswa/magang" class="btn btn-dark">Tutup</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
              </div>
          </div>
        </div>

@endsection