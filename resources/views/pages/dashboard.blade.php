@extends('layouts.dashboard_layout')
@section('section')
<!--Begin::Section-->
<h3 class="m-subheader__title ">Dashboard</h3>
<div class="m-content">
	<div class="m-portlet">
	<div class="m-portlet__body  m-portlet__body--no-padding">
		<div class="row m-row--no-padding m-row--col-separator-xl">
			<div class="col-xl-4">
				<!--begin:: Widgets/Daily Sales-->
				<div class="m-widget14">
					<div class="m-widget14__header m--margin-bottom-30">
						<h3 class="m-widget14__title">
						Rating
						</h3>
					</div>
					<h2 class="m--font-brand">
						8/10
					</h2>
					
				</div>
				<!--end:: Widgets/Daily Sales-->
			</div>
			<div class="col-xl-4">
				<!--begin:: Widgets/Revenue Change-->
				<div class="m-widget14">
					<div class="m-widget14__header">
						<h3 class="m-widget14__title">
							Info Barang Bekas
						</h3>
					</div>
					<div class="row  align-items-center">
						
						<div class="col">
							<div class="m-widget14__legends">
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-accent"></span>
									<span class="m-widget14__legend-text">
									100 Kg Barang 1
									</span>
								</div>
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-warning"></span>
									<span class="m-widget14__legend-text">
									150 Kg Barang 2
									</span>
								</div>
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-brand"></span>
									<span class="m-widget14__legend-text">
									200 Kg Barang 3
									</span>
								</div>
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-danger"></span>
									<span class="m-widget14__legend-text">
									250 Kg Barang 4
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			<div class="col-xl-4">
				<!--begin:: Widgets/Revenue Change-->
				<div class="m-widget14">
					<div class="m-widget14__header">
						<h3 class="m-widget14__title">
							Log Transaksi
						</h3>
					</div>
					<div class="row  align-items-center">
						
						<div class="col">
							<div class="m-widget14__legends">
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-accent"></span>
									<span class="m-widget14__legend-text">
									Transaksi 1
									</span>
								</div>
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-warning"></span>
									<span class="m-widget14__legend-text">
									Transaksi 2
									</span>
								</div>
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-brand"></span>
									<span class="m-widget14__legend-text">
									Transaksi 3
									</span>
								</div>
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-danger"></span>
									<span class="m-widget14__legend-text">
									Transaksi 4
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end:: Widgets/Revenue Change-->
			</div>
		</div>
	</div>
	</div>
	<!--End::Section-->
	<!--Begin::Section-->
	<div class="row">
	<div class="col-xl-12">
		<!--begin:: Widgets/Product Sales-->
		<div class="m-portlet m-portlet--bordered-semi m-portlet--space m-portlet--full-height  m-portlet--rounded">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Transaksi Setor
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
          <th>Transaksi</th>
        </tr>
    </thead>
    <tbody align="center">
	@foreach($user as $user)
        <tr>
			<td>{{$user->name}}</td>
            <td>{{$user->poin}}</td>
            <td></td>
            <td><a href="{{ route('transaksi.index')}}" class="btn btn-info" type="submit">Setor</a></td>
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