<?php
if (isset($_POST["cancelar"]))
	header("Location: inicial.php");
else
{
	include "conexion.inc.php";
	$CI=$_GET["CI"];
	$Nombre_completo=$_GET["Nombre_completo"];
	$fechaNaci=$_GET["fechaNaci"];
    $telefono=$_GET["telefono"];
    $departamento=$_GET["departamento"];
    $sw = true;

    $q = "SELECT CI FROM persona";
    $res = mysqli_query($con, $q);
    if(mysqli_num_rows($res) > 0){
        while($r = mysqli_fetch_assoc($res)){
            if($CI == $r['CI']){
                $sw = false;
            }
        }
    }
    if($sw){
        $sql="INSERT INTO `persona` (`CI`, `Nombre_completo`, `fechaNaci`, `telefono`, `departamento`) VALUES ($CI, '$Nombre_completo', '$fechaNaci', '$telefono', '$departamento')";	
        mysqli_query($con, $sql);
         ?>
            <img width="300px" src="./img/almacenar.png"/>
            <br/>
            <a href="inicial.php">Volver</a> <?php
    }
    else{?>
        <img width="300px" src="./img/x.png"/>
        <h2>NO SE PUDO ALMACENAR A LA PERSONA</h2>
        <br/>
        <a href="inicial.php">Volver</a><?php
    }	
}
?>

