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
      text: "Deseas "+ variable + ' ' + " el registro!" + ' ' +id_persona  ,
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
                alert("no se muestra Puestos Status");
            }
        });
    //fin de ajax
    })
}







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








function statusAlumno(id,valor){
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
            url:"status/statusAlumno.php",
            type:"POST",
            dateType:"html",
            data:{'valor':valor,'id':id},
            success:function(respuesta){
                llenarAlumnos();
                if (valor == 1) {
                  alertify.success("Se ha desactivado el registro",2);
                }else
                {
                  alertify.success("Se ha activado el registro",2);
                }
                
            },
            error:function(xhr,status){
                //no se encontro el archivo donde se procesa la peticion Ajax
                alert("no se muestra Alumno xd status");
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