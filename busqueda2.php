<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="busqueda.php">
  <table width="671" height="470" border="1" cellspacing="5">
    <tr>
      <th height="65" scope="col"><p>
      <input type="button" name="Principal" id="Principal" value="Principal" onclick=location.href="principalhlx.php">
      &nbsp;</p>
        <p>Buscar
          <label for="nombrep"></label>
      <input type="text" name="nombrep" id="nombrep" />
      <input type="submit" name="button" id="button" value="buscar producto en tienda" />
      </p></th>
    </tr>
    <tr>
      <th align="left" valign="top" scope="row"><p>&nbsp;</p>
        <?php
error_reporting(0);
include("conexion1.php");

$nombre=$_POST['nombrepe'];

$sql="SELECT * from productos where tp_producto like '%$nombre%'";

$consulta = mysql_query($sql,$conexion);
$cuantos = mysql_num_rows ($consulta); 
echo "<table border=1 class=ho >";
?>

	</th>
    </tr>
    <tr>
	    <th>Producto</th>
	    <th>Descripcion</th>
	    <th>Precio</th>
	    <th>Estado</th>
	    <th>Categoria</th>
	    <th>Vendedor</th>
	    <th>Foto</th>
	    <th>-</th>
	</tr>
<?php
while ($registro=mysql_fetch_array($consulta)){?>
	<tr>
		<td> <?php echo $registro[2] ?> </td>
		<td> <?php echo $registro[1] ?> </td>
		<td> <?php echo $registro[4] ?> </td>
		<td> <?php echo $registro[7] ?> </td>
		<td> <?php echo $registro[1] ?> </td>
		<td> <?php echo $registro[3] ?> </td>
        
        
		<td><img src=IMAGENES/<?php echo $registro[6] ?> width=50px height=50px></td>
		<?php echo "<td bgcolor=#33CCCC><a href=carrito2.php?user_id=".$_COOKIE['UID']."&precio=".$registro[4]."&idp=".$registro[0]."&nombre_producto=".urlencode($registro[3])."&foto=".$registro[6]."&categoria=".$registro[1]."&estado=".$registro[7]."&vendedor=".$registro[3]."&descripcion=".urlencode($registro[5]).">Agregar al Carrito</a>"; ?>
	</tr>
<?php } 
echo "</table>";
echo "SE ENCONTRARON: ". $cuantos." PRODUCTO/S";                          
?>
        
      &nbsp;</th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>