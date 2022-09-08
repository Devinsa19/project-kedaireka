@extends('layouts.admin')

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row justify-content-md-center">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Edit Data Buku</h4>
            <form action="{{ route("update", $book ->id) }}" method="post">
              @csrf
              <div class="form-group">
                <label for="book_types">Genre</label>
                    <select class="custom-select d-block w-100 form-control" id="book_types" name="book_types_id">
                      @foreach($bookTypes as $bookType)
                      <option value="{{ $bookType->id }}"{{ $bookType->id === $book->book_types_id ? "selected" : "" }}>{{ $bookType->genre }}</option>
                      @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label for="kode_buku" class="form-label">Kode Buku</label>
                    <input type="number" class="form-control" id="kode_buku" name="kode_buku" value="{{ $book->kode_buku }}">
              </div>
              <div class="form-group">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ $book->judul_buku }}">
              </div>
              <div class="form-group">
                <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $book->pengarang }}">
              </div>
              <div class="form-group">
                <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $book->penerbit }}">
              </div>
              <div class="form-group">
                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $book->tahun_terbit }}">
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