@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
            <a href="/operator/dokumenmhs" class="btn btn-dark mb-2">Kembali</a>
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
                            <h6 class="fw-semibold mb-0">Dokumen</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Action</h6>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $jud)
                        <tr>
                          <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6></td>
                          <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $jud->nama }}</p>
                          </td>
                          <td class="border-bottom-0">
                              <div class="d-flex align-items-center gap-2">
                                <a href="/storage/dokumen/{{$jud->dokumen}}">
                                    <span class="badge bg-primary rounded-3 fw-semibold">Download</span>
                                </a>
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