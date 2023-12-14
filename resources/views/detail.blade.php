@extends('main.main')
@section('container-card')
<div class="row row-cols-1 row-cols-md-2 g-4 d-flex justify-content-center">
    <div class="col">
      <div class="card border-4 border-dark">
        <div class="card-body bg-secondary-subtle">
            <div class="card-header bg-dark text-light">
                <h3 class="card-title text-center">Detail Mahasiswa</h3>
              </div>
          <h5 class="card-text mt-3">Nama : {{ $student->nama }}</h5>
          <h5 class="card-text">Nrp : {{ $student->nrp }}</h5>
          <h5 class="card-text">Jenis Kelamin : {{ $student->jenis_kelamin }}</h5>
          <h5 class="card-text">Jurusan : {{ $student->jurusan }}</h5>
          <div class="div d-flex justify-content-end mx-3">
            <a href="/edit/{{$student->nama}}" class="btn btn-warning col-2 mx-2">Edit</a>
            <a href="/detail/delete/{{$student->id}}" class="btn btn-danger col-2">Delete</a>
            <a href="/" class="btn btn-primary col-2 mx-2">Back</a>
          </div>
        </div>
      </div>
    </div>
    
@endsection