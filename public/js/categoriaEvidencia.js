/*Validaci[on del campo tipo estado meta*/
        $('#categoriaEvidencia').blur(function(){
            var categoriaEvidencia = $("#categoriaEvidencia").val();
            if (categoriaEvidencia.indexOf('')== -1){
              $('#categoriaEvidencia').addClass('error');
              $('#categoriaEvidencia').html('Ingrese categoria de Evidencia');
            }else{
            $('#categoriaEvidencia').removeClass('error');
            $('#span_mensaje_categoriaEvidencia').html('');
            }
            
        }); // fin

        /*Validaci[on del campo tipo estado meta*/
        $('#categoriaEvidencia_A').blur(function(){
            var categoriaEvidencia_A = $("#categoriaEvidencia_A").val();
            if (categoriaEvidencia_A.indexOf('')== -1){
              $('#categoriaEvidencia_A').addClass('error');
              $('#categoriaEvidencia_A').html('Ingrese categoria de Evidencia');
            }else{
            $('#categoriaEvidencia_A').removeClass('error');
            $('#span_mensaje_categoriaEvidencia_A').html('');
            }
            
        }); // fin

//click al boton Registrar categoria Evidencia
$("#btn_IngresarCategoriaEvidencia").click(function(){
 if($('#categoriaEvidencia').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#categoriaEvidencia').addClass('error');

                
          }else if($('#categoriaEvidencia').val()==""){
                $('#categoriaEvidencia').addClass('error');
                $('#span_CategoriaEvidencia').addClass('error_span');
                $('#span_mensaje_categoriaEvidencia').html('Ingrese Categoria de Evidencia');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Categoria de Evidencia',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{  
registrar_CategoriaEvidencia();
  }
});



// funcion para registar categoria Evidencia
function registrar_CategoriaEvidencia(){

    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarCategoriaEvidencia")[0]);
    $.ajax({
    url:"/app/categoriaEvidencia",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Categoria de Evidencia Registrada Correctamente..!!", "", "success");
        document.getElementById("frmIngresarCategoriaEvidencia").reset();  
        $("#myModal_IngresarCategoriaEvidencia").modal("hide");
        $("#datatable").load("/lista_categoriaEvidencia");
       }
     }
  });
}


// validar campos para Actualizar Categoria de evidencias

            $("#btn_ActualizarCategoriaEvidencia").click(function() {
            if($('#categoriaEvidencia_A').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#categoriaEvidencia_A').addClass('error');

                
          }else if($('#categoriaEvidencia_A').val()==""){
                $('#categoriaEvidencia_A').addClass('error');
                $('#span_CategoriaEvidencia_A').addClass('error_span');
                $('#span_mensaje_categoriaEvidencia_A').html('Ingrese Categoria de Evidencia');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Categoria de Evidencia',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else{
            Actualizar_CategoriaEvidencias();
             }
          }); 
        
   // funcion para caargar datos a imput de modifcar     
    function cargar_datos(id){
    var route="/app/categoriaEvidencia/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdCategoriaEvidencia").val(res.id)
      $("#categoriaEvidencia_A").val(res.categoria_evidencia);
      });
    }

// funcionn para modificar dator de Categoria de evidencias

  function Actualizar_CategoriaEvidencias(){

  var id =$("#IdCategoriaEvidencia").val();
  var categoriaEvidencia =$("#categoriaEvidencia_A").val();
  var route  ="/app/categoriaEvidencia/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{categoriaEvidencia:categoriaEvidencia},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarCategoriaEvidencia').modal('hide');
            swal("Categoria de Evidencia Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_categoriaEvidencia');
            
          }else{
            swal("Error al Actualizar Categoria de Evidencia ..!!", "", "success");
               }
          
        }
  });
}


//funcion para eliminar categoria de evidencias

function EliminarCategoriaEvidencia(id){

    swal({ 
    title: "¿Deseas Elimar Categoria de Evidencia?",
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
      var route  ="/app/categoriaEvidencia/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Categoria de evidencia Eliminada Correctamente","success"); 
                  $("#datatable").load("/lista_categoriaEvidencia");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Indicador ","error"); 
    } 
  });
   

    
}