
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