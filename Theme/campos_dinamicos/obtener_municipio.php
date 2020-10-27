<?php
include '../conexion/conexion.php';

if(isset($_POST['get_option']))
{

 $id_estado = $_POST['get_option'];

 $qry = "SELECT id_municipio, municipio FROM municipios WHERE id_estado = '$id_estado' ";

 $consulta = mysql_query($qry,$conexion) or die (mysql_error());
 
 

  while ($row=mysql_fetch_row($consulta))
                   {
                      echo "<option value=\"$row[0]\">".$row[1]."</option>";
                   }
  mysql_close($conexion);
 exit;
}
?>