@extends('main.main')

@section('container-card')
<div class="card-header text-light bg-dark fs-3 d-flex justify-content-center">
  Halaman Admin Student
</div>
<div class="container-card ">
<table class="table border-dark">
  <thead>
    <a href="/fromAdd" class="btn btn-primary my-2 ms-2"> Tambah Data</a>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Detail Button</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <th scope="row">{{ $no }}</th>
      <td>{{ $student->nama }}</td>
      <td>{{ $student->nrp }}</td>
      <td>{{ $student->jenis_kelamin }}</td>
      <td>{{ $student->jurusan }}</td>
      <td><a href="detail/{{$student->nama}}"><button class=" btn btn-primary" > detail </button></a></td>
    </tr>
    <?php $no ++?>
    @endforeach
  </tbody>
</table>
</div>
<div class="card-footer text-body-light bg-dark-subtle d-flex justify-content-center">
  copyright by Hisyam Setiawan
</div>

@endsection