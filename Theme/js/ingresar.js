function nuevaAlumno(){
    // alert("Hola");
    $cbo_periodo = document.getElementById("cbo_periodo").value;
 $nombre_curso = document.getElementById("nombre_curso").value;
  $orden = document.getElementById("orden").value;
    $matricula = document.getElementById("matricula").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarAlumnos.php",
        type:"POST",
        dateType:"html",
        data:{"nom_puesto" : $nombre}, 
        success:function(respuesta){
                swal(
                  'Guardado!',
                  'El registro se ha guardado!',
                  'success'
                ).then(function () {
                    $('#nombre').focus();
                })
                // alertify.success("El registro se ha guardado");
                llenarPersonas();
                iniciarPersona();


                //slimpiar();
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}

function nuevaDepartamento()
{
    $nombre_departamento = document.getElementById("nom_departamento").value;
    $siglas = document.getElementById("siglas_departamento").value;
   
    // alert("Hola");

    $.ajax({
        url:"../guardar/guardarDepartamento.php",
        type:"POST",
        dateType:"html",
        data:{"nom_departamento" : $nombre_departamento, "siglas_departamento" : $siglas},

        success:function(respuesta)
        {
            swal(
                  'Guardado!',
                  'El registro se ha guardado!',
                  'success'
                ).then(function () {
                    document.getElementById('nom_departamento').value ="";
                    document.getElementById('siglas_departamento').value ="";
                    $('#nom_departamento').focus();

            })
            llenarDepartamento();
           iniciarDepartamento();

        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}
function nuevaPersona(){
    // alert("Hola");
    $nombre = document.getElementById("nom_puesto").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarPersona.php",
        type:"POST",
        dateType:"html",
        data:{"nom_puesto" : $nombre}, 
        success:function(respuesta){
                swal(
                  'Guardado!',
                  'El registro se ha guardado!',
                  'success'
                ).then(function () {
                    $('#nombre').focus();
                })
                // alertify.success("El registro se ha guardado");
                llenarPersonas();
                iniciarPersona();


                //slimpiar();
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}


///////////////////////////////////////////////////////////////////////////////----------------- H O R A R I O S
function nuevaHorario(){
    // alert("Hola");
    $nombre_trabajador = document.getElementById("nombre_trabajador").value;
    $dia = document.getElementById("dia").value;
    $hora_entrada = document.getElementById("hora_entrada").value;
    $hora_salida = document.getElementById("hora_salida").value;

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarHorario.php",
        type:"POST",
        dateType:"html",
        data:{"nombre_trabajador" : $nombre_trabajador, "dia" : $dia,  "hora_entrada" : $hora_entrada, "hora_salida" : $hora_salida}, 
        success:function(respuesta){
                swal(
                  'Guardado!',
                  'El registro se ha guardado!',
                  'success'
                ).then(function () {
                    $('#nombre_trabajador').focus();
                })
                // alertify.success("El registro se ha guardado");
                llenarHorarios();
                iniciarHorario();


                //slimpiar();
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}
///////////////////////////////////////////////////////////////////////////////----------------- F I N   H O R A R I O S













////////////////////(/////////////////////////////////////////////////// nuevo de  U S U A R I O S

// function nuevaUsuario(){
//     // alert("Hola");
//     $id_persona = document.getElementById("id_persona").value;
//     $nom_usuario = document.getElementById("nom_usuario").value;
// 	$contra = document.getElementById("contra").value;
// 	$caducidad = document.getElementById("caducidad").value;

//      // $paterno, $paterno, $materno, $fechanac, $sexo);
//     $.ajax({
//         url:"../guardar/guardarUsuario.php",
//         type:"POST",
//         dateType:"html",
//         data:{"id_persona" : $id_persona, "nom_usuario" : $nom_usuario, "contra" : $contra, "caducidad" : $caducidad}, 
//         success:function(respuesta){
//                 swal(
//                   'Guardado!',
//                   'El registro se ha guardado la puesto!',
//                   $nom_usuario,
//                   'success'
//                 ).then(function () {
//                     $('#nom_usuario').focus();
//                 })
//                 // alertify.success("El registro se ha guardado");
//                 llenarUsuarios();
//                 iniciarUsuario();


//                 //slimpiar();
//         },
//         error:function(xhr,status){
//             alert(xhr);
//         },
//     });
// }

////////////////////(/////////////////////////////////////////////////// FIN nuevo de  U S U A R I O S


//////////// U S U A R I O S ///////////
function nuevaUsuario(){
    

    var id_persona = $("#id_persona").val();
    var nom_usuario = $("#nom_usuario").val();
    var contra = $("#contra").val();
    var caducidad = $("#caducidad").val();

    $.ajax({
        url:"../guardar/guardarUsuario.php",
        type:"POST",
        dateType:"html",
        data:{'id_persona':id_persona,
            'nom_usuario':nom_usuario,
            'contra':contra,
            'caducidad':caducidad
        },
        success:function(respuesta){
            swal({
              title: 'Guardado',
              text: "El registro se ha guardado exitosamente",
              type: 'success'
            })

                iniciarUsuario();
                llenarUsuarios();
            
        },
        error:function(xhr,status){
            //no se encontro el archivo donde se procesa la peticion Ajax
            alert("no se muestra");
        }
    });
}

function iniciarUsuario()
{
    $('#frmNuevaUsuario')[0].reset();
    $("#nom_usuario").focus();
}
 ////////////////////////// FIN DE    U S U A R I O S /////////////////////////////////////

function nuevaIncidencia(){
    // alert("Hola");
    $nombre = document.getElementById("nombre").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarIncidencia.php",
        type:"POST",
        dateType:"html",
        data:{"nombre" : $nombre}, 
        success:function(respuesta){
                swal(
                  'Guardado!',
                  'El registro se ha guardado la Incidencia!',
                  $nombre,
                  'success'
                ).then(function () {
                    $('#nombre').focus();
                })
                // alertify.success("El registro se ha guardado");
                llenarIncidencia();
                iniciarIncidencia();


                //slimpiar();
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}

function nuevaTrabajador(){
    // alert("Hola");
    $num_empleado = document.getElementById("num_empleado").value;
    $id_persona = document.getElementById("cbo_persona").value;
    $id_departamento = document.getElementById("cbo_departamento").value;
    $id_puesto = document.getElementById("cbo_puesto").value;
    $fecha_ingreso = document.getElementById("fecha_ingreso").value;
  

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarTrabajador.php",
        type:"POST",
        dateType:"html",
        data:{"num_empleado" : $num_empleado,"cbo_persona" : $id_persona,"cbo_departamento" : $id_departamento,"cbo_puesto" : $id_puesto}, 
        success:function(respuesta){
                swal(
                  'Guardado!',
                  'El registro se ha guardado!',
                  'success'
                ).then(function () {
                    $('#num_empleado').focus();
                })
                alertify.success("El registro se ha guardado");
                llenarTrabajador();
                iniciarTrabajador();
                cargarPersonas();


                // limpiar();
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}
// PERSONAS
function nuevaPersona2(){
    

    $nombre = document.getElementById("nombre").value;
    $ap_paterno = document.getElementById("ap_paterno").value;
    $ap_materno = document.getElementById("ap_materno").value;
    $correo = document.getElementById("correo").value;
    $ecivil = document.getElementById("ecivil").value;
     $municipio = document.getElementById("municipio").value;
    $colonia = document.getElementById("colonia").value;
     $numero = document.getElementById("numero").value;
    $telefono = document.getElementById("telefono").value;
  

    $.ajax({
        url:"../guardar/guardarPersona2.php",
        type:"POST",
        dateType:"html",
        data:{"nombre":$nombre,
            "ap_paterno":$ap_paterno,
            "ap_materno":$ap_materno,
            "correo":$correo,
            "ecivil":$ecivil,
            "municipio":$municipio,
            "colonia":$colonia,
            "numero":$numero,
            "telefono":$telefono
        },
        success:function(respuesta){
            swal({
              title: 'Guardado',
              text: "El registro se ha guardado exitosamente",
              type: 'success'
            })

                iniciarPersona2();
                llenarPersonas2();
            
        },
        error:function(xhr,status){
            //no se encontro el archivo donde se procesa la peticion Ajax
            alert("no se muestra");
        }
    });
}

function iniciarPersona2()
{
    $('#frmNuevaPersona2')[0].reset();
    $("#nombre").focus();
}
// FIN
// // Incidencias

// FIN
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
function nuevologin(){
    // alert("Hola");
    $usuario = document.getElementById("usuario").value;
     $contrasena = document.getElementById("contrasena").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../login/validalogin.php",
        type:"POST",
        dateType:"php",
        data:{"usuario" : $usuario}, 
        success:function(respuesta){
                swal(
                  'Cargando....',
                  '!',
                  $usuario,
                  $contrasena,
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


function iniciarPersona()
{
    // $("#frmNuevaPersona").[0].reset();
  $('#frmNuevaPersona')[0].reset();
    document.getElementById("nombre").value = "";
   
   
}
function iniciarIncidencia()
{
    // $("#frmNuevaPersona").[0].reset();
 
    document.getElementById("nombre").value = "";
   
   
}
function iniciarTrabajador()
{
    // $("#frmNuevaPersona").[0].reset();
 
    document.getElementById("num_empleado").value = "";
    document.getElementById("fecha_ingreso").value = "";

   
   
}
