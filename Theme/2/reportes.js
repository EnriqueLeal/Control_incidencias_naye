function pdfPersona(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas ver la Lista de Puestos en PDF??",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3498db',
    cancelButtonColor: '#7f8c8d',
    confirmButtonText: 'Aceptar!',
    cancelButtonText: 'No, cancelar!'
  }).then(function () {
      // window.location="../reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaPersona.php', '_blank');
  })
}

function pdfAlumno(){
  swal({
    title: 'List en PDF',
    text: "¿Deseas ver la Lista de alumnos en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3498db',
    cancelButtonColor: '#7f8c8d',
    confirmButtonText: 'Aceptar!',
    cancelButtonText: 'No, cancelar!'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaAlumno.php', '_blank');
  })
}

function pdfFichaAlumno(id){
  cadena='reportes/pdfFichaAlumno.php?id='+id;
  swal({
    title: 'Ficha de alumnos en PDF',
    text: "¿Deseas ver la ficha del alumno en PDF?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3498db',
    cancelButtonColor: '#7f8c8d',
    confirmButtonText: 'Aceptar!',
    cancelButtonText: 'No, cancelar!'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open(cadena, '_blank');
  })
}

function pdfCarrera(){
  swal({
    title: 'Lista en PDF',
    text: "¿Deseas imprimir la Lista de carreras?",
    type: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3498db',
    cancelButtonColor: '#7f8c8d',
    confirmButtonText: 'Aceptar!',
    cancelButtonText: 'No, cancelar!'
  }).then(function () {
      // window.location="reportes/pdfListaPersona.php";
      window.open('../reportes/pdfListaCarrera.php', '_blank');
  })
}