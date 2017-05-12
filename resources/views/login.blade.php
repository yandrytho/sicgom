<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SICGOM - UTM </title>

    <!-- Bootstrap -->
    {!!Html::style('plugins/bootstrap/dist/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('plugins/font-awesome/css/font-awesome.min.css')!!}
    <!-- NProgress -->
    {!!Html::style('plugins/nprogress/nprogress.css')!!}
    <!-- Animate.css 
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">-->
    <!-- Custom Theme Style -->
    {!!Html::style('css/custom.min.css')!!}
    <!-- Estilos SICGOM -->
    {!!Html::style('css/sicgom.css')!!}
    
    {!!Html::style('pnotify/pnotify.custom.min.css')!!}
    



  </head>

  <body class="login">
    <div class="figure">
      <img class="logo-escudo" src="{{asset('img/utm.png')}}">
    </div>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
    <div id="lod" style="display:none"> 
          <img src="{{asset('img/load.gif')}}" alt="" style="position: absolute;margin-left: 640px;z-index: 1;margin-top: 53px;width: 80px;">
        <h4 style="position: absolute;margin-left: 640px;z-index: 1;margin-top: 136px;">Cargando...
                </h4>
    </div>
    {!!Form::open(['method'=>'POST','id'=>'login_from'])!!} 
     <input  type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
      <div class="login_wrapper">
        
        <div id="login_form">
          <section class="login_content">
              <h1>SICGOM - UTM</h1>
              <div class="margin_top_10px">
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required="" />
              </div>
              <div class="margin_top_10px">
                <input type="password" class="form-control" id="clave" name="clave" placeholder="Clave" required="" />
              </div>
    {!!Form::close()!!}

              <div class="margin_top_10px">
                <button type="button" class="btn btn-dark" id="btn-login" >Iniciar Sessión</button>
                <a class="reset_pass" >Olvido su clave?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Crear Cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>SICGOM - UTM!</h1>
                  <p>©2017 All Rights Reserved. Departamento de Planeamiento</p>
                </div>
              </div>
          </section>
        </div>
     </div>
    </div>
  </body>
  <!-- jQuery -->
    {!!Html::script('plugins/jquery/dist/jquery.min.js')!!}
    {!!Html::script('js/login-sicgom.js')!!}
    {!!Html::script('pnotify/pnotify.custom.min.js')!!}

    
</html>
