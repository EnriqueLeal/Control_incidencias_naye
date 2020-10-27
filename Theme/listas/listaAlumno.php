<?php
  include '../conexion/conexion.php';
  // date_default_timezone_set('America/Monterrey');
?>

 <table id="tablaalumno" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Alumno</th>
                                               <th>Matricula</th>
                                               <th>Carrera</th>
                                               <th>Ficha</th>
                                               <!-- <th>Editar</th> -->
                                               <th>Activo</th>
                                           </tr>
                                       </thead>
                                       <tfoot>
                                           <tr>
                                              <th>#</th>
                                               <th>Alumno</th>
                                               <th>Matricula</th>
                                               <th>Carrera</th>
                                               <th>Ficha</th>
                                               <!-- <th>Editar</th> -->
                                               <th>Activo</th>
                                           </tr>
                                       </tfoot>
                                    <tbody>
                                     <?php
                                 mysql_query('SET NAMES utf8');
                                 $consulta=mysql_query("SELECT a.id_alumno, CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno) AS Nombre, c.nombre , a.activo, p.id, a.matricula
                                                        FROM alumnos a INNER JOIN personas p, carreras c
                                                        WHERE p.id = a.id_persona AND c.id = a.id_carrera",$conexion) or die (mysql_error());
                                 $n=1;
                                 while ($row=mysql_fetch_row($consulta))
                                 {
                                   if ($row[3]==0) {
                                     $status ="inactivo";
                                     $chStatus = "<i class='fa fa-square-o fa-lg'></i>";
                                   }
                                   else
                                   {
                                    $status = "activo";
                                    $chStatus = "<i class='fa fa-check-square fa-lg'></i>";
                                   }
                               
                                 
                               ?>
                                  
                                           <tr>
                                               <td class="<?php echo $status;?> centrar">
                                                 <?php echo $n;?>
                                               </td>
                                               <td class="<?php echo $status;?> centrar">
                                                 <?php echo $row[1]; ?>
                                               </td>
                                                <td class="<?php echo $status;?> centrar">
                                                 <?php echo $row[5]; ?>  
                                               </td>
                                               <td class="<?php echo $status;?> centrar">
                                                 <?php echo $row[2]; ?>  
                                               </td>
                                               <td class="<?php echo $status;?> centrar">
                                                 <a onclick="pdfFichaAlumno(<?php echo $row[0];?>)" id="ficha" ><i class="fa fa-file-pdf-o fa-lg"></i></a>  
                                               </td>
                                               <!--  <td>
                                                 <?php echo $row[1]; ?>  
                                               </td> -->
                                                <td class="<?php echo $status; ?> centrar">
                                                 <a onclick="statusAlumno(<?php echo $row[0];?>, <?php echo $row[3];?>)">
                                                   <?php echo $chStatus; ?>
                                                 </a>
                                               </td>
                                           </tr>
                               <?php
                               $n++;
                               }
                               ?>
                               
                                       </tbody>
                                   </table>

<script type="text/javascript">

$(document).ready(function() {

    $('#tablaalumno').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "plugins/datatables/langauge/Spanish.json"
        },
        "order": [[ 0, "desc" ]],
       "paging":   true,
        "ordering": true,
        "info":     false,
        "searching": true,
         stateSave: false
    } );
} );

</script>

<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.js"></script>