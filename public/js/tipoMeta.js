
/*Validaci[on del campo tipo estado meta*/
        $('#tipoMeta').blur(function(){
            var tipoMeta = $("#tipoMeta").val();
            if (tipoMeta.indexOf('')== -1){
              $('#tipoMeta').addClass('error');
              $('#tipoMeta').html('Ingrese el tipo de Meta ');
            }else{
            $('#tipoMeta').removeClass('error');
            $('#span_tipoMeta').removeClass('error_span');
            $('#span_mensaje_tipoMeta').html('');
            }
            
        }); // fin

                    
       /*Validaci[on del campo tipo estado meta*/
        $('#tipoMeta_A').blur(function(){
            var tipoMeta_A = $("#tipoEstadoMeta_A").val();
            if (tipoMeta_A.indexOf('')== -1){
              $('#tipoMeta_A').addClass('error');
              $('#tipoMeta_A').html('Ingrese el tipo de Estado Meta ');
            }else{
            $('#tipoMeta_A').removeClass('error');
            $('#span_tipoMeta_A').removeClass('error_span');
            $('#span_mensaje_tipoMeta_A').html('');
            }
            
        }); // fin

      //click al boton Registrar tipo de meta
$("#btn_IngresarTipoMeta").click(function(){
 if($('#tipoMeta').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#tipoMeta').addClass('error');

                
          }else if($('#tipoMeta').val()==""){
                $('#tipoMeta').addClass('error');
                $('#span_tipoMeta').addClass('error_span');
                $('#span_mensaje_tipoMeta').html('Ingrese Tipo de Meta');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Tipo de Meta',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{  
registrar_tipoMetas();
  }
});



// funcion para registar tipo de financiamiento
function registrar_tipoMetas(){
    
    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresartipoMeta")[0]);
    $.ajax({
    url:"/app/tipoMeta",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Tipo de Meta Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresartipoMeta").reset();  
        $("#myModal_IngresarTipoMeta").modal("hide");
        $("#datatable").load("/lista_tipoMeta");
       }
     }
  });
}


// Actualizar tipo de metas

 
            $("#btn_ActualizarTipoMeta").click(function() {
             if($('#tipoMeta_A').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#tipoMeta_A').addClass('error');

                
          }else if($('#tipoMeta_A').val()==""){
                $('#tipoMeta_A').addClass('error');
                $('#span_tipoMeta_A').addClass('error_span');
                $('#span_mensaje_tipoMeta_A').html('Ingrese Tipo de Meta');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Tipo de Meta',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{
            Actualizar_tipoMeta();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/tipoMeta/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdTipoMeta").val(res.id)
      $("#tipoMeta_A").val(res.tipoMeta);
      });
    }

  function Actualizar_tipoMeta(){

  var id =$("#IdTipoMeta").val();
  var tipoMeta =$("#tipoMeta_A").val();
  var route  ="/app/tipoMeta/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{tipoMeta:tipoMeta},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarTipoMeta').modal('hide');
            swal("Tipo de Meta Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_tipoMeta');
            
          }else{
            swal("Error al Actualizar Tipo de Meta..!!", "", "success");
               }
          
        }
  });
}

function EliminarTipoMeta(id){

    swal({ 
    title: "¿Deseas Eliminar Tipo de Meta?",
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
      var route  ="/app/tipoMeta/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Tipo de Meta  Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_tipoMeta");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Tipo de Meta ","error"); 
    } 
  });
   

    
}