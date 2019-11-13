<style>


.glow {
  font-size: 40px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #000, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #000, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
@extends('pages.auth')
@section('content')
						
<h3 class="text-center text-light">
	Kebaikan pada alam bisa dilakukan dengan hal yang paling sederhana, jangan buang sampah sembarangan! <br><br> Tabung sampah anda melalui
</h3>
<br>
<h3 class="glow text-center text-success font-weight-bold">
	KeepTrash
</h3>	
<form class="m-login__form m-form">

<div class="m-login__form-action">
									<a href="/login" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Masuk
									</a>
									&nbsp;&nbsp;&nbsp;
									<a href="/register" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Buat Akun
									</a>
								</div>	
</form>	
@endsection
