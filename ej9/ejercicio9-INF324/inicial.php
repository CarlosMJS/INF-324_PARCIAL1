<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>PROGRAMACION MULTIMEDIAL</title>
</head>
<body>
    <div class="container mt-3">
    <h1>PERSONA</h1>
    <br>
    <a href='adicionar.php'>Adicionar</a>
    <br><br>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>CI</th>
            <th>Nombre completo</th>
            <th>Fecha de nacimiento</th>
            <th>telefono</th>
            <th>departamento</th>
            <td colspan="2">Operaciones</td>
        </tr>
        </thead>
        <tbody>
            <?php
            include "conexion.inc.php";
            $resultado= mysqli_query($con, "select * from persona");
            while ($datos=mysqli_fetch_array($resultado)) 
            {
                echo "<tr>";
                echo "<td>".$datos["CI"]."</td>";
                echo "<td>".$datos["Nombre_completo"]."</td>";
                echo "<td>".$datos["fechaNaci"]."</td>";
                echo "<td>".$datos["telefono"]."</td>";
                echo "<td>".$datos["departamento"]."</td>";
                echo "<td><a href='modificar.php?CI=".$datos["CI"]."'>Modificar</a></td>";
                echo "<td><a href='eliminar.php?CI=".$datos["CI"]."'>Eliminar</a></td>";
                echo "</tr>";
            }
		    ?>
        </tbody>
    </table>
    </div>
</body>
</html>