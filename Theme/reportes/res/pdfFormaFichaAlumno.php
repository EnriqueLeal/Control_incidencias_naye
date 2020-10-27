<?php 

$Id=$_GET['id'];

include'../conexion/conexion.php'; 
date_default_timezone_set('America/Monterrey');

// include'../funciones/funcionEspacios.php';

// include'../funciones/funcionFechaLargaS.php';
$qry = "SELECT DISTINCT a.id_alumno, CONCAT(p.nombre, ' ',p.ap_paterno, ' ',p.ap_materno) AS Nombre, a.matricula, p.sexo, p.ecivil, p.fecha_nac, p.e_mail, p.curp, p.rfc, p.telefono, (SELECT CONCAT(c.nombre,' (', c.abreviatura, ')') as carrera FROM carreras AS c INNER JOIN alumnos AS a ON a.id_carrera = c.id WHERE a.id_alumno = '$Id' ) AS Carrera, p.estado, p.municipio, p.colonia, p.calle, p.numero, a.fecha_ingreso
    FROM alumnos AS a INNER JOIN personas AS p
    ON a.id_persona = p.id
    WHERE a.id_alumno = '$Id'";

                
 mysql_query("SET NAMES utf8");
 $consulta=mysql_query($qry,$conexion) or die (mysql_error());
 $row=mysql_fetch_row($consulta);

//Descargamos el arreglo que arroja la consulta

//proceso de variables
 ?>
<style type="text/css">

table
{
    width:  90%;
    border: solid 0px #5544DD;
    margin:auto;
}

table.borde
{
    width:  90%;
    border: solid 1px #D8D8D8;
    margin:auto;
}
th
{
    text-align: center;
    border: solid 0px #113300;
    background: #EEFFEE;
}
th.borde
{
    text-align: center;
    border: solid 1px #D8D8D8;
    background: #EEFFEE;
}
td
{
    text-align: left;
    border: solid 0px #55DD44;
}

td.borde
{
    text-align: left;
    border: solid 1px #D8D8D8;
}
td.col1
{
    border: solid 0px red;
    text-align: right;
}
/*hojas de estilo propia*/
img{
    width: 60%;
}
.gris{
    background: #dcdcdc;
}
.verde{
    background: #90ee90;



/*letras*/
.mchico{font-size: 1px; margin-top: 0px} 
.chico{font-size: 8px; margin-top: 0px}  
.mediano{font-size: 10px; margin-top: 0px}  
.grande{font-size:13px; margin-top: 0px}
.subrayado{text-decoration: underline;} 
.firma {font-size: 10px;font-style: italic;}

.subArriba{
    text-decoration: overline;
}
label{
     margin: 14px 0px 0px 0px;
}
.ancho{width:20px; };

.bajo{
    display: block;
    margin: 15px 0px 0px 0px;
    background: #ccc;
}
/**/


</style>

<table>
    <col style="width: 100%" class="col1">

    <tr>
        <td align="center">
            <img src="../images/titulo.jpg" width="730">
        </td>
    </tr>

</table>

<table style="width: 100%" cellpadding="0" cellspacing="0">
    <col style="width: 5%" class="col1">
    <col style="width: 5%">
    <col style="width: 5%">
    <col style="width: 5%">
    <col style="width: 5%">


    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
        <td colspan="12" border=0 align="center">
            <label class="grande">
                <b>Ficha de Datos del Alumno<!-- <BR> &nbsp; Ficha del Alumno --></b>
            </label>           
        </td>
    </tr>
    <tr>
        <td colspan="6"><hr></td>
    </tr>
    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

</table>
<!-- ====================================================================================================================================================================== -->
<table style="width: 100%" cellpadding="0" cellspacing="0">
    <col style="width: 100%" class="borde">
    <!-- defino el ancho de la tabla -->
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

 
    <tr class="verde">
        <td rowspan="1" align="center" border=1>
            <label class="grande">
                <b>Datos Personales</b>
            </label>
        </td>  
    </tr>
</table>
<!-- ====================================================================================================================================================================== -->
    <table style="width: 100%" cellpadding="0" cellspacing="0">
    <col style="width: 22%" class="borde">
    <col style="width: 22%" class="borde">
    <col style="width: 22%" class="borde">
    <col style="width: 22%" class="borde">
    <col style="width: 12%" class="borde">


    <tr class="gris">
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Nombre:</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[1]";?></b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Correo:</b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[6]";?></b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[3]";?></b>
            </label>
        </td>   
    </tr>
    
    </table>
<!-- ====================================================================================================================================================================== -->
    <table style="width: 100%" cellpadding="0" cellspacing="0">
    <col style="width: 22%" class="borde">
    <col style="width: 22%" class="borde">
    <col style="width: 22%" class="borde">
    <col style="width: 10%" class="borde">
    <col style="width: 12%" class="borde">
    <col style="width: 12%" class="borde">


    <tr class="gris">
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>CURP:</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[7]";?></b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>RFC:</b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[8]";?></b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Nacimiento:</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[5]";?></b>
            </label>
        </td>    
    </tr>
    
    </table>
<!-- ====================================================================================================================================================================== -->
    <table style="width: 100%" cellpadding="0" cellspacing="0">

    <col style="width: 44%" class="borde">
    <col style="width: 22%" class="borde">
    <col style="width: 22%" class="borde">
    <col style="width: 12%" class="borde">


    <tr class="gris">
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Telefono:</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[9]";?></b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Estado Civil:</b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[4]";?></b>
            </label>
        </td> 

    </tr>
    
    </table>
<!-- ==================================================================================================================================================================== -->
    <table style="width: 100%" cellpadding="0" cellspacing="0">
            <col style="width: 22%" class="borde">
            <col style="width: 22%" class="borde">
            <col style="width: 22%" class="borde">
            <col style="width: 10%" class="borde">
            <col style="width: 12%" class="borde">
            <col style="width: 12%" class="borde">


            <tr class="gris">
                <td colspan="1" align="center" border=1>
                    <label class="grande">
                        <b>Colonia:</b>
                    </label>
                </td>
                <td colspan="1" align="center" border=1>
                    <label class="mediano">
                        <b><?php echo "$row[13]";?></b>
                    </label>
                </td> 
                <td colspan="1" align="center" border=1>
                    <label class="grande">
                        <b>Calle:</b>
                    </label>
                </td> 
                <td colspan="1" align="center" border=1>
                    <label class="mediano">
                        <b><?php echo "$row[14]";?></b>
                    </label>
                </td> 
                <td colspan="1" align="center" border=1>
                    <label class="grande">
                        <b>Numero:</b>
                    </label>
                </td>
                <td colspan="1" align="center" border=1>
                    <label class="mediano">
                        <b><?php echo "$row[15]";?></b>
                    </label>
                </td>    
            </tr>
    
    </table>
<!-- ==================================================================================================================================================================== -->
<table style="width: 100%" cellpadding="0" cellspacing="0">
    <col style="width: 100%" class="borde">
    <!-- defino el ancho de la tabla -->
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

 
    <tr class="verde">
        <td rowspan="1" align="center" border=1>
            <label class="grande">
                <b>Datos Escolares</b>
            </label>
        </td>  
    </tr>
</table>

<!-- ==================================================================================================================================================================== -->
    <table style="width: 100%" cellpadding="0" cellspacing="0">
    <col style="width: 22%" class="borde">
    <col style="width: 22%" class="borde">
    <col style="width: 22%" class="borde">
    <col style="width: 10%" class="borde">
    <col style="width: 12%" class="borde">
    <col style="width: 12%" class="borde">


    <tr class="gris">
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Carrera:</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[10]";?></b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Ingreso:</b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[16]";?></b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Matricula:</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[2]";?></b>
            </label>
        </td>    
    </tr>
    
    </table>