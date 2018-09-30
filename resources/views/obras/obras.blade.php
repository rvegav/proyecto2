@extends('layout')

@section('contenido')

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"></h3>
      </div>
      <div class="panel-body">
        <h2>Listado de Obras</h2>
        <p>El listado describe brevemente las obras</p>
        <hr>
        <div class="row">
          <button type="button"class="btn btn-primary" data-toggle="modal" data-target="#myModal" ><i class="fa fa-plus" style="font-size:48px;"></i></button>
        </div>
        <div class="row">
          <table class="table table-responsive">
            <thead>
              <tr>
                <th>Nombre Proyecto</th>
                <th>Cliente</th>
                <th>Fecha de Inicio</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Edificio H</td>
                <td>FP-UNA</td>
                <td>01-01-2018</td>
                <td><a href="documentos"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-file" style="font-size:24px;"></i></button></a><a href="empleados"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-users" style="font-size:24px;"></i></button></a><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-wrench" style="font-size:24px;"></i></button></td>
              </tr>
              <tr>
                <td>Edificio G</td>
                <td>FP-UNA</td>
                <td>01-03-2018</td>
                <td><a href="documentos"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-file" style="font-size:24px;"></i></button></a><a href="empleados"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-users" style="font-size:24px;"></i></button></a><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-wrench" style="font-size:24px;"></i></button></td>

              </tr>
              <tr>
                <td>Edificio E</td>
                <td>FP-UNA</td>
                <td>01-05-2018</td>
                <td><a href="documentos"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-file" style="font-size:24px;"></i></button></a><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-users" style="font-size:24px;"></i></button><button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-wrench" style="font-size:24px;"></i></button></td>

              </tr>
            </tbody>
          </table>

        </div>

      </div>
      <div class="panel-footer">

      </div>
    </div>
  </div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="panel panel-default">

          <div class="panel-body">
            <h2>Nuevo Proyecto</h2>
            <div class="row">
              <div class="col-md-5 col-md-offset-4">
                <label for="Descripcion">Nombre Proyecto</label>
                <input type="text" class="form-control" name="Descripción" value="" placeholder="Nombre del Proyecto">
              </div>

            </div>
            <div class="row">
              <div class="col-md-5 col-md-offset-4">
                <label for="Coste">Cliente</label>
                <input type="text"class="form-control" name="Coste" value="" placeholder="Cliente">
              </div>

            </div>
            <div class="row">
              <div class="col-md-5 col-md-offset-4">
                <label for="minimo">Fecha Inicio</label>
                <input type="date"class="form-control" name="minimo" value="">
              </div>

            </div>
            <div class="row">
              <div class="col-md-5 col-md-offset-4">
                <button type="button" class="btn btn-primary" name="button">Aceptar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"  name="button">Cancelar</button>
              </div>
              <div class="col-md-3">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

@stop