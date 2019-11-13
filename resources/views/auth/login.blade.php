
@extends('pages.auth')
@section('content')
<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Masuk
								</h3>
							</div>
<form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
@csrf
								<div class="form-group m-form__group">
                                
                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
								<div class="form-group m-form__group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--light">
											<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
											Ingat Aku
											<span></span>
										</label>
									</div>
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">
											Lupa Password ?
										</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
										Masuk
									</button>
								</div>
							</form>
                            <div class="m-login__account">
							<span class="m-login__account-msg">
								Belum Punya Akun ?
							</span>
							&nbsp;&nbsp;
							<a href="/register" class="m-link m-link--light m-login__account-link">
								Buat Akun
							</a>
						</div>
@endsection
