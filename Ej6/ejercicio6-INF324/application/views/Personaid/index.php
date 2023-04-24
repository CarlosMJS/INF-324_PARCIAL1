
<!--Aquí estará el Crud de Usuario-->
<div>
  <ul class="nav nav-pills">
  <li role="presentation" class="active">
    <a href="#home" aria-controls="home" role="tab" data-toggle="tab" >DATOS</a>
  </li>
  <li role="presentation">
    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ADICIONAR</a>
  </li>
</ul>
  <!-- Tab panes -->
  <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
          
          <table class="table table-hover">
              
              <thead>
              
              <th>ID</th>
              <th>CI</th>
              <th>Nombre completo</th>
              <th>fecha de nacimiento</th>
              <th>telefono</th>
              <th>departamento</th>
              <th><center>Acciones</center></th>
              
              </thead>
              
              <tbody>
                  <?php foreach ($listaUsuario as $value) { ?>
                  <tr>
                      <td><?php echo $value->id; ?></td>
                      <td><?php echo $value->CI; ?></td>
                      <td><?php echo $value->Nombre_completo; ?></td>
                      <td><?php echo $value->fechaNaci; ?></td>
                      <td><?php echo $value->telefono; ?></td>
                      <td><?php echo $value->departamento; ?></td>
                      <td> 
                            <center>
                                <a href="<?php echo base_url('Personaid/delete')."/".$value->id; ?>" title="Eliminar" class="btn btn-default">ELIMINAR</a>
                                <a href="<?php echo base_url('Personaid/edit')."/".$value->id; ?>" title="Editar" class="btn btn-default">EDITAR</a>
                          </center>
                      </td>
                      
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
          
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
      <h2>Agregar datos</h2>
          <div class="row">
              <div class="col-md-7">
                <form method="POST" action="<?php echo base_url('Personaid/insert')?>">
                  <div class="form-group">
                    <div class="col">
                      <label>CI</label>
                      <input type="text" class="form-control" name="CI" value="" >
                    </div>
                    <div class="col">
                      <label>Nombre completo</label>
                      <input type="text" class="form-control" name="Nombre_completo" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col">
                      <label>Fecha de nacimiento</label>
                      <input type="date" class="form-control" name="fechaNaci" value="" >
                    </div>
                    <div class="col">
                      <label>telefono</label>
                      <input type="text" class="form-control" name="telefono" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col">
                      <label>departamento</label>
                      <input type="text" class="form-control" name="departamento" value="" >
                    </div>
                  </div>
                  <div>
                      <button type="submit" class="btn btn-default">ADICIONAR</button>
                      <a href="../ejercicio6-INF324/" class="btn btn-default">CANCELAR</a>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>
