function llenarPersonas(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaPersona.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_personas").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra Puestos");
        }
    });
}
function llenarPersonas2(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaPersona.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_personas").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra Puestos");
        }
    });
}




// INICIO
function llenar_usuarios(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"listas/#",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_carrera").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra Usuarios ");
        }
    });
}
function llenarTrabajador(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaPersona.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_carrera").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra trabajador ");
        }
    });
}
function llenarIncidencia(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaPersona.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_incidencia").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra Incidencia");
        }
    });
}
// FIN