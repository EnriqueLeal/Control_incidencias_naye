<?php
include '../configuracion/conexion.php';



 
mysql_query('SET NAMES utf8');
$consulta=mysql_query("SELECT id, nombre
                      FROM carreras
                      WHERE activo = 1",$conexion) or die (mysql_error());
    while ($row=mysql_fetch_row($consulta)){  
		
           echo  "<option value='$row[0]>'>$row[1]</option>";
		
      } 
 mysql_close($conexion);
 exit;
                                              
?>