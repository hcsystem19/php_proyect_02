<?php namespace Views;

	$template = new Template();

	class Template{
		public function __construct(){
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Administracion de estudiantes | HCSystem</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/template/css/general.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#bs-example-navbar-collapsed-2">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Administracion de estudiantes</a>
				</div>
				<div class="collapsed navbar-collapsed" id="#bs-example-navbar-collapsed-2">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo URL; ?>">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
								<li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo URL; ?>secciones">Listado</a></li>
								<li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://codigofacilito.com">Prueba</a></li>
					</ul>
				</div>
			</div>
		</nav>
<?php
		}
		public function __destruct(){
?>
	<footer class="navbar-fixed-bottom">
		Todos los derechos reservados 2018
	</footer>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  	<script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
	</body>
</html>

<?php
		}
	}
?>