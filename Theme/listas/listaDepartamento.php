<?php
  include '../configuracion/conexion.php';
  // date_default_timezone_set('America/Monterrey');
?>

 <table id="tabladepartamento" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Departamento</th>
                                               <th>Siglas</th>
                                               <th>Activo</th>
                                               <th>Editar</th>
                                           </tr>
                                       </thead>
                                       <tfoot>
                                           <tr>
                                              <th>#</th>
                                               <th>Departamento</th>
                                               <th>Siglas</th>
                                               <th>Activo</th>
                                               <th>Editar</th>

                                           </tr>
                                       </tfoot>
                                    <tbody>
                                     <?php
                                 mysql_query('SET NAMES utf8');
                                 $consulta=mysql_query("SELECT id_departamento, nom_departamento, siglas_departamento, activo FROM departamentos",$conexion) or die (mysql_error());
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
                  <!--  <td>
                                                 <?php echo $row[1]; ?>  
                                               </td> -->
                                                 <td class="<?php echo $status; ?> centrar">
                                                 <a onclick="statusDepartamento(<?php echo $row[0];?>, <?php echo $row[3];?>)">
                                                   <?php echo $chStatus; ?>
                                                 </a>
                                               </td>
                                               
                                                  <td class="centrar">
                                                 <a type="btn" onclick="CargarDepartamentosEditar(<?php echo $row[0];?>)"><i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true"></i></a>
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

    $('#tabladepartamento').DataTable( {
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