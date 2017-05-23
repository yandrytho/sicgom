    <!-- jQuery -->
    {!!Html::script('js/tiemposPlanificaciones.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Tiempos de Planificacion </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarTiempoPlanificacion"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('tiemposPlanificaciones.TablaTiemposPlanificaciones')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar Tiempo de planificaciion-->

<div class="modal fade" id="myModal_ModificarTiempoPlanificacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Tiempo de  Planificacion </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarTiempoPlanificacion','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdTiempoPlanificacion"> 

           
           {!!Form::label('Tiempo de Planificacion:')!!}
              {!!Form::text('tiempoPlanificacion_A',null,['id'=>'tiempoPlanificacion_A', 'class'=>'form-control','placeholder'=>'Ingrese tiempo de planificacion','required'=>''])!!}
              <span id="span_tiempoPlanificacion_A"></span>
              <span id="span_mensaje_tiempoPlanificacion_A" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion_A',null,['id'=>'descripcion_A', 'class'=>'form-control','placeholder'=>'Ingrese descripcion','required'=>''])!!}
              <span id="span_descripcion_A"></span>
              <span id="span_mensaje_descripcion_A" style="display: block;color: red;"></span>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarTiempoPlanificacion', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar tiempo de planificacion -->


<!--  Modal para Ingresar tiempo de planificacion-->

<div class="modal fade" id="myModal_IngresarTiempoPlanificacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Tiempo de Planificacion</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarTiempoPlanificacion','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              

              {!!Form::label('Tiempo de Planificacion:')!!}
              {!!Form::text('tiempoPlanificacion',null,['id'=>'tiempoPlanificacion', 'class'=>'form-control','placeholder'=>'Ingrese tiempo de planificacion','required'=>''])!!}
              <span id="span_tiempoPlanificacion"></span>
              <span id="span_mensaje_tiempoPlanificacion" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese descripcion','required'=>''])!!}
              <span id="span_descripcion"></span>
              <span id="span_mensaje_descripcion" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarTiempoPlanificacion" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar tiempo de planificacion -->
   
