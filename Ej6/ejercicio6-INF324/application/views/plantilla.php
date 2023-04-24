<!Doctype html>
<html lang="es">
    <head>
        <link href="<?php echo base_url('librerias/css/bootstrap.css')?>" rel="stylesheet">
        <script src="<?php echo base_url('librerias/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('librerias/js/bootstrap.js')?>"></script>
        <title>PROGRAMACION MULTIMEDIAL</title>
        <style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 60px;
		color: #4F5155;
	}
	#container {
		margin: 20px;
	}
	</style>
    </head>
    <body>        
        <div id="container">
            <!--Aquí va el contenido de las vistas-->            
            <div class="col-md-10 col-md-offset-1"> 
                <div class="row">
                    <div class="col-md-12" >
                        <center>
                        <h1>PROGRAMACION MULTIMEDIAL</h1>
                        <h2>CODEIGNITER</h2>
                        </center>
                        <?php
                        $this->load->view($contenido);            
                        ?>                
                    </div>
                </div> 
                <footer>
                </footer>
            </div>
            
        </div>
    </body>    
</html>