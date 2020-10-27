<?php
  include '../configuracion/conexion.php';
  // date_default_timezone_set('America/Monterrey');
?>

 <table id="tablapersona2" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Nombre</th>
                                               <th>Apellido Paterno</th>
                                               <th>Apellido Materno</th>
                                               <th>E-mail</th>
                                               <th>Teléfono</th>
                                             
                                               <!-- <th>Editar</th> -->
                                               <th>Activo</th>
                                                <th>Editar</th>
                                           </tr>
                                       </thead>


                                       <tfoot>
                                           <tr>
                                              <th>#</th>
                                               <th>Nombre</th>
                                               <th>Apellido Paterno</th>
                                               <th>Apellido Materno</th>
                                               <th>E-mail</th>
                                               <th>Teléfono</th>
                                             
                                               <!-- <th>Editar</th> -->
                                               <th>Activo</th>
                                               <th>Editar</th>
                                           </tr>
                                       </tfoot>


                                    <tbody>


                                     <?php
                                 mysql_query('SET NAMES utf8');
                                 $consulta=mysql_query("SELECT pe.id_persona, pe.nombre, pe.ap_paterno, pe.ap_materno, pe.correo, pe.telefono, activo
                                                        FROM personas pe",$conexion) or die (mysql_error());


                                 $n=1;
                                 while ($row=mysql_fetch_row($consulta))
                                 {
                                   if ($row[6]==0) {
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
                                               <td class="<?php echo $status;?> centrar">
                                                 <?php echo $row[3]; ?>
                                               </td>
                                               <td class="<?php echo $status;?> centrar">
                                                 <?php echo $row[4]; ?>
                                               </td>
                                               <td class="<?php echo $status;?> centrar">
                                                 <?php echo $row[5]; ?>
                                               </td>
                                            
                                            
                                               <!--  <td>
                                                 <?php echo $row[1]; ?>  
                                               </td> -->
                                                <td class="<?php echo $status; ?> centrar">
                                                 <a onclick="statusPersona2(<?php echo $row[0];?>, <?php echo $row[6];?>)">
                                                   <?php echo $chStatus; ?>
                                                 </a>
                                               </td>
                                               
                                                 <td class="centrar">
                                                 <a type="btn" onclick="CargarPersonaEditar(<?php echo $row[0];?>)"><i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true"></i></a>
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

    $('#tablapersona2').DataTable( {
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