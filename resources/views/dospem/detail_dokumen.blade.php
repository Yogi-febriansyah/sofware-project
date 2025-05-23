@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
            <div class="card">
              <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">Dokumen Skripsi {{$nama->name}}</h5>
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
                            <a href="/storage/dokumen/{{ $jud->dokumen }}" target="_blank">
                                <p class="mb-0 fw-normal">{{ $jud->nama }}</p>
                            </a>
                          </td>
                          <td class="border-bottom-0">
                              <div class="d-flex align-items-center gap-2">
                                  <a href="/dospem/catatan/{{$jud->id}}" class="btn btn-outline-primary m-1">Catatan</a>
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