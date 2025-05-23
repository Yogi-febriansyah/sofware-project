@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
          <a href="/operator/datamhs" class="btn btn-dark mb-2">Kembali</a>
            <div class="card">
              <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">Judul Skripsi</h5>
                  <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Nama</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Status</h6>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($judul as $item)
                        <tr>
                          <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $item->judul }}</p>
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                              @if($item->status == 'belum')
                              <span class="badge bg-warning rounded-3 fw-semibold">Belum Disetujui</span>
                              @elseif($item->status == 'terima')
                              <span class="badge bg-success rounded-3 fw-semibold">Disetujui</span>
                              @elseif($item->status == 'tolak')
                              <span class="badge bg-danger rounded-3 fw-semibold">Ditolak</span>
                              @elseif($item->status == 'revisi')
                              <span class="badge bg-warning rounded-3 fw-semibold">Direvisi</span>
                              @endif
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

@endsection