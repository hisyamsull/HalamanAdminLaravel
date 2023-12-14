@extends('main.main')
@section('container-card')
<div class="container bg-secondary">
    <h1 class="d-flex justify-content-center">Halaman Input Data</h1>
    <a href="/" class="btn btn-dark col-2 mb-3">Back</a>
    <form action="/{{$student->id}}" method="post">
        @method('put')
        @csrf
        <div class="form-floating mb-3">
            <input name="nama" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{$student->nama}}">
            <label for="floatingInput">Nama Lengkap</label>
          </div>
          
        <div class="form-floating mb-3">
            <input name="nrp" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{$student->nrp}}">
            <label for="floatingInput">NRP</label>
          </div>
          
          <div class="form-floating mb-3">
            <select class="form-select" name="jenis_kelamin" id="floatingSelect" aria-label="Floating label select example">
              <option selected>{{$student->jenis_kelamin}}</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <label for="floatingSelect">Works with selects</label>
          </div>
        <div class="form-floating mb-3 ">
            <input type="text" name="jurusan" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{$student->jurusan}}">
            <label for="floatingInput">Jurusan</label>
          </div>
          <div class="div d-flex justify-content-end">
              <button type="submit" class="btn btn-dark col-2 mb-3">Edit Data</button>
            </div>
    </form>
</div>

@endsection