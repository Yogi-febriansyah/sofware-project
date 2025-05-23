@extends('layout.template')
@section('container')

<!--  Row 1 -->
  <a href="/mahasiswa/dokumen" class="btn btn-dark m-1 mb-2">Kembali</a>
<div class="container-fluid">
    <div class="card">
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Detail Dokumen Skripsi</h5>
        <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                
                </thead>
                <tbody>
                <tr>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">Nama Dokumen</h6>
                        <span class="fw-normal">{{ $dok->nama }}</span>                          
                    </td>
                </tr>
                <tr>
                    <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-1">File</h6>
                        <a href="/storage/dokumen/{{ $dok->dokumen }}" target="_blank">{{ $dok->dokumen }}</a>                          
                    </td>
                </tr>
                <tr>
                    <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">Catatan Dosen Pembimbing</h6>
                    <span class="fw-normal">{{ $dok->catatan ?? 'BELUM ADA CATATAN DARI DOSEN' }}</span>                          
                    </td>
                </tr>                     
                                    
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

@endsection