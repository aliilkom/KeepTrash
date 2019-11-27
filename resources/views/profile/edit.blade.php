@extends('layouts.dashboard_layout')
@section('section')
<!--Begin::Section-->
<h3 class="m-subheader__title ">Perbarui Profil</h3>
<div class="m-content">
    <div class="row">
        
        <div class="col-lg-12">
            <div class="m-portlet m-portlet--full-height m-portlet--tabs   m-portlet--rounded">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <div class="nav-link m-tabs__link active">
                                    <i class="flaticon-share m--hide"></i>
                                    Perbarui Profil
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="m_user_profile_tab_1">
                    <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="">
                    @method('PATCH')
                    @csrf
                            <div class="m-portlet__body">
                              
                                
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Nama</label>
                                    <div class="col-7">
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Email</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" name="email" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Peran</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" value="Pengepul">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Lokasi</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" value="">
                                          </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Nomer HP</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Keterangan</label>
                                    <div class="col-7">
                                        <textarea class="form-control m-input" type="text" row='3'>Hello</textarea>
                                    </div>
                                </div>
                                
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-7">
                                            <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Perbarui</button>&nbsp;&nbsp;
                                            <a href="/profile" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Batal</a>
                                        </div>
                                    </div>
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