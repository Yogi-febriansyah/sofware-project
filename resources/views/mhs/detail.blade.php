@extends('layout.template')
@section('container')

<!--  Row 1 -->
  <a href="/mahasiswa/judul" class="btn btn-dark m-1 mb-2">Kembali</a>
<div class="container-fluid">
    <div class="card">
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Detail Judul Skripsi</h5>
        <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                
                </thead>
                <tbody>
                <tr>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Judul</h6>
                        <span class="fw-normal">{{ $judul->judul }}</span>                          
                    </td>
                </tr>
                <tr>
                    <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Catatan Dosen</h6>
                    <span class="fw-normal">{{ $judul->catatan ?? 'BELUM ADA CATATAN DARI DOSEN' }}</span>                          
                    </td>
                </tr>                     
                                    
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

@endsection