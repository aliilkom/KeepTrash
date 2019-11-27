@extends('layouts.dashboard_layout')
@section('section')
<!--Begin::Section-->
<h3 class="m-subheader__title ">Detail Pengepul</h3>
<div class="m-content">
	
	<div class="row">
	<div class="col-xl-12">
		<!--begin:: Widgets/Product Sales-->
		<div class="m-portlet m-portlet--bordered-semi m-portlet--space m-portlet--full-height  m-portlet--rounded">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Informasi Pengepul
						</h3>
					</div>
				</div>
				
			</div>
			<div class="m-portlet__body">
				<table class="table table-striped">
    <thead align="center">
	
        <tr>
          <th>Pengepul</th>
          <th>Lokasi</th>
          <th>No HP</th>
        </tr>
    </thead>
    <tbody align="center">
	@foreach($user as $user)
        <tr>
			<td>{{$user->name}}</td>
            <td>{{$user->lokasi}}</td>
            <td>{{$user->no_hp}}</td>
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
							Barang Yang Bisa Anda Disetorkan 
						</h3>
					</div>
				</div>
				
			</div>
			<div class="m-portlet__body">
				<table class="table table-striped">
    <thead align="center">
        <tr>
          <th>Nama Barang</th>
          <th>Besar Poin</th>
        </tr>
    </thead>
    <tbody align="center">
	@foreach($barang as $bg)
        <tr>
			<td>{{$bg->nama_barang_bekas}}</td>
            <td>{{$bg->poin}}</td>
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
							Barang Yang Bisa Anda Peroleh
						</h3>
					</div>
				</div>
				
			</div>
			<div class="m-portlet__body">
				<table class="table table-striped">
    <thead align="center">
        <tr>
          <th>Nama Barang</th>
          <th>Nilai Tukar</th>
        </tr>
    </thead>
    <tbody align="center">
	@foreach($poin as $poin)
        <tr>
			<td>{{$poin->nama_barang}}</td>
            <td>{{$poin->nilai_tukar}}</td>
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

</div>
@stop