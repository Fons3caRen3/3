<?php


// confirmar sesion

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: index.html');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="loggedin">
    <nav class="navtop">
        <h1 style="color:black;">Sistema de Login Básico ConfiguroWeb</h1>
        <a href="perfil.php" style="color:black;"><i class="fas fa-user-circle"></i>Informción de Usuario</a>
        <a href="../cerrar-sesion.php" style="color:black;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
    </nav>

    <div class="content">
        <h2>Página de Inicio</h2>
        <p>Hola de nuevo, <?=$_SESSION['name'] ?> !!!</p>
    </div>
</body>

</html>







<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>

<?php

include "../controlador/UsuarioControlador.php";
include '../helps/helps.php';

$filas = UsuarioControlador::getUsuarios();

?>

<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12">
				<br>
				<a href="crear_usuario_form.php" class="btn btn-primary"> Crear usuario +</a>
				<br>
				<br>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Usuario</th>
									<th>Email</th>
									<th>Privilegio</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($filas as $usuario) {
    ?>
								<tr>
									<td><?php echo $usuario["id"] ?></td>
									<td><?php echo $usuario["nombre"] ?></td>
									<td><?php echo $usuario["usuario"] ?></td>
									<td><?php echo $usuario["email"] ?></td>
									<td><?php echo getPrivilegio($usuario["privilegio"]) ?></td>
									<td>
										<a href="crear_usuario_form.php?id=<?php echo $usuario["id"] ?>" class="btn btn-success btn-sm">Editar</a>
										<a href="javascript:eliminar(confirm('¿Deséas eliminar este usuario?'),'eliminar_usuario_logic.php?id=<?php echo $usuario["id"] ?>');" class="btn btn-danger btn-sm">Eliminar</a>
									</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->

<script type="text/javascript">

	function eliminar(confirmacion, url){
		if(confirmacion){
			window.location.href = url;
		}
	}

</script>

<?php include 'partials/footer.php';?>