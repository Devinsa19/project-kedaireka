@extends('layouts.admin')

@push('style')
<link rel="stylesheet" href="{{ asset('assets/../../css/vertical-layout-light/style.css') }}">

@endpush

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body py-3 d-flex justify-content-between align-items-center">
        <h4 class="card-title float-start">Tabel Genre</h4>
        <a href="{{ route("creategenre") }}" class="btn btn-primary fa-pull-right">Tambah Genre</a>
    </div>
    <div class="card-body ">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>No. </th>
                <th>Genre</th> 
                <th>Kode Genre</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookTypes as $no => $type)
                    <tr>
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $type->genre }}</td>
                        <td>{{ $type->kode_genre }}</td>
                        <td class="d-flex">
                                <a href="{{ route("editgenre", $type->id) }}" class="btn btn-outline-warning">Edit</a>
                                <form action="{{ route("destroygenre", $type->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
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

@push('script')
  <script src="{{ asset('assets/../../vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/../../js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/../../js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/../../js/template.js') }}"></script>
  <script src="{{ asset('assets/../../js/settings.js') }}"></script>
  <script src="{{ asset('assets/../../js/todolist.js') }}"></script>
    
@endpush