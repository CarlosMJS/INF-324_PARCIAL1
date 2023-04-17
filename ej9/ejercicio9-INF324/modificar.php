<?php
include "conexion.inc.php";
$CI=$_GET["CI"];
$sql="select * from persona where CI=$CI";
$resultado=mysqli_query($con, $sql);
$datos=mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Actualizar datos</h2>
  <form action="modificarG.php" method="POST">
    <div class="row">
      <div class="col">
        <label>CI</label>
        <input type="text" class="form-control" name="CI" value="<?php echo $datos["CI"];?>" readonly>
      </div>
      <div class="col">
        <label>Nombre completo</label>
        <input type="text" class="form-control" name="Nombre_completo" value="<?php echo $datos["Nombre_completo"];?>">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <label>Fecha de nacimiento</label>
        <input type="date" class="form-control" name="fechaNaci" value="<?php echo $datos["fechaNaci"];?>" >
      </div>
      <div class="col">
        <label>telefono</label>
        <input type="text" class="form-control" name="telefono" value="<?php echo $datos["telefono"];?>">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <label>departamento</label>
        <input type="text" class="form-control" name="departamento" value="<?php echo $datos["departamento"];?>" >
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="aceptar" value="aceptar">ACEPTAR</button>
    <button type="submit" class="btn btn-primary" name="cancelar" value="cancelar">CANCELAR</button>
  </form>
</div>
</body>
</html>
