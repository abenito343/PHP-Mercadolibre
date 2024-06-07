<?php
error_reporting(0);
include("conexion1.php");

$nombre=$_POST['nombrep'];
$sql="SELECT * from productos where tp_producto like '%$nombre%'";
$consulta = mysql_query($sql,$conexion);
$cuantos = mysql_num_rows ($consulta); 
echo "<table>";

while ($registro=mysql_fetch_array($consulta)){
	
	echo"<tr>";
	
		echo "<td> $registro[1] </td>";
		
		echo "<td> $registro[3] </td>";
		echo "<td><img src=IMAGENES/$registro[5] width=150px height=100px></td>";
		
	
	echo "</tr>";

	}
echo "</table>";
echo "SE ENCONTRARON: ". $cuantos." PRODUCTO/S";                          
?>