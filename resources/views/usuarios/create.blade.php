@extends('layout');

@section('contenido')
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Administracion de Usuarios</h1>
      </div>
      <div class="panel-body">
        <div class="col-md-3">
          <label for="func">USUARIO</label>
          <div class="input-group">
            <input type="text" name="func" class="form-control" value="" placeholder="usuario">
            <!-- <div class="input-group-addon" data-target="#modal_busqueda" data-toggle="modal"><i class='fa fa-search'></i></div> -->
          </div>
        </div>
        <div class="col-md-3">
          <label for="func">Empleado</label>
          <div class="input-group">
            <input type="text" name="func" class="form-control" value="" placeholder="empleado">
            <!-- <div class="input-group-addon" data-target="#modal_busqueda" data-toggle="modal"><i class='fa fa-search'></i></div> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Rol</label>
            <?php $c=0 ?>
            <select class="form-control" id="exampleFormControlSelect1">
          	
              
            </select>
          </div>
        </div>
        <div class="col-md-2">
          <label for="fech_ini">Fecha Asignacion</label>
          <div class="input-group">
            <input type="date" class="form-control" >
          </div>
        </div>
        <div class="row">
          <br>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <button type="button" class="btn btn-primary" name="button">Nuevo</button>
            <button type="button" class="btn btn-primary" name="button">Buscar</button>
            <button type="button" class="btn btn-primary" name="button">Cancelar</button>
            <button type="button" class="btn btn-primary" id="volver" name="button">Volver</button>

          </div>
        </div>
        <div class="row">

        </div>
        <hr>
        <table class="table table-responsive">
          <thead>
            <tr>
              <th>Usuario</th>
              <th>Empleado</th>
              <th>Perfil Actual</th>
              <th>Fecha de asignacion</th>
              <th>Estado</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>scaballero</td>
              <td>Sebastian Adrian Caballero Pererira</td>
              <td>Administrativo</td>
              <td>01-01-2018</td>
              <td>Activo</td>
              <td><a class="" href="#">Editar</a>  <a class="" href="#">Eliminar</a></td>
            </tr>
            <tr>
              <td>jbritez</td>
              <td>Johana Mabel Britez Filartiga</td>
              <td>Administrativo</td>
              <td>01-03-2018</td>
              <td>Activo</td>
              <td><a class="" href="#">Editar</a>  <a class="" href="#">Eliminar</a></td>
            </tr>
            <tr>
              <td>rvega</td>
              <td>Rolando Andres Vega Vega</td>
              <td>Operativo</td>
              <td>01-05-2018</td>
              <td>Activo</td>
              <td><a class="" href="#">Editar</a>  <a class="" href="#">Eliminar</a></td>

            </tr>
          </tbody>
        </table>
      </div>
      <div class="panel-footer">

      </div>
      <div class="modal fade" id="modal_busqueda" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id=""></h4>
            </div>
            <div class="modal-body">
              <form class="" action="#" method="post">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                      <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                          <label>Nro. de documento de identidad</label>
                          <input type="number" class="form-control" name="func_ci" id="func_ci" placeholder="Nro. de documento de identidad">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Primer nombre</label>
                          <input type="text" class="form-control" name="func_pn" id="func_pn" placeholder="Primer nombre">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Segundo nombre</label>
                          <input type="text" class="form-control" name="func_sn" id="func_sn" placeholder="Segundor nombre">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Primer apellido</label>
                          <input type="text" class="form-control" name="func_pa" id="func_pa" placeholder="Primer apellido">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Segundo apellido</label>
                          <input type="text" class="form-control" name="func_sa" id="func_sa" placeholder="Segundor apellido">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                    <button type="submit" name="getDatoFunc" id="getDatoFunc" class="btn btn-primary btn-block"><i class='fa fa-search'></i> Buscar funcionario</button>
                  </div>
                </div>
              </form>
             
            </div>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  $("#volver").click(function(){
    $.ajax({
      url: "{{url()->current()}}",
      success: function(){
        window.location.replace("{{url()->previous()}}");
      }
    })
  })
</script>
@stop