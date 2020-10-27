<?
//se manda llamar la conexion
include("../configuracion/conexion.php");
// include("../configuracion/credenciales.php");

date_default_timezone_set('America/Monterrey');
//variables post
$id_persona= $_POST["id_persona"];
$nom_usuario=$_POST["nom_usuario"]; 
$contra=$_POST["contra"]; 
$caducidad=$_POST["caducidad"]; 


//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

mysql_query("SET NAMES utf8");	
$insertar= mysql_query("INSERT INTO usuarios

							(id_persona, nom_usuario, contra, caducidad, fecha_registro, hora_registro, activo, id_usuario)
							
						VALUES
							('$id_persona', '$nom_usuario', '$contra', '$caducidad', '$fecha', '$hora', 1, 1)",$conexion) or die (mysql_error());

?>

