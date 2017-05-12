
/*Validaci[on del campo tipo estado meta*/
        $('#politicaInstitucional').blur(function(){
            var politicaInstitucional = $("#politicaInstitucional").val();
            if (politicaInstitucional.indexOf('')== -1){
              $('#politicaInstitucional').addClass('error');
              $('#politicaInstitucional').html('Ingrese Politica Institucional');
            }else{
            $('#politicaInstitucional').removeClass('error');
            $('#span_mensaje_politicaInstitucional').html('');
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
$("#btn_IngresarPoliticaInstitucional").click(function(){
 if($('#politicaInstitucional').val()=="" && $('#descripcion').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#politicaInstitucional').addClass('error');
                $('#descripcion').addClass('error');

                
          }else if($('#politicaInstitucional').val()==""){
                $('#politicaInstitucional').addClass('error');
                $('#span_politicaInstitucional').addClass('error_span');
                $('#span_mensaje_politicaInstitucional').html('Ingrese Politica Institucional');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Politica Institucional',
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
registrar_politicaInstitucional();
  }
});



// funcion para registar tipo de financiamiento
function registrar_politicaInstitucional(){
    
    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarPoliticaInstitucional")[0]);
    $.ajax({
    url:"/app/politicaInstitucional",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Politica Institucional Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresarPoliticaInstitucional").reset();  
        $("#myModal_IngresarPoliticaInstitucional").modal("hide");
        $("#datatable").load("/lista_politicaInstitucional");
       }
     }
  });
}


// Actualizar Politicas Institucionales

            $("#btn_ActualizarPoliticaInstitucional").click(function() {
            if($('#politicaInstitucional_A').val()==""&& $('#descripcion_A').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#politicaInstitucional_A').addClass('error');
                $('#descripcion_A').addClass('error');

                
          }else if($('#politicaInstitucional_A').val()==""){
                $('#politicaInstitucional_A').addClass('error');
                $('#span_politicaInstitucional_A').addClass('error_span');
                $('#span_mensaje_politicaInstitucional_A').html('Ingrese Politica Institucional');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Politica Institucional',
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
            Actualizar_politicaInstitucional();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/politicaInstitucional/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdPoliticaInstitucional").val(res.id)
      $("#politicaInstitucional_A").val(res.politicaInstitucional);
      $("#descripcion_A").val(res.descripcion);     
      });
    }

  function Actualizar_politicaInstitucional(){

  var id =$("#IdPoliticaInstitucional").val();
  var politicaInstitucional =$("#politicaInstitucional_A").val();
  var descripcion=$("#descripcion_A").val();
  var route  ="/app/politicaInstitucional/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{politicaInstitucional:politicaInstitucional,descripcion:descripcion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarPoliticaInstitucional').modal('hide');
            swal("Politica Institucional Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_politicaInstitucional');
            
          }else{
            swal("Error al Actualizar Politica Institucional..!!", "", "success");
               }
          
        }
  });
}

function EliminarpoliticaInstitucional(id){

    swal({ 
    title: "¿Deseas Elimar Politica Institucional?",
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
      var route  ="/app/politicaInstitucional/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Politica Institucional Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_politicaInstitucional");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Politica Institucional ","error"); 
    } 
  });
   

    
}