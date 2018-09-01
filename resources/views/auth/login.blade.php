@extends('layout')

@section('contenido')
<br>
<br>
<br>
<br>
  <div class="container" id="login">
    <div class=''col-md-3 col-md-offset-4''>
      <div class="col-md-6 col-md-offset-3">
        <div class="well" id="fondo">  
        
            <form method="POST" action="login" >          
               {!! csrf_field() !!}          
               <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                     <label for="usuario">Usuario</label>
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                
                           <input type="email" id="email" class="form-control" name="email" value="" placeholder="Usuario">              
                         </div>
                  </div>
               </div>
            
            <div class="row">            
               <div class="col-md-6 col-md-offset-3">
                  <div class="form-group">            
                     <label for="password">Contraseña</label>
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                           <input type="password" id="password" class="form-control" name="password" value="" placeholder="Contraseña">
                        </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-6 col-md-offset-3">
                  <input type="submit" class="btn btn-primary btn-block" value="Iniciar Sesión"></input>
               </div>
            </div>
         </form>
      </div>
    </div>
    </div>
</div>
 
@stop



