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
      <form method="POST" action="{{ route('reward.update', $reward->id) }}">
      @method('PATCH')
        @csrf
          <div class="form-group">
              
              <label for="name">Nama Barang Bekas</label>
              <input type="text" class="form-control" name="nama_reward" value={{ $reward->nama_reward }}>
          </div>
          <div class="form-group">
              <label for="quantity">Keterangan</label>
              <input type="text" class="form-control" name="keterangan" value={{ $reward->keterangan }}>
          </div>
          <button type="submit" class="btn btn-primary">Ubah</button>
          <a href="/reward" class="btn btn-danger">Batal</a>
      </form>
  </div>
</div>
@stop
