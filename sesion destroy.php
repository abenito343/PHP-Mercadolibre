<?php
session_start();
session_destroy();

if(isset($_SESSION['x'])){header("Location:perfilvendedor.php");}
	else{
	header("Location:login.php");
	}








?>