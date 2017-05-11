
/*Validaci[on del campo tipo estado meta*/
        $('#tipoEstadoMeta').blur(function(){
            var tipoEstadoMeta = $("#tipoEstadoMeta").val();
            if (tipoEstadoMeta.indexOf('')== -1){
              $('#tipoEstadoMeta').addClass('error');
              $('#tipoEstadoMeta').html('Ingrese el tipo de Estado Meta ');
            }else{
            $('#tipoEstadoMeta').removeClass('error');
            $('#span_mensaje_tipoEstadoMeta').html('');
            }
            
        }); // fin

        /*Validaci[on del campo descripcion*/
        $('#descripcion').blur(function(){
            var descripcion = $("#descripcion").val();
            if (descripcion.indexOf('')== -1){
              $('#descripcion').addClass('error');
              $('#descripcion').html('Ingrese descripcion de Estado Meta ');
            }else{
            $('#descripcion').removeClass('error');
            $('#span_mensaje_descripcion').html('');
            }
            
        }); // fin

        /*Validaci[on del campo tipo estado meta*/
        $('#tipoEstadoMeta_A').blur(function(){
            var tipoEstadoMeta_A = $("#tipoEstadoMeta_A").val();
            if (tipoEstadoMeta_A.indexOf('')== -1){
              $('#tipoEstadoMeta_A').addClass('error');
              $('#tipoEstadoMeta_A').html('Ingrese el tipo de Estado Meta ');
            }else{
            $('#tipoEstadoMeta_A').removeClass('error');
            $('#span_mensaje_tipoEstadoMeta_A').html('');
            }
            
        }); // fin

        /*Validaci[on del campo descripcion*/
        $('#descripcion_A').blur(function(){
            var descripcion_A = $("#descripcion_A").val();
            if (descripcion_A.indexOf('')== -1){
              $('#descripcion_A').addClass('error');
              $('#descripcion_A').html('Ingrese descripcion de Estado Meta ');
            }else{
            $('#descripcion_A').removeClass('error');
            $('#span_mensaje_descripcion_A').html('');
            }
            
        }); // fin


//click al boton Registrar tipo de financiamientos
$("#btn_IngresarTipoEstadoMeta").click(function(){
 if($('#tipoEstadoMeta').val()==""&& $('#descripcion').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#tipoEstadoMeta').addClass('error');
                $('#descripcion').addClass('error');

                
          }else if($('#tipoEstadoMeta').val()==""){
                $('#tipoEstadoMeta').addClass('error');
                $('#span_tipoEstadoMeta').addClass('error_span');
                $('#span_mensaje_tipoEstadoMeta').html('Ingrese Tipo de Estado Meta');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Tipo de Estado Meta',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if($('#descripcion').val()==""){
                $('#descripcion').addClass('error');
                $('#span_descripcion').addClass('error_span');
                $('#span_mensaje_descripcion').html('Ingrese descripcion de Estado Meta');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese descripcion de Estado Meta',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{  
registrar_tipoEstadoMetas();
  }
});



// funcion para registar tipo de financiamiento
function registrar_tipoEstadoMetas(){
    
    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresartipoEstadoMetas")[0]);
    $.ajax({
    url:"/app/tipoEstadoMeta",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Tipo de Estado Meta Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresartipoEstadoMetas").reset();  
        $("#myModal_IngresarTipoEstadoMeta").modal("hide");
        $("#datatable").load("/lista_tipoEstadoMeta");
       }
     }
  });
}


// Actualizar tipo Financiamientos

 
            $("#btn_ActualizarTipoEstadoMeta").click(function() {
            if($('#tipoEstadoMeta_A').val()=="" && $('#descripcion_A').val()=="" ) {
                var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#tipoFinanciamiento_A').addClass('error');
                $('#descripcion_A').addClass('error');

            } else if($('#tipoEstadoMeta_A').val()==""){
                $('#tipoEstadoMeta_A').addClass('error');
                $('#span_tipoEstadoMeta_A').addClass('error_span');
                $('#span_mensaje_tipoEstadoMeta_A').html('Ingrese Tipo de Estado meta');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Tipo de Estado Meta',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if($('#descripcion_A').val()==""){
                $('#descripcion_A').addClass('error');
                $('#span_descripcion_A').addClass('error_span');
                $('#span_mensaje_descripcion_A').html('Ingrese descripcion de Estado Meta');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese descripcion de Estado Meta',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{
            Actualizar_tipoEstadoMeta();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/tipoEstadoMeta/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdTipoEstadoMeta").val(res.id)
      $("#tipoEstadoMeta_A").val(res.tipoEstadoMeta);
      $("#descripcion_A").val(res.descripcion);     
      });
    }

  function Actualizar_tipoEstadoMeta(){

  var id =$("#IdTipoEstadoMeta").val();
  var tipoEstadoMeta =$("#tipoEstadoMeta_A").val();
  var descripcion=$("#descripcion_A").val();
  var route  ="/app/tipoEstadoMeta/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{tipoEstadoMeta:tipoEstadoMeta,descripcion:descripcion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarTipoEstadoMeta').modal('hide');
            swal("Tipo de Esado Meta Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_tipoEstadoMeta');
            
          }else{
            swal("Error al Actualizar Tipo de Estado Meta..!!", "", "success");
               }
          
        }
  });
}

function EliminarTipoEstadoMeta(id){

    swal({ 
    title: "¿Deseas Elimar Tipo de Estado Meta?",
    text: "",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "¡Eliminar!",
    cancelButtonText: "No,Cancelar", 
    closeOnConfirm: false,
    closeOnCancel: false },

    function(isConfirm){ 
    if (isConfirm){
      var route  ="/app/tipoEstadoMeta/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Tipo de Estado Meta  Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_tipoEstadoMeta");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Tipo de Estado Meta ","error"); 
    } 
  });
   

    
}