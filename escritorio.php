<?php
require('sesion.php');
require('conex.php');
if (!isset($_SESSION['usuario'])) {
	if (!isset($_SESSION['contra'])) {
	?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ERROR</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/chuntarostyle.css">
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery-3.2.0.js"></script>
</head>
<body>
	<div class="alert alert-warning">
  <strong>ERROR 0!</strong> No puedes estar aquí.
</div>
<div class="col-xs-4">
				<a href="index.html" class="btn btn-success" role="button">Inicio</a>
			</div>
				<nav class="navbar navbar-inverse navbar-fixed-bottom">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
			<span class="sr-only">Footer</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span class=" glyphicon glyphicon-user"></span> Contacto</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			<ul class="nav navbar-nav">
				<li><a href="https://www.facebook.com/netosaurio1014">Facebook</a></li>
				<li><a href="https://twitter.com/tiendaNeto?lang=es">Twitter</a></li>
				<li><a href="https://github.com/netosaurio11">GitHub</a></li>
				<li><a href="https://www.instagram.com/netosaurio11/">Instagram</a></li>
			</ul>
		</div>
	</div>
</nav>
</body>
</html>
<?php	
	}
}
else{
?>
<?php
$usuario=$_SESSION['usuario'];
$contra=$_SESSION['contra'];
$query=mysqli_query($miConexion,"SELECT * FROM users WHERE usuario='$usuario' and contra='$contra'");
$renglon= mysqli_fetch_assoc($query);
$permiso=$renglon["tipo"];
if ($permiso==1) {
header("Location:gerente.php");
	?>
		
			<?php
						}
						else{
							if ($permiso==2) {
								?>
			<!DOCTYPE html>
<html lang="es">
	
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/chuntarostyle.css">
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery-3.2.0.js"></script>
		<title>Usuario Normal</title>
	</head>
	<body>
	<div align="center">
		<img src="img/usuario.png" class="img-circle" alt="Cinque Terre" width="304" height="236">
	</div>

		<div class="container">            
  <table class="table table-condensed">
    <thead>
    <tr>
    	<div class="well"><h2><span class=" glyphicon glyphicon-qrcode"></span> Información personal</h2></div>
    </tr>
      <tr>
        <th>Usuario</th>
        <th></th>
        <th><?php echo $_SESSION['usuario'];?></th><!--Nombre del usuario-->
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nombre</td><!--Nombre-->
        <td></td>
        <td><?php echo $_SESSION['nombre'];?></td><!--$nombre-->
      </tr>
      <tr>
        <td>Apellido paterno</td>
        <td></td>
        <td><?php echo $_SESSION['ap_pat'];?></td><!--$ap_pat-->
      </tr>
      <tr>
        <td>Apellido materno</td>
        <td></td>
        <td><?php echo $_SESSION['ap_mat'];?></td> <!--$ap_mat-->
      </tr>
      <tr>
        <td>Edad</td>
        <td></td>
        <td><?php echo $_SESSION['edad'];?></td> <!--$edad-->
      </tr>
    </tbody>
  </table>
</div>

		<div class="col-xs-4 col-md-4"></div>
		<div class="col-xs-4 col-md-4">	
		<form action="cerrarsesion.php" method="POST">
			<a href="tienda.php" class="btn btn-info" role="button">Tienda</a>
			<input type="submit" class="btn btn-success" value="Cerrar sesión">
		</form>
		</div>
		<div class="col-xs-4 col-md-4"></div>	
	</body>
		<nav class="navbar navbar-inverse navbar-fixed-bottom">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
			<span class="sr-only">Footer</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span class=" glyphicon glyphicon-user"></span> Contacto</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			<ul class="nav navbar-nav">
				<li><a href="https://www.facebook.com/netosaurio1014">Facebook</a></li>
				<li><a href="https://twitter.com/tiendaNeto?lang=es">Twitter</a></li>
				<li><a href="https://github.com/netosaurio11">GitHub</a></li>
				<li><a href="https://www.instagram.com/netosaurio11/">Instagram</a></li>
			</ul>
		</div>
	</div>
</nav>
</html>
<?php
							}
						}
					}
					
						?>

