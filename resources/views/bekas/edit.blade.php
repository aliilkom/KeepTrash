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
      <form method="POST" action="{{ route('barangbekas.update', $barangbekas->id) }}">
      @method('PATCH')
        @csrf
          <div class="form-group">
              
              <label for="name">Nama Barang Bekas</label>
              <input type="text" class="form-control" name="nama_barang_bekas" value={{ $barangbekas->nama_barang_bekas }}>
          </div>
          <div class="form-group">
              <label for="price">Berat</label>
              <input type="text" class="form-control" name="berat" value={{ $barangbekas->berat }}>
          </div>
          <div class="form-group">
              <label for="price">Besar Poin</label>
              <input type="text" class="form-control" name="poin" value={{ $barangbekas->poin }}>
          </div>
          <div class="form-group">
              <label for="quantity">Keterangan</label>
              <input type="text" class="form-control" name="keterangan" value={{ $barangbekas->keterangan }}>
          </div>
          <button type="submit" class="btn btn-primary">Ubah</button>
          <a href="/barangbekas" class="btn btn-danger">Batal</a>
      </form>
  </div>
</div>
@stop
