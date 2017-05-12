
/*Validaci[on del campo responsable estrategico*/
        $('#responsableEstrategico').blur(function(){
            var responsableEstrategico = $("#responsableEstrategico").val();
            if (responsableEstrategico.indexOf('')== -1){
              $('#responsableEstrategico').addClass('error');
              $('#responsableEstrategico').html('Ingrese responsable estrategico');
            }else{
            $('#responsableEstrategico').removeClass('error');
            $('#span_responsableEstrategico').removeClass('error_span');
            $('#span_mensaje_responsableEstrategico').html('');
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

        /*Validaci[on del campo responsable estrategico de actualizar*/
        $('#responsableEstrategico_A').blur(function(){
            var responsableEstrategico_A = $("#responsableEstrategico_A").val();
            if (responsableEstrategico_A.indexOf('')== -1){
              $('#responsableEstrategico_A').addClass('error');
              $('#responsableEstrategico_A').html('Ingrese responsable estrategico');
            }else{
            $('#responsableEstrategico_A').removeClass('error');
            $('#span_responsableEstrategico_A').removeClass('error_span');
            $('#span_mensaje_responsableEstrategico_A').html('');
            }
            
        }); // fin

        /*Validaci[on del campo descripcion de actualizar*/
        $('#descripcion_A').blur(function(){
            var descripcion_A = $("#descripcion_A").val();
            if (descripcion_A.indexOf('')== -1){
              $('#descripcion_A').addClass('error');
              $('#descripcion_A').html('Ingrese descripcion ');
            }else{
            $('#descripcion_A').removeClass('error');
            $('#span_descripcion_A').removeClass('error_span');
            $('#span_mensaje_descripcion_A').html('');
            }
        }); // fin

        
//click al boton Registrar responsable estrategico
$("#btn_IngresarResponsableEstrategico").click(function(){
 if($('#responsableEstrategico').val()=="" && $('#descripcion').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#responsableEstrategico').addClass('error');
                $('#descripcion').addClass('error');

                
          }else if($('#responsableEstrategico').val()==""){
                $('#responsableEstrategico').addClass('error');
                $('#span_responsableEstrategico').addClass('error_span');
                $('#span_mensaje_responsableEstrategico').html('Ingrese Responsable Estrategico');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Responsable Estrategico',
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
registrar_responsableEstrategico();
  }
});



// funcion para registar responsable estrategicos
function registrar_responsableEstrategico(){
    
    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarResponsableEstrategico")[0]);
    $.ajax({
    url:"/app/responsableEstrategico",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Responsable Estrategico Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresarResponsableEstrategico").reset();  
        $("#myModal_IngresarResponsableEstrategico").modal("hide");
        $("#datatable").load("/lista_reponsableEstrategico");
       }
     }
  });
}


// Actualizar responsables estrategicos
            $("#btn_ActualizarResponsablesEstrategicos").click(function() {
            if($('#responsableEstrategico_A').val()=="" && $('#descripcion_A').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#responsableEstrategico_A').addClass('error');
                $('#descripcion_A').addClass('error');

                
          }else if($('#responsableEstrategico_A').val()==""){
                $('#responsableEstrategico_A').addClass('error');
                $('#span_responsableEstrategico_A').addClass('error_span');
                $('#span_mensaje_responsableEstrategico_A').html('Ingrese Responsable Estrategico');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Responsable Estrategico',
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
            Actualizar_responsableEstrategico();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/responsableEstrategico/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdResponsableEstrategico").val(res.id)
      $("#responsableEstrategico_A").val(res.responsableEstrategico);
      $("#descripcion_A").val(res.descripcion);     
      });
    }

  function Actualizar_responsableEstrategico(){

  var id =$("#IdResponsableEstrategico").val();
  var responsableEstrategico =$("#responsableEstrategico_A").val();
  var descripcion=$("#descripcion_A").val();
  var route  ="/app/responsableEstrategico/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{responsableEstrategico:responsableEstrategico,descripcion:descripcion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarResponsableEstrategico').modal('hide');
            swal("Resposable Estrategico Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_reponsableEstrategico');
            
          }else{
            swal("Error al Actualizar Responsable Estrategico..!!", "", "success");
               }
          
        }
  });
}

function EliminarResponsableEstrategico(id){

    swal({ 
    title: "¿Deseas Elimar Responsable Estrategico?",
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
      var route  ="/app/responsableEstrategico/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Responsable Estrategico Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_reponsableEstrategico");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Politica Institucional ","error"); 
    } 
  });
   

    
}