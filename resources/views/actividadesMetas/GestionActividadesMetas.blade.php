    <!-- jQuery -->
    {!!Html::script('js/actividadMeta.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Actividades de Metas </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarActividadMeta"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('actividadesMetas.TablaActividadesMetas')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar actividad de Metas-->

<div class="modal fade" id="myModal_ModificarActividadMeta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Actividad de Meta </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarActividadMeta','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdActividadMeta"> 

           
            {!!Form::label('Actividad de Meta:')!!}
              {!!Form::text('actividadMeta_A',null,['id'=>'actividadMeta_A', 'class'=>'form-control','placeholder'=>'Ingrese Activiad de meta','required'=>''])!!}
              <span id="span_actividadMeta_A"></span>
              <span id="span_mensaje_actividadMeta_A" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion_A',null,['id'=>'descripcion_A', 'class'=>'form-control','placeholder'=>'Ingrese descripcion','required'=>''])!!}
              <span id="span_descripcion_A"></span>
              <span id="span_mensaje_descripcion_A" style="display: block;color: red;"></span>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarActividadMeta', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar actividad de  Metas -->


<!--  Modal para Ingresar Actividad Meta -->

<div class="modal fade" id="myModal_IngresarActividadMeta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Actividad de Meta</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarActividadMeta','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              

              {!!Form::label('Actividad de Meta:')!!}
              {!!Form::text('actividadMeta',null,['id'=>'actividadMeta', 'class'=>'form-control','placeholder'=>'Ingrese Activiad de meta','required'=>''])!!}
              <span id="span_actividadMeta"></span>
              <span id="span_mensaje_actividadMeta" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese descripcion','required'=>''])!!}
              <span id="span_descripcion"></span>
              <span id="span_mensaje_descripcion" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarActividadMeta" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar Actividad de meta -->
   
