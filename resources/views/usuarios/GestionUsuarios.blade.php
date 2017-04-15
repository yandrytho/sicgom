    <!-- jQuery -->
    {!!Html::script('js/usuario.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Usuarios</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="myModal_GestionUsuarios" class="dropdown-toggle" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Administración de Usuarios
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Tipo Usuario</th>
                          <th>Usuario</th>
                          <th>Password</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                     	@foreach($Usuarios as $Cat) 
    					<tr>
                          <td>{{$Cat->id}}</td>
                          <td>{{$Cat->tipoUsuario}}</td>
                          <td>{{$Cat->user}}</td>
                          <td>{{$Cat->password}}</td>
                          <td>
                          	<div class="btn-group">
                      			<button type="button" class="btn btn-default">Acciones</button>
                      			<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        			<span class="caret"></span>
                        			<span class="sr-only">Toggle Dropdown</span>
                      			</button>
                      				<ul class="dropdown-menu" role="menu">
                        				<li><a onclick="cargar_datos({{$Cat->id}})" href="#" data-toggle="modal" data-target="#myModal_GestionUsuarios" >Modificar</a>
                        				</li>
                        				<li><a onclick="EliminarUsuarios({{$Cat->id}})" href="#">Eliminar</a>
                        				</li>
                      				</ul>
                    		</div>	
                    	  </td>
                        </tr> 
    					@endforeach                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para ACTUALIZAR -->

<div class="modal fade" id="myModal_GestionUsuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
            <select id="idTipoUsuario" name="tipoUsuario" class="form-control text">
                                    <option>Seleccione...</option>
                                   
                                        <option value="{{$Cat->id}}"> {{$Cat->tipoUser}}</option>
                                    
                                    </select>
            {!!Form::label('Usuario:')!!}
            {!!Form::text('user',null,['id'=>'user_A', 'class'=>'form-control','placeholder'=>'Ingrese el nombre de Usuario','required'=>''])!!}

            {!!Form::label('Contrasena:')!!}
            {!!Form::text('password',null,['id'=>'password_A', 'class'=>'form-control','placeholder'=>'Ingrese contrasena de Usuario','required'=>''])!!}
            
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar Usuario', $attributes =['id'=>'btn_ActualizarUsuarios', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para ACTUALIZAR -->

   
