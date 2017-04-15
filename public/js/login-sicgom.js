 $(document).ready(function(){
	$('#usuario').focus();
	
});

$('#btn-login').click(function(){
		login();
	});

  function login(){

      var usuario   = $('#usuario').val();
      var password  = $('#clave').val();
      var token     = $('#token').val();

 if(usuario=="" && password==""){
        alert("usuario y contraseña esta vacio");
        
      }else{
          //loader_login('on');
        $.ajax({
            url:'/logeo',
            type:'POST',
            dataType: 'json',
            headers :{'X-CSRF-TOKEN': token},
            data:{usuario:usuario,password:password},
            success:function(response){   
                //loader_login('off');
                   if(response.sms=="login"){
                 // loader_login('off');
                  alert("Bienvenido");
                  redirect('/app');
                  }else{
                  //loader_login('off');
                  alert("Usuario Incorrectos");
                 }
              }
          });
      }
    }

    function redirect(url){
   window.location=url;
}


