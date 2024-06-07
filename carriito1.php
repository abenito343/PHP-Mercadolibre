<?php
include ("conexion1.php");

$sql2="select * from produtos";
$consulta2 = mysql_query($sql2,$conexion2);
$cuantos= mysql_num_rows($consulta2); //cantidad que encontro 
echo "<table border=5> <center>" ;

while ($registro2=mysql_fetch_array($consulta2)){
	echo "<tr> <center>";
	echo"<td bgcolor=#00CCFF><b>".$registro[0]."</b></td>";
    echo"<td><img src=".$registro[6]." width=150px height=150px></td>";
	echo"<td bgcolor=#00CCFF >".$registro[2]."</td>";
	echo"<td bgcolor=#00CCFF>".$registro[4]."</td>";
	echo"<td bgcolor=#00CCFF>".$registro[7]."</td>";
    echo"<td bgcolor=#00CCFF>".$registro[5]."</td>";
	
	echo "<td bgcolor=#33CCCC><a href=carrito2.php?dato=".$registro[2]."&dato2=".$registro[0]."&dato3=".$registro[2]."&dato4=".$registro[4]."&dato5=".$registro[6]."&dato6=".$registro[5]."&dato7=".$registro[7].">Comprar</A>";
	echo "</tr> </center>";
	
}
echo "</table>";

echo "Se encontraron los siguientes producto:".$cuantos."registro/s";

?>