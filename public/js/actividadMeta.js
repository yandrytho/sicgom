/*Validaci[on del campo tipo estado meta*/
        $('#actividadMeta').blur(function(){
            var actividadMeta = $("#actividadMeta").val();
            if (actividadMeta.indexOf('')== -1){
              $('#actividadMeta').addClass('error');
              $('#actividadMeta').html('Ingrese actividad de meta');
            }else{
            $('#actividadMeta').removeClass('error');
            $('#span_actividadMeta').removeClass('error_span');
            $('#span_mensaje_actividadMeta').html('');
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

        /*Validaci[on del campo tipo estado meta*/
        $('#actividadMeta_A').blur(function(){
            var actividadMeta = $("#actividadMeta_A").val();
            if (actividadMeta.indexOf('')== -1){
              $('#actividadMeta_A').addClass('error');
              $('#actividadMeta_A').html('Ingrese actividad de meta');
            }else{
            $('#actividadMeta_A').removeClass('error');
            $('#span_actividadMeta_A').removeClass('error_span');
            $('#span_mensaje_actividadMeta_A').html('');
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


        


//click al boton Registrar Actividad metas
$("#btn_IngresarActividadMeta").click(function(){
 if($('#actividadMeta').val()=="" && $('#descripcion').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#actividadMeta').addClass('error');
                $('#descripcion').addClass('error');

                
          }else if($('#actividadMeta').val()==""){
                $('#actividadMeta').addClass('error');
                $('#span_actividadMeta').addClass('error_span');
                $('#span_mensaje_actividadMeta').html('Ingrese Actividad de Meta');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Actividad de Meta',
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
registrar_ActividadMeta();
  }
});



// funcion para registar actividad de metas
function registrar_ActividadMeta(){

    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarActividadMeta")[0]);
    $.ajax({
    url:"/app/actividadMeta",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Actividad de Meta Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresarActividadMeta").reset();  
        $("#myModal_IngresarActividadMeta").modal("hide");
        $("#datatable").load("/lista_actividadMeta");
       }
     }
  });
}


// Actualizar actividad de metas

            $("#btn_ActualizarActividadMeta").click(function() {
            if($('#actividadMeta_A').val()=="" && $('#descripcion_A').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#actividadMeta_A').addClass('error');
                $('#descripcion_A').addClass('error');

                
          }else if($('#actividadMeta_A').val()==""){
                $('#actividadMeta_A').addClass('error');
                $('#span_actividadMeta_A').addClass('error_span');
                $('#span_mensaje_actividadMeta_A').html('Ingrese Actividad de Meta');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Actividad de Meta',
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
            Actualizar_actividadMeta();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/actividadMeta/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdActividadMeta").val(res.id)
      $("#actividadMeta_A").val(res.actividadMeta);
      $("#descripcion_A").val(res.descripcion);     
      });
    }

  function Actualizar_actividadMeta(){

  var id =$("#IdActividadMeta").val();
  var actividadMeta =$("#actividadMeta_A").val();
  var descripcion=$("#descripcion_A").val();
  var route  ="/app/actividadMeta/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{actividadMeta:actividadMeta,descripcion:descripcion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarActividadMeta').modal('hide');
            swal("Actividad de Meta Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_actividadMeta');
            
          }else{
            swal("Error al Actualizar Actividad de Meta..!!", "", "success");
               }
          
        }
  });
}

function EliminarActividadMeta(id){

    swal({ 
    title: "¿Deseas Elimar Actividad de la Meta?",
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
      var route  ="/app/actividadMeta/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Actividad de la Meta  Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_actividadMeta");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Actividad de la Meta ","error"); 
    } 
  });
   

    
}