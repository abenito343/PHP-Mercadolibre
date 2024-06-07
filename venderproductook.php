<?php
error_reporting(0);
session_start();
include("conexion1.php");
$nombrep=$_POST['nombrep'];
$preciop=$_POST['preciop'];
$descripcionp=$_POST['descripcionp'];
$estado=$_POST['estado'];
$zona=$_POST['zona'];
$categoria=$_POST['categoria'];
$carpeta="IMAGENES";
copy($_FILES['file']['tmp_name'],$carpeta."/".$_FILES['file']['name']);
$imagenp=$_FILES['file']['name'];

$usuariop=$_COOKIE['USU'];

$sql="INSERT INTO productos (tp_id,tp_producto,tp_vendedor,tp_precio,tp_descripcion,tp_imagen,tp_estado,tp_zona,tp_categoria) values ('null','$nombrep','$usuariop','$preciop','$descripcionp','$imagenp','$estado','$zona','$categoria')";
if(mysql_query($sql,$conexion)){
	header("Location:vendido.php");
	}else{echo mysql_error();
	}






?>