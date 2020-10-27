function nuevaPersona(){
    // alert("Hola");
    $nombre = document.getElementById("nombre").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarPersona.php",
        type:"POST",
        dateType:"html",
        data:{"nombre" : $nombre}, 
        success:function(respuesta){
                swal(
                  'Guardado!',
                  'El registro se ha guardado la puesto!',
                  $nombre,
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
function nuevaTrabajador(){
    // alert("Hola");
    $num_empleado = document.getElementById("num_empleado").value;
    $id_departamento = document.getElementById("id_departamento").value;
    $id_puesto = document.getElementById("id_puesto").value;
    $id_persona = document.getElementById("id_persona").value;
    $fecha_ingreso = document.getElementById("fecha_ingreso").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarTrabajador.php",
        type:"POST",
        dateType:"html",
        data:{"num_empleado" : $num_empleado}, 
        success:function(respuesta){
                swal(
                  'Guardado!',
                  'El registro se ha guardado el Trabajador!',
                  $num_empleado,
                  'success'
                ).then(function () {
                    $('#num_empleado').focus();
                })
                // alertify.success("El registro se ha guardado");
                llenarTrabajador();
                iniciarTrabajador();


                //slimpiar();
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}
// PERSONAS
function nuevaPersona2(){
    // alert("Hola");
    $nombre = document.getElementById("nombre").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarPersona.php",
        type:"POST",
        dateType:"html",
        data:{"nombre" : $nombre}, 
        success:function(respuesta){
                swal(
                  'Guardado!',
                  'El registro se ha guardado la puesto!',
                  $nombre,
                  'success'
                ).then(function () {
                    $('#nombre').focus();
                })
                // alertify.success("El registro se ha guardado");
                llenarPersonas2();
                iniciarPersona2();


                //slimpiar();
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}
// FIN
// // Incidencias
function nuevaIncidencia(){
    // alert("Hola");
    // EJEMPLO V
  
    $nom_tipo_usuario = document.getElementById("num_tipo_usuario").value;
   
    

     // $paterno, $paterno, $materno, $fechanac, $sexo);
    $.ajax({
        url:"../guardar/guardarIncidencia.php",
        type:"POST",
        dateType:"html",
        data:{"num_tipo_usuario" : $nom_tipo_usuario}, 
        success:function(respuesta){
                swal(
                  'Guardado!',
                  'El registro se ha guardado la Incidencia!',
                  $nom_tipo_usuario,
                  'success'
                ).then(function () {
                    $('#num_tipo_usuario').focus();
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
// FIN
// Horario
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
                  'success'
                ).then(function () {
                    $('#nombre').focus();
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
 
    document.getElementById("nombre").value = "";
   
   
}
Function iniciarTrabajador()
{
    // $("#frmNuevaPersona").[0].reset();
 
    document.getElementById("num_empleado").value = "";
 
   
   
}
function iniciarIncidencia()
{
    // $("#frmNuevaPersona").[0].reset();
 
    
    document.getElementById("num_tipo_usuario").value = "";
   
   
}

