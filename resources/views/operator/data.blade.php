@extends('layout.template')
@section('container')

<button type="button" class="btn btn-primary m-1 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data Mahasiswa</button>
<button type="button" class="btn btn-primary m-1 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">Tambah Data Dosen</button>
        <!--  Row 1 -->
        <div class="container-fluid">
          <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Data Mahasiswa</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Lengkap</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">NIM</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($data_mhs as $mhs)
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{$mhs->name}}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{$mhs->nim}}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{$mhs->email}}</p>
                        </td>
                        
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <a href="/operator/edit/{{$mhs->id}}" class="btn btn-outline-warning m-1">Edit</a>
                                <a href="/operator/hapus/{{$mhs->id}}" class="btn btn-outline-danger m-1">Hapus</a>
                            </div>
                        </td>
                      </tr>
                      @endforeach          
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
          <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Data Dosen</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Lengkap</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">NIM</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($data_dosen as $dosen)
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $dosen->name }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $dosen->nim }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $dosen->email }}</p>
                        </td>
                        
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <a href="/operator/edit/{{$dosen->id}}" class="btn btn-outline-warning m-1">Edit</a>
                                <a href="/operator/hapus/{{$dosen->id}}" class="btn btn-outline-danger m-1">Hapus</a>
                            </div>
                        </td>
                      </tr>  
                      @endforeach                   
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/operator/tambahdospem">
                @csrf
                <div class="mb-3">
                  <label for="judul" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="judul" placeholder="Nama Langkap" name="name" required>
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">NIM</label>
                  <input type="number" class="form-control" id="judul" placeholder="NIM" name="nim" required>
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Email</label>
                  <input type="emial" class="form-control" id="judul" placeholder="Email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Jabatan</label>
                  <input type="text" class="form-control" id="judul" placeholder="Jabatan" name="jabatan" required>
                </div>
                <div class="mb-3">
                  
                  <input type="hidden" class="form-control" id="jul" placeholder="Jabatan" name="id_dosen" value="1" required>
                </div>
                <div class="mb-3">
                  
                  <input type="hidden" class="form-control" id="jul" placeholder="Jabatan" name="role" value="dospem" required>
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Password</label>
                  <input type="password" class="form-control" id="judul" placeholder="Password" name="password" required>
                </div>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/operator/tambahmhs">
                @csrf
                <div class="mb-3">
                  <label for="judul" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="judul" placeholder="Nama Lengkap" name="name" required>
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">NIM</label>
                  <input type="number" class="form-control" id="judul" placeholder="NIM" name="nim" required>
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Email</label>
                  <input type="emial" class="form-control" id="judul" placeholder="Email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Password</label>
                  <input type="password" class="form-control" id="judul" placeholder="Password" name="password" required>
                </div>
                <div class="mb-3">
                  <input type="hidden" class="form-control" id="judul" placeholder="Password" name="role" value="mahasiswa" required>
                  <input type="hidden" class="form-control" id="judul" placeholder="Password" name="jabatan" value="mahasiswa" required>
                </div>
                <div class="mb-3">
                  <input type="hidden" class="form-control" id="judul" name="id_dosen" value="{{ $dosen_id }}">
                </div>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
</div>

@endsection