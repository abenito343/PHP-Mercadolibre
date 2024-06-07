
<?php
error_reporting(0);
session_start();

	
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
	background-color: #09F;
	background:url(imghlx/ciclista.jpg);
}
.ho{
	-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
resize: both;
overflow: auto;
min-width: 50px; /*suggest a min-width &amp; min-height*/
min-height: 50px;
border:thin;
border-width:1px;
	}
.astro {
	background-image: url(imghlx/astrocat.jpg);
}
.fond {
	background-image: url(imghlx/ciclista.jpg);
	background-repeat: repeat;
}
.colorx {
	background-image: url(imghlx/supernova.jpg);
}
.fondt {
	background-color: #7E01C9;
}
.negro {
	color: #000;
}
.ngr {
	background-color: #000;
}
.tapiz {
	background-image: url(IMAGENES/tapiz.jpeg);
}
</style>
</head>

<body>
  <!--<table width="1398" height="955" border="1" cellspacing="5">-->
  <table width="1398" height="955" border="1" align="center" cellspacing="5" class="tapiz">
    <tr>
      <th width="261" height="88" scope="col">
        <p>
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
	echo "<tr>";
		
		echo "<td><img src=IMAGENES/$registro[0] width=250px height=150px></td>";
		
		
	echo "</tr>";
}
echo "</table>";

?>
</p>
        <p>
         <input type="button" name="perfil" id="perfil" value="Perfil" onclick=location.href="perfilvendedor.php">
      </p>
      <p>
        <input type="submit" name="button" id="button" value="Cerrar sesion" onclick=location.href="sesiondestroy.php" />
      </p></th>
      
      <th width="868" scope="col"><label for="textfield"><img src="imghlx/Sin título-3.png" width="543" height="226" alt="hol" /><br />
      </label></th>
      <th width="235" scope="col">
      <input type="button" name="tweetp" id="tweetp" value="Escribe 1 tweet" onclick=location.href="tuitiar.php"></th>
    </tr>
    <tr>
      <td colspan="2"><p>&nbsp;</p>
      <p>Articulos del mercado:</p></td>
      <td height="79" align="center"><label for="textfield2"></label>
              <label for="textfield3"></label>
	<form action="busqueda.php" method="post" name="form1" id="form1">
      <input type="text" name="nombrep" id="nombrep" />
      <input type="submit" name="button3" id="button3" value="Buscar" /></form></td>
    </tr>
    <tr>
      <td height="131" colspan="2" bgcolor="#D6D6D6" class="ngr"><p>
      <?php
		error_reporting(0);
include("conexion1.php");
$categoria=$_POST['categoria'];
$sql="select 	

*
 From tweets ";
$consulta = mysql_query($sql,$conexion);
echo "<table border=1 class=ho >";?>

	<tr>
	    <th>Usuario</th>
	    <th>Tweet</th>
	    <th>retwits</th>
	    <th>favotiros</th>
	    <th>fecha</th>
	  
	</tr>
<?php while ($registro= mysql_fetch_row($consulta)){ ?>
	<tr>
		
		<td> <?php echo $registro[1] ?> </td>
		<td> <?php echo $registro[2] ?> </td>
		<td> <?php echo $registro[3] ?> </td>
		<td> <?php echo $registro[4] ?> </td>
		<td> <?php echo $registro[5] ?> </td>
		
	
	</tr>
<?php } ?>
</table>

    </p></td>
      <td rowspan="2" valign="top"><p><form action="buscarho.php" method="post">Categorias
      </p>
        <p>
          <label for="categoria"></label>
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
          <input type="submit" name="button6" id="button6" value="buscar  por categoria" />
        </form>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
<p>&nbsp;</p>
  <p class="fond">&nbsp;</p>
</body>
</html>
<?php
}else{
	header("Location:login.php");
	}
?>
