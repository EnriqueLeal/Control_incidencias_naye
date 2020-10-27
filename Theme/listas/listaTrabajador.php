<?php
  include '../configuracion/conexion.php';
  // date_default_timezone_set('America/Monterrey');
?>

 <table id="tablaTrabajador" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Nombre:</th>
                                               <th>Departamento:</th>
                                               <th>Puesto:</th>
                                               <th>Persona:</th>
                                               <th>fecha ingreso:</th>
                                             
                                               <!-- <th>Editar</th> -->
                                               <th>Activo</th>
                                                <th>Editar</th>
                                           </tr>
                                       </thead>
                                       <tfoot>
                                           <tr>
                                                <th>#</th>
                                               <th>Nombre:</th>
                                               <th>Departamento:</th>
                                               <th>Puesto:</th>
                                               <th>Persona:</th>
                                               <th>fecha ingreso:</th>
                                             
                                               <!-- <th>Editar</th> -->
                                               <th>Activo</th>
                                                <th>Editar</th>
                                           </tr>
                                       </tfoot>
                                    <tbody>
                                     <?php
                                 mysql_query('SET NAMES utf8');
                                 $consulta=mysql_query("SELECT t.id_trabajador,CONCAT(personas.nombre, ' ', personas.ap_paterno, ' ', personas.ap_materno) AS Nombre,
      d.nom_departamento,p.nom_puesto,t.id_persona,t.fecha_ingreso, t.activo,t.id_usuario
      FROM trabajadores t
INNER JOIN departamentos d
ON t.id_departamento = d.id_departamento
INNER JOIN puestos p
ON t.id_puesto = p.id_puesto
INNER JOIN personas
ON t.id_persona = personas.id_persona
",$conexion) or die (mysql_error());
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
                                                 <a onclick="statusPersona(<?php echo $row[0];?>, <?php echo $row[6];?>)">
                                                   <?php echo $chStatus; ?>
                                                 </a>
                                               </td>
                                                 <td class="centrar">
                                                 <a type="btn" onclick="CargarTrabajadorEditar(<?php echo $row[0];?>)"><i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true"></i></a>
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

    $('#tablaTrabajador').DataTable( {
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