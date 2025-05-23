@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
          <a href="/dospem/magang" class="btn btn-dark mb-2">Kembali</a>
            <div class="card">
              <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">Tempat Magang {{ $nama->name }}</h5>
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
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Action</h6>
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
                          <td class="border-bottom-0">
                              <div class="d-flex align-items-center gap-2">
                                @if($item->validasi != 'validasi')
                                <form action="/dospem/validasi/{{$item->id}}" method="POST">
                                  @csrf
                                  <input type="hidden" name="validasi" value="validasi">
                                  <button type="submit" class="btn btn-outline-warning m-1">validasi</button>
                                </form>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Catatan Revisi Judul</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

@endsection