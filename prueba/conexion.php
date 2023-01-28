<?php

//$conectador=mysqli_connect("localhost","hdqxhmjp","WJEgFyZbf_}g");
$conectador=mysqli_connect("localhost","root","");

//$base="hdqxhmjp_2022";
$base="albert";
mysqli_select_db($conectador ,$base);
date_default_timezone_set('America/La_Paz');
mysqli_set_charset($conectador, "utf8");
?>

