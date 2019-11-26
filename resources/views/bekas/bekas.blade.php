@extends('layouts.dashboard_layout')
@section('section')
<!--Begin::Section-->
<h3 class="m-subheader__title ">Barang Bekas</h3>
<div class="m-content">
	<div class="row">
		<div class="col-xl-12">
			<!--begin::Portlet-->
			<div class="m-portlet  m-portlet--rounded" id="m_portlet">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon">
								<i class="flaticon-map-location"></i>
							</span>
							<h3 class="m-portlet__head-text">
								Barang Bekas
							</h3>
						</div>
					</div>
					<div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<a href="barangbekas/create" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
									<span>
										<i class="la la-plus"></i>
										<span>
											Tambah Barang
										</span>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="m-portlet__body">
				<table class="table table-striped">
    <thead align="center">
        <tr>
          <th>Barang Bekas</th>
          <th>Berat</th>
          <th>Poin</th>
          <th>Keterangan</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody align="center">
        @foreach($barangbekas as $bb)
        <tr>
            <td>{{$bb->nama_barang_bekas}}</td>
            <td>{{$bb->berat}}</td>
            <td>{{$bb->poin}}</td>
            <td>{{$bb->keterangan}}</td>
			
            <td>
				<a href="{{ route('barangbekas.edit',$bb->id)}}" class="btn btn-primary">Edit</a>
			
				<form action="{{ route('barangbekas.destroy', $bb->id)}}" method="post" style="display: inline;">
					<button class="btn btn-danger" type="submit">Delete</button>
                  @csrf
                  @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
				</div>
				
			</div>
			<!--end::Portlet-->
		</div>
	</div>
	<!--End::Section-->

@stop