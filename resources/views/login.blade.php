<!DOCTYPE html>
<html lang="es">
<head>
	<title>Cierres el cubano | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
	<style type="text/css">
		body {
			position: relative;
			background: url({{ asset('images/slide1.jpg') }})no-repeat center center fixed;
			background-size: cover;
		}

		body:before {
			content: " ";
			display: block;
			position: absolute; /* could also be absolute */ 
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			z-index: 0;
			background: rgba(0,0,0,0.4);
		}

		main section {
			position: relative;
			width: 100%;
			height: 100vh;
		}
		form {
			padding-top: 40px!important;
			padding-left: 0px!important;
			padding-right: 0px!important;
			margin-top: 8%;
			background: #FFF;
		}
		input[type=submit]{
			display: block;
			width: 100%;
		}
		form 
		/* label color */
		.input-field label {
			color: #01376b;
		}
		/* label focus color */
		.input-field input[type=password]:focus + label, 
		.input-field input[type=email]:focus + label,
		#textarea1:focus + label {
			color: #1467B7;
		}
		/* label underline focus color */
		.input-field input[type=password]:focus,
		.input-field input[type=email]:focus,
		#textarea1:focus {
			border-bottom: 1px solid #1467B7;
			box-shadow: 0 1px 0 0 #1467B7;
		}
		/* valid color */
		.input-field input[type=password].valid,
		.input-field input[type=email].valid,
		#textarea1.valid {
			border-bottom: 1px solid #1467B7;
			box-shadow: 0 1px 0 0 #1467B7;
		}
		/* invalid color */
		.input-field input[type=password].invalid,
		.input-field input[type=email].invalid,
		#textarea1.invalid {
			border-bottom: 1px solid #FF4000;
			box-shadow: 0 1px 0 0 #FF4000;
		}
		/* icon prefix focus color */
		.input-field .prefix.active {
			color: #1467B7;
		}
		.input-field .prefix {
			color: #01376b;
		}
	</style>
</head>
<body>
	<main>
		<section>
			@include('flash::message')

			<div class="row">
				{!! Form::open(['route' => 'login', 'method' => 'POST', 'class' => 'col s12 m10 l4 offset-l4 z-depth-2']) !!}
				<div class="row">
					<div class="col s8 offset-s2">
						<img src="{{ asset('images/Logo.svg') }}" alt="" id="foto" class="responsive-img">
					</div>
					<div class="col s5 offset-s4 divider mt-10"></div>
				</div>
				<div class="row">
					<div class="input-field col s10 offset-s1">
						<i class="material-icons prefix">account_circle</i>
						{!! Form::email('email', null, ['class'=>'validate','required']) !!}
						{!! Form::label('email','Email') !!}
					</div>					
				</div>
				<div class="row mb-30">
					<div class="input-field col s10 offset-s1">
						<i class="material-icons prefix">vpn_key</i>
						{!! Form::password('password', ['class'=>'validate', 'required']) !!}
						{!! Form::label('password','Contraseña') !!}
					</div>
				</div>
				<div class="row m-0">
					<div class="col s6 center-align mt-15">
						<a class="disabled" href="">Olvide mi contraseña</a>
					</div>
					<div class="col s6 nopadding">
						{{-- <button type="submit" class="btn btn-large waves-effect waves-light" style="display: block">Login</button> --}}
						{!! Form::submit('Login', ['class' => 'btn btn-large blue darken-3']) !!}						
						{{-- {!! Form::reset('Login', ['class' => 'btn waves-effect waves-light', 'style' => 'display:block']) !!} --}}
					</div>
				</div>
				{!! Form::close()!!}

			</div>


		</section>
	</main>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			@if($errors)
				@foreach($errors->all() as $error)
					Materialize.toast('{{ $error }}', 4000);
				@endforeach
			@endif
		});
	</script>
</body>
</html>