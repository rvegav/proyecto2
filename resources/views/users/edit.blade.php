@extends('layout')

@section('contenido')


<form method="POST" action="{{ route('users.update', $user->id) }}">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}

    <div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Administración de Usuarios</h1>
      </div>
     
      <div class="panel-body">
        <div class="col-md-2">
          <label for="func">Nombre</label>
          <div class="input-group">
            <input type="text" name="nombre" class="form-control" value="{{ $user->name }}" placeholder="Nombre del empleado">
          </div>
        </div>
        <div class="col-md-2">
          <label for="func">Usuario</label>
          <div class="input-group">
            <input type="text" name="usuario" class="form-control" value="{{ $user->username }}" placeholder="Usuario">
          </div>
        </div>
        <div class="col-md-2">
          <label for="func">Email</label>
          <div class="input-group">
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Email">
          </div>
        </div>
         <div class="col-md-2">
          <label for="password">Contraseña</label>
                        <div class="input-group">
                           <input type="password" id="password" class="form-control" name="pass" value="" placeholder="Contraseña">
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
        <div class="row">
          <br>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-3">
            <input type="submit" class="btn btn-primary" value="Guardar">
            <button type="button" class="btn btn-primary" name="button">Cancelar</button>
          </div>
        </div>
        <hr>

</form>
    </div>
  </div>
</div>
</div>

@stop