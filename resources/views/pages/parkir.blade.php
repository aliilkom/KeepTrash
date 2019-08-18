@extends('layouts.dashboard_layout')
@section('section')
<!--Begin::Section-->
<h3 class="m-subheader__title ">Parkir</h3>
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
								Parkir
							</h3>
						</div>
					</div>
					<div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
									<span>
										<i class="la la-plus"></i>
										<span>
											Add Event
										</span>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="m-portlet__body">
					<!--begin: Datatable -->
					<div class="m_datatable" id="m_datatable_latest_orders"></div>
					<!--end: Datatable -->
				</div>
			</div>
			<!--end::Portlet-->
		</div>
	</div>
	<!--End::Section-->
</ class="m-content">
@stop