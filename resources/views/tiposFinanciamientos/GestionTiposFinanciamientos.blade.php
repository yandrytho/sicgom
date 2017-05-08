    <!-- jQuery -->
    {!!Html::script('js/tipoFinanciamientos.js')!!}
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Administración Tipos Financiamientos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="tipoFinanciamientosfa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarTipoFinanciamientos"><i class="fa fa-user-plus"></i></a>
                        
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="datatable">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    @include('tiposFinanciamientos.TablaTiposFinanciamientos')
                  </div>
                </div>
              </div>
        </div>

<!--  Modal para modificar tipo financiamientos-->

<div class="modal fade" id="myModal_ModificarTipoFinanciamientos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Tipos De Financiamientos </h4>
      </div>
      <div class="modal-body">
          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarUsuarios','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <input  type="hidden" name="" value="" id="IdTipoFinanciamiento"> 

           
            {!!Form::label('Tipo Financiamiento:')!!}
            {!!Form::text('tipoFinanciamiento_A',null,['id'=>'tipoFinanciamiento_A', 'class'=>'form-control','placeholder'=>'Ingrese Tipo de Financiamiento','required'=>''])!!}
              <span id="span_tipoFinanciamiento_A"></span>
              <span id="span_mensaje_tipoFinanciamiento_A" style="display: block;color: red;"></span>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarTipoFinanciamientos', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Moidifcar tipo de financiamientos -->

<!--  Modal para Ingresar Tipo Financiamientos -->

<div class="modal fade" id="myModal_IngresarTipoFinanciamientos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Usuarios</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresartipoFinanciamiento','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdTipoFinanciamiento">
              

              {!!Form::label('Tipos Financiamientos:')!!}
              {!!Form::text('tipoFinanciamiento',null,['id'=>'tipoFinanciamiento', 'class'=>'form-control','placeholder'=>'Ingrese Tipo de Financiamiento','required'=>''])!!}
              <span id="span_tipoFinanciamiento"></span>
              <span id="span_mensaje_tipoFinanciamiento" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarTipoFinanciamientos" >Registrar</button>
       {!!Form::close()!!}

      </div>
    </div>
  </div>
</div>        

<!--  FIN Modal para Ingresar Usuarios -->
   
