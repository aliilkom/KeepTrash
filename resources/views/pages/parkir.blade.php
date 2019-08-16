@extends('layouts.dashboard_layout')
@section('navbar2')
<div id="navbar" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item  ">
											<a  href="/home" class="m-menu__link">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Dashboard
												</span>
											</a>
										</li>
										<li class="m-menu__item m-menu__item--active">
											<a  href="/parkir" class="m-menu__link">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Parkir
												</span>
											</a>
										</li>
									</ul>
								</div>
                                
@stop
@section('parkir')
<!--Begin::Section-->
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
@stop