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

$idp=$_GET['idp'];
$user_id=$_GET['user_id'];


$sql= "DELETE from carrito WHERE idp = $idp";
if(mysql_query($sql,$conexion)){

	//echo "Producto comprado";
	echo "Producto borrado del carrito";
	echo '<p><input type="button" name="Ir a pagina Principal" id="Ira a pagina Principal" value="Ir a pagina Principal" onclick=location.href="principalhlx.php">&nbsp;</p>';
	echo '<p><input type="button" name="Volver al perfil" id="Volver al perfil" value="Volver al perfil" onclick=location.href="perfilvendedor.php"></p>';
	}else{ 
	echo mysql_error();                                                     
	echo " ERROR!";
}
?>
</div>
</body>
</html>