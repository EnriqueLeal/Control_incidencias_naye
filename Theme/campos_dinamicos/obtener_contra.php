<?php
include '../configuracion/conexion.php';

$pContra = $_POST['get_option'];


 
mysql_query('SET NAMES utf8');
$consulta=mysql_query("SELECT id_usuario, prez
                      FROM usuarios
                      WHERE contra = '$pContra' AND activo = '1'",$conexion) or die (mysql_error());
    while ($row=mysql_fetch_row($consulta)){  
		
           echo  "<option value='$row[1]>'>$row[0]</option>";
		
      } 
 mysql_close($conexion);
 exit;
                                              
?>