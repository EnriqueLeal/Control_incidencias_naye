
<?php 

	include ("../../configuracion/conexion.php");
	

	$Vid=$_POST["id_puesto"];
	$Vid_NAME = $_POST["nom_puesto"];
	;

	

	date_default_timezone_set('America/Monterrey');

    $fecha = date('Y-m-d');
    $hora = date('H:m:s');
    

    $consulta = "UPDATE puestos
			SET  Vid_NAME = '$nom_puesto', activo = 1, usuario = 1
			WHERE id_puesto = '$Vid'";
		
	$actualizar = mysqli_query($conexion,$consulta);
	
	
	echo"<script language=\"javascript\">window.location=\"index.php\" </script>";

?>