
/*Validaci[on del campo tipo Financiamiento*/
        $('#tipoFinanciamiento').blur(function(){
            var tipoFinanciamiento = $("#tipoFinanciamiento").val();
            if (tipoFinanciamiento.indexOf('')== -1){
              $('#tipoFinanciamiento').addClass('error');
              $('#tipoFinanciamiento').html('Ingrese el tipo de Financiamiento ');
            }else{
            $('#tipoFinanciamiento').removeClass('error');
            $('#span_mensaje_tipoFinanciamiento').html('');
            }
            
        }); // fin

        /*Validaci[on del campo tipo Financiamiento de Actualizar */
        $('#tipoFinanciamiento_A').blur(function(){
            var tipoFinanciamiento = $("#tipoFinanciamiento_A").val();
            if (tipoFinanciamiento.indexOf('')== -1){
              $('#tipoFinanciamiento_A').addClass('error');
              $('#tipoFinanciamiento_A').html('Ingrese el tipo de Financiamiento ');
            }else{
            $('#tipoFinanciamiento_A').removeClass('error');
            $('#span_mensaje_tipoFinanciamiento_A').html('');
            }
            
        }); // fin
//click al boton Registrar tipo de financiamientos
$("#btn_IngresarTipoFinanciamientos").click(function(){
 if($('#tipoFinanciamiento').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#tipoFinanciamiento').addClass('error');
                
          }else if($('#tipoFinanciamiento').val()==""){
                $('#tipoFinanciamiento').addClass('error');
                $('#span_tipoFinanciamiento').addClass('error_span');
                $('#span_mensaje_tipoFinanciamiento').html('Ingrese Tipo de Financiamiento');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Tipo de Financiamiento',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{  
registrar_tipoFinanciamiento();
  }
});



// funcion para registar tipo de financiamiento
function registrar_tipoFinanciamiento(){
    
    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresartipoFinanciamiento")[0]);
    $.ajax({
    url:"/app/tipoFinanciamiento",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Tipo de Financiamiento Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresartipoFinanciamiento").reset();  
        $("#myModal_IngresarTipoFinanciamientos").modal("hide");
        $("#datatable").load("/lista_tipoFinanciamiento");
       }
     }
  });
}


// Actualizar tipo Financiamientos

 
            $("#btn_ActualizarTipoFinanciamientos").click(function() {
            if($('#tipoFinanciamiento_A').val()=="") {
                var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#tipoFinanciamiento_A').addClass('error');

            } else if($('#tipoFinanciamiento_A').val()==""){
                $('#tipoFinanciamiento_A').addClass('error');
                $('#span_tipoFinanciamiento_A').addClass('error_span');
                $('#span_mensaje_tipoFinanciamiento_A').html('Ingrese Tipo de Financiamiento');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Tipo de Financiamiento',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{
            Actualizar_tipoFinanciamiento();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/tipoFinanciamiento/" +id+"/edit";  
    $.get(route,function(res){
      alert(res.tipoUsuario);
      $("#IdTipoFinanciamiento").val(res.id)
      $("#tipoFinanciamiento_A").val(res.tipoFinanciamiento);     
      });
    }

  function Actualizar_tipoFinanciamiento(){

  var id =$("#IdTipoFinanciamiento").val();
  var tipoFinanciamiento =$("#tipoFinanciamiento_A").val();
  var route  ="/app/tipoFinanciamiento/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{tipoFinanciamiento:tipoFinanciamiento},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarTipoFinanciamientos').modal('hide');
            swal("Tipo de Financiamiento Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_tipoFinanciamiento');
            
          }else{
            swal("Error al Actualizar Tipo de Financiamiento..!!", "", "success");
               }
          
        }
  });
}

function EliminarUsuarios(id){

    swal({ 
    title: "¿Deseas Elimar Tipo de Financiamiento?",
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
      var route  ="/app/tipoFinanciamiento/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Tipo de Financiamiento  Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_tipoFinanciamiento");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Tipo de Financiamiento ","error"); 
    } 
  });
   

    
}