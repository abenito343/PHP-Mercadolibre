      <?php
		error_reporting(0);
include("conexion1.php");
$sql="select * From productos";
$consulta = mysql_query($sql,$conexion);
echo "<table border=1>";
while ($registro= mysql_fetch_row($consulta)){
	echo"<tr>";
	foreach($registro as $dato){
		echo "<td> $dato </td>";
	}
	echo "</tr>";
}
echo "</table>";

?>
        