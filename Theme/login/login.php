<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	   <section id="aPersonas">
	  	  <div id="login-page">
	  	<div class="container">
	   	
  <form class="col-lg-4"></form>

      
        <form action="validalogin.php"class="col-lg-4"  method="post"> <br><br><br>
	      <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">

		             <input type="text" id="usuario"class="form-control" placeholder="User ID"name="usuario" autofocus required="">
		            <br>

		            <input type="password" id="contrasena"class="form-control" name="contrasena" placeholder="Password" required=""> 
                
                           
                                
            </div>  
		      <!--       <input type="text" placeholder="User ID" name="usuario" autofocus/>
    <input type="password" placeholder="Contraseña" name="contrasena"/> -->
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a href="#" id="nuevoL" onclick="listaPersonas();" >Cambiar contraseña</a>
		
		                </span>
		            </label>
                <!--   <input type="button" value="enviar" onclick="mifuncion()"> -->
		           <button class="btn btn-theme btn-block" href="index.php" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		           <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>

		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		       </form>	  	 
	  	 
	  	</div>
	  </div>
	  </section>
	   <section id="lPersonas">
              <div id="login-page">
      <div class="container">
        <form id="frmNuevo" class="col-lg-4"></form>

      
        <form class="col-lg-4" name="login_contra"action='contraupdate.php' method="post"><br><br><br>
        <h2 class="form-login-heading">sign in now</h2>
            <div class="login-wrap">
               <input type="text" class="form-control" action="contraupdate.php" placeholder="User ID"name="usuario" id="usuario" required="">
                <br>

               
                <label for="Contra Antigua">Contraseña anterior</label>
                <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Password" required=""> 
                 <label for="Contra Antigua">Contraseña Nueva</label>
                <input type="password" class="form-control" name="contrasenaNueva" id="contrasenaNueva" placeholder="Password" required=""> 
          <!--       <input type="text" placeholder="User ID" name="usuario" autofocus/>
    <input type="password" placeholder="Contraseña" name="contrasena"/> -->
                <label class="checkbox">
                    <span class="pull-right">
                        <li ><a href="#" id="NuevoL" onclick="nuevoPersonas();" >Volver Login</a></li>
    
                    </span>
                </label>
                <button class="btn btn-theme btn-block" href="index.php" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                <hr>
                
                <div class="login-social-link centered">
                <p>or you can sign in via your social network</p>
                    <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                    <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                </div>
                <div class="registration">
                    Don't have an account yet?<br/>
                    <a class="" href="#">
                        Create an account
                    </a>
                </div>
    
            </div>
    
              <!-- Modal -->
               <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Forgot Password ?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Enter your e-mail address below to reset your password.</p>
                              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
    
                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-theme" type="button">Submit</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->
    
           </form>       
       
      </div>
    </div>

	   </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="../assets/js/jquery.backstretch.min.js"></script>
    


  </body>

 <script src="../plugins/pace/pace.js"></script>
<script src="../plugins/jquery/jquery-3.2.1.min.js"></script>

<script src="../plugins/alertifyjs/alertify.js"></script>
<script src="../plugins/jquery-validation/dist/jquery.validate.js"></script>
<script src="../plugins/jquery-validation/messages_es.js"></script>
<script src="../plugins/sweetalert2-master/dist/sweetalert2.js"></script>
<script src="../plugins/pace/pace.js"></script>
<script src="../plugins/alertifyjs/alertify.js"></script>
<!-- modificado --><script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- script propios -->
<script src="../js/reportes.js" ></script>
<script src="../js/acomodo.js"></script>
<script src="../js/ingresar.js"></script>
<script src="../js/listas.js"></script>
<script src="../js/status.js"></script>
<!-- script propios -->


<script>
    $("#personas").addClass("active");
    $("#nuevoR").addClass("hide");

    $('#aPersonas').show();  
    $('#lPersonas').hide();
    $('#aPersonas2').hide();  
    $('#lPersonas2').hide();
    $('#aUsuario').hide();
    $('#lUsuario').hide();
    $('#aIncidencias').hide();
    $('#lIncidencias').hide();
    $('#aHorarios').hide();
    $('#lHorarios').hide();
    $('#aJustificaciones').hide();
    $('#lJustificaciones').hide();
    $('#aHistorial').hide();
    $('#lHistorial').hide();
     $('#aTrabajador').hide();
    $('#lTrabajador').hide();
  
</script>

 <!-- <script type="text/javascript">
    $('#contenedor').hide();
 </script> -->

<!-- requerimientos de aPersonas      -->
<script type="text/javascript">
       $( "#frmLogin" ).validate( {
            submitHandler: function () {
                
            }
        } );

    $( document ).ready( function () {
      $( "#frmLogin" ).validate( {
        rules: {
          usuario: {
            required: true
          },
          contrasena: {
            required: true
          }

        
        },
        messages:{
          nombre: {
                        required: "Obligatorio",
                        number: "Solo numeros",
                        min: jQuery.validator.format("Menor {0}."),
                        max: jQuery.validator.format("Mayor o igual a {0}."),
                        maxlength: jQuery.validator.format("Mayor a {0} caracteres."),
                        }

        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `help-block` class to the error element
          error.addClass( "help-block" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".error" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".error" ).addClass( "has-success" ).removeClass( "has-error" );
        }
      } );

    } );
</script>
</script>


<script language="javascript">      
    function recibir() 
    { 
        var user = document.getElementById("usuario").value; 
        document.write(usuario);    
          var user = document.getElementById("contrasena").value; 
        document.write(usuario);     
         
    }         
</script>  

<script>
     function cargarUsuario(val)
    {
      $.ajax({
      type: 'post',
      url: '../campos_dinamicos/obtener_usuario.php',
      data: {
      get_option:val
    },
    success: function (response) {
   document.getElementById("cbo_prez").innerHTML=response;
    }
    });
    }
   </script>
   <script type="text/javascript">
    function mifuncion(){
    // alert("Hola");
   var usuario = document.getElementById("usuario").value;
    var contrasena = document.getElementById("contrasena").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../login/validalogin.php",
        type:"POST",
        dateType:"php",
        data:{"usuario" : usuario}, 
        success:function(respuesta){
                swal(
                  'Iniciar Session',
                  usuario,
                  usuario,
                  'success'
                ).then(function () {
                    $('#usuario').focus();
                })
                // alertify.success("El registro se ha guardado");
                


                //slimpiar();
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}
</script>

<script>
    $("#login").addClass("active");
    $("#nuevoR").addClass("hide");

   
    
 
</script>




</html>
