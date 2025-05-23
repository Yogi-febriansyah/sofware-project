@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
          <div class="card">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Ubah Dokumen Skripsi</h5>
                <form method="POST" action="/mahasiswa/dokumenupdate/{{ $dok->id }}" enctype="multipart/form-data">
                @csrf
                  <input type="hidden" class="form-control"  value="{{ $dok->dokumen }}" name="oldFile">
                <div class="mb-3">
                  <label for="judul" class="form-label">Nama Dokumen</label>
                  <input type="text" class="form-control" id="judul"  value="{{ $dok->nama }}" name="nama">
                </div>
                <div class="mb-3">
                <label for="file" class="form-label">File</label>
                <input type="file" class="form-control" id="file" name="dokumen">
              </div>
                <a href="/mahasiswa/dokumen" class="btn btn-dark">Kembali</a>
                <button type="submit" class="btn btn-warning">Ubah</button>
            </form>
              </div>
          </div>
        </div>

@endsection