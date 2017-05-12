    <!-- jQuery -->
    {!!Html::script('js/politicasInstitucionales.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Politicas Institucionales</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarPoliticaInstitucional"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('politicasInstitucionales.TablaPoliticasInstitucionales')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar politicas intitucional-->

<div class="modal fade" id="myModal_ModificarPoliticaInstitucional" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Politica Institucional </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarTipoEstadoMeta','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdPoliticaInstitucional"> 

           
             {!!Form::label('Politica Institucional:')!!}
              {!!Form::text('politicaInstitucional_A',null,['id'=>'politicaInstitucional_A', 'class'=>'form-control','placeholder'=>'Ingrese Politica Institucional','required'=>''])!!}
              <span id="span_politicaInstitucional_A"></span>
              <span id="span_mensaje_politicaInstitucional_A" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion_A',null,['id'=>'descripcion_A', 'class'=>'form-control','placeholder'=>'Ingrese descripcion','required'=>''])!!}
              <span id="span_descripcion_A"></span>
              <span id="span_mensaje_descripcion_A" style="display: block;color: red;"></span>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarPoliticaInstitucional', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar politica institucional -->


<!--  Modal para Ingresar Tipos de Estado en las Metas -->

<div class="modal fade" id="myModal_IngresarPoliticaInstitucional" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Politica Institucional</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarPoliticaInstitucional','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdPoliticaInstitucional">
              

              {!!Form::label('Politica Institucional:')!!}
              {!!Form::text('politicaInstitucional',null,['id'=>'politicaInstitucional', 'class'=>'form-control','placeholder'=>'Ingrese Politica Institucional','required'=>''])!!}
              <span id="span_politicaInstitucional"></span>
              <span id="span_mensaje_politicaInstitucional" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese descripcion','required'=>''])!!}
              <span id="span_descripcion"></span>
              <span id="span_mensaje_descripcion" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarPoliticaInstitucional" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar Tipos de Estado en las Metas -->
   
