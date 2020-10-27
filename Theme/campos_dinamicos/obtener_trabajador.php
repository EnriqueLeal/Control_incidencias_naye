<?php
include '../conexion/conexion.php';



 
mysql_query('SET NAMES utf8');
$consulta=mysql_query("SELECT 
      p.id_persona, CONCAT(p.nombre, ' ',p.ap_paterno, ' ', p.ap_materno) AS nombre_Completo,
      CASE WHEN NOT EXISTS (SELECT id_persona FROM trabajadores WHERE trabajadores.id_persona = p.id_persona)
           THEN '1' 
           ELSE '0'
      END AS Disponible  
    FROM personas p WHERE p.activo = 1",$conexion) or die (mysql_error());
    while ($row=mysql_fetch_row($consulta)){  
		if ($row[2] == 1) 
		{
           echo  "<option value='$row[0]>'>$row[1]</option>";
		}
      } 
 mysql_close($conexion);
 exit;
                                              
?>