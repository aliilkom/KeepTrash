@extends('layouts.dashboard_layout')
@section('navbar1')
<div id="navbar" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item  m-menu__item--active">
											<a  href="/home" class="m-menu__link">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Dashboard
												</span>
											</a>
										</li>
										<li class="m-menu__item">
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
@section('home')
<!--Begin::Section-->
<div class="m-portlet">
									<div class="m-portlet__body  m-portlet__body--no-padding">
										<div class="row m-row--no-padding m-row--col-separator-xl">
											<div class="col-xl-4">
												<!--begin:: Widgets/Daily Sales-->
												<div class="m-widget14">
													<div class="m-widget14__header m--margin-bottom-30">
														<h3 class="m-widget14__title">
															Daily Sales
														</h3>
														<span class="m-widget14__desc">
															Check out each collumn for more details
														</span>
													</div>
													<div class="m-widget14__chart" style="height:120px;">
														<canvas  id="m_chart_daily_sales"></canvas>
													</div>
												</div>
												<!--end:: Widgets/Daily Sales-->
											</div>
											<div class="col-xl-4">
												<!--begin:: Widgets/Profit Share-->
												<div class="m-widget14">
													<div class="m-widget14__header">
														<h3 class="m-widget14__title">
															Profit Share
														</h3>
														<span class="m-widget14__desc">
															Profit Share between customers
														</span>
													</div>
													<div class="row  align-items-center">
														<div class="col">
															<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
																<div class="m-widget14__stat">
																	45
																</div>
															</div>
														</div>
														<div class="col">
															<div class="m-widget14__legends">
																<div class="m-widget14__legend">
																	<span class="m-widget14__legend-bullet m--bg-accent"></span>
																	<span class="m-widget14__legend-text">
																		37% Sport Tickets
																	</span>
																</div>
																<div class="m-widget14__legend">
																	<span class="m-widget14__legend-bullet m--bg-warning"></span>
																	<span class="m-widget14__legend-text">
																		47% Business Events
																	</span>
																</div>
																<div class="m-widget14__legend">
																	<span class="m-widget14__legend-bullet m--bg-brand"></span>
																	<span class="m-widget14__legend-text">
																		19% Others
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--end:: Widgets/Profit Share-->
											</div>
											<div class="col-xl-4">
												<!--begin:: Widgets/Revenue Change-->
												<div class="m-widget14">
													<div class="m-widget14__header">
														<h3 class="m-widget14__title">
															Revenue Change
														</h3>
														<span class="m-widget14__desc">
															Revenue change breakdown by cities
														</span>
													</div>
													<div class="row  align-items-center">
														<div class="col">
															<div id="m_chart_revenue_change" class="m-widget14__chart1" style="height: 180px"></div>
														</div>
														<div class="col">
															<div class="m-widget14__legends">
																<div class="m-widget14__legend">
																	<span class="m-widget14__legend-bullet m--bg-accent"></span>
																	<span class="m-widget14__legend-text">
																		+10% New York
																	</span>
																</div>
																<div class="m-widget14__legend">
																	<span class="m-widget14__legend-bullet m--bg-warning"></span>
																	<span class="m-widget14__legend-text">
																		-7% London
																	</span>
																</div>
																<div class="m-widget14__legend">
																	<span class="m-widget14__legend-bullet m--bg-brand"></span>
																	<span class="m-widget14__legend-text">
																		+20% California
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
															Product Sales
															<span class="m-portlet__head-desc">
																Total Sales By Products
															</span>
														</h3>
													</div>
												</div>
												<div class="m-portlet__head-tools">
													<ul class="m-portlet__nav">
														<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
															<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
																Filter
															</a>
															<div class="m-dropdown__wrapper">
																<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
																<div class="m-dropdown__inner">
																	<div class="m-dropdown__body">
																		<div class="m-dropdown__content">
																			<ul class="m-nav">
																				<li class="m-nav__item">
																					<a href="" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-share"></i>
																						<span class="m-nav__link-text">
																							Activity
																						</span>
																					</a>
																				</li>
																				<li class="m-nav__item">
																					<a href="" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-chat-1"></i>
																						<span class="m-nav__link-text">
																							Messages
																						</span>
																					</a>
																				</li>
																				<li class="m-nav__item">
																					<a href="" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-info"></i>
																						<span class="m-nav__link-text">
																							FAQ
																						</span>
																					</a>
																				</li>
																				<li class="m-nav__item">
																					<a href="" class="m-nav__link">
																						<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																						<span class="m-nav__link-text">
																							Support
																						</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="m-portlet__body">
												<div class="m-widget25">
													<span class="m-widget25__price m--font-brand">
														$237,650
													</span>
													<span class="m-widget25__desc">
														Total Revenue This Month
													</span>
													<div class="m-widget25--progress">
														<div class="m-widget25__progress">
															<span class="m-widget25__progress-number">
																63%
															</span>
															<div class="m--space-10"></div>
															<div class="progress m-progress--sm">
																<div class="progress-bar m--bg-danger" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<span class="m-widget25__progress-sub">
																Sales Growth
															</span>
														</div>
														<div class="m-widget25__progress">
															<span class="m-widget25__progress-number">
																39%
															</span>
															<div class="m--space-10"></div>
															<div class="progress m-progress--sm">
																<div class="progress-bar m--bg-accent" role="progressbar" style="width: 39%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<span class="m-widget25__progress-sub">
																Product Growth
															</span>
														</div>
														<div class="m-widget25__progress" >
															<span class="m-widget25__progress-number">
																54%
															</span>
															<div class="m--space-10"></div>
															<div class="progress m-progress--sm">
																<div class="progress-bar m--bg-warning" role="progressbar" style="width: 54%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<span class="m-widget25__progress-sub">
																Community Growth
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end:: Widgets/Product Sales-->
									</div>   
@stop