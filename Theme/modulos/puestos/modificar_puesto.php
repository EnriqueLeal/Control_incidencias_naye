<?php 
include '../../configuracion/conexion.php';
include("../../global_seguridad/verificar_sesion.php");
$s_idUsuario = $_SESSION["s_IdUser"];

$s_Idtipo = $_SESSION["s_Idtipo"];

$s_Name = $_SESSION["s_Persona"];
date_default_timezone_set('America/Monterrey');
$fecha = date("Y-m-d"); //aqui pinches obtengo la pvta fecha para evaluar el periodo :v
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript">
  function reiniciar(){


  swal({
    title: 'Reiniciando Aplicación',
    text: "¿Deseas cargar la pagina nuevamente",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3498db',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Acpeptar!',
    cancelButtonText: 'No, cancelar!'
  }).then(function () {
         nuevoPersonas();

       
  });
}
</script>
  <meta charset="UTF-8">
  <title>NAESoft</title>
  <!-- bootstrap -->

  <link rel="stylesheet" type="text/css" href="../../plugins/bootstrap/css/bootstrap.css">
  <!-- sweetalert2 -->
  <link rel="stylesheet" type="text/css" href="../../plugins/sweetalert2-master/dist/sweetalert2.css">
  <!-- peace -->
   <link rel="stylesheet" type="text/css" href="../../plugins/pace/themes/pace-theme-corner-indicator.css">
  <!-- estilo propio -->
  
   <!-- alertify -->
    <link rel="stylesheet" type="text/css" href="../../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../plugins/alertifyjs/css/themes/bootstrap.css">
    <!-- <link rel="stylesheet" href="plugins/select2-master/dist/css/select2.css"> -->
    <!-- <link rel="stylesheet" href="plugins/datatables/jquery.dataTables.css"> -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistema Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../../assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/style-responsive.css" rel="stylesheet">


    <script src="../../assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Mostrar/Ocultar Menú"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>NAESoft</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"> <img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
            						

                    <li><a class="logout" href="../../login/login.php">Logout</a></li>
            	</ul>
            </div>
            
        </header> 
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="../../assets/img/logo.png" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Bienvenido(a): <?php echo $s_Name;?>     </h5>
                  <h5 class="centered">Puesto: <?php echo $s_Idtipo;?>     </h5>
                    <marquee><span id="liveclock"></span></marquee>

                 <div class="collapse navbar-collapse" id="navegacion-pp">
              <ul class="nav navbar-nav">
              <ul class="nav navbar-nav">

          <li class="dropdown" id="personas">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                Puestos <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li ><a href="#" id="nuevoR" onclick="nuevoPersonas();" >Nuevo registro</a></li>
                <li ><a href="#" id="nuevoL" onclick="listaPersonas();" >Lista de registros</a></li>
                <!-- <li ><a href="../reportes/pdfListaPersona.php?id=1">Reporte general</a></li> -->
                <li ><a onclick="pdfPersona();" "">Reporte general</a></li>
              </ul>
          </li>

      </aside>

                  
                  <section id="main-content">
          <section class="wrapper">
            
            
            <!-- Hoja en donde estan todos los elementos -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                    <center><h2 style="color: #3498db;">PUESTOS</h2></center>    
                    <br>
                    <br>



<!-- inicio lista personas -->
    <section id="lPersonas">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-8">
                          <form id="frmNuevo" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>Editar Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                                   <div class="table-responsive">
                                        <section id="llenar_personas"></section>
                                   </div>
                                        <!-- fin del datatable -->
                                    </div>
                                
                          </form> 

      <?php
              include '../../configuracion/conexion.php';
              $id = $_GET["id"];
              
              
              
                  
              $consulta = mysql_query("SELECT id_puesto, nom_puesto
                    FROM puestos 
                    WHERE id_puesto = '$id'",$conexion) or die (mysql_error());
                  
             $row=mysql_fetch_array($consulta);

              $id=$row[0];

            ?>
            <form action="ejecutar_modificar_puestos.php" method="POST" id="formulario">
                <input type="hidden" class="form-control" id="id_puesto" value="<?php echo $row[0];?>" name="id_puesto">
              <div class="form-group col-md-4">
                <label for="nom_puesto">Nombre: </label>
                <input type="text" class="form-control" id="nom_puesto" value="<?php echo $row[1];?>" name="nom_puesto">
              </div>
              
             <br> <br><br>
                <input type="submit" value="Editar"  class="btn btn-primary btn-main center-block">
              

          </form>



                </div>
            </div>                                    
        </div>
    

            <!--Aqui termina el espacio de mi formulario -->

     
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
     
    

      <!--main content end-->
      <!--footer start-->
<!--       <footer class="site-footer">
          <div class="text-center">
              2018 - NAE / SOFT
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer> -->
      <!--footer end-->


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->

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
    $('#aAlumnos').hide();
    $('#lAlumnos').hide();
    $('#aCarreras').hide();
    $('#lCarreras').hide();
    llenarPersonas();
    llenarAlumnos();
    llenarCarreras();
</script>

 <!-- <script type="text/javascript">
    $('#contenedor').hide();
 </script> -->

<!-- requerimientos de aPersonas      -->
<script type="text/javascript">
       $( "#frmNuevaPersona" ).validate( {
            submitHandler: function () {
                nuevaPersona();
            }
        } );

    $( document ).ready( function () {
      $( "#frmNuevaPersona" ).validate( {
        rules: {
          nombre: {
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

<!-- fin requerimientos de aPersnas -->
<script type="text/javascript">
        $( "#frmNuevoAlumnos").validate( {
              submitHandler: function () {
                 nuevaAlumno();

              }
          } );

      $( document ).ready( function () {
        $( "#frmNuevoAlumnos" ).validate( {
          rules: {        
          matricula: {
            required: true,
            number: true
          },
          fechaing: {
            date: true
          }
          },

          messages:{
            matricula: {
                          required: "Obligatorio",
                          number: "Solo numeros",
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

<!-- }}}}}}}} -->
     <script type="text/javascript">
        $( "#frmNuevaCarrera" ).validate( {
              submitHandler: function () {
                  nuevaCarrera();

              }
          } );

      $( document ).ready( function () {
        $( "#frmNuevaCarrera" ).validate( {
          rules: {        
          nombreC: {
            required: true
          }
          },

          messages:{
            nombreC: {
                          required: "Obligatorio",
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
   
   <script>
     function cargarMunicipio(val)
    {
      $.ajax({
      type: 'post',
      url: 'campos_dinamicos/obtener_municipio.php',
      data: {
      get_option:val
    },
    success: function (response) {
      document.getElementById("municipios").innerHTML=response; 
    }
    });
    }
   </script>

  <script>
    function cargarPersonas()
    {
      $.ajax({
        type: 'POST',
        url: 'campos_dinamicos/obtener_personas.php',
        data: {},
          success: function(response) {
            document.getElementById("cbo_alumno").innerHTML=response;
          }
      });
    }
  </script>

    <script>
    function cargarCarreras()
    {
      $.ajax({
        type: 'POST',
        url: 'campos_dinamicos/obtener_carreras.php',
        data: {},
          success: function(response) {
            document.getElementById("cbo_carreras").innerHTML=response;
          }
      });
    }

function sigla(cadena){


        var palabras = cadena,
        array = palabras.split(" "),
        total = array.length,
        resultado = "";

        if (cadena.charAt(cadena.length-1)==0) { return;}// si la cadena viene en blanco se sale de la funcion

        for (var i = 0; i < total; resultado += array[i][0], i++);
            $("#siglas").val(resultado.toUpperCase()); 
     
        if (cadena.length==1){
            $("#siglas").val(""); 
        }


}

































    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  <script language="JavaScript" type="text/javascript">
    function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()

        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='5' face='Arial' color='white'><b><font size='5'></font></br>"+hours+":"+minutes+":"
         +seconds+" "+dn+"</b></font>"
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
         }


        window.onload=show5
         //-->
     </script>

  </body>
</html>
