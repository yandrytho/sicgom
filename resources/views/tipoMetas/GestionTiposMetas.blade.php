    <!-- jQuery -->
    {!!Html::script('js/tipoMeta.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Tipos de Metas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarTipoMeta"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('tipoMetas.TablaTipoMeta')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar Tipos de Metas-->

<div class="modal fade" id="myModal_ModificarTipoMeta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Tipos de Metas </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarTipoMeta','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdTipoMeta"> 

           
            {!!Form::label('Tipo de Meta:')!!}
            {!!Form::text('tipoMeta_A',null,['id'=>'tipoMeta_A', 'class'=>'form-control','placeholder'=>'Ingrese Tipo de Metas','required'=>''])!!}
              <span id="span_tipoMeta_A"></span>
              <span id="span_mensaje_tipoMeta_A" style="display: block;color: red;"></span>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarTipoMeta', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar Tipos de Metas -->

<!--  Modal para Ingresar Tipos de Metas -->

<div class="modal fade" id="myModal_IngresarTipoMeta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Tipo de Metas</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresartipoMeta','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              

              {!!Form::label('Tipos de Meta:')!!}
              {!!Form::text('tipoMeta',null,['id'=>'tipoMeta', 'class'=>'form-control','placeholder'=>'Ingrese Tipo de Estado de Meta','required'=>''])!!}
              <span id="span_tipoMeta"></span>
              <span id="span_mensaje_tipoMeta" style="display: block;color: red;"></span>

      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarTipoMeta" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar Tipos de Metas -->
   
