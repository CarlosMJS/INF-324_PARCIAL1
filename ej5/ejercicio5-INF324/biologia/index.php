<?php
session_start(); 
if(!isset($_SESSION['CI'])){
    header("Location: ../index.php");
}
include "../cabecera2.inc.php";
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="../index.php">PRINCIPAL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">BIOLOGIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../fisica/">FISICA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../informatica/">INFORMATICA</a>
      </li>
    </ul>
    <div class="btn">
    <a href="../principal.php" style="text-decoration: none;" >Regresar a PRINCIPAL</a>
    </div>
  </div>
</nav>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>U.M.S.A.</h2>
      <img class="img-fluid" src="../img/Logo.png" style="max-width: 200px; display: block; margin: 0 auto;"></img>
      <h2>Universidad Mayor de San Andrés</h2>
    </div>
    <div class="col-sm-8">
    <img src="../img/biologia.png"  style="max-width: 500px; display: block; margin: 0 auto;"/>
    <h2>OBJETIVOS</h2>
    <p>
    Formar profesionales idóneos en todas las ramas de las ciencias biológicas, que respondan a las necesidades de transformación y de desarrollo local y nacional, con conciencia crítica y con capacidad de manejo de los instrumentos teórico-metodológicos y prácticos.
    <br>
    Desarrollar y difundir programas de investigación en las áreas de las ciencias biológicas, particularmente en aquellas de interés de la sociedad, como ecología. Aprovechamiento sostenible de la biodiversidad, solución de problemas ambientales, biología molecular y biotecnología.
    <br>
    Participar en el análisis de problemas que afectan al medio ambiente proponiendo soluciones viables en base a la investigación y experiencia.
    <br>
    Mejorar permanentemente, en concordancia al avance científico, la calidad de la docencia e investigación a través de la actualización yo perfeccionamiento de su personal docente.
    <br>
    Participar eficientemente en proyectos multi e interdisciplinarios en el campo de la competencia.
    <br>
    Fortalecer vínculos con universidades del interior y exterior.</p>
    <h2>MISIÓN</h2>
    <p>La Carrera de Biología de la Universidad Mayor de San Andrés, es líder en la generación y transmisión de conocimientos científicos y formación de recursos humanos altamente calificados y competitivos en el campo de las ciencias biológicas, con énfasis en la planificación y gestión de la conservación y aprovechamiento sostenible de los recursos de la biodiversidad y en la resolución de los problemas ambientales, respondiendo a su alto compromiso con el desarrollo económico-social sostenible de la región y del país.</p>
    <h2>VISIÓN</h2>
    <p>La Carrera de Biología de la Universidad Mayor de San Andrés es una institución de educación superior de gran dinámica y alta calidad académica y científica, cuyos contenidos académicos responden a la demanda social, acreditada nacionalmente, y ligada internacionalmente como líder en la generación de conocimientos científicos y formación de recursos humanos de calidad.</p>

    </div>
  </div>
</div>
<?php
include "../cuerpoF.inc.php";
?>    
