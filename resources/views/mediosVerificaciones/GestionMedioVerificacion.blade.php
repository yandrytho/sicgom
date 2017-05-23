    <!-- jQuery -->
    {!!Html::script('js/medioVerificacion.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Medio de Verificacion </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarMedioVerificacion"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('mediosVerificaciones.TablaMedioVerificacion')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar Tiempo de planificaciion-->

<div class="modal fade" id="myModal_ModificarMedioVerificacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Medio de Verificacion </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarMedioVerificacion','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdMedioVerificacion"> 

           
              {!!Form::label('Medio de Verificacion:')!!}
              {!!Form::text('medioVerificacion_A',null,['id'=>'medioVerificacion_A', 'class'=>'form-control','placeholder'=>'Ingrese Medio de Verificacion','required'=>''])!!}
              <span id="span_medioVerificacion_A"></span>
              <span id="span_mensaje_medioVerificacion_A" style="display: block;color: red;"></span>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarMedioVerificacion', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar tiempo de planificacion -->


<!--  Modal para Ingresar medio de verificcion-->

<div class="modal fade" id="myModal_IngresarMedioVerificacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Medio de Verificacion</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarMedioVerificacion','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdIndicador">
              

              {!!Form::label('Medio de Verificacion:')!!}
              {!!Form::text('medioVerificacion',null,['id'=>'medioVerificacion', 'class'=>'form-control','placeholder'=>'Ingrese Medio de Verificacion','required'=>''])!!}
              <span id="span_medioVerificacion"></span>
              <span id="span_mensaje_medioVerificacion" style="display: block;color: red;"></span>

      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarMedioVerificacion" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar medio de verificacion -->
   
