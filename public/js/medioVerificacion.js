/*Validaci[on del campo medio de verificacion*/
        $('#medioVerificacion').blur(function(){
            var medioVerificacion = $("#medioVerificacion").val();
            if (medioVerificacion.indexOf('')== -1){
              $('#medioVerificacion').addClass('error');
              $('#medioVerificacion').addClass('error_span');
              $('#medioVerificacion').html('Ingrese Medio de Verificacion');
            }else{
            $('#medioVerificacion').removeClass('error');
            $('#medioVerificacion').removeClass('error_span');
            $('#span_mensaje_medioVerificacion').html('');
            }
            
        }); // fin

//campos de actualizar
/*Validaci[on del campo medio de verificacion*/
        $('#medioVerificacion_A').blur(function(){
            var medioVerificacion_A = $("#medioVerificacion_A").val();
            if (medioVerificacion_A.indexOf('')== -1){
              $('#medioVerificacion_A').addClass('error');
              $('#medioVerificacion_A').addClass('error_span');
              $('#medioVerificacion_A').html('Ingrese Medio de Verificacion');
            }else{
            $('#medioVerificacion_A').removeClass('error');
            $('#medioVerificacion_A').removeClass('error_span');
            $('#span_mensaje_medioVerificacion_A').html('');
            }
            
        }); // fin


        


//click al boton Registrar medio de verificacion
$("#btn_IngresarMedioVerificacion").click(function(){
 if($('#medioVerificacion').val()=="" ){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#medioVerificacion').addClass('error');

                
          }else if($('#medioVerificacion').val()==""){
                $('#medioVerificacion').addClass('error');
                $('#span_medioVerificacion').addClass('error_span');
                $('#span_mensaje_medioVerificacion').html('Ingrese medio de Verificacion');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese medio de Verificacion',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{  
registrar_MedioVerificacion();
  }
});



// funcion para registar medio de verificacion
function registrar_MedioVerificacion(){

    
    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarMedioVerificacion")[0]);
    $.ajax({
    url:"/app/medioVerificacion",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Medio de verificacion Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresarMedioVerificacion").reset();  
        $("#myModal_IngresarMedioVerificacion").modal("hide");
        $("#datatable").load("/lista_medioVerificacion");
       }
     }
  });
}


// Actualizar medio dde verificacion

            $("#btn_ActualizarMedioVerificacion").click(function() {
             if($('#medioVerificacion_A').val()=="" ){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#medioVerificacion_A').addClass('error');

                
          }else if($('#medioVerificacion_A').val()==""){
                $('#medioVerificacion_A').addClass('error');
                $('#span_medioVerificacion_A').addClass('error_span');
                $('#span_mensaje_medioVerificacion_A').html('Ingrese medio de Verificacion');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese medio de Verificacion',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{
            Actualizar_medioVerificacion();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/medioVerificacion/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdMedioVerificacion").val(res.id)
      $("#medioVerificacion_A").val(res.medioVerificacion);
     
      });
    }

  function Actualizar_medioVerificacion(){

  var id =$("#IdMedioVerificacion").val();
  alert(id);
  var medioVerificacion =$("#medioVerificacion_A").val();
  var route  ="/app/medioVerificacion/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{medioVerificacion:medioVerificacion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarMedioVerificacion').modal('hide');
            swal("Medio de Verificacion Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_medioVerificacion ');
            
          }else{
            swal("Error al Actualizar Medio de Verificacion..!!", "", "success");
               }
          
        }
  });
}

function EliminarMedioVerificacion(id){

    swal({ 
    title: "¿Deseas Elimar Medio de Verificacion?",
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
      var route  ="/app/medioVerificacion/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Medio de Verificacion Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_medioVerificacion");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Medio de Verificacion","error"); 
    } 
  });
   

    
}