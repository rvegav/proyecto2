@extends('layout')

@section('contenido')


<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-md-7 col-md-offset-3">
            <h1>Administración de Roles</h1>
          </div>
          
        </div>
      </div>
     
      <div class="panel-body">
      <form method="POST" action="{{ route('users.store') }}">
        {!! csrf_field() !!}
        
        <div class="row">
          <div class="col-md-2">
            <label for="func">Rol</label>
            <div class="input-group">
              <input type="text" name="rol" class="form-control" value="" placeholder="Rol">
            </div>
          </div>
          <div class="col-md-2">
            <label for="func">Nombre</label>
            <div class="input-group">
              <input type="text" name="nombre_rol" class="form-control" value="" placeholder="Nombre del rol">
            </div>
          </div>
          <div class="col-md-2">
            <label for="func">Descripción</label>
            <div class="input-group">
              <input type="text" name="desc" class="form-control" value="" placeholder="Breve descripción">
            </div>
          </div>  
        </div>
        <hr>
        <div class="row">
          <div class="col-md-3 col-md-offset-5">
            <input type="submit" class="btn btn-primary" value="Guardar">
            <button type="button" class="btn btn-primary" name="button">Cancelar</button>
            {{-- <a href="{{ route('home') }}"><button type="button" class="btn btn-primary" name="button">Volver</button></a> --}}
          </div>
        </div>
        <hr>
        <div class="row">
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#obras" data-parent="#accordion">Obras</button>
          <div id="obras" class="collapse">
            <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#doc">Documentos</button>
            <div id="doc" class="panel-collapse collapse">
              <input type="checkbox" name="vehicle1" value="Bike">Agregar Documento<br>
              <input type="checkbox" name="vehicle3" value="Boat">Editar Documento<br>
              <input type="checkbox" name="vehicle2" value="Car">Eliminar Documento<br>
            </div>
            <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#almacen" data-parent="#accordion">Almacén</button>
            <div id="almacen" class=" panel-collapse collapse">
              <input type="checkbox" name="vehicle1" value="Bike">Realizar Pedido<br>
              <input type="checkbox" name="vehicle3" value="Boat">Controlar el Stock<br>
              <input type="checkbox" name="vehicle2" value="Car">a determinar<br>
            </div>
            <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#empleado" data-parent="#accordion">Empleados</button>
            <div id="empleado" class="panel-collapse collapse">
              <input type="checkbox" name="vehicle1" value="Bike">Asignar Empleado<br>
              <input type="checkbox" name="vehicle3" value="Boat">Desvincular Empleado<br>
              <input type="checkbox" name="vehicle2" value="Car">a determinar<br>
            </div>
            
          </div>
        </div>
        <div class="row">
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#seguridad">Seguridad</button>
          <div id="seguridad" class="collapse">
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#usuario">Usuario</button>
            <div id="usuario" class="collapse">
              <input type="checkbox" name="vehicle1" value="Bike">Agregar Usuario<br>
              <input type="checkbox" name="vehicle3" value="Boat">Editar Usuario<br>
              <input type="checkbox" name="vehicle2" value="Car">Eliminar Usuario<br>
            </div>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#roles">Roles</button>
            <div id="roles" class="collapse">
              <input type="checkbox" name="vehicle1" value="Bike">Agregar Rol<br>
              <input type="checkbox" name="vehicle3" value="Boat">Editar Rol<br>
              <input type="checkbox" name="vehicle2" value="Car">Eliminar Rol<br>
            </div>    
          </div>
          
        </div>
        <div class="row">
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mant">Mantenimiento</button>
          <div id="mant" class="collapse">
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#empl">Empleados</button>
            <div id="empl" class="collapse">
              
            </div>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#rubro">Rubros</button>
            <div id="rubro" class="collapse">
              
            </div> 
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mat">Materiales</button>
            <div id="mat" class="collapse">
              
            </div>   
          </div>
          
        </div>
        <table class="table table-responsive">
          <thead>
            <tr>
                <th>ID</th>
                <th>Rol</th>
                <th>Descripción</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead> 
        <tbody>
          @foreach($roles as $role)
            <tr>
              <td>{{ $role->id }}</td>
              <td>{{ $role->role_name }}</td>
              <td>{{ $role->role_description }}</td>
              <td>{{ $role->created_at }}</td>
              <td>{{ $role->updated_at }}</td>
              <td>--</td>
              <td>
                <a href="{{ route('roles.edit', $role->id) }}">Editar</a>
                <form style="display: inline" method="POST" action="{{ route('roles.destroy', $role->id) }}">
                  {!! csrf_field() !!}
                  {!! method_field('DELETE') !!}
                  <button type="submit">Eliminar</button>
                </form>
              </td>
          </tr>
          @endforeach
        </tbody>     

        </table>
        </form>
      </div>
    </div>    

     {{-- <table class="table table-responsive">
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
  </table> --}}

    </div>
  </div>
</div>
</div>

@stop