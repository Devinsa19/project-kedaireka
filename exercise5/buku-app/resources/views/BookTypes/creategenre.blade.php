@extends('layouts.admin')

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row justify-content-md-center">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Tambah Genre</h4>
            <form action="{{ route("storegenre") }}" method="post">
              @csrf
              <div class="form-group">
                <label for="genre" class="form-label">Genre</label>
                  <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre">
              </div>
              <div class="form-group">
                <label for="kode_genre" class="form-label">Kode Genre</label>
                    <input type="text" class="form-control" id="kode_genre" name="kode_genre" placeholder="Kode genre">
              </div>
              
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="/book-types" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection