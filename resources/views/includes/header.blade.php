<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--hor-desktop m-container m-container--responsive m-container--xxl">
	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-header__wrapper">
		<!-- begin::Brand -->
		<div class="m-grid__item m-brand">
			<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
				<div class="m-stack__item m-stack__item--middle m-brand__logo">
					<a href="/home" class="m-brand__logo-wrapper">
						<img src="assets/app/media/img/logos/Icon_Keeptrash.png" style="width:90%">
					</a>
				</div>
				<div class="m-stack__item m-stack__item--middle m-brand__tools">
				<h4 class="font-weight-bold text-success">
						KeepTrash
					</h4>
				</div>
			</div>
		</div>
		<!-- end::Brand -->                                        					
		<!-- begin::Topbar -->
		<div class="m-grid__item m-grid__item--fluid m-header-head" id="m_header_nav">
			<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
				<div class="m-stack__item m-topbar__nav-wrapper">
					<ul class="m-topbar__nav m-nav m-nav--inline">
						
							
						<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
							<a href="#" class="m-nav__link m-dropdown__toggle">
								<span class="m-topbar__welcome m--hidden-tablet m--hidden-mobile">
								{{ Auth::user()->is_pengepul}}, &nbsp;
								</span>
								<span class="m-topbar__username m--hidden-tablet m--hidden-mobile m--padding-right-15">
									<span class="m-link">
									{{ Auth::user()->name }}
									</span>
								</span>
								<span class="m-topbar__userpic">
									<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
								</span>
							</a>
							<div class="m-dropdown__wrapper">
								<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
								<div class="m-dropdown__inner">
									<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
										<div class="m-card-user m-card-user--skin-dark">
											<div class="m-card-user__pic">
												<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
											</div>
											<div class="m-card-user__details">
												<span class="m-card-user__name m--font-weight-500">
												{{ Auth::user()->name }}
												</span>
												<a href="" class="m-card-user__email m--font-weight-300 m-link">
												{{ Auth::user()->email }}
												</a>
											</div>
										</div>
									</div>
									<div class="m-dropdown__body">
										<div class="m-dropdown__content">
											<ul class="m-nav m-nav--skin-light">
												<li class="m-nav__section m--hide">
													<span class="m-nav__section-text">
														Section
													</span>
												</li>
												<li class="m-nav__item">
													<a href="/profile" class="m-nav__link">
														<i class="m-nav__link-icon flaticon-profile-1"></i>
														<span class="m-nav__link-title">
															<span class="m-nav__link-wrap">
																<span class="m-nav__link-text">
																	Profil
																</span>
																
															</span>
														</span>
													</a>
												</li>
												
												<li class="m-nav__separator m-nav__separator--fit"></li>
												<li class="m-nav__item">
												<a class="m-nav__link" href="{{ route('logout') }}"
                                       				onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
														<i class="m-nav__link-icon flaticon-share"></i>
														<span class="m-nav__link-text text-danger font-weight-bold">
															Keluar
														</span>
														<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       						 @csrf
                                    					</form>
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
		</div>
		<!-- end::Topbar -->
	</div>
</div>