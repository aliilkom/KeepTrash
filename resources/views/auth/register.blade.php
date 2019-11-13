@extends('pages.auth')

@section('content')
<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Buat Akun
								</h3>
								
							</div>
							<form class="m-login__form m-form" method="POST" action="{{ route('register') }}">
                            
                            @csrf
								<div class="form-group m-form__group">
                                <input id="name" placeholder="Nama" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
								</div>
								<div class="form-group m-form__group">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
								</div>
								<div class="form-group m-form__group">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
								</div>
								<div class="form-group m-form__group">
                                <input id="password-confirm" placeholder="Ulangi Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</div>
								
								<div class="m-login__form-action">
									<button type="submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Buat Akun
									</button>
									&nbsp;&nbsp;
									<a href="/login" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">
										Kembali
									</a>
								</div>
							</form>
						</div>


@endsection
