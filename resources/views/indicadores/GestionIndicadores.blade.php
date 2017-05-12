    <!-- jQuery -->
    {!!Html::script('js/Indicadores.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Indicadores</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarIndicador"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('indicadores.TablaIndicadores')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar Tipos de Estado en las Metas-->

<div class="modal fade" id="myModal_ModificarPoliticaInstitucional" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Indicadores </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarTipoEstadoMeta','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdIndicador"> 

           
             {!!Form::label('Indicador:')!!}
              {!!Form::text('indicador_A',null,['id'=>'indicador_A', 'class'=>'form-control','placeholder'=>'Ingrese Indicador','required'=>''])!!}
              <span id="span_indicador"></span>
              <span id="span_mensaje_indicador" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion_A',null,['id'=>'descripcion_A', 'class'=>'form-control','placeholder'=>'Ingrese descripcion de Indicador','required'=>''])!!}
              <span id="span_descripcion"></span>
              <span id="span_mensaje_descripcion" style="display: block;color: red;"></span>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarIndicador', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar Tipos de Estado en las Metas -->


<!--  Modal para Ingresar Tipos de Estado en las Metas -->

<div class="modal fade" id="myModal_IngresarIndicador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Indicadores</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarIndicadores','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdIndicador">
              

              {!!Form::label('Indicador:')!!}
              {!!Form::text('indicador',null,['id'=>'indicador', 'class'=>'form-control','placeholder'=>'Ingrese Indicador','required'=>''])!!}
              <span id="span_indica"></span>
              <span id="span_mensaje_indicador" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese descripcion','required'=>''])!!}
              <span id="span_descripcion"></span>
              <span id="span_mensaje_descripcion" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarIndicador" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar Tipos de Estado en las Metas -->
   
