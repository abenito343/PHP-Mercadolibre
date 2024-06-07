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
include ("conexion.php");

$tipo=$_GET['dato'];
$id=$_GET['dato2'];
$nombreT=$_GET['dato3'];
$precio=$_GET['dato4'];
$imagen=$_FILES['file']['name'];
$descripcion=$_GET['dato6'];
$cantidad=$_GET['dato7'];
$estado=$_GET['dato8'];
$sql= "Insert into ticket values('$tipo','$id','$nombre','$precio','$imagen','$descripcion','$cantidad','$estado')";
if(mysql_query($sql,$conexion)){

	//echo "Producto comprado";
	echo "OHH SOY EL PADAWAN DE ARMESTO";
	}else{ 
	echo mysql_error();                                                     
echo "OHHH NO SOY HOOOO ";
}
?>
</div>
</body>
</html>



