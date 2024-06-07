
<?php
session_start();	
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
<form action="tuitiarok.php" method="post" enctype="multipart/form-data" name="form1" class="vend" id="form1">
<p>Escribir  1 tweet:
    <label for="nombrep"></label>
    <label for="preciop"></label>
  </p>
  <p>Twitiar:
    <label for="tweetp"></label>
    <textarea name="tweetp" id="tweetp" cols="45" rows="5"></textarea>
    <label for="file"></label>
    <label for="estado"></label>
    <label for="estado"></label>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
 
</form>


</body>
</html>
