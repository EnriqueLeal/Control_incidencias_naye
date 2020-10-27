<?php
include '../configuracion/conexion.php';


mysql_query('SET NAMES utf8');
$consulta=mysql_query("SELECT personas.id_persona, CONCAT(personas.nombre, ' ',personas.ap_materno, ' ', personas.ap_materno) AS nombre_Completo,
      CASE WHEN NOT EXISTS (SELECT id_persona FROM trabajadores WHERE trabajadores.id_persona = personas.id_persona)
           THEN '1' 
           ELSE '0'
      END AS Disponible  
    FROM personas WHERE personas.activo = 1",$conexion) or die (mysql_error());
    while ($row=mysql_fetch_row($consulta)){  
		if ($row[2] == 1) 
		{
           echo  "<option value='$row[0]>'>$row[1]</option>";
		}
      } 
 mysql_close($conexion);
 exit;
                                              
?>