@extends('layouts.app')
@section('content')

<div class="container">
  <div class="card-header">
    Tambah Barang
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="POST" action="{{ route('tukarpoin.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nama Barang</label>
              <input type="text" class="form-control" name="nama_barang"/>
          </div>
          <div class="form-group">
              <label for="price">Nilai Tukar</label>
              <input type="text" class="form-control" name="nilai_tukar"/>
          </div>
          <div class="form-group">
              <label for="price">Gambar</label>
              <input type="file" class="form-control" name="image"/>
          </div>
          <div class="form-group">
              <label for="quantity">Keterangan</label>
              <input type="text" class="form-control" name="keterangan"/>
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="/tukarpoin" class="btn btn-danger">Batal</a>
      </form>
  </div>
</div>
@stop