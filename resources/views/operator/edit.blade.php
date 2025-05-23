@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
          <div class="card">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Edit User</h5>
                <form method="POST" action="/operator/edituser/{{ $ma->id }}">
                    @csrf
                    <div class="mb-3">
                    <label for="judul" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="tempat" value="{{ $ma->name }}" name="name">
                    </div>
                    <div class="mb-3">
                    <label for="judul" class="form-label">Email</label>
                    <input type="text" class="form-control" id="alamat" value="{{ $ma->email }}" name="email">
                    </div>
                    <div class="mb-3">
                    <label for="judul" class="form-label">NIM</label>
                    <input type="number" class="form-control" id="knuntak" value="{{ $ma->nim }}" name="nim">
                    </div>
                    <div class="mb-3">
                    <label for="judul" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="kkk" value="{{ $ma->jabatan }}" name="jabatan">
                    </div>
                    <div class="mb-3">
                    <label for="judul" class="form-label">Role</label>
                    <select class="form-select" name="role" aria-label="Default select example">
                        <option value="{{ $ma->role }}">{{ $ma->role }}</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dospem">Dosen pembimbing</option>
                        <option value="operator">Admin</option>
                    </select>
                    </div>
                    <a href="/operator/dataAkun" class="btn btn-dark">Tutup</a>
                    <button type="submit" class="btn btn-warning">Ubah</button>
                </form>
              </div>
          </div>
        </div>

@endsection