<html>
<head>
<title>AltaUsuario</title>
</head>
<body bgcolor="green" text="white">
<?php
$conexion=mysqli_connect("localhost","root","","panaderia") or
    die("Problemas con la conexión");

                       
mysqli_query($conexion,"insert into usuario(nom.usuario,pass.usuario,mail.usuario) values ('$_REQUEST[nom.usuario]', '$_REQUEST[pass.usuario]', '$_REQUEST[mail.usuario]')"
	or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "El usuario fue cargado con exito";
?>
</body>
</html>
