<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php
include ('config.php');

$result = mysqli_query($conexion, "SELECT * FROM usuario WHERE nomb_usuario = '".$_POST['nom_usuario']."' AND pass_usuario = '".$_POST['password']."' ") or die(mysqli_error($conexion));

$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) !=0){
	$_SESSION['usuario'] = $_POST['nom_usuario'];
	$_SESSION['password'] = $_POST['password'];
?>
	<script type="text/javascript">
		window.location='index.php'
	</script>
<?php
}
else {
?>
	<script type="text/javascript">
		alert('Usuario y/o password inexistentes');
		window.location='inicio.php'
	</script>
<?php
}

?>
</body>
</html>