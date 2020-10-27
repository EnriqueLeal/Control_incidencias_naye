<?php
  include '../configuracion/conexion.php';
  // date_default_timezone_set('America/Monterrey');
?>

 <table id="tablaIncidencia" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Incidencia</th>
                                             
                                               <!-- <th>Editar</th> -->
                                               <th>Activo</th>
                                                <th>Editar</th>
                                           </tr>
                                       </thead>
                                       <tfoot>
                                           <tr>
                                              <th>#</th>
                                               <th>Puesto</th>
                                             
                                               <!-- <th>Editar</th> -->
                                               <th>Activo</th>
                                               <th>Editar</th>
                                           </tr>
                                       </tfoot>
                                    <tbody>
                                     <?php
                                 mysql_query('SET NAMES utf8');
                                 $consulta=mysql_query("SELECT i.id_incidencia, i.num_tipo_usuario,i.activo,i.id_usuario
FROM incidencias i",$conexion) or die (mysql_error());
                                 $n=1;
                                 while ($row=mysql_fetch_row($consulta))
                                 {
                                   if ($row[2]==0) {
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

                                            
                                            
                                               <!--  <td>
                                                 <?php echo $row[1]; ?>  
                                               </td> -->
                                                   <td class="<?php echo $status; ?> centrar">
                                                 <a onclick="statusIncidencia(<?php echo $row[0];?>, <?php echo $row[2];?>)">
                                                   <?php echo $chStatus; ?>
                                                 </a>
                                               </td>

                                                 <td class="centrar">
                                                 <a href="../modulos/incidencias/modificar_puesto.php?id=<?php echo $row[0] ?>"><i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true"></i></a>
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

    $('#tablaIncidencia').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "../plugins/datatables/langauge/Spanish.json"
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