function mostrar_mod(id_persona) {
    $('#lPersonas2').hide();
    $('#editar_personas').show();
    datos_persona(id_persona);
}
// MOD PUESTO
function mostrar_mod_puesto(id_puesto) {
    $('#lPersonas').hide();
    $('#editar_puestos').show();
    datos_puestos(id_puesto);
}

// MOSTRAR TRABAJADORES
function mostrar_mod_trabajador(id_trabajador) {
    $('#lTrabajador').hide();
    $('#editar_trabajador').show();
    datos_trabajador(id_trabajador);
}
// MOSTRAR DEPARTAMENTOS
function mostrar_mod_departamentos(id_departamento) {
    $('#lDepartamento').hide();
    $('#editar_departamento').show();
    datos_departamentos(id_departamento);
}

function datos_persona(id_persona) {
    $.ajax({
        url: "datos_persona.php",
        type: "POST",
        dateType: "html",
        data: {
            'id_persona': id_persona
        },
        success: function(respuesta) {
        	array = eval(respuesta);
            $('#id_persona').val(array[0]);
        	$('#persona_nombre').val(array[1]);
        	$('#persona_ap_paterno').val(array[2]);
        	$('#persona_ap_materno').val(array[3]);
        	$('#persona_correo').val(array[4]);
        	$('#persona_telefono').val(array[5]);

        },
        error: function(xhr, status) {
            alert(xhr);
        },
    });
}
function datos_departamentos(id_departamento) {
    $.ajax({
        url: "Actualizar_departamentos/datos_Departamentos.php",
        type: "POST",
        dateType: "html",
        data: {
            'p_id_departamento': id_departamento
        },
        success: function(respuesta) {
          array = eval(respuesta);
            $('#p_id_departamento').val(array[0]);
            $('#depa_nom_departamento').val(array[1]);
          $('#depa_siglas_departamento').val(array[2]);
         

        },
        error: function(xhr, status) {
            alert(xhr);
        },
    });
}
function datos_puestos(id_puesto) {
    $.ajax({
        url: "Actualizar_puesto/datos_puesto.php",
        type: "POST",
        dateType: "html",
        data: {
            'p_id_puesto': id_puesto
        },
        success: function(respuesta) {
          array = eval(respuesta);
            $('#p_id_puesto').val(array[0]);
          $('#nombre_puesto').val(array[1]);
         

        },
        error: function(xhr, status) {
            alert(xhr);
        },
    });
}
function datos_trabajador(id_trabajador) {
    $.ajax({
        url: "Actualizar_trabajador/datos_trabajador.php",
        type: "POST",
        dateType: "html",
        data: {
            'id_trabajador': id_trabajador
            
        },
        success: function(respuesta) {
          array = eval(respuesta);
          
            $('#id_trabajador').val(array[0]);
          $('#numero_empleado').val(array[1]);
           $('#fecha_ingreso_sistema').val(array[2]);
           
           
         

          
          

        },
        error: function(xhr, status) {
            alert(xhr);
        },
    });
}





// MENSAJE PARA MANDAR LOS DATOS

function Actualizar_Personas2(id_persona,persona_nombre,persona_ap_paterno,persona_ap_materno,persona_correo,persona_telefono)
{
    $id_persona = document.getElementById("id_persona").value;
    $persona_nombre = document.getElementById("persona_nombre").value;
    $persona_ap_paterno = document.getElementById("persona_ap_paterno").value;
    $persona_ap_materno = document.getElementById("persona_ap_materno").value;
    $persona_correo = document.getElementById("persona_correo").value;
    $persona_telefono = document.getElementById("persona_telefono").value;
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas Editar",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si',
      cancelButtonText: 'No'
    }).then(function () {

        $.ajax({
            url:"actualizarpersona2.php",
            type:"POST",
            dateType:"html",
            data:{'id_persona':$id_persona,
                 'persona_nombre':$persona_nombre,
                 'persona_ap_paterno':$persona_ap_paterno,
                 'persona_ap_materno':$persona_ap_materno,
                 'persona_correo':$persona_correo,
                 'persona_telefono':$persona_telefono
               },
            success:function(respuesta){
                
                       window.location.reload(); 
                  
            },
            error:function(xhr,status){
                alert("no se muestra");
            }
        });
    })
}

// DEPARTAMENTOS
function Actualizar_departamentos1(p_id_departamento,depa_nom_departamento,depa_siglas_departamento)
{
    $p_id_departamento = document.getElementById("p_id_departamento").value;
    $depa_departamento = document.getElementById("depa_nom_departamento").value;
    $depa_siglas_departamento = document.getElementById("depa_siglas_departamento").value;
   
    swal({
      title: '¿Estas Seguro?' +' '+ $p_id_departamento + ' ' + $depa_siglas_departamento +' '+ $depa_departamento  ,
      text: "Deseas Editar",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si',
      cancelButtonText: 'No'
    }).then(function () {

        $.ajax({
            url:"Actualizar_departamentos/actualizarDepartamentos.php",
            type:"POST",
            dateType:"html",
            data:{'p_id_departamento':$p_id_departamento,
            'depa_nom_departamento':$depa_departamento,
                 'depa_siglas_departamento':$depa_siglas_departamento
                },
            success:function(respuesta){
                
                       window.location.reload(); 
                  
            },
            error:function(xhr,status){
                alert("no se muestra DEpa");
            }
        });
    })
}
// FIN

function Actualizar_puesto1(p_id_puesto,nombre_puesto)
{
    $id_puesto = document.getElementById("p_id_puesto").value;
    $nombre_puesto = document.getElementById("nombre_puesto").value;
   
    swal({
      title: '¿Estas Seguro?' ,
      text: "Deseas Editar",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si',
      cancelButtonText: 'No'
    }).then(function () {

        $.ajax({
            url:"Actualizar_puesto/actualizarpuesto.php",
            type:"POST",
            dateType:"html",
            data:{'p_id_puesto':$id_puesto,
                 'nombre_puesto':$nombre_puesto
                },
            success:function(respuesta){
                
                       window.location.reload(); 
                  
            },
            error:function(xhr,status){
                alert("no se muestra");
            }
        });
    })
}
function Actualizar_trabajador1(id_trabajador,numero_empleado,fecha_ingreso_sistema,id_puesto,id_departamento)
{
    $id_trabajador = document.getElementById("id_trabajador").value;
    $numero_empleado = document.getElementById("numero_empleado").value;
   $fecha_ingreso_sistema = document.getElementById("fecha_ingreso_sistema").value;
    $nom_puesto_trabajador = document.getElementById("id_puesto").value;
    $nom_departamento = document.getElementById("id_departamento").value;
   

 
   
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas Editar",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si',
      cancelButtonText: 'No'
    }).then(function () {

        $.ajax({
            url:"Actualizar_trabajador/actualizartrabajador.php",
            type:"POST",
            dateType:"html",
            data:{'id_trabajador':$id_trabajador,
                 'id_departamento':$nom_departamento,
                 'id_puesto':$nom_puesto_trabajador,
                 'numero_empleado':$numero_empleado,
               
                 'fecha_ingreso_sistema':$fecha_ingreso_sistema

                 },
            success:function(respuesta){
                
                       window.location.reload(); 
                  
            },
            error:function(xhr,status){
                alert("no se muestra Trabajadores");
            }
        });
    })
}
