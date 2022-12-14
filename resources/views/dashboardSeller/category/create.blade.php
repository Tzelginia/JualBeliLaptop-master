@extends('dashboardSeller.layouts.main')
@section('content')
   
  <div class="col-lg-4 mx-5 mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Kategori</h1>
      </div>
      <form method="post" action="/sellerCategory" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
              @error('name')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
@endsection