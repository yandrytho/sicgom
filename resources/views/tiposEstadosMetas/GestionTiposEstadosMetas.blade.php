    <!-- jQuery -->
    {!!Html::script('js/tiposEstadosMetas.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Tipos de Estado en las Metas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarTipoEstadoMeta"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('tiposEstadosMetas.TablaTiposEstadosMetas')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar Tipos de Estado en las Metas-->

<div class="modal fade" id="myModal_ModificarTipoEstadoMeta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Tipos de Estado en las Metas </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarTipoEstadoMeta','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdTipoEstadoMeta"> 

           
            {!!Form::label('Tipo Estado de Meta:')!!}
            {!!Form::text('tipoEstadoMeta_A',null,['id'=>'tipoEstadoMeta_A', 'class'=>'form-control','placeholder'=>'Ingrese Tipo Estado de Metas','required'=>''])!!}
              <span id="span_tipoEstadoMetas_A"></span>
              <span id="span_mensaje_tipoEstadoMeta_A" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion_A',null,['id'=>'descripcion_A', 'class'=>'form-control','placeholder'=>'Ingrese descripcion de Estado de Meta','required'=>''])!!}
              <span id="span_descripcion_A"></span>
              <span id="span_mensaje_descripcion_A" style="display: block;color: red;"></span>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarTipoEstadoMeta', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar Tipos de Estado en las Metas -->

<!--  Modal para Ingresar Tipos de Estado en las Metas -->

<div class="modal fade" id="myModal_IngresarTipoEstadoMeta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Tipo Estados de Metas</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresartipoEstadoMetas','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdTipoEstadoMeta">
              

              {!!Form::label('Tipos Estado de Meta:')!!}
              {!!Form::text('tipoEstadoMeta',null,['id'=>'tipoEstadoMeta', 'class'=>'form-control','placeholder'=>'Ingrese Tipo de Estado de Meta','required'=>''])!!}
              <span id="span_tipoEstadoMeta "></span>
              <span id="span_mensaje_tipoEstadoMeta " style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese descripcion de Estado de Meta','required'=>''])!!}
              <span id="span_descripcion "></span>
              <span id="span_mensaje_descripcion " style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarTipoEstadoMeta" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar Tipos de Estado en las Metas -->
   
