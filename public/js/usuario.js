
//FUNCION REGISTRAR USUARIOS
$("#btn_IngresarUsuarios").click(function(){
registrar_usuario();
});

// funcion para registar a un usuario
function registrar_usuario(){
	
	var token    = new $('#token').val();
    var datos  = new FormData($("#frmIngresarUsuarios")[0]);
    $.ajax({
    url:"/app/usuario",
    headers :{'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
         //swal("Efood!", "El usuario se ha registro correctamente!", "success");
         alert("Usuario registrado")
        document.getElementById("frmIngresarUsuarios").reset();  
        $("#myModal_IngresarUsuario").modal("hide");
        $("#datatable").load("/lista_usuarios");
       }
     }
	});
}
//

 $(document).ready(function() {
            $("#btn_ActualizarUsuarios").click(function() {
            Actualizar_Usuarios();
            });
            });	

    function cargar_datos(id){
    var route="/app/usuario/" +id+"/edit";	
    $.get(route,function(res){
    	alert(res.tipoUsuario);
      $("#IdUsuario").val(res.id)
      $("#tipoUsuario_A").val(res.tipoUsuario);     
      $("#nombre_A").val(res.name);     
      $("#user_A").val(res.email);
      $("#password_A").val(res.password);

      });
    }

  function Actualizar_Usuarios(){

  var id =$("#IdUsuario").val();
  var TipoUsuario =$("#tipoUsuario_A").val();
  var nombre =$("#nombre_A").val();
  var Usuario =$("#user_A").val();
  var password =$("#password_A").val();
  var route  ="/app/usuario/"+id+"";
  var token  =$("#token").val();
  $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
        data    :{TipoUsuario:TipoUsuario,nombre:nombre,user:Usuario,password:password},
        success:function(res){
          if(res.sms=='ok'){
            $('#myModal_ModificarUsuarios').modal('hide');
            alert('Actualizacion correcta');
           $("#datatable").load('/lista_usuarios');
            
          }else{
            alert('no se pudo');
               }
          
        }
  });
}

function EliminarUsuarios(id){

    var route  ="/app/usuario/"+id+"";
    var token  =$("#token").val();
    $.ajax({
    url: route,
    headers :{'X-CSRF-TOKEN': token},
    type: 'delete',
    dataType:'json',
        success:function(res){
          if(res.sms=='ok'){
            alert('Eliminacion correcta');
           $("#datatable").load("/lista_usuarios");
          }          
        }
  });
}