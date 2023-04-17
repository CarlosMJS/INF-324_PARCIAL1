<?php
session_start();
    
if(!isset($_SESSION['CI'])){
    header("Location: ./index.php");
}
function tablaCW (){
    include "conexion.inc.php";
    $consulta= "select 
                sum(case when departamento='01' then promedio else 0 end) as BENI,
                sum(case when departamento='02' then promedio else 0 end) as CHUQUISACA,
                sum(case when departamento='03' then promedio else 0 end) as COCHABAMBA,
                sum(case when departamento='04' then promedio else 0 end) as LA_PAZ,
                sum(case when departamento='05' then promedio else 0 end) as ORURO,
                sum(case when departamento='06' then promedio else 0 end) as PANDO,
                sum(case when departamento='07' then promedio else 0 end) as POTOSI,
                sum(case when departamento='08' then promedio else 0 end) as SANTA_CRUZ,
                sum(case when departamento='09' then promedio else 0 end) as TARIJA
                from
                (select departamento,
                AVG(i.notafinal) promedio, 
                Count(i.notafinal) estudiantes
                from persona p, 
                inscripcion i
                where p.CI=i.CIestudiante
                group by p.departamento) as depto;";
    $result = mysqli_query($con, $consulta);
    $resp=mysqli_fetch_assoc($result);
    return $resp;
}

$resp=tablaCW ();
include "cabecera.inc.php";
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <div class="btn">
    <a href="./salida.php" style="text-decoration: none;" >Salir</a>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>U.M.S.A.</h2>
      <img class="img-fluid" src="img/Logo.png" style="max-width: 200px; display: block; margin: 0 auto;"></img>
      <h2>Universidad Mayor de San Andrés</h2>
    </div>
    <div class="col-sm-8">
    <img src="img/EscudoFCPN.png"  style="max-width: 400px; display: block; margin: 0 auto;"/>
      <h2>TABLA</h2>
      <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th>DEPARTAMENTO</th>
                <th>MEDIA DE NOTAS</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>BENI</td>
                <td><?php echo $resp['BENI'] ?></td>
            </tr>
            <tr>
                <td>CHUQUISACA</td>
                <td><?php echo $resp['CHUQUISACA'] ?></td>
            </tr>
            <tr>
                <td>COCHABAMBA</td>
                <td><?php echo $resp['COCHABAMBA'] ?></td>
            </tr>
            <tr>
                <td>LA_PAZ</td>
                <td><?php echo $resp['LA_PAZ'] ?></td>
            </tr>
            <tr>
                <td>ORURO</td>
                <td><?php echo $resp['ORURO'] ?></td>
            </tr>
            <tr>
                <td>PANDO</td>
                <td><?php echo $resp['PANDO'] ?></td>
            </tr>
            <tr>
                <td>POTOSI</td>
                <td><?php echo $resp['POTOSI'] ?></td>
            </tr>
            <tr>
                <td>SANTA_CRUZ</td>
                <td><?php echo $resp['SANTA_CRUZ'] ?></td>
            </tr>
            <tr>
                <td>TARIJA</td>
                <td><?php echo $resp['TARIJA'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>
<?php
include "cuerpoF.inc.php";
?>  