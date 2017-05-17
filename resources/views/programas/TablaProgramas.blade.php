<table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Programa</th>
                          <th>Fecha</th>
                          <th>Presupuesto</th>
                          <th>Descripcion</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                       
              @foreach($programas as $pro) 
                        <tr>
                          <td>{{$pro->id}}</td>
                          <td>{{$pro->programa}}</td>
                          <td>{{$pro->fechaModificacion}}</td>
                          <td>{{$pro->presupuesto}}</td>
                          <td>{{$pro->descripcion}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a onclick="cargar_datos({{$pro->id}})" href="#" data-toggle="modal" data-target="#myModal_ModificarPrograma" >Modificar</a>
                                        </li>
                                        <li><a onclick="EliminarPrograma({{$pro->id}})" href="javascript:void(0)">Eliminar</a>
                                    </li>
                                    </ul>
                            </div>  
                          </td>
                        </tr> 
                        @endforeach                     
                      </tbody>
                    </table>