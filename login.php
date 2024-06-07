<?php
session_start();
$_SESSION[x]="a";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">

.lego {
	background-image: url(IMAGENES/asdasUs2.jpg);
	background-repeat: no-repeat;
}
.logg {
	background-image: url(IMAGENES/asdasUs2.jpg);
	background-repeat: no-repeat;
	background-position: center;
}
.logge {
	background-image: url(IMAGENES/asdasUs2.jpg);
	background-repeat: no-repeat;
	background-position: center top;
}
.gom {
	background-image: url(IMAGENES/gomitas.jpg);
	background-repeat: no-repeat;
}
</style>
</head>

<body class="gom">
<form action="loginok.php" method="post" enctype="multipart/form-data" name="form1" class="logge" id="form1">
<p>HOELEEQUIS</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Loguearse:</p>
<p>Usuario:
  <label for="usuario3"></label>
  <input type="text" name="usuario3" id="usuario3" />
</p>
<p>Contraseña:
    <input type="password" name="psw3" id="psw3" />
    <input type="submit" name="button2" id="button2" value="iniciar sesion" />
</p>
<p>&nbsp;</p>
<p>
  ¿No tenes cuenta?
  
  <input type="button" name="regi" id="regi" value="registrarse" onclick=location.href="registrarse.php">
</p>
</form>
<p class="gom"></p>
</body>
</html>