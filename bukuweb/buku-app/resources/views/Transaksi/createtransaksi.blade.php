@extends('layouts.admin')

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row justify-content-md-center">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Tambah Transaksi</h4>
            <form action="{{ route("storetransaksi") }}" method="post">
              @csrf
              <div class="form-group">
                <label for="no_faktur" class="form-label">No Faktur</label>
                  <input type="number" class="form-control" id="no_faktur" name="no_faktur" placeholder="No Faktur">
              </div>
              <div class="form-group">
                <label for="books">Judul Buku</label>
                    <select class="custom-select d-block w-100 form-control" id="books" name="books_id">
                        @foreach($books as $book)
                        <option value="{{ $book->id }}"> {{ $book->judul_buku }} </option>
                        @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label for="jumlah" class="form-label">Jumlah Buku</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Buku">
              </div>
              <div class="form-group">
                <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="/transaksi" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection