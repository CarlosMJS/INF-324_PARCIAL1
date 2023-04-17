<?php
include "conexion.php";
$dbconn=new conexion();
//obtenemos todos los datos de la tabla
if($_SERVER['REQUEST_METHOD']=='GET'){ 
    $query="select * from personaid";
    $sql=$dbconn->prepare($query);
    $sql->execute();
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    header("HTTP/1.1 200");
    echo json_encode($sql->fetchAll());
    exit;
}   
//obtenemos el CI de la tabla
if($_SERVER['REQUEST_METHOD']=='GET'){
    $query="select * from personaid where id=:id";
    $sql=$dbconn->prepare($query);
    $sql->bindValue(':id',$_POST['id']);
    $sql->execute();
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    header("HTTP/1.1 200");
    echo json_encode($sql->fetchAll());
    exit;
}
// Crear un nuevo post
if($_SERVER['REQUEST_METHOD']=='POST'){
    $query="INSERT INTO `personaid` (`CI`, `Nombre_completo`, `fechaNaci`, `telefono`, `departamento`) VALUES (:CI, ':Nombre_completo', ':fechaNaci', 'telefono', 'departamento');";
    $sql=$dbconn->prepare($query);
    $sql->bindValue(':CI',$_POST['CI']);
    $sql->bindValue(':Nombre_completo',$_POST['Nombre_completo']);
    $sql->bindValue(':fechaNaci',$_POST['fechaNaci']);
    $sql->bindValue(':telefono',$_POST['telefono']);
    $sql->bindValue(':departamento',$_POST['departamento']);

    $sql->execute();
    $id=$dbconn->lastInsertID();
    if($id){
        header("HTTP/1.1 200");
        echo json_encode($id);
        echo "persona ya existe";
        exit;
    }
}
// Ralizar cambios
if($_SERVER['REQUEST_METHOD']=='PUT'){
    $query="UPDATE personaid set CI =:CI, Nombre_completo=:Nombre_completo, fechaNaci=:fechaNaci, telefono=:telefono, departamento=:departamento where id =:id";
    
    $sql=$dbconn->prepare($query);
    $sql->bindValue(':CI',$_GET['CI']);
    $sql->bindValue(':Nombre_completo',$_GET['Nombre_completo']);
    $sql->bindValue(':fechaNaci',$_GET['fechaNaci']);
    $sql->bindValue(':telefono',$_GET['telefono']);
    $sql->bindValue(':departamento',$_GET['departamento']);
    $sql->execute();
    header("HTTP/1.1 200");
    echo "registro actualizado";
}
// Realizar bajas en la tabla
if($_SERVER['REQUEST_METHOD']=='DELETE'){
    $query="DELETE from personaid where id=:id";
    $sql=$dbconn->prepare($query);
    $sql->bindValue(':id',$_GET['id']);
    $sql->execute();
    header("HTTP/1.1 200");
    echo "persona eliminada";
    exit;
}
header("HTTP/1.1 400")

?>