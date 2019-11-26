@extends('layouts.app')
@section('content')

<div class="container">
  <div class="card-header">
    Tambah Reward
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
      <form method="POST" action="{{ route('reward.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nama Reward</label>
              <input type="text" class="form-control" name="nama_reward"/>
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
          <a href="/reward" class="btn btn-danger">Batal</a>
      </form>
  </div>
</div>
@stop