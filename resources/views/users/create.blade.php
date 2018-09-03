@extends('layout')

@section('contenido')

  <form method="POST" action="{{ route('users.store') }}">
    {!! csrf_field() !!}

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
            <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre del empleado">
          </div>
        </div>
        <div class="col-md-2">
          <label for="func">Usuario</label>
          <div class="input-group">
            <input type="text" name="usuario" class="form-control" value="" placeholder="Usuario">
          </div>
        </div>
        <div class="col-md-2">
          <label for="func">Email</label>
          <div class="input-group">
            <input type="email" name="email" class="form-control" value="" placeholder="Email">
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
     {{--        <select class="form-control" id="exampleFormControlSelect1">
              
              
            </select> --}}
            <input type="text" name="idrole" class="form-control" value="" placeholder="Rol">
          </div>
        </div>
        <div class="row">
          <br>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-3">
            <input type="submit" class="btn btn-primary" value="Guardar">
            <button type="button" class="btn btn-primary" name="button">Cancelar</button>
            <button type="button" class="btn btn-primary" id="volver" name="button">Volver</button>
            {{-- <a href="{{ route('home') }}"><button type="button" class="btn btn-primary" name="button">Volver</button></a> --}}
          </div>
        </div>
        <hr>
  </form>

     <table class="table table-responsive">
    <thead>
      <tr>
          <th>Empleado</th>
          <th>Usuario</th>
          <th>Fecha de Asignación</th>
          <th>Rol</th>
          <th>Estado</th>
          <th>Acción</th>
      </tr>
    </thead>
          
    <tbody>
      @foreach($users as $user)
        @if($user->estado == 'Activo')
        
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->created_at }}</td>
          <td>--</td>
          <td>{{ $user->estado }}</td>
          <td>
            <a href="{{ route('users.edit', $user->id) }}">Editar</a>

            <form style="display: inline" method="POST" action="{{ route('users.destroy', $user->id) }}">
                  {!! csrf_field() !!}
                  {!! method_field('DELETE') !!}
              <button type="submit">Eliminar</button>
            </form>
          </td>
        </tr>
        @endif
      @endforeach
    </tbody>
  </table>

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