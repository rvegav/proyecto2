@extends('layout')

@section('contenido')

	<a href="{{ route('users.create') }}"><button class="btn btn-success col-md-s col-md-offset-3">Administrar Usuarios</button></a>
	{{-- <a href="{{ route('') }}"><button class="btn btn-success">Administrar Roles</button></a> --}}
{{-- 
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-6 col-md-offset-4">
          <h2>BIENVENIDO AL SISTEMA</h2>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4">
         <div class="card bg-primary text-white ">
            <div class="card-body">
              <h3 class="card-title text-center">Obras</h3>
              <p class="card-text text-center"><i class="fa fa-industry fa-4x"></i><i class="fa fa-home fa-5x"></i></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-primary text-white " id="users">
            <div class="card-body">
              <h3 class="card-title text-center">Seguridad</h3>
              <p class="card-text text-center"><i class="fa fa-users fa-5x"></i><i class="fa fa-gear fa-5x"></i></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-primary text-white ">
            <div class="card-body">
              <h3 class="card-title text-center">Herramientas</h3>
              <p class="card-text text-center"><i class="fa fa-wrench fa-5x"></i><i class="fa fa-gavel fa-5x"></i></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-md-offset-2">
          <div class="card bg-primary text-white ">
            <div class="card-body">
              <h3 class="card-title text-center">Almacén General</h3>
              <p class="card-text text-center"><i class="fa fa-cube fa-5x"></i></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-primary text-white">
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
      url: "/",
      success: function(){
        window.location.replace("{{url('usuarios')}}");
      }
    })
  })
</script>


 --}}


@stop

