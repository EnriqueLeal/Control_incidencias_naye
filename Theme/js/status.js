function statusPersona(id,valor){
    var valor=valor;
    var id_puesto=id;
    if (valor==1) {
        variable="desactivar";
    }
    else{
        variable="activar";
    }
    swal({
      title: '¿Estas Seguro?',id,
      text: "Deseas "+ variable + ' ' + " el registro!" + ' ' +id_puesto  ,
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#8e44ad',
      cancelButtonColor: '#7f8c8d',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../status/statusPersona.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_puesto':id_puesto},
            success:function(respuesta){
                llenarPersonas();
                if (valor == 1) {
                  alertify.warning("Se ha desactivado el registro ",2);

                }else
                {
                  alertify.success("Se ha activado el registro",2);
                }
                
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra Puestos Status");
            }
        });
    //fin de ajax
    })
}


function statusIncidencia(id,valor){
    var valor=valor;
    var id_incidencia=id;
    if (valor==1) {
        variable="desactivar";
    }
    else{
        variable="activar";
    }
    swal({
      title: '¿Estas Seguro?',id,
      text: "Deseas "+ variable + ' ' + " el registro!" + ' ' +id_incidencia  ,
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#8e44ad',
      cancelButtonColor: '#7f8c8d',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../status/statusIncidencia.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_incidencia':id_incidencia},
            success:function(respuesta){
                llenarIncidencia();
                if (valor == 1) {
                  alertify.warning("Se ha desactivado el registro ",2);

                }else
                {
                  alertify.success("Se ha activado el registro",2);
                }
                
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra Incidencia Status");
            }
        });
    //fin de ajax
    })
}

function statusTrabajador(id,valor){
    var valor=valor;
    var id_trabajador=id;
    if (valor==1) {
        variable="desactivar";
    }
    else{
        variable="activar";
    }
    swal({
      title: '¿Estas Seguro?',id,
      text: "Deseas "+ variable + ' ' + " el registro!" + ' ' +id_trabajador ,
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#8e44ad',
      cancelButtonColor: '#7f8c8d',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../status/statusTrabajador.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_trabajador':id_trabajador},
            success:function(respuesta){
                llenarTrabajador();
                if (valor == 1) {
                  alertify.warning("Se ha desactivado el registro ",2);

                }else
                {
                  alertify.success("Se ha activado el registro",2);
                }
                
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra Trabajador Status");
            }
        });
    //fin de ajax
    })
}

function statusCarrera(id,valor){
    var valor=valor;
    var id=id;
    if (valor==1) {
        variable="desactivar";
    }
    else{
        variable="activar";
    }
    swal({
      title: '¿Estas Seguro?',
      text: "Deseas "+ variable + " el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#8e44ad',
      cancelButtonColor: '#7f8c8d',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"status/statusCarrera.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id':id},
            success:function(respuesta){
                llenarCarreras();
                if (valor == 1) {
                  alertify.success("Se ha desactivado el registro",2);
                }else
                {
                  alertify.success("Se ha activado el registro",2);
                }
                
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra carrera status");
            }
        });
    //fin de ajax
    })
}
function statusUsuario(id,valor){
    var valor=valor;
    var id_usuario=id;
    if (valor==1) {
        variable="desactivar";
    }
    else{
        variable="activar";
    }
    swal({
      title: '¿Estas Seguro?',id,
      text: "Deseas "+ variable + ' ' + " el registro!" + ' ' +id_usuario  ,
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#8e44ad',
      cancelButtonColor: '#7f8c8d',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../status/statusUsuario.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_usuario':id_usuario},
            success:function(respuesta){
                llenarUsuarios();
                if (valor == 1) {
                  alertify.warning("Se ha desactivado el registro ",2);

                }else
                {
                  alertify.success("Se ha activado el registro",2);
                }
                
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra Usuario Status");
            }
        });
    //fin de ajax
    })
}





//////////////////////////////////////////////////////////////////////////////////////////////------- H O R A R I O S

function statusHorario(id,valor){
    var valor=valor;
    var id_horario=id;
    if (valor==1) {
        variable="desactivar";
    }
    else{
        variable="activar";
    }
    swal({
      title: '¿Estas Seguro?',id,
      text: "Deseas "+ variable + ' ' + " el registro!" + ' ' +id_horario  ,
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#8e44ad',
      cancelButtonColor: '#7f8c8d',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../status/statusHorario.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_horario':id_horario},
            success:function(respuesta){
                llenarUsuarios();
                if (valor == 1) {
                  alertify.warning("Se ha desactivado el registro ",2);

                }else
                {
                  alertify.success("Se ha activado el registro",2);
                }
                
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra horario Status");
            }
        });
    //fin de ajax
    })
}
//////////////////////////////////////////////////////////////////////////////////////////////------- F I N     H O R A R I O S




function statusPersona2(id,valor){
    var valor=valor;
    var id_persona=id;
    if (valor==1) {
        variable="desactivar";
    }
    else{
        variable="activar";
    }
    swal({
      title: '¿Estas Seguro?',id,
      text: "Deseas "+ variable + ' ' + " el registro!" + ' ' +id_persona,
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#8e44ad',
      cancelButtonColor: '#7f8c8d',
      confirmButtonText: 'Realizar Cambio',
      cancelButtonText: 'Cancelar'
    }).then(function () {
    //inicio de ajax
        $.ajax({
            url:"../status/statusPersona2.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id_persona':id_persona},
            success:function(respuesta){
                llenarPersonas2();
                if (valor == 1) {
                  alertify.warning("Se ha desactivado el registro ",2);

                }else
                {
                  alertify.success("Se ha activado el registro",2);
                }
                
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra Puestos Status");
            }
        });
    //fin de ajax
    })
}

// 
 function CargarPersonaEditar(id){
  cadena='javascript:mostrar_mod('+id+')';
     var id_persona=id;

  // cadena='../puestos/modificar_puesto.php?id_puesto='+id;
  swal({
    title: 'Editar Persona ',
    text: "¿Deseas Editar el campo?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3498db',
    cancelButtonColor: '#7f8c8d',
    confirmButtonText: 'Aceptar!',
    cancelButtonText: 'No, cancelar!'
  }).then(function () {
      window.location=cadena;
      // window.open(cadena, '_blank');
      // 
      // 
 
    //fin de ajax
    })
}

// 
function CargarTrabajadorEditar(id){
  cadena='javascript:mostrar_mod_trabajador('+id+')';
     var id_trabajador=id;
  // cadena='../puestos/modificar_puesto.php?id_puesto='+id;
  swal({
    title: 'Editar Trabajador',
    text: "¿Deseas Editar el campo? ",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3498db',
    cancelButtonColor: '#7f8c8d',
    confirmButtonText: 'Aceptar!',
    cancelButtonText: 'No, cancelar!'
  }).then(function () {
      window.location=cadena;
      // window.open(cadena, '_blank');
      // 
      // 
 
    //fin de ajax
    })
}
// 
// CargarPuestosEditar
function CargarPuestosEditar(id){
  cadena='javascript:mostrar_mod_puesto('+id+')';
     var id_puesto=id;
  // cadena='../puestos/modificar_puesto.php?id_puesto='+id;
  swal({
    title: 'Editar Puesto:'+ ' ' + id,
    text: "¿Deseas Editar el campo? ",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3498db',
    cancelButtonColor: '#7f8c8d',
    confirmButtonText: 'Aceptar!',
    cancelButtonText: 'No, cancelar!'
  }).then(function () {
      window.location=cadena;
      // window.open(cadena, '_blank');
      // 
      // 
 
    //fin de ajax
    })
}

function CargarDepartamentosEditar(id){
  cadena='javascript:mostrar_mod_departamentos('+id+')';
     var id_departamento=id;
  // cadena='../puestos/modificar_puesto.php?id_puesto='+id;
  swal({
    title: 'Editar Departamento'+ id,
    text: "¿Deseas Editar el campo? ",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3498db',
    cancelButtonColor: '#7f8c8d',
    confirmButtonText: 'Aceptar!',
    cancelButtonText: 'No, cancelar!'
  }).then(function () {
      window.location=cadena;
      // window.open(cadena, '_blank');
      // 
      // 
 
    //fin de ajax
    })
}