@extends('layout.template')
@section('container')

<!--  Row 1 -->
        <div class="container-fluid">
          <div class="card">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Catatan</h5>
                <div class="table-responsive">
                    <form method="POST" action="/dospem/catatan/{{ $revisi->id }}">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Catatan</label>
                            <textarea class="form-control" name="catatan" placeholder="catatan" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
              </div>
          </div>
        </div>

@endsection