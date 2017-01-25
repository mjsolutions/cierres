<!DOCTYPE html>
<html lang="es">
<head>
	<title>Cierres el Cubano | @yield('title','Inicio')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
</head>
<body>
	<header>
		@yield('nav')
	</header>
	<main>
		<section>
			@include('flash::message')
			@yield('content')
		</section>
	</main>
	<footer class="page-footer blue darken-1">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Cierres El Cubano</h5>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col l6">
						Todos los derechos reservados.	    			
					</div>
					<div class="col l6 right-align">
						© {!! date('Y') !!}
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav({
				 edge: 'right', // Choose the horizontal origin
				 closeOnClick: true
				});
			if($('#flash-overlay-modal')[0]){
				$('#flash-overlay-modal').openModal();   
			}
			$('.modal-trigger').leanModal();
			$('select').material_select();
			$(".dropdown-button").dropdown(); //puede funcionar sin esta declaracion
			@yield('scripts')
		});
		@yield('functions')
	</script>
		@yield('scripts-2')
</body>
</html>