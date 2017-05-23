<table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Categoria de Evidencia
                          </th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                       
              @foreach($categoriaEvidencias as $cat) 
                        <tr>
                          <td>{{$cat->id}}</td>
                          <td>{{$cat->categoria_evidencia}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a onclick="cargar_datos({{$cat->id}})" href="javascript:void(0)" data-toggle="modal" data-target="#myModal_ModificarCategoriaEvidencia" >Modificar</a>
                                        </li>
                                        <li><a onclick="EliminarCategoriaEvidencia({{$cat->id}})" href="javascript:void(0)">Eliminar</a>
                                    </li>
                                    </ul>
                            </div>  
                          </td>
                        </tr> 
                        @endforeach                     
                      </tbody>
                    </table>