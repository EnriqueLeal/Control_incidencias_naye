<?php 
 include '../../configuracion/conexion.php';
$g_id = $_GET['id'];

$contra = md5("123456789");

$consulta = mysql_query ("UPDATE usuarios SET contra='$contra' WHERE id_usuario = '$g_id'",$conexion) or die (mysql_error());

//$actualizar = mysqli_query($conexion,$consulta) or die (mysql_error());
echo "<script language='javascript'> window.location='../../inicio' </script>";

//$consulta = "UPDATE usuarios SET pass='$contra' WHERE id = '$g_id'",$conexion) or die (mysql_error());
//echo "<script language='javascript'> window.location='../../inicio' </script>";
 ?>
