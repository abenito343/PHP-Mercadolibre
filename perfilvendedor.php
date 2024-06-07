<?php
error_reporting(0);
session_start();
if(isset($_SESSION['x'])){
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 26px;
	color: #FFF;
}
body {
	background-color: #FFF;
	background-repeat: repeat;
	background-image: url(IMAGENES/fondo-azul.jpg);
}
.tit {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 14px;
	font-style: normal;
	line-height: normal;
	font-weight: bold;
	font-variant: normal;
	text-transform: uppercase;
	color: #FFF;
	text-decoration: blink;
	letter-spacing: normal;
	word-spacing: normal;
	display: inline-block;
	cursor: s-resize;
	page-break-before: auto;
	page-break-after: auto;
}
.celdaphp {
	background-image: url(imghlx/ciclista.jpg);
}
.cat {
	background-image: url(imghlx/cat.jpg);
}
.fond1 {
	background-image: url(IMAGENES/fondo%20azul.jpg);
}
.fond2 {
	background-image: url(IMAGENES/fondo-azul.jpg);
}
</style>
</head>

<body>
<form action="buscarho2.php" method="post" name="form1" class="fond2" id="form1">
  <table width="1132" height="704" border="1" align="center" cellspacing="5" class="fond1">
    <tr>
      <th width="261" height="227" scope="col"> <p>
        <?php
echo "Bienvenido <b>".$_COOKIE['USU']."</b>";

      
include("conexion1.php");

$usuariov=$_COOKIE['USU'];
$sql="select 	

tu_imagen

 From usuarios where tu_usuario = '$usuariov'";
$consulta = mysql_query($sql,$conexion);

echo "<table border=1 class=ho>";

while ($registro= mysql_fetch_row($consulta)){
	echo"<tr>";
		
		echo "<td><img src=IMAGENES/$registro[0] width=250px height=150px></td>";
		
		
	echo "</tr>";
}
echo "</table>";



?>
        &nbsp;</p>
        <p>
          <input type="button" name="Principal" id="Principal" value="Principal" onclick=location.href="principalhlx.php" />
          &nbsp;</p>
        <p>
          <input type="button" name="button" id="button" value="Cerrar sesion" onclick=location.href="sesiondestroy.php" />
          &nbsp;</p></th>
      <th width="506" align="center" valign="top" scope="col"><img src="imghlx/Sin título-3.png" width="454" height="218" /></th>
      <th width="352" scope="col"> <input type="button" name="venderp" id="venderp" value="vender un producto" onclick=location.href="venderproducto.php" /></th>
    </tr>
    <tr>
      <td height="auto" colspan="2" align="left" valign="top"><p>
        <label for="textarea">PRODUCTOS EN VENTA</label>
        <?php
		error_reporting(0);

include("conexion1.php");
$usuariov=$_COOKIE['USU'];
$sql="select 	
tp_producto,
tp_vendedor,
tp_precio,
tp_descripcion,
tp_imagen,
tp_estado,
tp_id,
tp_categoria
tp_categoria From productos where tp_vendedor = '$usuariov'";
$consulta = mysql_query($sql,$conexion);
echo "<table border=1>"; ?>
      </p></td>
    </tr>
    <tr>
      <th>Producto</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Categ</th>
      <th>Estado</th>
      <th>Vendedor</th>
      <th>Foto</th>
    </tr>
    <?php while ($registro= mysql_fetch_row($consulta)){
	echo "<h2></h2>";
	echo"<tr>";
	
		echo "<td> $registro[0] </td>";
		echo "<td> $registro[3] </td>";
		echo "<td> $registro[2] </td>";
		echo "<td> $registro[7] </td>";
		echo "<td> $registro[5] </td>";
		echo "<td> $registro[1] </td>";
		echo "<td><img src=IMAGENES/$registro[4] width=50px height=50px></td>";
		echo "echo <td bgcolor=#33CCCC><a href=borrar2.php?user_id=".$_COOKIE['UID']."&tp_id=".$registro[6].">Borrar articulo</a>";
		
	echo "</tr>";
}
echo "</table>";

?>
    <p></p>
    <p>
      <label for="textarea">CARRITO DE COMPRAS</label>
      <?php
		error_reporting(0);

include("conexion1.php");
$usuariov=$_COOKIE['USU'];
$userid=$_COOKIE['UID'];
$sql="select nombre_producto,descripcion,precio,categoria,estado,vendedor,foto,idp From carrito where user_id = '$userid'";
$consulta = mysql_query($sql,$conexion);
echo "<table border=1>"; ?>
    </p>
    <tr>
      <th>Producto</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Categ</th>
      <th>Estado</th>
      <th>Vendedor</th>
      <th>Foto</th>
    </tr>
    <?php 
while ($registro= mysql_fetch_row($consulta)){
	echo "<h2></h2>";
	echo"<tr>";
	
		echo "<td> $registro[0] </td>";
		echo "<td> $registro[1] </td>";
		echo "<td> $registro[2] </td>";
		echo "<td> $registro[3] </td>";
		echo "<td> $registro[4] </td>";
		echo "<td> $registro[5] </td>";
		echo "<td><img src=IMAGENES/$registro[6] width=50px height=50px></td>";
		echo "echo <td bgcolor=#33CCCC><a href=borrar.php?user_id=".$_COOKIE['UID']."&idp=".$registro[7].">Borrar del carrito</a>";
	
	
	echo "</tr>";
}
echo "</table>";

?>
    <p></p>
  <td align="left"><label for="textfield2"></label>
    <label for="textfield3"></label>
    <p>Categorias </p>
    <p>
      <label for="select"></label>
      <select name="categoria" id="categoria">
        <option value="">Seleccionar categoria</option>
        <option value="Deporte">Deporte</option>
        <option value="Tecnologia">Tecnologia</option>
        <option value="Mascotas">Mascotas</option>
        <option value="Ropa">Ropa</option>
        <option value="Electrodomesticos">Electrodomesticos</option>
        <option value="Autos">Autos</option>
        <option value="Hogar">Hogar</option>
        <option value="Entretenimiento">Entretenimiento</option>
        <option value="Otros">Otros</option>
      </select>
    </p>
    <p>
      <input type="submit" name="button6" id="button6" value="bucar categoria" />
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  </table>
  <p class="fond2">&nbsp;</p>
</form>

</body>
</html>
<?php
}else{
	header("Location:login.php");
	}
?>
