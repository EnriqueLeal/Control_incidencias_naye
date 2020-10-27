<?
//se manda llamar la conexion
include("../configuracion/conexion.php");
include("../global_seguridad/verificar_sesion.php");
// include("../configuracion/credenciales.php");

date_default_timezone_set('America/Monterrey');
//variables post
$pNombre=$_POST["nom_departamento"];
$pSiglas=$_POST["siglas_departamento"]; 


$s_idUsuario = $_SESSION["s_IdUser"];




//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

mysql_query("SET NAMES utf8");	
$insertar= mysql_query("INSERT INTO departamentos

							(nom_departamento,siglas_departamento, fecha_registro, hora_registro, activo, id_usuario)
							
						VALUES
							('$pNombre','$pSiglas', '$fecha', '$hora', '1', '1')",$conexion) or die (mysql_error());

?>

