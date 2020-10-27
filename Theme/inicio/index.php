<?php 
include '../configuracion/conexion.php';
include("../global_seguridad/verificar_sesion.php");
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

  <link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.css">
  <!-- sweetalert2 -->
  <link rel="stylesheet" type="text/css" href="../plugins/sweetalert2-master/dist/sweetalert2.css">
  <!-- peace -->
   <link rel="stylesheet" type="text/css" href="../plugins/pace/themes/pace-theme-corner-indicator.css">
  <!-- estilo propio -->
  
   <!-- alertify -->
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../plugins/alertifyjs/css/themes/bootstrap.css">
    <!-- <link rel="stylesheet" href="plugins/select2-master/dist/css/select2.css"> -->
    <!-- <link rel="stylesheet" href="plugins/datatables/jquery.dataTables.css"> -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistema Principal</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

<script src="../plugins/jquery/jquery-1.8.3.min.js"></script>
   

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
              
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
            						

                    <li><a class="logout" href="../login/login.php">Logout</a></li>
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
              
                  <p class="centered"><a href="profile.html"><img src="../assets/img/logo.png" class="img-circle" width="60"></a></p>
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
          <ul></ul>
        </ul>
      </ul>

    </div>

          <!-- ESPACIO -->
            <li class="dropdown" id="departamento">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                 Departamento<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li ><a href="#" id="nuevoDR" onclick="nuevoDepartamento();" >Nuevo registro</a></li>
                <li ><a href="#" id="nuevoDL" onclick="listaDepartamento();" >Lista de registros</a></li>
                <!-- <li ><a href="../reportes/pdfListaPersona.php?id=1">Reporte general</a></li> -->
                <li ><a onclick="pdfUsuario();" "">Reporte general</a></li>
              </ul>
          </li>
        
          <!-- FIN -->
          <!-- MENU USUARIO -->
           <li class="dropdown" id="usuarios">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                 Usuarios<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li ><a href="#" id="nuevoUR" onclick="nuevoUsuario(); cargarUsuario();" >Nuevo registro</a></li>
                <li ><a href="#" id="nuevoUL" onclick="listaUsuario();" >Lista de registros</a></li>
                <!-- <li ><a href="../reportes/pdfListaPersona.php?id=1">Reporte general</a></li> -->
                <li ><a onclick="pdfUsuario();" "">Reporte general</a></li>
              </ul>
          </li>
           <li class="dropdown" id="trabajadores">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                 trabajadores<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li ><a href="#" id="nuevoTR" onclick="nuevoTrabajador(); cargarPersonas(); cargarPuesto(); cargarDepartamento();" >Nuevo registro</a></li>
                <li ><a href="#" id="nuevoTL" onclick="listaTrabajador();" >Lista de registros</a></li>
                <!-- <li ><a href="../reportes/pdfListaPersona.php?id=1">Reporte general</a></li> -->
                <li ><a onclick="pdfUsuario();" "">Reporte general</a></li>
              </ul>
          </li>
          <!-- MENU PERSONA -->
          <li class="dropdown" id="personas2">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                 Personas<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li ><a href="#" id="nuevoR2" onclick="nuevoPersonas2();" >Nuevo registro</a></li>
                <li ><a href="#" id="nuevoL2" onclick="listaPersonas2();" >Lista de registros</a></li>
                <!-- <li ><a href="../reportes/pdfListaPersona.php?id=1">Reporte general</a></li> -->
                <li ><a onclick="pdfUsuario();" "">Reporte general</a></li>
              </ul>
          </li>
          <!-- MENU INCIDENCIA -->
         <!--  <li class="dropdown" id="incidencias">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                Incidencias <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li ><a href="#" id="nuevoIR" onclick="nuevoIncidencias();" >Nuevo registro</a></li>
                <li ><a href="#" id="nuevoIL" onclick="listaIncidencias();" >Lista de registros</a></li>
                <li ><a href="../reportes/pdfListaPersona.php?id=1">Reporte general</a></li>
                <li ><a onclick="pdfPersona();" "">Reporte general</a></li>
              </ul>
          </li> -->
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// M E N Ú      H O R A R I O -->
          <li class="dropdown" id="horarios">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                Horarios <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li ><a href="#" id="nuevoHR" onclick="nuevoHorarios();" >Nuevo registro</a></li>
                <li ><a href="#" id="nuevoHL" onclick="ListaHorarios();" >Lista de registros</a></li>
                <!-- <li ><a href="../reportes/pdfListaPersona.php?id=1">Reporte general</a></li> -->
                <li ><a onclick="pdfPersona();" "">Reporte general</a></li>
              </ul>
          </li>
           <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////F I N   M E N Ú      H O R A R I O -->

          <!-- <li class="dropdown" id="justificaciones">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                Justificaciones <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li ><a href="#" id="nuevoJR" onclick="nuevoJustificaciones();" >Nuevo registro</a></li>
                <li ><a href="#" id="nuevoJL" onclick="listaJustificaciones();" >Lista de registros</a></li>
                <li ><a href="../reportes/pdfListaPersona.php?id=1">Reporte general</a></li>
                <li ><a onclick="pdfPersona();" "">Reporte general</a></li>
              </ul>
          </li> -->
          <li class="dropdown" id="historial">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
                Historial de incidencias <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li ><a href="#" id="nuevoHHR" onclick="nuevoHistorial();" >Nuevo registro</a></li>
                <li ><a href="#" id="nuevoHHL" onclick="listaHistorial();" >Lista de registros</a></li>
                <!-- <li ><a href="../reportes/pdfListaPersona.php?id=1">Reporte general</a></li> -->
                <li ><a onclick="pdfPersona();" "">Reporte general</a></li>
              </ul>
          </li>
        
          </ul>
          </div>
        </aside>
  </section>
 <!--  <div id="menuToggle"><i class="icon-reorder"></i></div>
  </nav> -->
  <!-- ARREGLADO HASTA AQUI   -->




<!-- Fnuevo contenido -->

            <section id="main-content">
          <section class="wrapper">
            
            
            <!-- Hoja en donde estan todos los elementos -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <br>
                    <center><h2 style="color: #3498db;">MODULOS</h2></center>    
                    <br>
                    <br>

<!-- PERSONA -->
<section id="aPersonas2">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                    <div class="panel-heading">
                                        <h2>PERSONAS - Registra la información solicitada</h2>
                                    </div>
                          <form id="frmNuevaPersona2" method="post" class="form-vertical">
                                <div class="panel-body">
                                        
                                          <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nombre">Nombre:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="nombre" autofocus placeholder="Coloca el nombre" name="nombre" required>
                                                    </div>
                                                </div>               
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="ap_paterno">Apellido paterno:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="ap_paterno" autofocus placeholder="Coloca el apellido paterno" name="ap_paterno" required>
                                                    </div>
                                                </div>               
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="ap_materno">Apellido materno:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="ap_materno" autofocus placeholder="Coloca el apellido materno" name="ap_materno" required>
                                                    </div>
                                                </div>               
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="correo">Correo electrónico:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="correo" autofocus placeholder="Coloca el correo" name="correo" type="email" required>
                                                    </div>
                                                </div>               
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                             <div class="form-group">
                                                <label>Estado Civil:</label>
                                                <select name="ecivil" class="form-control select2" style="width: 100%;" id="ecivil">
                                                  <option selected="selected" value="Soltero(a)">Soltero(a)</option>
                                                  <option value="Casado(a)">Casado(a)</option>
                                                  <option value="Viudo(a)">Viudo(a)</option>
                                                  <option value="Divorciado(a)">Divorciado(a)</option>
                                                  <option value="Union Libre">Union Libre</option>
                                                  <option value="No especificado">No especificado</option>
                                                </select>
                                              </div>               
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="municipio">Municipio:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="municipio" autofocus placeholder="Coloca el municipio" name="municipio" required>
                                                    </div>
                                                </div>               
                                            </div>
                                        </div>




                                         <div class="row"> 
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="colonia">Colonia:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="colonia" autofocus placeholder="Colola la colonia" name="colonia" required>
                                                    </div>
                                                </div>               
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="numero">Número exterior:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="numero" autofocus placeholder="Coloca el número" name="numero" type="number" maxlength="5" required>
                                                    </div>
                                                </div>               
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="telefono">Teléfono:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="telefono" autofocus placeholder="Coloca el telefono" name="telefono" type="number" maxlength="10" required>
                                                    </div>
                                                </div>               
                                            </div>
                                        </div>





                                             <br><br><br>
                                        <input type="submit" name="PersonaG2" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                        

                                     
                              ¿</div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </section>

  


    <!--//////////////////////////////////////////////////////////////////// inicio lista personas2 -->
    <section id="lPersonas2">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                          <form id="frmNuevo2" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>PERSONAS - Lista de Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                             <div class="table-responsive">
                                  <section id="llenar_personas2">
                                    
                                  </section>
                             </div>
                                        <!-- fin del datatable -->
                                    </div>
                               
                          </form>    
                </div>
            </div>                                    
        </div>
    </section> 
        

<!-- FIN -->



      <!--sidebar end--> <!-- Formulario Personas -->
    <section id="aPersonas">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-8">
                    <div class="panel-heading">
                                        <h2>PUESTOS - Registra la información solicitada</h2>
                                    </div>
                          <form id="frmNuevaPersona" method="post" class="form-vertical">
                                
                                

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nombre">Nombre Puesto :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="nom_puesto" autofocus placeholder="Coloca el nombre" name="nom_puesto" required>
                                                    </div>
                                                  </div>
                                                </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                    <div class="form-group">
                                                    <label for="nombre">Nombre Puesto :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="nom_puesto" autofocus placeholder="Coloca el nombre" name="nom_puesto" required>
                                                    </div>
                                                  </div>
                                                </div>               
                                            </div>

                                             <br><br><br>
                                        <input type="submit" name="PersonaG" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                        </div>

                                     
                                </div>
                          
                    </form>    
                </div>
            </div>                                    
      </div>

    </section>   
<!-- inicio lista personas -->
    <section id="lPersonas">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                          <form id="frmNuevo" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>PUESTOS - Lista de Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                             <div class="table-responsive">
                                  <section id="llenar_personas">
                                    
                                  </section>
                             </div>
                                        <!-- fin del datatable -->
                                    </div>
                               
                          </form>    
                </div>
            </div>                                    
        </div>
    </section> 

    
     <section id="aTrabajador">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                    <div class="panel-heading">
                                        <h2>TRABAJADOR - Registra la información solicitada</h2>
                                    </div>
                          <form id="frmNuevaTrabajador" method="post" class="form-vertical">
                                
                                

                                    <div class="panel-body">
                                        <div class="row" >
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                   <div class="error">
                                                   <label for="num_empleado">Número de Empleado:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="num_empleado" autofocus placeholder="Coloca el Número Empelado" name="num_empleado" required>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                       <div class="form-group">
                                                    <label for="departamento">Departamento:</label>
                                        
                                                    <select class="form-control select2" style="width: 100%;" id="cbo_departamento" name="cbo_departamento">
                                                         
                                              
                                                    </select>
                                                </div> 
                                            </div>    
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                     <div class="form-group">
                                                  <label for="fechaing">Fecha de ingreso:</label>
                                                  <div class="error">
                                                    <input type="date" name="fechalerta" value="<?php echo date("Y-m-d");?>" class="form-control" id ="fecha_ingreso" name="fecha_ingreso">
                                                 <!--  <input type="date" value="21-04-1997" class="form-control" id="fechanac" name="fechanac"> -->
                                                  </div>
                                            </div>  
                                            </div>          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                        <label for="persona">Persona:</label>
                                                    <select class="form-control select2" style="width: 100%;" id="cbo_persona" name="cbo_persona">
                                                         
                                              
                                                    </select>
                                                  </div>
                                                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                      <div class="form-group">
                                                    <label for="puesto">Puesto:</label>
                                        
                                                    <select class="form-control select2" style="width: 100%;" id="cbo_puesto" name="cbo_puesto">
                                                         
                                              
                                                    </select>
                                                </div> 

                                                </div>  
                                                </div>             
                                            </div>

                                             <br><br><br>
                                        <input type="submit" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                     </form>
                                   </div>
                                 </div>
                               </div>
                             </section>
                        
    
   
    <section id="lTrabajador">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                          <form id="frmNuevo" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>TRABAJADORES - Lista de Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                             <div class="table-responsive">
                                  <section id="llenar_trabajador">
                                    
                                  </section>
                             </div>
                                        <!-- fin del datatable -->
                                    </div>
                               
                          </form>    
                </div>
            </div>                                    
        </div>
    </section>

       <!-- FIN -->

       <!-- Lista de modulos que se van registrar -->
       
      
       <!-- FIN-->
       <section id="aUsuario">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                    <div class="panel-heading">
                                   <h2>USUARIOS - Registra la información solicitada</h2>
                                    </div>
                          <form id="frmNuevaUsuario" method="post" class="form-vertical">
                                
                                

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                   
                                                    <div class="error">
                                                    <div class="form-group">
                                                    <label for="id_persona">Persona:</label>
                                        
                                                    <select class="form-control select2" style="width: 100%;" id="cbo_usuario" name="cbo_usuario">
                                                         
                                              
                                                    </select>
                                                </div> 
                                                    </div>
                                                </div>               
                                            </div>


                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nom_usuario">Nombre de Usuario:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="nom_usuario" autofocus placeholder="Coloca el nombre" name="nom_usuario" required>
                                                    </div>
                                                </div>               
                                            </div>


                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="contra">Password:</label>
                                                    <div class="error">
                                                    <input class="form-control" id="contra" autofocus placeholder="Coloca un password" name="contra" required>
                                                    </div>
                                                </div>               
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                  <label for="caducidad">Fecha de Caducidad:</label>
                                                  <div class="error">
                                                  <input type="date" required class="form-control" id="caducidad" name="caducidad" value="<?php echo date("Y-m-d");?>">
                                                  </div>
                                            </div>              
                                          </div>
</div>

                                             <br><br><br>
                                        <input type="submit" name="PersonaG" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                        

                                     
                                </div>
                          
                    </form>    
                </div>
            </div>                                    
      </div>

    </section>   
    <!-- inicio lista personas -->
     <section id="lUsuario">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                          <form id="frmNuevo2" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>USUARIOS - Lista de Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                             <div class="table-responsive">
                                  <section id="llenar_usuarios">
                                    
                                  </section>
                             </div>
                                        <!-- fin del datatable -->
                                    </div>
                               
                          </form>    
                </div>
            </div>                                    
        </div>
    </section> 
        

       <!-- FIN -->
       <section id="aIncidencias">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-8">
                    <div class="panel-heading">
                                        <h2>INCIDENCIAS - Registra la información solicitada</h2>
                                    </div>
                          <form id="frmNuevaIncidencias" method="post" class="form-vertical">
                                
                                

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nombre">Incidencia :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="nombre" autofocus placeholder="Coloca el nombre" name="nombre" required>
                                                    </div>
                                                </div>               
                                            </div>

                                             <br><br><br>
                                        <input type="submit" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                        </div>

                                     
                                </div>
                          
                    </form>    
                </div>
            </div>                                    
      </div>

    </section>   
<!-- inicio lista personas -->
    <section id="lIncidencias">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                          <form id="frmNuevo" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>INCIDENCIAS - Lista de Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                             <div class="table-responsive">
                                  <section id="llenar_incidencia">
                                    
                                  </section>
                             </div>
                                        <!-- fin del datatable -->
                                    </div>
                               
                          </form>    
                </div>
            </div>                                    
        </div>
    </section> 


        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// F O R M U L A R I O      H O R A R I O -->
        <section id="aHorarios">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                    <div class="panel-heading">
                                        <h2>HORARIOS - Registra la información solicitada</h2>
                                    </div>
                          <form id="frmNuevaHorario" method="post" class="form-vertical">

                <div class="panel-body">
                          <div class="row">

                                                  <?php

                                                      include("../configuracion/conexion.php");
                                                        $qry = "SELECT t.id_trabajador, CONCAT(personas.nombre, ' ' ,personas.ap_paterno, ' ' ,personas.ap_materno)
                                                                FROM personas
                                                                INNER JOIN trabajadores AS t
                                                                WHERE t.id_persona = personas.id_persona  
                                                                AND 
                                                                t.activo=1
                                                                ORDER BY personas.nombre ASC";

                                                        $consulta = mysql_query($qry,$conexion) or die (mysql_error());

                                                    ?>              
 
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nombre_trabajador">Nombre Trabajador:</label>
                                                    <div class="error">
                                                    <select class="form-control" id="nombre_trabajador" name="nombre_trabajador">
                                                    <?php
                                                        while ($row=mysql_fetch_row($consulta))
                                                        {
                                                            echo "<option value=\"$row[0]\">$row[1]</option>";
                                                        }

                                                        mysql_close($conexion);
                                                    ?>
                                                    </select>
                                                    </div>
                                                </div>               
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                             <div class="form-group">
                                                <label>Día:</label>
                                                <select name="dia" class="form-control select2" style="width: 100%;" id="dia">
                                                  <option selected="selected" value="0">Domingo</option>
                                                  <option value="1">Lunes</option>
                                                  <option value="2">Martes</option>
                                                  <option value="3">Miercoles</option>
                                                  <option value="4">Jueves</option>
                                                  <option value="5">Viernes</option>
                                                </select>
                                              </div>               
                                            </div>


                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                                <div class="form-group">
                                                    <label for="hora_entrada">Hora de entrada:</label>
                                                    <div class="error">
                                                    <input class="form-control" type="time" id="hora_entrada" autofocus  name="hora_entrada" required>
                                                    </div>
                                                </div>               
                                            </div>


                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                                                <div class="form-group">
                                                    <label for="hora_salida">Hora de salida :</label>
                                                    <div class="error">
                                                    <input class="form-control" type="time" id="hora_salida" autofocus  name="hora_salida" required>
                                                    </div>
                                                </div>               
                                            </div>




                                             <br><br><br>
                                        <input type="submit" name="PersonaG" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                        </div>
                </div>
                    </form>    
                </div>
            </div>                                    
      </div>

    </section>   
<!-- inicio lista personas -->
    <section id="lHorarios">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                          <form id="frmNuevo" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>HORARIOS - Lista de Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                             <div class="table-responsive">
                                  <section id="llenar_horarios">
                                    
                                  </section>
                             </div>
                                        <!-- fin del datatable -->
                                    </div>
                               
                          </form>    
                </div>
            </div>                                    
        </div>
    </section> 
 <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// F I N      F O R M U L A R I O      H O R A R I O -->


        <section id="aJustificaciones">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-8">
                    <div class="panel-heading">
                                        <h2>JUSTIFICACIONES - Registra la información solicitada</h2>
                                    </div>
                          <form id="frmNuevaUsuario" method="post" class="form-vertical">
                                
                                

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nombre">PERSONAS PRUEBA :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="nombre" autofocus placeholder="Coloca el nombre" name="nombre" required>
                                                    </div>
                                                </div>               
                                            </div>

                                             <br><br><br>
                                        <input type="submit" name="PersonaG" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                        </div>

                                     
                                </div>
                          
                    </form>    
                </div>
            </div>                                    
      </div>

    </section>   
    <!-- inicio lista personas -->
    <section id="lJustificaciones">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                          <form id="frmNuevo" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>JUSTIFICACIONES - Lista de Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                             <div class="table-responsive">
                                  <section id="llenar_usuarios">
                                    
                                  </section>
                             </div>
                                        <!-- fin del datatable -->
                                    </div>
                               
                          </form>    
                </div>
            </div>                                    
        </div>
    </section> 
     <section id="aHistorial">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-8">
                    <div class="panel-heading">
                                        <h2>HISTORIAL - Registra la información solicitada</h2>
                                    </div>
                          <form id="" method="post" class="form-vertical">
                                
                                

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="nombre">PERSONAS PRUEBA :</label>
                                                    <div class="error">
                                                    <input class="form-control" id="nombre" autofocus placeholder="Coloca el nombre" name="nombre" required>
                                                    </div>
                                                </div>               
                                            </div>

                                             <br><br><br>
                                        <input type="submit" name="PersonaG" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                        </div>

                                     
                                </div>
                          
                    </form>    
                </div>
            </div>                                    
      </div>

    </section>   
    <!-- inicio lista personas -->
    <section id="lHistorial">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                          <form id="frmNuevo" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>HISTORIAL - Lista de Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                             <div class="table-responsive">
                                  <section id="llenar_usuarios">
                                    
                                  </section>
                             </div>
                                        <!-- fin del datatable -->
                                    </div>
                               
                          </form>    
                </div>
            </div>                                    
        </div>
    </section> 

   </div>
                      </div>
                    </div>
                     <!-- DEPARTMENTO -->
                    <!-- PERSONA -->
<section id="aDepartamento">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                    <div class="panel-heading">
                                        <h2>Departamento - Registra la información solicitada</h2>
                                    </div>
                          <form id="frmNuevaDepartamento" method="post" class="form-vertical">
                                
                                

                                <div class="panel-body">
                                        
                                          <div class="row">
                                           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                                            <div class="form-group">
                                              <label for="nom_departamento">Nombre :</label>
                                                <div class="error">
                                                    <input class="form-control" onkeyup="sigla(this.value)" id="nom_departamento" autofocus placeholder="Coloca el nombre" name="nom_departamento" required>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                                <div class="form-group">
                                                 <label for="siglas_departamento">Abreviatura :</label>
                                                    <div class="error">
                                                      <input class="form-control" id="siglas_departamento" autofocus name="siglas_departamento" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                          




                                             <br><br><br>
                                        <input type="submit" name="PersonaG2" value="Guardar" class="btn btn-primary btn-main center-block" >
                                           
                                        

                                     
                                </div>
                          
                    </form>    
                </div>
            </div>                                    
      </div>

    </section>   

    <!--//////////////////////////////////////////////////////////////////// inicio lista personas2 -->
    <section id="lDepartamento">
        <div class="container">
            <div class="container-fluid">
                <div class="col-lg-11">
                          <form id="frmNuevo" method="post" class="form-vertical" action="">
                                
                                    <div class="panel-heading">
                                        <h2>Departamento - Lista de Registros</h2>
                                    </div>

                                    <div class="panel-body">
                                        <!-- inicio del datatable -->
                             <div class="table-responsive">
                                  <section id="llenar_departamento">
                                    
                                  </section>
                             </div>
                                        <!-- fin del datatable -->
                                    </div>
                               
                          </form>    
                </div>
            </div>                                    
        </div>
    </section> 






<!-- CORRECTO -->


<!-- EDITAR Y ACTUALIZAR MODULOS PERSONAS -->

    <section id="editar_personas">

      <div class="col-lg-11">
        <form id="formulario" >

                

                 <div class="form-group col-md-4">
                <label for="nombre">id: </label>
                <input type="text" class="form-control" id="id_persona" value="<?php echo $row[0];?>" name="id_persona" disabled>
              </div>
              <div class="form-group col-md-4">
                <label for="nombre">Nombre: </label>
                <input type="text" class="form-control" id="persona_nombre" value="<?php echo $row[1];?>" name="nombre">
              </div>

              <div class="form-group col-md-4">
                <label for="ap_paterno">Apellido Paterno: </label>
                <input type="text" class="form-control" id="persona_ap_paterno" value="<?php echo $row[2];?>" name="ap_paterno">
              </div>

              <div class="form-group col-md-4">
                <label for="ap_materno">Apellido Materno: </label>
                <input type="text" class="form-control" id="persona_ap_materno" value="<?php echo $row[3];?>" name="ap_materno">
              </div>

              <div class="form-group col-md-4">
                <label for="correo">E-mail: </label>
                <input type="text" class="form-control" id="persona_correo" value="<?php echo $row[4];?>" name="correo">
              </div>

              <div class="form-group col-md-4">
                <label for="telefono">Teléfono: </label>
                <input type="text" class="form-control" id="persona_telefono" value="<?php echo $row[5];?>" name="telefono">
              </div>


              
             <br> <br><br><br><br><br><br><br>
             <div class="form-group col-md-11">
              <!--  <input type="submit" value="Editar"  class="btn btn-primary btn-main center-block"> -->
               <a href="javascript:Actualizar_Personas2($('#id_persona').val(),$('#persona_nombre').val(),$('#persona_ap_paterno').val(),$('#persona_ap_materno').val(),$('#persona_correo').val(),$('#persona_telefono').val())" class="btn btn-primary btn-main center-block">Actualizar</a>
             </div>
          </form>
        </div>
    </section>
    <!-- FIN -->
    <!-- ACTUALIZAR TRABAJADORES -->
    <section id="editar_trabajador">
       <div class="container">
            <div class="container-fluid">
                <div class="col-lg-8">
                    <div class="panel-heading">
                                        <h2>PRUEBA EDITAR</h2>
                                    </div>
        <form id="frmPrueba" method="post" class="form-vertical">
                

                 <div class="form-group col-md-4">
                <label for="id_trabajador">id: </label>
                <input type="text" class="form-control" id="id_trabajador" value="<?php echo $row[0];?>" name="id_trabajador" disabled>
              </div>
               <div class="form-group col-md-4">
                <label for="num_empleado">Numero de Empleado: </label>
                <input type="text" class="form-control" id="numero_empleado" value="<?php echo $row[1];?>" name="numero_empleado" required>
              </div>

                 <div class="form-group col-md-4">
                <label for="fecha_ingreso">Fecha Ingreso: </label>
                <input type="text" class="form-control" id="fecha_ingreso_sistema" value="<?php echo $row[2];?>" name="fecha_ingreso_sistema"required>
              </div>
              <div class="form-group col-lg-4">
                <label for="departamento">Departamento: </label>
                <?php 
                include '../configuracion/conexion.php';
                                             $result = mysql_query("SELECT id_departamento,nom_departamento
                 FROM departamentos
                         ",$conexion);
                                ?>
                 <select class="form-control" name="id_departamento" id="id_departamento" required>
                            <option value="" disabled selected>Selecciona el Departamento</option>
                            <?php
                              while ($row=mysql_fetch_array($result))
                               {
                                 echo "<option value='$row[0]'>$row[1]</option>";
                               }
                                    ?>
                                  </select>
              </div>
           
     <div class="form-group col-lg-4">
                <label for="puesto">Puestos: </label>
                <?php 
                include '../configuracion/conexion.php';
                                             $result = mysql_query("SELECT id_puesto,nom_puesto
                 FROM puestos
                         ",$conexion);
                                ?>
                 <select class="form-control" name="id_puesto" id="id_puesto" required>
                            <option value="" disabled selected>Selecciona el Departamento</option>
                            <?php
                              while ($row=mysql_fetch_array($result))
                               {
                                 echo "<option value='$row[0]'>$row[1]</option>";
                               }
                                    ?>
                                  </select>
              </div>
                

          
            
                  

              
             <br> <br><br><br><br><br><br><br>
            <!--  
               <input type="submit" value="Editar"  class="btn btn-primary btn-main center-block"> -->
               <div class="form-group col-lg-4">
         <a href="javascript:Actualizar_trabajador1($('#id_trabajador').val(),$('#numero_empleado').val(),$('#fecha_ingreso_sistema').val(),$('#id_departamento').val(),$('#id_puesto').val())" class="btn btn-primary btn-main center-block">Actualizar</a>
             </div>
          </form>
        </div>
      </div>
    </div>

              </section>
              <!-- CLOSE -->
 <!-- ACTUALIZAR PUESTO -->
    <section id="editar_puestos">
       <div class="container">
            <div class="container-fluid">
                <div class="col-lg-8">
                    <div class="panel-heading">
                                        <h2>PRUEBA EDITAR</h2>
                                    </div>
        <form id="frmPrueba1" method="post" class="form-vertical">
                

                 <div class="form-group col-md-4">
                <label for="p_id_puesto">id: </label>
                <input type="text" class="form-control" id="p_id_puesto" value="<?php echo $row[0];?>" name="p_id_puesto" disabled>
              </div>
               <div class="form-group col-md-4">
                <label for="nombre_puesto">Nombre del Puesto: </label>
                <input type="text" class="form-control" id="nombre_puesto" value="<?php echo $row[1];?>" name="nombre_puesto" required>
              </div>

              
                

          
            
                  

              
             <br> <br><br><br><br><br><br><br>
            <!--  
               <input type="submit" value="Editar"  class="btn btn-primary btn-main center-block"> -->
               <div class="form-group col-lg-4">
         <a href="javascript:Actualizar_puesto1($('#p_id_puesto').val(),$('#nombre_puesto').val())" class="btn btn-primary btn-main center-block">Actualizar</a>
             </div>
          </form>
        </div>
      </div>
    </div>

              </section>
              <!--  -->
<!-- ACTUALIZAR DEPARTAMENTOS -->
    <section id="editar_departamento">
       <div class="container">
            <div class="container-fluid">
                <div class="col-lg-8">
                    <div class="panel-heading">
                                        <h2>PRUEBA EDITAR</h2>
                                    </div>
        <form id="frmPrueba1" method="post" class="form-vertical">
                

                 <div class="form-group col-md-4">
                <label for="p_id_departamento">id: </label>
                <input type="text" class="form-control" id="p_id_departamento" value="<?php echo $row[0];?>" name="p_id_departamento" disabled>
              </div>
                   <div class="form-group col-md-4">
                <label for="depa_nom_departamento">Nombre :</label>
                                                <div class="error">
                                                    <input class="form-control" onkeyup="sigla2(this.value)" id="depa_nom_departamento" autofocus placeholder="Coloca el nombre" name="depa_nom_departamento" required>
                                                </div>
              </div>

               <div class="form-group col-md-4">
                 <div class="form-group">
                                                 <label for="depa_siglas_departamento">Abreviatura :</label>
                                                    <div class="error">
                                                      <input class="form-control" id="depa_siglas_departamento" autofocus name="depa_siglas_departamento" disabled>
                                                    </div>
                                                </div>
              </div>

              
                

          
            
                  

              
             <br> <br><br><br><br><br><br><br>
            <!--  
               <input type="submit" value="Editar"  class="btn btn-primary btn-main center-block"> -->
               <div class="form-group col-lg-4">
         <a href="javascript:Actualizar_departamentos1($('#p_id_departamento').val(),$('#depa_siglas_departamento').val(),$('#depa_nom_departamento').val())" class="btn btn-primary btn-main center-block">Actualizar</a>
             </div>
          </form>
        </div>
      </div>
    </div>

              </section>
              <!--  -->

<!-- SECTION´S IMPORTANTES PARA EL ACOMODO DEL FORMULARIO -->
   </section>
</section>

</form>
</div>
</div>
</div>
</section>
</section>
</section>


<!-- FIN -->

    <!-- FIN -->
                    
                   <!--FIN  -->
     
        
              
<script src="funciones.js"></script>

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
    $('#aPersonas2').hide();  
    $('#lPersonas2').hide();
    $('#aUsuario').hide();
    $('#lUsuario').hide();
    $('#aDepartamento').hide();
    $('#lDepartamento').hide();
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
    $('#editar_personas').hide();
    $('#editar_trabajador').hide();
     $('#editar_puestos').hide();
    $('#editar_departamento').hide();
    llenarPersonas();
    llenarTrabajador();
    llenarIncidencia();
    llenarPersonas2();
    llenarUsuarios();
    llenarDepartamento();
    // llenarIncidencia();
    // llenar_usuarios();
    // llenarTrabajador();
</script>
<script type="text/javascript">
       $( "#frmNuevaHorario" ).validate( {
            submitHandler: function () {
                nuevaHorario();
            }
        } );

    $( document ).ready( function () {
      $( "#frmNuevaHorario" ).validate( {
        rules: {
          nombre_horario: {
            required: true
          },

          hora_entreda: {
            required: true
          },

          hora_salida: {
            required: true
          }

        
        },
        messages:{
          nombre_horario: {
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
 <script type="text/javascript">
        $( "#frmNuevaDepartamento" ).validate( {
              submitHandler: function () {
                  nuevaDepartamento();

              }
          } );

      $( document ).ready( function () {
        $( "#frmNuevaDepartamento" ).validate( {
          rules: {        
          nom_departamento: {
            required: true
          },
           siglas_departamento: {
            required: true
          }
          },

          messages:{
            nom_departamento: {
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
   </script>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// F I N     V A L I D A C I O N     H O R A R I O S -->
// <!-- USUARIO -->
<script type="text/javascript">
       $( "#frmNuevaUsuario" ).validate( {
            submitHandler: function () {
                nuevaUsuario();
            }
        } );

    $( document ).ready( function () {
      $( "#frmNuevaUsuario" ).validate( {
        rules: {
          cbo_usuario: {
            required: true
          },

          contra: {
            required: true
          },

          caducidad: {
            required: true
          }

        
        },
        messages:{
          cbo_usuario: {
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
<!-- FIN -->
<script type="text/javascript">
       $( "#frmNuevaIncidencias" ).validate( {
            submitHandler: function () {
                nuevaIncidencia();
            }
        } );

    $( document ).ready( function () {
      $( "#frmNuevaIncidencias" ).validate( {
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
<script type="text/javascript">
       $( "#frmNuevaPersona2" ).validate( {
            submitHandler: function () {
                nuevaPersona2();
            }
        } );

    $( document ).ready( function () {
      $( "#frmNuevaPersona2" ).validate( {
        rules: {
          nombre_persona: {
            required: true
          },

          ap_paterno: {
            required: true
          },

          ap_materno: {
            required: true
          },

          correo: {
            required: true
          },

          ecivil: {
            required: true
          },

          municipio: {
            required: true
          },

          colonia: {
            required: true
          },

          numero: {
            required: true
          },

          telefono: {
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
          nom_puesto: {
            required: true
          }
        
        },
        messages:{
          nom_puesto: {
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
<script type="text/javascript">
       $( "#frmNuevaTrabajador" ).validate( {
            submitHandler: function () {
                nuevaTrabajador();
            }
        } );

    $( document ).ready( function () {
      $( "#frmNuevaTrabajador" ).validate( {
        rules: {
          num_empleado: {
            required: true,
          number: true
          },
          fecha_ingreso: {
            required: true,
          
          },
           cbo_puesto: {
            required: true,
          
          },
           cbo_persona: {
            required: true,
          
          },
           cbo_departamento: {
            required: true,
          
          }
        
        },
        messages:{
          num_empleado: {
                        required: "Obligatorio",
                        number: "Solo numeros",
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
        $( "#frmNuevaDepartamento" ).validate( {
              submitHandler: function () {
                  nuevaDepartamento();

              }
          } );

      $( document ).ready( function () {
        $( "#frmNuevaDepartamento" ).validate( {
          rules: {        
          nom_departamento: {
            required: true
          },
           siglas_departamento: {
            required: true
          }
          },

          messages:{
            nom_departamento: {
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
    </script>
    <!-- PRUEBAAAAAAAAAAAAAAAAA -->
<script type="text/javascript">
       $( "#frmPrueba" ).validate( {
            submitHandler: function () {
                Actualizar_trabajador1();
            }
        } );

    $( document ).ready( function () {
      $( "#frmPrueba" ).validate( {
        rules: {
          numero_empleado: {
            required: true
          },

          fecha_ingreso_sistema: {
            required: true
          },

          id_departamento: {
            required: true
          },

          id_puesto: {
            required: true
          }


        
        },
        messages:{
          cbo_usuario: {
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





    <script src="../assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>    
  <script src="../assets/js/zabuto_calendar.js"></script> 
  
  
  
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


     <!-- CARGAR  -->
       <script>
    function cargarPersonas()
    {
      $.ajax({
        type: 'POST',
        url: '../campos_dinamicos/obtener_personas.php',
        data: {},
          success: function(response) {
            document.getElementById("cbo_persona").innerHTML=response;
          }
      });
    }
  </script>
     <!-- FIN -->
       <!-- CARGAR  -->
       <script>
    function cargarPuesto()
    {
      $.ajax({
        type: 'POST',
        url: '../campos_dinamicos/obtener_puestos.php',
        data: {},
          success: function(response) {
            document.getElementById("cbo_puesto").innerHTML=response;
          }
      });
    }
  </script>
     <!-- FIN -->
     <script>
    function cargarDepartamento()
    {
      $.ajax({
        type: 'POST',
        url: '../campos_dinamicos/obtener_departamentos.php',
        data: {},
          success: function(response) {
            document.getElementById("cbo_departamento").innerHTML=response;
          }
      });
    }
  </script>

  <!-- USUAURIO -->
  <script>
    function cargarUsuario()
    {
      $.ajax({
        type: 'POST',
        url: '../campos_dinamicos/obtener_usuario.php',
        data: {},
          success: function(response) {
            document.getElementById("cbo_usuario").innerHTML=response;
          }
      });
    }
  </script>
<!-- FIN -->
<script>
function sigla(cadena){


        var palabras = cadena,
        array = palabras.split(" "),
        total = array.length,
        resultado = "";

        if (cadena.charAt(cadena.length-1)==0) { return;}// si la cadena viene en blanco se sale de la funcion

        for (var i = 0; i < total; resultado += array[i][0], i++);
            $("#siglas_departamento").val(resultado.toUpperCase()); 
     
        if (cadena.length==1){
            $("#siglas_departamento").val(""); 
        }


}

  </script>
  <script>
function sigla2(cadena){


        var palabras = cadena,
        array = palabras.split(" "),
        total = array.length,
        resultado = "";

        if (cadena.charAt(cadena.length-1)==0) { return;}// si la cadena viene en blanco se sale de la funcion

        for (var i = 0; i < total; resultado += array[i][0], i++);
            $("#depa_siglas_departamento").val(resultado.toUpperCase()); 
     
        if (cadena.length==1){
            $("#depa_siglas_departamento").val(""); 
        }


}

  </script>


</body>
</html>
<!-- FIN  -->

           