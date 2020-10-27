<?
//se manda llamar la conexion
include'../configuracion/conexion.php';
date_default_timezone_set('America/Monterrey');
//verifico inicio de sesion
include'../sesiones/verificar_sesion.php';

//variables post
$gStatus=$_POST["valor"]; 
$gId=$_POST["id_puesto"]; 

//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

/*variable de session*/
$usuario=$_SESSION["s_clave"];

//con el if cambiamos el status
$activo=($gStatus==1)?0:1;
	mysql_query("SET NAMES utf8");
$actualizar = mysql_query("UPDATE puestos
							SET activo = '$activo',
							 fecha_registro = '$fecha',
							 hora_registro= '$hora'
						
							WHERE
							 id_puesto = '$gId' AND id_usuario = '1'",$conexion) or die (mysql_error());

?>