<?php
    include 'conexion.inc.php';
    if(isset($_POST['Usuario']) && isset($_POST['Password'])){
        $Usuario = $_POST['Usuario'];
        $Password = $_POST['Password'];
        $consulta = "select * from usuario where Usuario = '$Usuario' and Password = '$Password' and rol = 'director'";
        $resulta = mysqli_query($con, $consulta);
        $consult2 = "select * from usuario where Usuario = '$Usuario' and Password = '$Password' and rol = 'estudiante'";
        $result2 = mysqli_query($con, $consult2);
        if(mysqli_num_rows($resulta) > 0){
            $row = mysqli_fetch_array($resulta);
            session_start();
            $_SESSION["CI"]=$row['CI'];
            $_SESSION["Usuario"]=$row['Usuario'];
            $_SESSION["Password"]=$row['Password'];
            $_SESSION["rol"]=$row['rol'];
            
            header("Location: ./media.php");
        }else{
            if (mysqli_num_rows($result2) > 0){
                $row = mysqli_fetch_array($result2);
                session_start();
                $_SESSION["CI"]=$row['CI'];
                $_SESSION["Usuario"]=$row['Usuario'];
                $_SESSION["Password"]=$row['Password'];
                $_SESSION["rol"]=$row['rol'];
                
                header("Location: ./principal.php");
                
            }else{
                header("Location: ./index.php");
            }
            
        }
        
    }
?>