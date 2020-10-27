<?
//se manda llamar la conexion
include("../configuracion/conexion.php");
// include("../configuracion/credenciales.php");

date_default_timezone_set('America/Monterrey');
//variables post
$nombre_horario= $_POST["nombre_horario"];
$hora_entrada=$_POST["hora_entrada"]; 
$hora_salida=$_POST["hora_salida"];  


//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

mysql_query("SET NAMES utf8");	
$insertar= mysql_query("INSERT INTO horarios

							(nombre_horario, hora_entrada, hora_salida, fecha_registro, hora_registro, activo, id_usuario)
							
						VALUES
							('$nombre_horario', '$hora_entrada', '$hora_salida', '$fecha', '$hora', 1, 1)",$conexion) or die (mysql_error());

?>

