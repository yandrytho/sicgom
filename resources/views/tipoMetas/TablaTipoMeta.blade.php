<table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Tipo Meta</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                       
              @foreach($tipoMetas as $tipoMet) 
                        <tr>
                          <td>{{$tipoMet->id}}</td>
                          <td>{{$tipoMet->tipoMeta}}</td>


                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a onclick="cargar_datos({{$tipoMet->id}})" href="#" data-toggle="modal" data-target="#myModal_ModificarTipoMeta" >Modificar</a>
                                        </li>
                                        <li><a onclick="EliminarTipoMeta({{$tipoMet->id}})" href="javascript:void(0)">Eliminar</a>
                                    </li>
                                    </ul>
                            </div>  
                          </td>
                        </tr> 
                        @endforeach                     
                      </tbody>
                    </table>