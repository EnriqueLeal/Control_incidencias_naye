<?
//se manda llamar la conexion
include("../configuracion/conexion.php");
// include("../configuracion/credenciales.php");
 $s_idUsuario = $_SESSION["s_IdUser"];

date_default_timezone_set('America/Monterrey');
//variables post

$pNum_tipo_usuario = $_POST["nombre"];  




//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

mysql_query("SET NAMES utf8");	
$insertar= mysql_query("INSERT INTO incidencias

							(num_tipo_usuario, fecha_registro, hora_registro, activo, id_usuario)
							
						VALUES
							('$pNum_tipo_usuario', '$fecha', '$hora', '1',  '1')",$conexion) or die (mysql_error());

?>

