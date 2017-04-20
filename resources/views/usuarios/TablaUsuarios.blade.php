<table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Tipo Usuario</th>
                          <th>Nombre</th>
                          <th>Usuario</th>
                          <th>Password</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
         @foreach($Usuarios as $Cat) 
                        <tr>
              @if($Cat->tipoUsuario=="Administrador")
                          <td>{{$Cat->tipoUsuario}}</td>
                          <td>{{$Cat->name}}</td>
                          <td>{{$Cat->email}}</td>
                          <td>{{$Cat->password}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a onclick="cargar_datos({{$Cat->id}})" href="#" data-toggle="modal" data-target="#myModal_ModificarUsuarios" >Modificar</a>
                                        </li>
                                    </ul>
                            </div>  
                          </td>
                       
          @else
                        
                        <td>{{$Cat->tipoUsuario}}</td>
                          <td>{{$Cat->name}}</td>
                          <td>{{$Cat->email}}</td>
                          <td>{{$Cat->password}}</td>
                          <td>
                            <div class="btn-group">
                            <button type="button" class="btn btn-default">Acciones</button>
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a onclick="cargar_datos({{$Cat->id}})" href="javasrcipt:void(0)" data-toggle="modal" data-target="#myModal_ModificarUsuarios" >Modificar</a>
                                </li>
                                <li><a onclick="EliminarUsuarios({{$Cat->id}})" href="javascript:void(0)">Eliminar</a>
                                </li>
                              </ul>
                        </div>  
                        </td>
          @endif         
                        </tr> 
                        @endforeach                     
                      </tbody>
                    </table>