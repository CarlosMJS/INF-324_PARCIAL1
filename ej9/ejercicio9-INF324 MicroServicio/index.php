<?php
session_start();
include "utils.php";
include "conexion.php";
$dbconn=new conexion();
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id']))
    {
        //obtenemos un dato
        $sql = $dbconn->prepare("SELECT * FROM personaid WHERE id=:id");
        $sql->bindValue(':id', $_GET['id']);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 hay datos");
        echo json_encode($sql->fetchAll());
        exit;				
    } else {
        //obtenemos todos los datos de la tabla
        $sql = $dbconn->prepare("SELECT * FROM personaid");
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 hay datos");
        echo json_encode($sql->fetchAll());
        exit;		
    }
}
// Crear un nuevo post
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = $_POST;
    $sql = "INSERT INTO `personaid` (`CI`, `Nombre_completo`, `fechaNaci`, `telefono`, `departamento`) VALUES (:CI, :Nombre_completo, :fechaNaci, :telefono, :departamento);";
    $statement = $dbconn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $id = $dbconn->lastInsertId();
    if($id)
    {
      $input['id'] = $id;
      header("HTTP/1.1 200 OK");
      echo json_encode($input);
      echo "persona ya existe";
      exit;
	 }
}
// Realizar bajas en la tabla
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
    $statement = $dbconn->prepare("DELETE FROM personaid where id=:id ;");
    $statement->bindValue(':id', $_GET['id']);
    $statement->execute();
	header("HTTP/1.1 200 OK");
    echo "persona eliminada";
	exit();
}
// Ralizar cambios
if($_SERVER['REQUEST_METHOD']=='PUT'){
    $query="UPDATE personaid set CI =:CI, Nombre_completo=:Nombre_completo, fechaNaci=:fechaNaci, telefono=:telefono, departamento=:departamento where id =:id;";
    $sql=$dbconn->prepare($query);
    $sql->bindValue(':CI',$_GET['CI']);
    $sql->bindValue(':Nombre_completo',$_GET['Nombre_completo']);
    $sql->bindValue(':fechaNaci',$_GET['fechaNaci']);
    $sql->bindValue(':telefono',$_GET['telefono']);
    $sql->bindValue(':departamento',$_GET['departamento']);
    $sql->bindValue(':id',$_GET['id']);
    $sql->execute();
    header("HTTP/1.1 200");
    echo "registro actualizado";
}
header("HTTP/1.1 400")
?>