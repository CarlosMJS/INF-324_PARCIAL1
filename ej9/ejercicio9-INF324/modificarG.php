<?php
if (isset($_POST["cancelar"]))
	header("Location: inicial.php");
else
{
	include "conexion.inc.php";
    $CI=$_POST["CI"];
	$Nombre_completo=$_POST["Nombre_completo"];
	$fechaNaci=$_POST["fechaNaci"];
    $telefono=$_POST["telefono"];
    $departamento=$_POST["departamento"];
	$sql="update persona set Nombre_completo='$Nombre_completo', fechaNaci='$fechaNaci', telefono='$telefono' ,departamento='$departamento' where CI=$CI";
	mysqli_query($con, $sql);

}
?>
<img height="30" width="30" src="./img/guardado.png"/>
<br/>
<a href="inicial.php">Volver</a>