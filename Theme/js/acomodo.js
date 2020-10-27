var speed='fast';

function nuevoDepartamentoEditar(){

    activoPersonas();
    $("#nuevoDR").addClass("hide");
    $("#nuevoDL").removeClass("hide");
    $('#editar_departamento').slideDown(speed);  
    $('#lDepartamento').slideUp(speed);


// MODALES DE ACTUALIZAR PARA OCULTARLOS
$('#editar_trabajador').slideUp(speed);
$('#editar_puestos').slideUp(speed);
// $('#editar_departamentos').slideUp(speed);

    // FIN

     $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

    $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

      $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aIncidencias').slideUp(speed);  
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);  
    $('#lHorarios').slideUp(speed);

    $('#aJustificaciones').slideUp(speed);  
    $('#aJustificaciones').slideUp(speed);

    $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

    $('#aPersona').slideUp(speed);  
    $('#lPersona').slideUp(speed);






}

function nuevoPersonasEditar(){

    activoPersonas();
    $("#nuevoR").addClass("hide");
    $("#nuevoL").removeClass("hide");
    $('#editar_personas').slideDown(speed);  
    $('#lPersonas').slideUp(speed);


// MODALES DE ACTUALIZAR PARA OCULTARLOS
$('#editar_trabajador').slideUp(speed);
$('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);

    // FIN

     $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

    $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

      $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aIncidencias').slideUp(speed);  
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);  
    $('#lHorarios').slideUp(speed);

    $('#aJustificaciones').slideUp(speed);  
    $('#aJustificaciones').slideUp(speed);

    $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

    $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);






}


// COMIENZO NUEVA PERSONA
function nuevoPersonas(){

    //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
        $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

	activoPersonas();
    $("#nuevoR").addClass("hide");
    $("#nuevoL").removeClass("hide");
    $('#aPersonas').slideDown(speed);  
    $('#lPersonas').slideUp(speed);

     $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

    $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

      $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aIncidencias').slideUp(speed);  
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);  
    $('#lHorarios').slideUp(speed);

    $('#aJustificaciones').slideUp(speed);  
    $('#aJustificaciones').slideUp(speed);

    $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);






}
function nuevoPersonas2(){
      //MODALES
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
        $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);

    //FIN

    activoPersonas2();
    $("#nuevoR2").addClass("hide");
    $("#nuevoL2").removeClass("hide");
    $('#aPersonas2').slideDown(speed);  
    $('#lPersonas2').slideUp(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

  $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aIncidencias').slideUp(speed);  
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);  
    $('#lHorarios').slideUp(speed);

    $('#aJustificaciones').slideUp(speed);  
    $('#lJustificaciones').slideUp(speed);

    $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);


}
function nuevoIncidencias(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

    activoIncidencias();
    $("#nuevoIR").addClass("hide");
    $("#nuevoIL").removeClass("hide");
    $('#aIncidencias').slideDown(speed);  
    $('#lIncidencias').slideUp(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

    $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

  $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);
   

    $('#aHorarios').slideUp(speed);  
    $('#lHorarios').slideUp(speed);

    $('#aJustificaciones').slideUp(speed);  
    $('#lJustificaciones').slideUp(speed);

    $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

$('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);

}
function nuevoHorarios(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

    activoHorarios();
    $("#nuevoHR").addClass("hide");
    $("#nuevoHL").removeClass("hide");
    $('#aHorarios').slideDown(speed);  
    $('#lHorarios').slideUp(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

    $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

  $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

   $('#aIncidencias').slideUp(speed);  
    $('#lIncidencias').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);



    $('#aJustificaciones').slideUp(speed);  
    $('#lJustificaciones').slideUp(speed);

    $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);


}
function nuevoJustificaciones(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

    activoJustificaciones();
    $("#nuevoJR").addClass("hide");
    $("#nuevoJL").removeClass("hide");
    $('#aJustificaciones').slideDown(speed);  
    $('#lJustificaciones').slideUp(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

    $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

     $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

   $('#aIncidencias').slideUp(speed);  
    $('#lIncidencias').slideUp(speed);

$('#aHorarios').slideUp(speed);  
    $('#lHorarios').slideUp(speed);

    $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);


    

   


}


// INICIO DE USUARIO
function nuevoUsuario(){

  //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

    activoUsuario();
    $("#nuevoUR").addClass("hide");
    $("#nuevoUL").removeClass("hide");
    $('#aUsuario').slideDown(speed);  
    $('#lUsuario').slideUp(speed);

    $('#aPersonas').slideUp(speed);  
    $('#lPersonas').slideUp(speed);

    $('#aPersonas2').slideUp(speed);  
    $('#lPersonas2').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);
    $('#lHorarios').slideUp(speed);

    $('#ajustificaciones').slideUp(speed);
    $('#ljustificaciones').slideUp(speed);

    $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);


}
function nuevoTrabajador(){
  //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN
    activoTrabajador();
    $("#nuevoTR").addClass("hide");
    $("#nuevoTL").removeClass("hide");
    $('#aTrabajador').slideDown(speed);  
    $('#lTrabajador').slideUp(speed);

    $('#aUsuario').slideUp(speed);  
    $('#lUsuario').slideUp(speed);

    $('#aPersonas').slideUp(speed);  
    $('#lPersonas').slideUp(speed);

    $('#aPersonas2').slideUp(speed);  
    $('#lPersonas2').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);
    $('#lHorarios').slideUp(speed);

    $('#ajustificaciones').slideUp(speed);
    $('#ljustificaciones').slideUp(speed);

    $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);

   

}



// FIN 

// TERMINADO

// LISTAS DE MODULOS COMIENZO

function listaPersonas(){

  //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN
	activoPersonas();
    $("#nuevoL").addClass("hide");
    $("#nuevoR").removeClass("hide");
    $('#aPersonas').slideUp(speed);  
    $('#lPersonas').slideDown(speed);

    $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);
    $('#lHorarios').slideUp(speed);

    $('#aJustificaciones').slideUp(speed);
    $('#lJustificaciones').slideUp(speed);

     $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

      $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);

}
function listaTrabajador(){

  //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN
    activoTrabajador();
    $("#nuevoTL").addClass("hide");
    $("#nuevoTR").removeClass("hide");
    $('#aTrabajador').slideUp(speed);  
    $('#lTrabajador').slideDown(speed);

      $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

    $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);
    $('#lHorarios').slideUp(speed);

    $('#aJustificaciones').slideUp(speed);
    $('#lJustificaciones').slideUp(speed);

     $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

      $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);

   

}
function listaPersonas2(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

  activoPersonas2();
    $("#nuevoL2").addClass("hide");
    $("#nuevoR2").removeClass("hide");
    $('#aPersonas2').slideUp(speed);  
    $('#lPersonas2').slideDown(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);
    $('#lHorarios').slideUp(speed);

    $('#aJustificaciones').slideUp(speed);
    $('#lJustificaciones').slideUp(speed);

     $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

  $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);
}
function listaIncidencias(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

    activoIncidencias();
    $("#nuevoIL").addClass("hide");
    $("#nuevoIR").removeClass("hide");
      $('#aIncidencias').slideUp(speed);  
    $('#lIncidencias').slideDown(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);
   
    $('#aHorarios').slideUp(speed);
    $('#lHorarios').slideUp(speed);

    $('#aJustificaciones').slideUp(speed);
    $('#lJustificaciones').slideUp(speed);

     $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

     $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

       $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

 $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);

}
function listaHorarios(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

    activoHorarios();
    $("#nuevoHL").addClass("hide");
    $("#nuevoHR").removeClass("hide");
      $('#aHorarios').slideUp(speed);  
    $('#lHorarios').slideDown(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);
   
    $('#aJustificaciones').slideUp(speed);
    $('#lJustificaciones').slideUp(speed);

     $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

     $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

  $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);


}
function listaJustificaciones(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

    activoJustificaciones();
    $("#nuevoJL").addClass("hide");
    $("#nuevoJR").removeClass("hide");
      $('#aJustificaciones').slideUp(speed);  
    $('#lJustificaciones').slideDown(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);
   
    $('#aHorarios').slideUp(speed);
    $('#lHorarios').slideUp(speed);
    
     $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

     $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

  $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);




}
function listaUsuario(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

    activoUsuario();
    $("#nuevoUL").addClass("hide");
    $("#nuevoUR").removeClass("hide");
      $('#aUsuario').slideUp(speed);  
    $('#lUsuario').slideDown(speed);

 $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

        $('#aHorario').slideUp(speed);
    $('#lHorario').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);
   
    $('#aJustificaciones').slideUp(speed);
    $('#lJustificaciones').slideUp(speed);

     $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

     $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

   

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);
}

function listaHistorial(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN

    activoHistorial();
    $("#nuevoUL").addClass("hide");
    $("#nuevoUR").removeClass("hide");
      $('#aUsuario').slideUp(speed);  
    $('#lUsuario').slideDown(speed);

 $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

        $('#aHorario').slideUp(speed);
    $('#lHorario').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);
   
    $('#aJustificaciones').slideUp(speed);
    $('#lJustificaciones').slideUp(speed);

     $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

     $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

     $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

     $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideUp(speed);


}

// FIN DE USUARIO

// FIN

function nuevoAlumnos(){
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
    //FIN
            $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);

	activoAlumnos();
    $("#nuevoAR").addClass("hide");
    $("#nuevoAL").removeClass("hide");
     $('#aPersonas').slideUp(speed);  
    $('#lPersonas').slideUp(speed);
    $('#aAlumnos').slideDown(speed);
    $('#lAlumnos').slideUp(speed);
    $('#aCarreras').slideUp(speed);
    $('#lCarreras').slideUp(speed);
    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);
}

function listaAlumnos()
{
      //MODAL
        $('#editar_personas').slideUp(speed);
        $('#editar_trabajador').slideUp(speed);
                $('#editar_puestos').slideUp(speed);
$('#editar_departamentos').slideUp(speed);
    //FIN
    activoAlumnos();
    $("#nuevoAL").addClass("hide");
    $("#nuevoAR").removeClass("hide");
    $('#aPersonas').slideUp(speed);  
    $('#lPersonas').slideUp(speed);
    $('#aAlumnos').slideUp(speed);
    $('#lAlumnos').slideDown(speed);
    $('#aCarreras').slideUp(speed);
    $('#lCarreras').slideUp(speed);
    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);
}



//Funcion para activar los menus
// INICIO DE USUARIO
function activoUsuario(){
    // ----------------
    $("#usuarios").addClass("active");
    // ---------------
   $("#incidencias").removeClass("active");
    $("#nuevoIR").removeClass("hide");
    $("#nuevoIL").removeClass("hide");
    // ----------
    //   // ---------------
   $("#horarios").removeClass("active");
    $("#nuevoHR").removeClass("hide");
    $("#nuevoHL").removeClass("hide");
    // ----------
    //    //   // ---------------
   $("#justificaciones").removeClass("active");
    $("#nuevoJR").removeClass("hide");
    $("#nuevoJL").removeClass("hide");
    // ----------
    //   //    //   // ---------------
   $("#historial").removeClass("active");
    $("#nuevoHHR").removeClass("hide");
    $("#nuevoHHL").removeClass("hide");
    // ----------
    // //   //    //   // ---------------
   $("#personas").removeClass("active");
    $("#nuevoR").removeClass("hide");
    $("#nuevoL").removeClass("hide");
    //   //    //   // ---------------
   $("#personas2").removeClass("active");
    $("#nuevoR2").removeClass("hide");
    $("#nuevoL2").removeClass("hide");
    // 
    // 
    $("#trabajadores").removeClass("active");
    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);


   
   
}
// FIN
function activoPersonas(){
	$("#personas").addClass("active");
    // -----------
	$("#personas2").removeClass("active");
    $("#nuevoR2").removeClass("hide");
    $("#nuevoL2").removeClass("hide");
    // ----------
    $("#incidencias").removeClass("active");
    $("#nuevoIR").removeClass("hide");
    $("#nuevoIL").removeClass("hide");
    // ----------
    $("#horarios").removeClass("active");
    $("#nuevoHR").removeClass("hide");
    $("#nuevoHL").removeClass("hide");
     // ----------
    $("#justificaciones").removeClass("active");
    $("#nuevoJR").removeClass("hide");
    $("#nuevoJL").removeClass("hide");
	 // ----------
    $("#historial").removeClass("active");
    $("#nuevoHHR").removeClass("hide");
    $("#nuevoHHL").removeClass("hide");
         // ----------
    $("#usuario").removeClass("active");
    $("#nuevoUR").removeClass("hide");
    $("#nuevoRL").removeClass("hide");
      // ----------
     $("#trabajadores").removeClass("active");
    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);
}

// PERSONAS
function activoPersonas2(){
    $("#personas2").addClass("active");
    // -----------
    $("#personas").removeClass("active");
    $("#nuevoR").removeClass("hide");
    $("#nuevoL").removeClass("hide");
    // ----------
    $("#incidencias").removeClass("active");
    $("#nuevoIR").removeClass("hide");
    $("#nuevoIL").removeClass("hide");
    // ----------
    $("#horarios").removeClass("active");
    $("#nuevoHR").removeClass("hide");
    $("#nuevoHL").removeClass("hide");
     // ----------
    $("#justificaciones").removeClass("active");
    $("#nuevoJR").removeClass("hide");
    $("#nuevoJL").removeClass("hide");
     // ----------
    $("#historial").removeClass("active");
    $("#nuevoHHR").removeClass("hide");
    $("#nuevoHHL").removeClass("hide");
     // ----------
    $("#usuario").removeClass("active");
    $("#nuevoUR").removeClass("hide");
    $("#nuevoRL").removeClass("hide");
     // ----------
     $("#trabajadores").removeClass("active");
    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

}
// FIN
function activoIncidencias(){
    $("#incidencias").addClass("active");
    // -----------
    $("#personas2").removeClass("active");
    $("#nuevoR2").removeClass("hide");
    $("#nuevoL2").removeClass("hide");
    // ----------
    $("#personas").removeClass("active");
    $("#nuevoR").removeClass("hide");
    $("#nuevoL").removeClass("hide");
    // ----------
    $("#horarios").removeClass("active");
    $("#nuevoHR").removeClass("hide");
    $("#nuevoHL").removeClass("hide");
     // ----------
    $("#justificaciones").removeClass("active");
    $("#nuevoJR").removeClass("hide");
    $("#nuevoJL").removeClass("hide");
     // ----------
    $("#historial").removeClass("active");
    $("#nuevoHHR").removeClass("hide");
    $("#nuevoHHL").removeClass("hide");
     // ----------
    $("#usuario").removeClass("active");
    $("#nuevoUR").removeClass("hide");
    $("#nuevoRL").removeClass("hide");
     // ----------
     $("#trabajadores").removeClass("active");
    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);
}
// FIN
function activoHorarios(){
    $("#horarios").addClass("active");
    // -----------
    $("#personas2").removeClass("active");
    $("#nuevoR2").removeClass("hide");
    $("#nuevoL2").removeClass("hide");
    // ----------
    $("#incidencias").removeClass("active");
    $("#nuevoIR").removeClass("hide");
    $("#nuevoIL").removeClass("hide");
    // ----------
    $("#personas").removeClass("active");
    $("#nuevoR").removeClass("hide");
    $("#nuevoL").removeClass("hide");
     // ----------
    $("#justificaciones").removeClass("active");
    $("#nuevoJR").removeClass("hide");
    $("#nuevoJL").removeClass("hide");
     // ----------
    $("#historial").removeClass("active");
    $("#nuevoHHR").removeClass("hide");
    $("#nuevoHHL").removeClass("hide");
     // ----------
    $("#usuario").removeClass("active");
    $("#nuevoUR").removeClass("hide");
    $("#nuevoRL").removeClass("hide");
     // ----------
     $("#trabajadores").removeClass("active");
    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);
}
// fin
function activoJustificaciones(){
    $("#justificaciones").addClass("active");
    // -----------
    $("#personas2").removeClass("active");
    $("#nuevoR2").removeClass("hide");
    $("#nuevoL2").removeClass("hide");
    // ----------
    $("#incidencias").removeClass("active");
    $("#nuevoIR").removeClass("hide");
    $("#nuevoIL").removeClass("hide");
    // ----------
    $("#horarios").removeClass("active");
    $("#nuevoHR").removeClass("hide");
    $("#nuevoHL").removeClass("hide");
     // ----------
    $("#personas").removeClass("active");
    $("#nuevoR").removeClass("hide");
    $("#nuevoL").removeClass("hide");
     // ----------
    $("#historial").removeClass("active");
    $("#nuevoHHR").removeClass("hide");
    $("#nuevoHHL").removeClass("hide");
     // ----------
    $("#usuario").removeClass("active");
    $("#nuevoUR").removeClass("hide");
    $("#nuevoRL").removeClass("hide");
     // ----------
     $("#trabajadores").removeClass("active");
    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);
}
function activoHistorial(){
    $("#historial").addClass("active");
    // -----------
    $("#personas2").removeClass("active");
    $("#nuevoR2").removeClass("hide");
    $("#nuevoL2").removeClass("hide");
    // ----------
    $("#incidencias").removeClass("active");
    $("#nuevoIR").removeClass("hide");
    $("#nuevoIL").removeClass("hide");
    // ----------
    $("#horarios").removeClass("active");
    $("#nuevoHR").removeClass("hide");
    $("#nuevoHL").removeClass("hide");
     // ----------
    $("#justificaciones").removeClass("active");
    $("#nuevoJR").removeClass("hide");
    $("#nuevoJL").removeClass("hide");
     // ----------
    $("#personas").removeClass("active");
    $("#nuevoR").removeClass("hide");
    $("#nuevoL").removeClass("hide");
     // ----------
    $("#usuario").removeClass("active");
    $("#nuevoUR").removeClass("hide");
    $("#nuevoRL").removeClass("hide");
     // ----------
     $("#trabajadores").removeClass("active");
    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);
}
function activoTrabajador(){
    $("#trabajadores").addClass("active");
    // -----------
    $("#personas2").removeClass("active");
    $("#nuevoR2").removeClass("hide");
    $("#nuevoL2").removeClass("hide");
    // ----------
    $("#incidencias").removeClass("active");
    $("#nuevoIR").removeClass("hide");
    $("#nuevoIL").removeClass("hide");
    // ----------
    $("#horarios").removeClass("active");
    $("#nuevoHR").removeClass("hide");
    $("#nuevoHL").removeClass("hide");
     // ----------
    $("#justificaciones").removeClass("active");
    $("#nuevoJR").removeClass("hide");
    $("#nuevoJL").removeClass("hide");
     // ----------
    $("#personas").removeClass("active");
    $("#nuevoR").removeClass("hide");
    $("#nuevoL").removeClass("hide");
     // ----------
    $("#usuario").removeClass("active");
    $("#nuevoUR").removeClass("hide");
    $("#nuevoRL").removeClass("hide");
     // ----------
   
    // ----------
    $("#historial").removeClass("active");
    $("#nuevoHHR").removeClass("hide");
    $("#nuevoHHL").removeClass("hide");
}

function nuevoDepartamento(){

    activoDepartamento();
    $("#nuevoTR").addClass("hide");
    $("#nuevoTL").removeClass("hide");
    $('#aDepartamento').slideDown(speed);  
    $('#lDepartamento').slideUp(speed);

    $('#aTrabajador').slideUp(speed);  
    $('#lTrabajador').slideUp(speed);


    $('#aUsuario').slideUp(speed);  
    $('#lUsuario').slideUp(speed);

    $('#aPersonas').slideUp(speed);  
    $('#lPersonas').slideUp(speed);

    $('#aPersonas2').slideUp(speed);  
    $('#lPersonas2').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);

    $('#aHorarios').slideUp(speed);
    $('#lHorarios').slideUp(speed);

    $('#ajustificaciones').slideUp(speed);
    $('#ljustificaciones').slideUp(speed);

    $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

     

   

}
function listaDepartamento(){

    activoDepartamento();
    $("#nuevoUL").addClass("hide");
    $("#nuevoUR").removeClass("hide");
      $('#aDepartamento').slideUp(speed);  
    $('#lDepartamento').slideDown(speed);

     $('#aUsuario').slideUp(speed);  
    $('#lUsuario').slideUp(speed);

 $('#aHistorial').slideUp(speed);  
    $('#lHistorial').slideUp(speed);

    $('#aPersonas').slideUp(speed);
    $('#lPersonas').slideUp(speed);

        $('#aHorario').slideUp(speed);
    $('#lHorario').slideUp(speed);

    $('#aIncidencias').slideUp(speed);
    $('#lIncidencias').slideUp(speed);
   
    $('#aJustificaciones').slideUp(speed);
    $('#lJustificaciones').slideUp(speed);

     $('#aHistorial').slideUp(speed);
    $('#lHistorial').slideUp(speed);

     $('#aPersonas2').slideUp(speed);
    $('#lPersonas2').slideUp(speed);

     $('#aUsuario').slideUp(speed);
    $('#lUsuario').slideUp(speed);

    $('#aTrabajador').slideUp(speed);
    $('#lTrabajador').slideUp(speed);

    


}

function activoDepartamento(){
    $("#departamento").addClass("active");
    // -----------
    $("#personas2").removeClass("active");
    $("#nuevoR2").removeClass("hide");
    $("#nuevoL2").removeClass("hide");
    // ----------
    $("#incidencias").removeClass("active");
    $("#nuevoIR").removeClass("hide");
    $("#nuevoIL").removeClass("hide");
    // ----------
    $("#horarios").removeClass("active");
    $("#nuevoHR").removeClass("hide");
    $("#nuevoHL").removeClass("hide");
     // ----------
    $("#justificaciones").removeClass("active");
    $("#nuevoJR").removeClass("hide");
    $("#nuevoJL").removeClass("hide");
     // ----------
    $("#personas").removeClass("active");
    $("#nuevoR").removeClass("hide");
    $("#nuevoL").removeClass("hide");
     // ----------
    $("#usuario").removeClass("active");
    $("#nuevoUR").removeClass("hide");
    $("#nuevoRL").removeClass("hide");
     // ----------
   
    // ----------
    $("#historial").removeClass("active");
    $("#nuevoHHR").removeClass("hide");
    $("#nuevoHHL").removeClass("hide");
      // 
    

}

////////////////////////////////////

// salidas fast/slow
// ---------------
// fadeOut - salida
// toggle -salida
// slideToggle -salida
// slideDown -salida


// entradas fast/slow
// ---------------
// fadeIn - salida
// slideUp -salida