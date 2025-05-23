@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
          <a href="/dospem/data" class="btn btn-dark mb-2">Kembali</a>
            <div class="card">
              <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">Judul Skripsi {{ $nama->name }}</h5>
                  <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                      <thead class="text-dark fs-4">
                        <tr>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Judul</h6>
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
                        </tr> 
                        @endforeach         
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>

@endsection