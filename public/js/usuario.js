
 $(document).ready(function() {
            $("#btn_ActualizarUsuarios").click(function() {
            Actualizar_Usuarios();
            });
            });	

    function cargar_datos(id){
    var route="http://localhost:8000/welcomeAdmin/Usuarios/" +id+"/edit";	
    $.get(route,function(res){
      $("#IdUsuario").val(res.id)
      $("#idTipoUsuario").val(res.idCategoria);     
      $("#user_A").val(res.user);
      $("#password_A").val(res.password);

      });
    }

  function Actualizar_Usuarios(){

  var id =$("#IdUsuario").val();
  var idTipoUsuario =$("#idTipoUsuario").val();
  var Usuario =$("#user_A").val();
  var password =$("#password_A").val();
  var route  ="http://localhost:8000/welcomeAdmin/Usuarios/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{idCategoria:idTipoUsuario,user:Usuario,password:password},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ActualizarUsuarios').modal('hide');
            window.location="http://localhost:8000/welcomeAdmin/Usuarios";
            alert('Actualizacion correcta');
          }else{
            alert('no se pudo');
               }
          
        }
  });
}

function EliminarUsuarios(id){

    var route  ="http://localhost:8000/welcomeAdmin/Usuarios/"+id+"";
    var token  =$("#token").val();
    $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'delete',
    dataType:'json',
        success:function(res){
          if(res.sms=='ok'){
            window.location="http://localhost:8000/welcomeAdmin/Usuarios";
            alert('Eliminacion correcta');
          }          
        }
  });
}