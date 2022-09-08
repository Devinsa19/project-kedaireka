@extends('layouts.admin')

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row justify-content-md-center">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Tambah Data Buku</h4>
            <form action="{{ route("store") }}" method="post">
              @csrf
              <div class="form-group">
                <label for="book_types">Genre</label>
                    <select class="custom-select d-block w-100 form-control" id="book_types" name="book_types_id">
                        @foreach($bookTypes as $bookType)
                        <option value="{{ $bookType->id }}"> {{ $bookType->genre }} </option>
                        @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label for="kode_buku" class="form-label">Kode Buku</label>
                  <input type="number" class="form-control" id="kode_buku" name="kode_buku" placeholder="Kode Buku">
              </div>
              <div class="form-group">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku">
              </div>
              <div class="form-group">
                <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang">
              </div>
              <div class="form-group">
                <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
              </div>
              <div class="form-group">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Tahun Terbit">
              </div>
              
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="/" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection