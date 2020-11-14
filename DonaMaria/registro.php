<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuario</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
	<form class="formulario" method="post" action="pgina01.php">
		<h1>Registrate</h1>	
		<div class="contenedor">
			<div class="input-contenedor">
				<i class="fas fa-user icon"></i>
				<input type="text" name="nombre">
			</div>

			<div class="input-contenedor">
				<i class="fas fa-key icon"></i>
				<input type="password" name="pass1">
			</div>

			<div class="input-contenedor">
				<i class="fas fa-key icon"></i>
				<input type="password" name="pass2">
			</div>
			<input type="submit" class="button" name="Registrar" value="Registrate">
			<p>Al registrate, aceptas nuestras condiciones de uso y politicas de privacidad.</p>
			<p>¿Ya tienes una cuenta? <a class="link" href="#">Iniciar Sesion</a></p>
		</div>
	</form>
</body>
</html>