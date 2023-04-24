<%@ Page Language="C#" AutoEventWireup="true" CodeFile="index.aspx.cs" Inherits="informatica_informatica" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <title>PROGRAMACION MULTIMEDIAL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../style.css" />
</head>
<body>
    <div class="hola">
        <h1>TE DAMOS LA BIENVENIDA A LA <br/> 
        FACULTAD DE CIENCIAS PURAS Y NATURALES <br/>
        F.C.P.N.</h1>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="../Default2.aspx">PRINCIPAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../biologia/index.aspx">BIOLOGIA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../fisica/index.aspx">FISICA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">INFORMATICA</a>
          </li>
        </ul>
          <ul class="navbar-nav">
            <a class="nav-link " href="../index.aspx">SALIR</a>
          </ul>
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
            <img src="../img/informatica.png"  style="max-width: 500px; display: block; margin: 0 auto;"/>
            <h2>OBJETIVOS</h2>
            <p>Formar profesionales responsables, éticos y altamente calificados en la ciencia y tecnología del área informática, para actuar en correspondencia con la sociedad .
            <br/>Fortalecer el Proceso Académico.
            <br/>Desarrollar y difundir la investigación científica y tecnológica.
            <br/>Desarrollar actividades de interacción social, local y regional.
            </p>
            <h2>MISIÓN</h2>
            <p>Desarrollar procesos académicos de formación, profesionalización e investigación en ciencia y tecnología informática de modo que los profesionales informáticos de la Carrera de Informática de la UMSA serán profesionales competitivos, éticos y responsables con altos niveles de conocimiento científico y tecnológico en informática, acorde con los requerimientos actuales y futuros tanto a nivel regional, nacional e internacional.
            </p>
            <h2>VISIÓN</h2>
            <p>Ser la Carrera líder a nivel Nacional y constituirse con un referente nacional de alto nivel.
            </p>
            <ul>
                <li>Por la formación de profesionales informáticos altamente competitivos tanto en ciencia y tecnología informática lográndose de ese modo su pronta incorporación al mercado laboral.
                </li>
                <li>Por los aportes a la región producto de los trabajos de investigación con impacto social.
                </li>
                <li>Por contar con docentes de excelente nivel académico.
                </li>
                <li>Por la vigencia de un plan de estudios que promueva el desarrollo de actitudes, habilidades y destrezas tanto en la ciencia y las tecnologías informáticas.
                </li>
            </ul>        
        </div>
      </div>
    </div>
<footer>
  <p>CARLOS MANUEL JAHUIRA SULLCA<br/>
  <a href="mailto:carlosleu11@gmail.com">carlosleu11@gmail.com</a></p>
</footer>
</body>
</html>