@extends('layout.template')
@section('container')

<button type="button" class="btn btn-primary m-1 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Dokumen</button>
        <!--  Row 1 -->
        <div class="container-fluid">
          <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Dokumen Skripsi</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Dokumen</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($doc as $dok)
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration}}</h6></td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ $dok->nama }}</p>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <a href="/mahasiswa/dokumenedit/{{ $dok->id }}" class="btn btn-outline-warning m-1">Edit</a>
                                <a href="/mahasiswa/dokumendetail/{{ $dok->id }}" class="btn btn-outline-info m-1">Detail</a>
                                <a href="/mahasiswa/dokumenhapus/{{ $dok->id }}" class="btn btn-outline-danger m-1">Hapus</a>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Dokumen</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="POST" action="/mahasiswa/dokumentambah" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
                <input type="text" class="form-control" id="nama_dokumen" placeholder="Nama Dokumen" name="nama">
              </div>
              <div class="mb-3">
                <label for="file" class="form-label">File</label>
                <input type="file" class="form-control" id="file" name="dokumen">
              </div>
                <input type="hidden" class="form-control" name="id_user" value="{{ Auth::User()->id }}">
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