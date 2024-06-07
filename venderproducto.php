
<?php
session_start();
if(isset($_SESSION['x'])){
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.vender {
	background-image: url(imghlx/fondvend.jpg);
}
.vend {
	background-image: url(imghlx/fondvend.jpg);
	background-repeat: no-repeat;
}
</style>
</head>

<body>
<form action="venderproductook.php" method="post" enctype="multipart/form-data" name="form1" class="vend" id="form1">
  <p>
  <?php
echo "Bienvenido <b>".$_COOKIE['USU']."</b>";
?>
  &nbsp;</p>
  <p>
  <input type="button" name="Volver a la pagina principal" id="Volver a la pagina principal" value="Volver a la pagina principal" onclick=location.href="principalhlx.php">
  &nbsp;</p>
  <p>&nbsp;</p>
  <p>Vender un producto:</p>
  <p>Nombre:
    <label for="nombrep"></label>
    <input type="text" name="nombrep" id="nombrep" />
  </p>
  <p>Precio en Pesos argentinos($):
    <label for="preciop"></label>
    <input type="text" name="preciop" id="preciop" />
  </p>
  <p>Descripcion:
    <label for="descripcionp"></label>
    <textarea name="descripcionp" id="descripcionp" cols="45" rows="5"></textarea>
  </p>
  <p>Imagen:
    <label for="file"></label>
    <input type="file" name="file" id="file" />
  </p>
  <p>Estado: Nuevo
    <input type="radio" name="estado" id="radio" value="nuevo" />
    <label for="estado"></label>
  Usado
  <input type="radio" name="estado" id="radio2" value="usado" />
  <label for="estado"></label>
  </p>
  <p>Zona:
    <label for="zona"></label>
    <select name="zona" id="zona">
      <option>Seleccionar</option>
      <option value="Norte">Norte</option>
      <option value="Sur">Sur</option>
      <option value="Este">Este</option>
      <option value="Oeste">Oeste</option>
    </select>
  </p>
  <p>Categoria:
    <label for="categoria"></label>
    <select name="categoria" id="categoria">
      <option>Selecionar categoria</option>
          <option>Deporte</option>
          <option>Tecnologia</option>
          <option>Mascotas</option>
          <option>Ropa</option>
          <option>Electrodomesticos</option>
          <option>Autos</option>
          <option>Hogar</option>
          <option>Entretenimiento</option>
          <option>Otros</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>


</body>
</html>
<?php
}else{
	header("Location:login.php");
	}
?>