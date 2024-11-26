@extends('layouts/header')

@section('title','Авторизация')
@section('content')


@if ($errors->any())
	<div class="backgrond_error">
		<!-- <div class="mess_error"> -->
			<!-- <ul> -->
				@foreach ($errors->all() as $error)
					<div class="one_error">
						{{$error}}
					</div>
					<!-- <li>{{ $error }}</li> -->
				@endforeach
			<!-- </ul> -->
		<!-- </div> -->
	</div>
@endif


<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="POST">
			@csrf
			<h1>Создание аккаунта</h1>
            <br>
			<input name="name" type="text" placeholder="Имя" />
			<input name="email" type="email" placeholder="Почта" />
			<input name="password" type="password" placeholder="Пароль" />
			<button>Зарегистрироваться</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{route('sign_in')}}" method="POST">
			@csrf
			<h1>Войти</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
            <br>
			<input name="email" type="email" placeholder="Почта" />
			<input name="password" type="password" placeholder="Пароль" />
			<!-- <a href="#">Забыли пароль</a> -->
			<button>Войти</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>С возвращением</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Войти</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Приветствуем!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Зарегистрироваться</button>
			</div>
		</div>
	</div>
</div>

<!-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> -->

@endsection