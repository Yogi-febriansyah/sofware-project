@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
          <div class="card">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Ubah Judul Skripsi</h5>
                <form method="POST" action="/mahasiswa/update/{{ $judul->id }}">
                @csrf
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul Skripsi</label>
                  <input type="text" class="form-control" id="judul" placeholder="Judul Skripsi" value="{{ $judul->judul }}" name="judul">
                </div>
                <a href="/mahasiswa/judul" class="btn btn-dark">Kembali</a>
                <button type="submit" class="btn btn-warning">Ubah</button>
            </form>
              </div>
          </div>
        </div>

@endsection