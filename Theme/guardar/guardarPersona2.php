<?
//se manda llamar la conexion
include("../configuracion/conexion.php");
// include("../configuracion/credenciales.php");

date_default_timezone_set('America/Monterrey');
//variables post
$pNombre=$_POST["nombre"]; 
$pAp_paterno=$_POST["ap_paterno"]; 
$pAp_materno=$_POST["ap_materno"]; 
$pCorreo=$_POST["correo"]; 
$pEcivil=$_POST["ecivil"]; 
$pMunicipio=$_POST["municipio"]; 
$pColonia=$_POST["colonia"]; 
$pNumero=$_POST["numero"]; 
$pTelefono=$_POST["telefono"]; 



//se extrae de una funcion date 
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

mysql_query("SET NAMES utf8");	
$insertar= mysql_query("INSERT INTO personas

							(nombre, ap_paterno, ap_materno, correo, ecivil, municipio, colonia, numero, telefono, fecha_registro, hora_registro, activo, id_usuario)
							
						VALUES
							('$pNombre', '$pAp_paterno', '$pAp_materno', '$pCorreo', '$pEcivil', '$pMunicipio', '$pColonia', '$pNumero', '$pTelefono', '$fecha', '$hora', 1, 1)",$conexion) or die (mysql_error());

?>

