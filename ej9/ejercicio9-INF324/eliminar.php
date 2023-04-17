<?php
include "conexion.inc.php";
$CI=$_GET["CI"];
$sql="delete from persona where CI=$CI";
mysqli_query($con, $sql);
?>
<img  width="300px" src="./img/eliminar.jpg"/>
<br/>
<a href="inicial.php">Volver</a>