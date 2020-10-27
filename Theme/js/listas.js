// INICIO
function llenarDepartamento(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaDepartamento.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_departamento").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra Departamento ");
        }
    });
}
// FIN
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

//////////////////////////////////////////////////////////////////------- H O R A R I O S
function llenarHorarios(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaHorario.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_horarios").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra Horarios");
        }
    });
}
//////////////////////////////////////////////////////////////////-------F I N    H O R A R I O S

function llenarIncidencia(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaIncidencia.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_incidencia").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra incidencia");
        }
    });
}
function llenarUsuarios(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaUsuarios.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_usuarios").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestran usuarios");
        }
    });
}
function llenarPersonas2(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaPersona2.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_personas2").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestran personas");
        }
    });
}

function llenarTrabajador(){

    // especialidad=vespecialidad;
    // anio=$("#anio").val();

    $.ajax({
        url:"../listas/listaTrabajador.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#llenar_trabajador").html(respuesta);
        },
        error:function(xhr,status){
            alert("no se muestra Trabajador");
        }
    });
}
