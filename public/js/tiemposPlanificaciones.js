/*Validaci[on del campo tiempo de pplanificacion */
        $('#tiempoPlanificacion').blur(function(){
            var tiempoPlanificacion = $("#tiempoPlanificacion").val();
            if (tiempoPlanificacion.indexOf('')== -1){
              $('#tiempoPlanificacion').addClass('error');
              $('#tiempoPlanificacion').html('Ingrese actividad de meta');
            }else{
            $('#tiempoPlanificacion').removeClass('error');
            $('#span_tiempoPlanificacion').removeClass('error_span');
            $('#span_mensaje_tiempoPlanificacion').html('');
            }
            
        }); // fin

        /*Validaci[on del campo descripcion*/
        $('#descripcion').blur(function(){
            var descripcion = $("#descripcion").val();
            if (descripcion.indexOf('')== -1){
              $('#descripcion').addClass('error');
              $('#descripcion').html('Ingrese descripcion ');
            }else{
            $('#descripcion').removeClass('error');
            $('#span_descripcion').removeClass('error_span');
            $('#span_mensaje_descripcion').html('');
            }
            
        }); // fin

        /*Validaci[on del campo tiempo de planificacion*/
        $('#tiempoPlanificacion_A').blur(function(){
            var tiempoPlanificacion = $("#tiempoPlanificacion_A").val();
            if (tiempoPlanificacion.indexOf('')== -1){
              $('#tiempoPlanificacion_A').addClass('error');
              $('#tiempoPlanificacion_A').html('Ingrese actividad de meta');
            }else{
            $('#tiempoPlanificacion_A').removeClass('error');
            $('#span_tiempoPlanificacion_A').removeClass('error_span');
            $('#span_mensaje_tiempoPlanificacion_A').html('');
            }
            
        }); // fin

        /*Validaci[on del campo descripcion*/
        $('#descripcion_A').blur(function(){
            var descripcion = $("#descripcion_A").val();
            if (descripcion.indexOf('')== -1){
              $('#descripcion_A').addClass('error');
              $('#descripcion_A').html('Ingrese descripcion ');
            }else{
            $('#descripcion_A').removeClass('error');
            $('#span_descripcion_A').removeClass('error_span');
            $('#span_mensaje_descripcion_A').html('');
            }
            
        }); // fin


        


//click al boton Registrar tiempo de planificacion
$("#btn_IngresarTiempoPlanificacion").click(function(){
 if($('#tiempoPlanificacion').val()=="" && $('#descripcion').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#tiempoPlanificacion').addClass('error');
                $('#descripcion').addClass('error');

                
          }else if($('#tiempoPlanificacion').val()==""){
                $('#tiempoPlanificacion').addClass('error');
                $('#span_tiempoPlanificacion').addClass('error_span');
                $('#span_mensaje_tiempoPlanificacion').html('Ingrese Tiempo de Planificacion');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Tiempo de Planificacion',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if($('#descripcion').val()==""){
                $('#descripcion').addClass('error');
                $('#span_descripcion').addClass('error_span');
                $('#span_mensaje_descripcion').html('Ingrese descripcion');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese descripcion',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{  
registrar_tiempoPlanificacion();
  }
});



// funcion para registar tiempo de planificacion
function registrar_tiempoPlanificacion(){

    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarTiempoPlanificacion")[0]);
    $.ajax({
    url:"/app/tiempoPlanificacion",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Tiempo de Planificacion Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresarTiempoPlanificacion").reset();  
        $("#myModal_IngresarTiempoPlanificacion").modal("hide");
        $("#datatable").load("/lista_tiempoPlanificacion");
       }
     }
  });
}


// Actualizar tiempo de planificaciones

            $("#btn_ActualizarTiempoPlanificacion").click(function() {
            if($('#tiempoPlanificacion_A').val()=="" && $('#descripcion_A').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#tiempoPlanificacion_A').addClass('error');
                $('#descripcion_A').addClass('error');

                
          }else if($('#tiempoPlanificacion_A').val()==""){
                $('#tiempoPlanificacion_A').addClass('error');
                $('#span_tiempoPlanificacion_A').addClass('error_span');
                $('#span_mensaje_tiempoPlanificacion_A').html('Ingrese Tiempo de Planificacion');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Tiempo de Planificacion',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if($('#descripcion_A').val()==""){
                $('#descripcion_A').addClass('error');
                $('#span_descripcion_A').addClass('error_span');
                $('#span_mensaje_descripcion_A').html('Ingrese descripcion');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese descripcion',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{
            Actualizar_tiempoPlanificacion();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/tiempoPlanificacion/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdTiempoPlanificacion").val(res.id)
      $("#tiempoPlanificacion_A").val(res.tiempoPlanificacion);
      $("#descripcion_A").val(res.descripcion);     
      });
    }

  function Actualizar_tiempoPlanificacion(){

  var id =$("#IdTiempoPlanificacion").val();
  var tiempoPlanificacion =$("#tiempoPlanificacion_A").val();
  var descripcion=$("#descripcion_A").val();
  var route  ="/app/tiempoPlanificacion/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{tiempoPlanificacion:tiempoPlanificacion,descripcion:descripcion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarTiempoPlanificacion').modal('hide');
            swal("tiempo de planificacion Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_tiempoPlanificacion');
            
          }else{
            swal("Error al Actualizar tiempo de planificacion..!!", "", "success");
               }
          
        }
  });
}

function EliminarTiempoPlanificacion(id){

    swal({ 
    title: "¿Deseas Eliminar Tiempo de Planificacion?",
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
      var route  ="/app/tiempoPlanificacion/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Tiempo de Planificacion Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_tiempoPlanificacion");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Tiempo de Planificacion","error"); 
    } 
  });
   

    
}