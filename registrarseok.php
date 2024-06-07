

<input type="button" name="Volver al login" id="Volver al login" value="Volver al login" onclick=location.href="login.php">
<?php
error_reporting(0);
include("conexion1.php");
$nombre1=$_POST['nombre1'];
$apellido1=$_POST['apellido1'];
$usuario1=$_POST['usuario1'];
$psw1=$_POST['psw1'];
$mail1=$_POST['mail1'];
$ano1=$_POST['ano1'];
$carpeta="IMAGENES";
copy($_FILES['file']['tmp_name'],$carpeta."/".$_FILES['file']['name']);
$imagenp=$_FILES['file']['name'];

$sql="INSERT INTO usuarios (tu_id,tu_usuario,tu_contrasena,tu_mail,tu_nombre,tu_apellido,tu_ano,tu_imagen) values ('null','$usuario1','$psw1','$mail1','$nombre1','$apellido1','$ano1','$imagenp')";
if(mysql_query($sql,$conexion)){
	echo "datos insertados";
	}else{echo mysql_error();
	}
?>