
//validar que presupuesto se ingrese numero
   $(document).ready(function (){
          
          $('#presupuesto').blur(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
            if(this.value==""){
              swal("El valor "+ this.value +" no es un numero..!!", "", "error");
            }
           });

        });

    $(document).ready(function (){
          
          $('#presupuesto_A').blur(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
            if(this.value==""){
              swal("El valor "+ this.value +" no es un numero..!!", "", "error");
            }
           });

        });


/*Validaci[on del campo Presupuesto*/
        $('#presupuesto').blur(function(){
            var presupuesto = $("#presupuesto").val();
            if (presupuesto.indexOf('')== -1){
              $('#presupuesto').addClass('error');
              $('#presupuesto').html('Ingrese presupuesto en numero');
            }else{
            $('#presupuesto').removeClass('error');
            $('#span_presupuesto').removeClass('error_span');
            $('#span_mensaje_presupuesto').html('');
            }
            
        }); // fin
/*Validaci[on del campo programa*/
        $('#programa').blur(function(){
            var programa = $("#programa").val();
            if (programa.indexOf('')== -1){
              $('#programa').addClass('error');
              $('#programa').html('Ingrese Programa');
            }else{
            $('#programa').removeClass('error');
            $('#span_Programa').removeClass('error_span');
            $('#span_mensaje_programa').html('');
            }
            
        }); // fin

        /*Validaci[on del campo Presupuesto*/
        $('#presupuesto').blur(function(){
            var presupuesto = $("#presupuesto").val();
            if (presupuesto.indexOf('')== -1){
              $('#presupuesto').addClass('error');
              $('#presupuesto').html('Ingrese presupuesto en numero');
            }else{
            $('#presupuesto').removeClass('error');
            $('#span_presupuesto').removeClass('error_span');
            $('#span_mensaje_presupuesto').html('');
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

        /// Actualizar

      /*Validaci[on del campo programa*/
        $('#programa_A').blur(function(){
            var programa_A = $("#programa_A").val();
            if (programa_A.indexOf('')== -1){
              $('#programa_A').addClass('error');
              $('#programa_A').html('Ingrese Programa');
            }else{
            $('#programa_A').removeClass('error');
            $('#span_Programa_A').removeClass('error_span');
            $('#span_mensaje_programa_A').html('');
            }
            
        }); // fin

        /*Validaci[on del campo Presupuesto*/
        $('#presupuesto_A').blur(function(){
            var presupuesto_A = $("#presupuesto_A").val();
            if (presupuesto_A.indexOf('')== -1){
              $('#presupuesto_A').addClass('error');
              $('#presupuesto_A').html('Ingrese presupuesto');
            }else{
            $('#presupuesto_A').removeClass('error');
            $('#span_presupuesto_A').removeClass('error_span');
            $('#span_mensaje_presupuesto_A').html('');
            }
            
        }); // fin

        /*Validaci[on del campo descripcion*/
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

//validar si es un numero el imput presupuesto
    function validarSiNumero(numero){
        if (!/^([0-9])*$/.test(numero))
            swal("El valor "+ numero +" no es un numero..!!", "", "error");
            $('#presupuesto_A').val('');
            document.getElementById("#presupuesto_A").focus();
  }

 


        
//click al boton Registrar programa
$("#btn_IngresarPrograma").click(function(){
 if($('#programa').val()=="" && $('#presupuesto').val()=="" && $('#descripcion').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#programa').addClass('error');
                $('#presupuesto').addClass('error');
                $('#descripcion').addClass('error');

                
          }else if($('#programa').val()==""){
                $('#programa').addClass('error');
                $('#span_Programa').addClass('error_span');
                $('#span_mensaje_programa').html('Ingrese Parograma');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Programa',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if($('#presupuesto').val()==""){
                $('#presupuesto').addClass('error');
                $('#span_presupuesto').addClass('error_span');
                $('#span_mensaje_presupuesto').html('Ingrese Presupuesto en numero');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Presupuesto en numero',
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
registrar_programas();
  }
});



// funcion para registar responsable estrategicos
function registrar_programas(){
    
    var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarPrograma")[0]);
    $.ajax({
    url:"/app/programa",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
        swal("Programa Registrado Correctamente..!!", "", "success");
        document.getElementById("frmIngresarPrograma").reset();  
        $("#myModal_IngresarPrograma").modal("hide");
        $("#datatable").load("/lista_programa");
       }
     }
  });
}


// Actualizar Progrmas
            $("#btn_ActualizarProgramas").click(function() {
            if($('#programa_A').val()=="" && $('#presupuesto_A').val()=="" && $('#descripcion_A').val()==""){
             var animate_in = 'lightSpeedIn',
                animate_out = 'bounceOut';
                new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });

                $('#programa_A').addClass('error');
                $('#presupuesto_A').addClass('error');
                $('#descripcion_A').addClass('error');

                
          }else if($('#programa_A').val()==""){
                $('#programa_A').addClass('error');
                $('#span_Programa_A').addClass('error_span');
                $('#span_mensaje_programa_A').html('Ingrese Parograma');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Programa',
                             type: 'error',delay: 2500,
                             animate: {animate: true,in_class: animate_in,out_class: animate_out}
                });
            }else if($('#presupuesto_A').val()==""){
                $('#presupuesto_A').addClass('error');
                $('#span_presupuesto_A').addClass('error_span');
                $('#span_mensaje_presupuesto_A').html('Ingrese Preupuesto');
                var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
                new PNotify({title: 'Alerta',text: 'Por favor! ingrese Presupuesto',
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
            Actualizar_Programa();
             }
          }); 
        
    function cargar_datos(id){
    var route="/app/programa/" +id+"/edit";  
    $.get(route,function(res){
      $("#IdPrograma").val(res.id)
      $("#programa_A").val(res.programa);
      $("#presupuesto_A").val(res.presupuesto);
      $("#fecha_A").val(res.fechaModificacion);
      $("#descripcion_A").val(res.descripcion);     
      });
    }

  function Actualizar_Programa(){

  var id =$("#IdPrograma").val();
  var programa=$("#programa_A").val();
  var fecha=$("#fecha_A").val();
  var presupuesto=$("#presupuesto_A").val();
  var descripcion=$("#descripcion_A").val();
  var route  ="/app/programa/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{programa:programa,fecha:fecha,presupuesto:presupuesto,descripcion:descripcion},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarPrograma').modal('hide');
            swal("Programa Actualizado Correctamente..!!", "", "success");
           $("#datatable").load('/lista_programa');
            
          }else{
            swal("Error al Actualizar Programa..!!", "", "success");
               }
          
        }
  });
}

function EliminarPrograma(id){

    swal({ 
    title: "¿Deseas Elimar Programa?",
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
      var route  ="/app/programa/"+id+"";
        var token  =$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
              success:function(res){
               if(res.sms=='ok'){
            swal("¡Hecho!","Programa Eliminado Correctamente","success"); 
                  $("#datatable").load("/lista_programa");
                }          
              }
           });
        }else { 
      swal("¡Error !","No se pudo Eliminar Programa","error"); 
    } 
  });
   
      
}