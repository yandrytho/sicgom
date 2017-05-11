
/*Validaci[on del campo tipo estado meta*/
        $('#indicador').blur(function(){
            var indicador = $("#indicador").val();
            if (indicador.indexOf('')== -1){
              $('#indicador').addClass('error');
              $('#indicador').html('Ingrese Indicador');
            }else{
            $('#indicador').removeClass('error');
            $('#span_mensaje_indicador').html('');
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
            $('#span_mensaje_descripcion').html('');
            }
            
        }); // fin

        


//click al boton Registrar tipo de financiamientos
$("#btn_IngresarIndicador").click(function(){
 if($('#indicador').val()==""&& $('#descripcion').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#indicador').addClass('error');
                $('#descripcion').addClass('error');

                
          }else if($('#indicador').val()==""){
                $('#indicador').addClass('error');
                $('#span_indicador').addClass('error_span');
                $('#span_mensaje_indicador').html('Ingrese Indicador');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Indicadores',
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
registrar_Indicadores();
  }
});



// funcion para registar tipo de financiamiento
function registrar_Indicadores(){
    
    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarIndicadores")[0]);
    $.ajax({
    url:"/app/indicadores",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Indicador Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresarIndicadores").reset();  
        $("#myModal_IngresarIndicador").modal("hide");
        $("#datatable").load("/lista_indicadores");
       }
     }
  });
}


// Actualizar Indicadores

            $("#btn_ActualizarIndicador").click(function() {
            if($('#indicador').val()==""&& $('#descripcion').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#indicador').addClass('error');
                $('#descripcion').addClass('error');

                
          }else if($('#indicador').val()==""){
                $('#indicador').addClass('error');
                $('#span_indicador').addClass('error_span');
                $('#span_mensaje_indicador').html('Ingrese Indicador');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Indicadores',
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
            Actualizar_Indicador();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/indicadores/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdIndicador").val(res.id)
      $("#indicador").val(res.indicador);
      $("#descripcion").val(res.descripcion);     
      });
    }

  function Actualizar_Indicador(){

  var id =$("#IdIndicador").val();
  var indicador =$("#indicador").val();
  var descripcion=$("#descripcion").val();
  var route  ="/app/indicadores/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{indicador:indicador,descripcion:descripcion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarIndicador').modal('hide');
            swal("Indicador Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_indicadores');
            
          }else{
            swal("Error al Actualizar Indicador..!!", "", "success");
               }
          
        }
  });
}

function EliminarIndicador(id){

    swal({ 
    title: "¿Deseas Elimar Indicador?",
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
      var route  ="/app/indicadores/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Indicador  Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_indicadores");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Indicador ","error"); 
    } 
  });
   

    
}