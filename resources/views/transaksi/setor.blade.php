@extends('layouts.dashboard_layout')
@section('section')
<!--Begin::Section-->
<h3 class="m-subheader__title ">Transaksi Setor</h3>
<div class="m-content">
	
	<div class="row">
	<div class="col-xl-12">
		<!--begin:: Widgets/Product Sales-->
		<div class="m-portlet m-portlet--bordered-semi m-portlet--space m-portlet--full-height  m-portlet--rounded">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Informasi Penyetor
						</h3>
					</div>
				</div>
				
			</div>
			<div class="m-portlet__body">
				<table class="table table-striped">
    <thead align="center">
	
        <tr>
          <th>Penyetor</th>
          <th>Poin</th>
          <th>Reward</th>
        </tr>
    </thead>
    <tbody align="center">
	@foreach($user as $user)
        <tr>
			<td>{{$user->name}}</td>
            <td>{{$user->poin}}</td>
            <td></td>
        </tr>
		@endforeach
    </tbody>
  </table>
				</div>
				
			</div>
			</div>
		</div>
		<!--end:: Widgets/Product Sales-->
	</div>   

	<div class="row">
	<div class="col-xl-12">
		<!--begin:: Widgets/Product Sales-->
		<div class="m-portlet m-portlet--bordered-semi m-portlet--space m-portlet--full-height  m-portlet--rounded">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Input Setor 
						</h3>
					</div>
				</div>
				
			</div>
			<div class="m-portlet__body">
				
			<form method="POST" action="">
          <div class="form-group">
              @csrf
              <label for="name">Jenis Barang Yang Disetorkan</label>
              <input type="text" class="form-control" name="nama_reward"/>
          </div>
          <div class="form-group">
              <label for="price">Kuantitas</label>
              <input type="text" class="form-control" name="image"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Setor</button>
          <a href="/dashboard" class="btn btn-danger">Batal</a>
      </form>

				</div>
				
			</div>
			</div>
		</div>
		<!--end:: Widgets/Product Sales-->
	</div>   

	</div>   

</div>
@stop