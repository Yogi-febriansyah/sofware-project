@extends('layout.template')
@section('container')
        <button type="button" class="btn btn-primary m-1 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
        <!--  Row 1 -->
        <div class="container-fluid">
          <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Pengajuan Tenpat Magang</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tempat Magang</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Alamat</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Kontak</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($magang as $sk)
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration}}</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $sk->tempat}}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $sk->alamat}}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $sk->kontak}}</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            @if($sk->validasi == 'validasi')
                            <span class="badge bg-success rounded-3 fw-semibold">Divalidasi</span>
                            @else
                            <span class="badge bg-warning rounded-3 fw-semibold">Belum Divalidasi</span>
                            @endif
                          </div>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <a href="/mahasiswa/editmagang/{{ $sk->id }}" class="btn btn-outline-warning m-1">Edit</a>
                                <a href="/mahasiswa/deletemagang/{{ $sk->id }}" class="btn btn-outline-danger m-1">Hapus</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Judul</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/mahasiswa/tambahmagang">
              @csrf
                <div class="mb-3">
                  <label for="judul" class="form-label">Tempat</label>
                  <input type="text" class="form-control" id="tempat" placeholder="Tempat" name="tempat">
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Kontak</label>
                  <input type="number" class="form-control" id="kontak" placeholder="Kontak" name="kontak">
                </div>
                  <input type="hidden" class="form-control" value="{{ Auth::User()->id }}" name="id_user">
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