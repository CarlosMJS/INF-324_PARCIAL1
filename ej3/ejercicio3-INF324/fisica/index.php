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
        <a class="nav-link " href="../biologia/">BIOLOGIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">FISICA</a>
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
        <img src="../img/fisica.png"  style="max-width: 500px; display: block; margin: 0 auto;"/>
        <h2>OBJETIVOS</h2>
        <p>
        Constituirse en un centro de excelencia en el ámbito de su particular disciplina.
        <br>
        Formar investigadores profesionales en Física con sólidos conocimientos teóricos y experimentales en los fundamentos de las principales áreas de esta ciencia.
        <br>
        Desarrollar docencia universitaria, investigación científica, interacción social y ofrecer servicios académicos y técnicos para posibilitar y contribuir al desarrollo tecnológico y al incremento de la cultura científica de la región y del país.
        <br>
        Ofrecer un plan de estudios racional, integral y flexible, capaz de incorporar progresivamente niveles de posgrado disciplinarios.
        </p>
        <h2>MISIÓN</h2>
        <p>
        La Carrera de Física comparte sustancialmente la misión, visión y objetivos de la Universidad Boliviana, los de la UMSA y los de la FCPN. No obstante, tiene como misión propia y fundamental la de formar y entrenar recursos humanos de alto nivel, especializados en la investigación científica, la docencia y la aplicación de conocimientos en todas las áreas de la física. Crear y difundir conocimiento en física o relacionado con la física, Comando y contribuyendo para la formación de profesionales críticos, independientes y capacitados tanto a nivel de pregrado como de posgrado. Estos profesionales deberán ser capaces de contribuir al desarrollo científico y tecnológico, como consecuencia al mejoramiento de las condiciones sociales y económicas del país.
        </p>
        <h2>VISIÓN</h2>
        <p>La visión de la Carrera es la de constituirse en un centro de excelencia en Física con capacidades plenas para ingresar competitivamente en el ámbito científico a nivel regional y mundial.
        </p>   

    </div>
  </div>
</div>
<?php
include "../cuerpoF.inc.php";
?>    