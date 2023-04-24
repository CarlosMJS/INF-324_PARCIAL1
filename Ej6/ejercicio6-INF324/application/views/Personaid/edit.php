<div class="row">
    <div class="col-md-7 col-md-offset-2">
    <h2>Actualizar datos</h2>
        <form method="POST" action="<?php echo base_url('Personaid/update')?>">
            <?php foreach ($datosUsuario as $value) { ?>            
                    <div class="row">
                      <div class="col">
                        <label>ID</label>
                        <input type="text"  class="form-control" name="id" value="<?php echo $value->id; ?>" readonly>
                      </div>
                      <div class="col">
                        <label>CI</label>
                        <input type="text" class="form-control" name="CI" value="<?php echo $value->CI;?>">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                     <div class="col">
                        <label>Nombre completo</label>
                        <input type="text" class="form-control" name="Nombre_completo" value="<?php echo $value->Nombre_completo;?>">
                      </div>
                      <div class="col">
                        <label>Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fechaNaci" value="<?php echo $value->fechaNaci;?>">
                      </div>
                      
                    </div>
                    <br>
                    <div class="row">
                      <div class="col">
                        <label>telefono</label>
                        <input type="text" class="form-control" name="telefono" value="<?php echo $value->telefono;?>">
                      </div>
                      <div class="col">
                        <label>departamento</label>
                        <input type="text" class="form-control" name="departamento" value="<?php echo $value->departamento;?>" >
                      </div>
                    </div>
                    <br>
          <?php } ?>
            <button type="submit" class="btn btn-default">MODIFICAR</button>
          </form>
    </div>
    
</div>
        

