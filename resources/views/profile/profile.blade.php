@extends('layouts.dashboard_layout')
@section('section')
<!--Begin::Section-->
<h3 class="m-subheader__title ">Profil</h3>
<div class="m-content">
    <div class="row">
        <div class="col-lg-4">
            <div class="m-portlet m-portlet--full-height   m-portlet--rounded">
                <div class="m-portlet__body">
                    <div class="m-card-profile">
                        <div class="m-card-profile__title">
                        <span class="m-card-profile__name"> Pengepul</span>
                        </div>
                        
                        <div class="m-card-profile__pic">
                            <div class="m-card-profile__pic-wrapper">
                                <img src="assets/app/media/img/users/user4.jpg" alt="">
                            </div>
                        </div>
                        <div class="m-card-profile__details">
                            <span class="m-card-profile__name"> {{ Auth::user()->name }}</span>
                            <a href="" class="m-card-profile__email m-link"> {{ Auth::user()->email }}</a>
                        </div>
                    </div>
                   
                    <div class="m-portlet__body-separator"></div>
                    
                    <div class="m-widget1 m-widget1--paddingless">
                       
                        @if(Auth::user()->is_pengepul == "Pengepul")
                            <div class="row m-row--no-padding align-items-center">
                            
                                <div class="col">
                                    <h3 class="m-widget1__title">Rating</h3>
                                </div>
                                
                                <div class="col m--align-right">
                                    <h2 class="m-widget1__number m--font-brand">8/10</h2>
                                </div>
                              
                            </div>
                            @endif
                        
                       
                        @if(Auth::user()->is_pengepul == "Penyetor")
                            <div class="row m-row--no-padding align-items-center">
                         
                                <div class="col">
                                    <h3 class="m-widget1__title">Poin</h3>
                                </div>
                                <div class="col m--align-right">
                                    <h2 class="m-widget1__number m--font-brand">{{ Auth::user()->poin }}</h2>
                                </div>
                                
                            </div>
                            @endif
                       
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="m-portlet m-portlet--full-height m-portlet--tabs   m-portlet--rounded">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <div class="nav-link m-tabs__link active">
                                    <i class="flaticon-share m--hide"></i>
                                    Detail Profil
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<a href="editprofile" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
									<span>
											Perbarui Profil
									</span>
								</a>
							</li>
						</ul>
					</div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="m_user_profile_tab_1">
                        <form class="m-form m-form--fit m-form--label-align-right">
                            <div class="m-portlet__body">
                              
                                
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Nama</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Email</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Peran</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" value="{{ Auth::user()->is_pengepul }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Lokasi</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" value="{{ Auth::user()->lokasi }}">
                                          </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Nomer HP</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" value="{{ Auth::user()->no_hp }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Keterangan</label>
                                    <div class="col-7">
                                        <textarea class="form-control m-input" type="text" row='3'>Hello</textarea>
                                    </div>
                                </div>
                                
                        
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop