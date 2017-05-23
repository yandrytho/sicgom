    <!-- jQuery -->
    {!!Html::script('js/categoriaEvidencia.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Categoria de Evidencias</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarCategoriaEvidencia"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('categoriaEvidencias.TablaCategoriaEvidencia')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar Categoria de Evidencia-->

<div class="modal fade" id="myModal_ModificarCategoriaEvidencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Categoria de Evidencia </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarCategoriaEvidencia','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdCategoriaEvidencia"> 

           
              {!!Form::label('Categoria de Evidencia:')!!}
              {!!Form::text('categoriaEvidencia_A',null,['id'=>'categoriaEvidencia_A', 'class'=>'form-control','placeholder'=>'Ingrese Categoria de Evidencia','required'=>''])!!}
              <span id="span_categoriaEvidencia_A"></span>
              <span id="span_mensaje_categoriaEvidencia_A" style="display: block;color: red;"></span>


            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarCategoriaEvidencia', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar categoria de evidencia -->


<!--  Modal para Ingresar categorias Evidencias -->

<div class="modal fade" id="myModal_IngresarCategoriaEvidencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Indicadores</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarCategoriaEvidencia','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdCategoriaEvidencia">
              

              {!!Form::label('Categoria de Evidencia:')!!}
              {!!Form::text('categoriaEvidencia',null,['id'=>'categoriaEvidencia', 'class'=>'form-control','placeholder'=>'Ingrese Categoria de Evidencia','required'=>''])!!}
              <span id="span_categoriaEvidencia"></span>
              <span id="span_mensaje_categoriaEvidencia" style="display: block;color: red;"></span>

              </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarCategoriaEvidencia" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar Categorias Evidencias -->
   
