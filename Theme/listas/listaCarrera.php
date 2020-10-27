<?php
  include '../conexion/conexion.php';
  // date_default_timezone_set('America/Monterrey');
?>

 <table id="tablacarrera" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Carrera</th>
                                               <th>Siglas</th>
                                               <th>Activo</th>
                                           </tr>
                                       </thead>
                                       <tfoot>
                                           <tr>
                                              <th>#</th>
                                               <th>Carrera</th>
                                               <th>Siglas</th>
                                               <th>Activo</th>
                                           </tr>
                                       </tfoot>
                                    <tbody>
                                     <?php
                                 mysql_query('SET NAMES utf8');
                                 $consulta=mysql_query("SELECT id, nombre, abreviatura, activo FROM carreras",$conexion) or die (mysql_error());
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
                                                 <?php echo $row[2]; ?>  
                                               </td>
              
                                                <td class="<?php echo $status; ?> centrar">
                                                 <a onclick="statusCarrera(<?php echo $row[0];?>, <?php echo $row[3];?>)">
                                                   <?php echo $chStatus; ?>
                                                
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

    $('#tablacarrera').DataTable( {
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