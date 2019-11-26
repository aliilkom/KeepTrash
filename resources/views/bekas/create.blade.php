@extends('layouts.app')
@section('content')

<div class="container">
  <div class="card-header">
    Tambah Barang Bekas
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
      <form method="POST" action="{{ route('barangbekas.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nama Barang Bekas</label>
              <input type="text" class="form-control" name="nama_barang_bekas"/>
          </div>
          <div class="form-group">
              <label for="price">Berat</label>
              <input type="text" class="form-control" name="berat"/>
          </div>
          <div class="form-group">
              <label for="price">Besar Poin</label>
              <input type="text" class="form-control" name="poin"/>
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
          <a href="/barangbekas" class="btn btn-danger">Batal</a>
      </form>
  </div>
</div>
@stop
