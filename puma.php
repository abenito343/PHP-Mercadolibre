<?php
include ("conexion.php");
$tipo=$_POST['tipo'];
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$imagen=$_FILES['file']['name'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];
$estado=$_POST['estado'];
$buscar=$_POST['buscar'];
$sql="select * from mercaderia where tipo ='$buscar'";
$consulta = mysql_query($sql,$conexion);
$cuantos= mysql_num_rows($consulta); //cantidad que encontro 
echo "<table border=5> <center>" ;

while ($registro=mysql_fetch_array($consulta)){
	echo "<tr> <center>";
	echo"<td bgcolor=#00CCFF><b>".$registro['tipo']."</b></td>";
    echo"<td><img src=".$registro['imagen']." width=150px height=150px></td>";
	echo"<td bgcolor=#00CCFF >".$registro['nombre']."</td>";
	echo"<td bgcolor=#00CCFF>".$registro['precio']."</td>";
	echo"<td bgcolor=#00CCFF>".$registro['estado']."</td>";
    echo"<td bgcolor=#00CCFF>".$registro['descripcion']."</td>";
	echo"<td bgcolor=#00CCFF>".$registro['cantidad']."</td>";
	echo "<td bgcolor=#33CCCC><a href=vermas.php?dato=".$registro['tipo']."&dato2=".$registro['id']."&dato3=".$registro['nombre']."&dato4=".$registro['precio']."&dato5=".$registro['imagen']."&dato6=".$registro['descripcion']."&dato7=".$registro['cantidad']."&dato8=".$registro['estado'].">Comprar</A>";
	echo "</tr> </center>";
	
}
echo "</table>";

echo "Se encontraron los siguientes producto:".$cuantos."registro/s";

?>