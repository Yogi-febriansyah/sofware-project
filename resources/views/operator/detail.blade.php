@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
          <a href="/operator/magang" class="btn btn-dark mb-2">Kembali</a>
            <div class="card">
              <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">Tempat Magang</h5>
                  <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tempat</h6>
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
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($judul as $item)
                        <tr>
                          <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $item->tempat }}</p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $item->alamat }}</p>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $item->kontak }}</p>
                          </td>
                          <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                              @if($item->validasi == 'validasi')
                              <span class="badge bg-success rounded-3 fw-semibold">Divalidasi</span>
                              @else
                              <span class="badge bg-warning rounded-3 fw-semibold">Belum Divalidasi</span>
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