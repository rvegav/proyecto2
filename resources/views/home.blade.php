@extends('layout')

@section('contenido')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6 col-md-offset-4">
          <h2>BIENVENIDO AL SISTEMA</h2>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
         <div class="card bg-primary text-white " id="obra">
            <div class="card-body">
              <h3 class="card-title text-center">Obras</h3>
              <p class="card-text text-center"><i class="fa fa-industry fa-4x"></i><i class="fa fa-home fa-5x"></i></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-primary text-white " id="users">
            <div class="card-body">
              <h3 class="card-title text-center">Usuarios</h3>
              <p class="card-text text-center"><i class="fa fa-users fa-5x"></i><i class="fa fa-gear fa-5x"></i></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-primary text-white" id="herramientas">
            <div class="card-body">
              <h3 class="card-title text-center">Herramientas</h3>
              <p class="card-text text-center"><i class="fa fa-wrench fa-5x"></i><i class="fa fa-gavel fa-5x"></i></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-md-offset-2">
          <div class="card bg-primary text-white" id="almacen">
            <div class="card-body">
              <h3 class="card-title text-center">Almacen General</h3>
              <p class="card-text text-center"><i class="fa fa-cube fa-5x"></i></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-primary text-white" id="empleados">
            <div class="card-body">
              <h3 class="card-title text-center">Empleados</h3>
              <p class="card-text text-center"><i class="fa fa-male fa-5x"></i><i class="fa fa-male fa-5x"></i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel-footer">
      <footer>Copyright ® {{ date('Y') }}</footer>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#users").click(function(){
    $.ajax({
      url: "{{url()->current()}}",
      success: function(){
        window.location.replace("{{url('usuarios')}}");
      }
    })
  });
  $("#obras").click(function(){
    $.ajax({
      url: "{{url()->current()}}",
      success: function(){
        window.location.replace("{{url('obras')}}");
      }
    })
  });
  $("#herramientas").click(function(){
    $.ajax({
      url: "{{url()->current()}}",
      success: function(){
        window.location.replace("{{url('herramientas')}}");
      }
    })
  });
  $("#almacen").click(function(){
    $.ajax({
      url: "{{url()->current()}}",
      success: function(){
        window.location.replace("{{url('almacen')}}");
      }
    }) 
  });
  $("#empleados").click(function(){
    $.ajax({
      url: "{{url()->current()}}",
      success: function(){
        window.location.replace("{{url('empleados')}}");
      }
    })
  });
</script>
{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>SIGECO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
</body>
</html>
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
--}}
@stop