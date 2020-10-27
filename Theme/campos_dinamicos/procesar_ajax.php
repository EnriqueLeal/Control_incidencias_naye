<?php
include '../configuracion/conexion.php';

if(isset($_POST['get_option']))
{

 $prez = $_POST['get_option'];
 
 $qry = mysql_query($conexion, "SELECT u.nom_usuario, u.contra, u.activo, CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno) AS persona , pp.nom_puesto AS Puesto,d.nom_departamento AS Nombre_Departamento,t.nombre AS Tipo_Usuario,
tt.id_trabajador AS Numero_Trabajador
FROM usuarios  u INNER JOIN  tipo_usuarios t
ON    u.tipo_usuario = t.id_tipo
INNER JOIN trabajadores tt 
ON u.id_persona = tt.id_persona
INNER JOIN puestos pp
ON tt.id_puesto = pp.id_puesto
INNER JOIN departamentos d
ON tt.id_departamento = d.id_departamento
INNER JOIN personas p
ON u.id_persona = p.id_persona

WHERE u.nom_usuario =  'Enrique' AND u.contra = 123 AND u.activo = 1 AND u.prez != '1' ",$conexion) or die (mysql_error());
  $bool = mysql_fetch_array($qry);

  while mysql_num_rows($result)
                   {
                      echo "<option>".$row['login']."</option>";
                   }
 
 exit;
}
?>