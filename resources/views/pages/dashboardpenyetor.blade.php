@extends('layouts.dashboard_layout')
@section('section')
<!--Begin::Section-->
<h3 class="m-subheader__title ">Detail Pengepul</h3>
<div class="m-content">
	<div class="m-portlet">
	<div class="m-portlet__body  m-portlet__body--no-padding">
		<div class="row m-row--no-padding m-row--col-separator-xl">
			<div class="col-xl-4">
				<!--begin:: Widgets/Daily Sales-->
				<div class="m-widget14">
					<div class="m-widget14__header m--margin-bottom-30">
						<h3 class="m-widget14__title">
						Poin
						</h3>
					</div>
					<div class="m-widget25">
					<span class="m-widget25__price m--font-brand">
					{{ Auth::user()->poin }}
					</span>
					
					</div>
				</div>
				<!--end:: Widgets/Daily Sales-->
			</div>
			<div class="col-xl-4">
				<!--begin:: Widgets/Daily Sales-->
				<div class="m-widget14">
					<div class="m-widget14__header m--margin-bottom-30">
						<h3 class="m-widget14__title">
						Reward
						</h3>
					</div>
					<div class="m-widget25">
					<span class="m-widget25__price m--font-danger">
						Reward 1
					</span>
					
					</div>
				</div>
				<!--end:: Widgets/Daily Sales-->
			</div>
			<div class="col-xl-4">
				<!--begin:: Widgets/Revenue Change-->
				<div class="m-widget14">
					<div class="m-widget14__header">
						<h3 class="m-widget14__title">
							Log Setor
						</h3>
					</div>
					<div class="row  align-items-center">
						
						<div class="col">
							<div class="m-widget14__legends">
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-accent"></span>
									<span class="m-widget14__legend-text">
										Setor 1
									</span>
								</div>
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-warning"></span>
									<span class="m-widget14__legend-text">
										Setor 2
									</span>
								</div>
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-brand"></span>
									<span class="m-widget14__legend-text">
										Setor 3
									</span>
								</div>
								<div class="m-widget14__legend">
									<span class="m-widget14__legend-bullet m--bg-danger"></span>
									<span class="m-widget14__legend-text">
										Setor 4
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
							Daftar Pengepul
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
          <th>Informasi</th>
        </tr>
    </thead>
    <tbody align="center">
        @foreach($user as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->lokasi}}</td>
            <td>{{$user->no_hp}}</td>
            <td><a href="{{ route('detailpengepul.index')}}" class="btn btn-info" type="submit">Detail</a></td>
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