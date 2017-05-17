    <!-- jQuery -->
    {!!Html::script('js/programa.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Programas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarPrograma"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('programas.TablaProgramas')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar progama-->

<div class="modal fade" id="myModal_ModificarPrograma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Programa </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarPrograma','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdPrograma">
            
           
              {!!Form::label('Programa:')!!}
              {!!Form::text('programa_A',null,['id'=>'programa_A', 'class'=>'form-control','placeholder'=>'Ingrese Programa','required'=>''])!!}
              <span id="span_Programa_A"></span>
              <span id="span_mensaje_programa_A" style="display: block;color: red;"></span>

              {!!Form::label('Presupuesto:')!!}
              {!!Form::text('presupuesto_A',null,['id'=>'presupuesto_A', 'onChange'=>'validarSiNumero(this.value);','class'=>'form-control','placeholder'=>'Ingrese presupuesto','required'=>''])!!}
              <span id="span_presupuesto_A"></span>
              <span id="span_mensaje_presupuesto_A" style="display: block;color: red;"></span>

              {!!Form::label('Fecha:')!!}
              {!!Form::text('fecha_A',null,['id'=>'fecha_A', 'class'=>'form-control','placeholder'=>'Ingrese Fecha','required'=>''])!!}
              <span id="span_fecha_A"></span>
              <span id="span_mensaje_fecha_A" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion_A',null,['id'=>'descripcion_A', 'class'=>'form-control','placeholder'=>'Ingrese descripcion','required'=>''])!!}
              <span id="span_descripcion_A"></span>
              <span id="span_mensaje_descripcion_A" style="display: block;color: red;"></span>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarProgramas', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar programa-->


<!--  Modal para Ingresar programaa -->

<div class="modal fade" id="myModal_IngresarPrograma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Programa</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarPrograma','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdPrograma">
              

              {!!Form::label('Programa:')!!}
              {!!Form::text('programa',null,['id'=>'programa', 'class'=>'form-control','placeholder'=>'Ingrese Programa','required'=>''])!!}
              <span id="span_Programa"></span>
              <span id="span_mensaje_programa" style="display: block;color: red;"></span>

              {!!Form::label('Presupuesto:')!!}
              {!!Form::text('presupuesto',null,['id'=>'presupuesto', 'class'=>'form-control','placeholder'=>'Ingrese presupuesto','required'=>''])!!}
              <span id="span_presupuesto"></span>
              <span id="span_mensaje_presupuesto" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese descripcion','required'=>''])!!}
              <span id="span_descripcion"></span>
              <span id="span_mensaje_descripcion" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarPrograma" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para programa -->
   
