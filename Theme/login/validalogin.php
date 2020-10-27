<?php
/////////////////////////////////////////////parte de sesiones
include("../configuracion/conexion.php");
/////////////////////////////

$pUser=$_POST["usuario"];
$pContra=md5($_POST["contrasena"]);
$pPrez =$_POST["prez"];

//Se realiza la consulta para creditar el usuario
// $qry = "SELECT no_empleado, password, estatus, CONCAT(nombres, ' ', ap_paterno, ' ', ap_materno) AS persona FROM c_usuarios INNER JOIN  WHERE no_empleado = '$pUser' AND password = '$pContra' AND estatus = '1'";
// $qry ="SELECT no_empleado, password, estatus, CONCAT(nombres, ' ', ap_paterno, ' ', ap_materno) AS persona , t.Nombre
// FROM c_usuarios  u INNER JOIN  tipo_usuario t
// ON  u.tipo_usuario = t.id_tipo_usuario
// WHERE no_empleado = '$pUser' AND password = '$pContra' AND estatus = '1'";
mysql_query('SET NAMES utf8');
$qry = mysql_query("SELECT u.nom_usuario, u.contra, u.activo, CONCAT(p.nombre, ' ', p.ap_paterno, ' ', p.ap_materno) AS persona , pp.nom_puesto AS Puesto,d.nom_departamento AS Nombre_Departamento,t.nombre AS Tipo_Usuario,
tt.id_trabajador AS Numero_Trabajador, u.prez
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

WHERE u.nom_usuario = '$pUser' AND u.contra = '$pContra' AND u.activo = '1' AND u.prez = '1'",$conexion) or die (mysql_error());






                                 // mysql_query('SET NAMES utf8');
                                 // $consulta=mysql_query("SELECT personas.id, CONCAT(ap_paterno,' ',ap_materno, ' ',nombre) AS nombre, fecha_nac, e_mail, activo FROM personas",$conexion) or die (mysql_error());
                                 // $n=1;
                                 // while ($row=mysql_fetch_row($consulta))
                                 // {
                                 //   if ($row[4]==0) {
                                 //     $status ="inactivo";
                                 //     $chStatus = "<i class='fa fa-square-o fa-lg'></i>";
                                 //   }
                                 //   else
                                 //   {
                                 //    $status = "activo";
                                 //    $chStatus = "<i class='fa fa-check-square fa-lg'></i>";
                                 //   }
                               
                                 
                            


//Descargamos el arreglo que arroja la consulta
$row=mysql_fetch_array($qry);
//Se cuenta el numero de filas

$num = mysql_num_rows($qry);
//Verificar si es un usuario existente o no
//

if($num==1)
{
	//asigno un nombre a la session
	session_name("login_supsys");
	session_start();
	//$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
	$_SESSION["autentificado"]= "SI";
	$_SESSION["s_IdUser"]= $row[0];
	$_SESSION["s_IdPass"]= $row[1];

	$_SESSION["s_Persona"]= $row[3];	
	$_SESSION["s_Idtipo"]= $row[4];

  
    
    ////////////////////////////////////////////////////////////////////////////
	 // echo"<script language=\"javascript\">window.location=\"../inicio\"</script>";
	header("Location: ../inicio");
}

else
{
	//Redirecciona a una pagina especifica
	// echo'<script type="text/javascript">
 //    alert("No.Empleado y/o Contrasena Incorrecta");
 //    window.location.href="../index.php";
 //    </script>';
 //    
	echo '<script type="text/javascript">alert("Cambiar de contraseña OR datos Incorrectos  '.'Usuario'.' '.$pUser.' '.' '.'Contraseña'.' '.$pContra. $to . '");</script>';
          header( "refresh:1;url=../login/login.php" );

  //    echo"<script></script>";
	 // echo"<script language=\"javascript\">window.location=\"../index.php\"</script>";
}
?>