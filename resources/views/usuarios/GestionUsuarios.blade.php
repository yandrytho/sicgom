    <!-- jQuery -->
    {!!Html::script('js/usuario.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración de Usuarios</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarUsuario"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('usuarios.TablaUsuarios')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar Usuarios -->

<div class="modal fade" id="myModal_ModificarUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Usuarios</h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarUsuarios','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdUsuario"> 

            <label for="disabledTextInput">Tipo Usuarios</label>
            <select id="tipoUsuario_A" name="tipoUsuario_A" class="form-control text">
                                    <option id="tipoUsuario_A" name="tipoUsuario_A">Seleccione Tipo Usuario</option>
                                        <option value="Administrador"> Administrador </option>
                                        <option value="Secretario"> Secretraria</option>
                                    </select>

            {!!Form::label('Nombre:')!!}
            {!!Form::text('nombre_A',null,['id'=>'nombre_A', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de Usuario','required'=>''])!!}

            {!!Form::label('Usuario:')!!}
            {!!Form::text('user',null,['id'=>'user_A', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de Usuario','required'=>''])!!}

            {!!Form::label('Contrasena:')!!}
            {!!Form::text('password_A',null,['id'=>'password_A', 'class'=>'form-control','placeholder'=>'Ingrese contrasena de Usuario','required'=>''])!!}
            
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar Usuario', $attributes =['id'=>'btn_ActualizarUsuarios', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar Usuarios -->

<!--  Modal para Ingresar Usuarios -->

<div class="modal fade" id="myModal_IngresarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Usuarios</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarUsuarios','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdUsuario">

              <label for="disabledTextInput">Tipo Usuarios</label>
              <select id="tipoUsuario" name="tipoUsuario" class="form-control text">
                                      <option>Seleccione Tipo Usuario</option>
                                          <option value="Administrador"> Administrador </option>
                                          <option value="Secretario"> Secretario </option>
                                      </select>
              <span id="span_tipoUsuario"></span>
              <span id="span_mensaje_tipoUsuario" style="display: block;color: red;"></span>                        
              {!!Form::label('Nombre:')!!}
              {!!Form::text('nombre',null,['id'=>'nombre', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de Usuario','required'=>''])!!}
              <span id="span_nombre"></span>
              <span id="span_mensaje_nombre" style="display: block;color: red;"></span>

              {!!Form::label('Usuario:')!!}
              {!!Form::text('usuario',null,['id'=>'usuario', 'class'=>'form-control','placeholder'=>'Ingrese el correo de Usuario','required'=>''])!!}
              <span id="span_usuario"></span>
              <span id="span_mensaje_usuario" style="display: block;color: red;"></span>

              {!!Form::label('Contraseña:')!!}
              {!!Form::text('password',null,['id'=>'password', 'class'=>'form-control','placeholder'=>'Ingrese contrasena de Usuario','required'=>''])!!}
              <span id="span_password"></span>
              <span id="span_mensaje_password" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarUsuarios" >Registar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar Usuarios -->
   
