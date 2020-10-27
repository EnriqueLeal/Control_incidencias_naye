<?php 

// $Id=$_GET['id'];

include'../../configuracion/conexion.php'; 
// include'../../configuracion/credenciales.php';
date_default_timezone_set('America/Monterrey');

// include'../funciones/funcionEspacios.php';

// include'../funciones/funcionFechaLargaS.php';


                
 mysql_query("SET NAMES utf8");
 $consulta=mysql_query(" SELECT p.id_puesto as Puesto, p.nom_puesto
 FROM puestos p 
ORDER BY 
fecha_registro",$conexion) or die (mysql_error());
 
//Descargamos el arreglo que arroja la consulta

//proceso de variables
 ?>
<style type="text/css">
/*<!--*/
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
}



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
    <col style="width: 15%" class="col1">
    <col style="width: 15%">
    <col style="width: 15%">
    <col style="width: 15%">

<!--     <col style="width: 5%" class="borde">
    <col style="width: 25%" class="borde">
    <col style="width: 25%" class="borde">
    <col style="width: 25%" class="borde">
    <col style="width: 20%" class="borde"> -->
    <!-- defino el ancho de la tabla -->
    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
        <td colspan="12" border=0 align="center">
            <label class="grande">
                <b>UT Linares <BR> &nbsp; Lista completa de Personas</b>
            </label>           
        </td>
    </tr>
    <tr>
        <td colspan="7"><hr></td>
    </tr>
    <tr>
        <td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

</table>

<table style="width: 100%" cellpadding="0" cellspacing="0">

    <col style="width:  5%" class="borde">
    <col style="width: 20%" class="borde"><!-- NAme -->
    <col style="width: 18%" class="borde"><!-- Correo -->
    <col style="width: 15%" class="borde"><!-- Nacimiento -->
    <col style="width: 12%" class="borde"><!-- Phone -->
    <col style="width: 15%" class="borde"><!-- estado -->
    <col style="width: 15%" class="borde">
    <!-- defino el ancho de la tabla -->
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

 
    <tr class="verde">
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>No.</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Nombre</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Correo</b>
            </label>
        </td>
      


               
    </tr>
    <?php
        $n=1;
        while ($row=mysql_fetch_row($consulta)) 
        {     
    ?>
    <tr>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$n";?></b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[1]";?></b>
            </label>
    
              
    </tr>
    <?php
    $n++;
    }
    ?>
</table>