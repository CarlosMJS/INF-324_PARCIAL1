<?php
    include 'conexion.inc.php';
    if(isset($_POST['Usuario']) && isset($_POST['Password'])){
        $Usuario = $_POST['Usuario'];
        $Password = $_POST['Password'];
        $consulta = "select * from usuario where Usuario = '$Usuario' and Password = '$Password'";
        $result = mysqli_query($con, $consulta);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            session_start();
            $_SESSION["CI"]=$row['CI'];
            $_SESSION["Usuario"]=$row['Usuario'];
            $_SESSION["Password"]=$row['Password'];
            $_SESSION["rol"]=$row['rol'];
            
            header("Location: ./principal.php");
        }
        else{
            header("Location: ./index.php");
        }
    }
?>