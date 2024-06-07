<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body,td,th {
	color: #FFF;
}
body {
	background-color: #003;
}
</style>
</head>

<body>
<div align="center">

<?php
include ("conexion1.php");

$user_id=$_GET['user_id'];
$precio=$_GET['precio'];
$nombre_producto=urldecode($_GET['nombre_producto']);
$descripcion=urldecode($_GET['descripcion']);
$foto=$_GET['foto'];
$categoria=$_GET['categoria'];
$estado=$_GET['estado'];
$vendedor=$_GET['vendedor'];
$idp=$_GET['idp'];
$sql= "Insert into carrito (user_id,precio,nombre_producto,descripcion,categoria,estado,vendedor,foto,idp) values ('$user_id','$precio','$nombre_producto','$descripcion','$categoria','$estado','$vendedor','$foto','$idp')";
if(mysql_query($sql,$conexion)){

	//echo "Producto comprado";
	
	echo "Producto agregado al carrito de compras, puedes ir a:";
	echo '<p><input type="button" name="Principal" id="Principal" value="Principal" onclick=location.href="principalhlx.php">&nbsp;</p>';
	echo "donde puedes seguir agregando articulos al carrito o";
	echo '<p><input type="button" name="perfil" id="perfil" value="Perfil" onclick=location.href="perfilvendedor.php"></p>';
	echo "donde puedes ver tu carrito.";
	}else{ 
	echo mysql_error();                                                     
	echo "ERROR!";
}
?>
</div>
</body>
</html>



