<table style="width: 100%" cellpadding="0" cellspacing="0">
    <!-- <col style="width: 5%">
    <col style="width: 18%" >
    <col style="width: 15%">
    <col style="width: 15%">
    <col style="width: 20%" >
    <col style="width: 15%"> -->
    <col style="width: 100%" class="borde">
    <col style="width: 10%" class="borde">
    <col style="width: 10%" class="borde">
    <col style="width: 10%" class="borde">
    <col style="width: 10%" class="borde">
    <col style="width: 10%" class="borde">
    <!-- defino el ancho de la tabla -->
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>

 
    <tr class="verde">
        <td colspan="0" align="center" border=1>
            <label class="grande">
                <b>Datos Personales</b>
            </label>
        </td>  
    </tr>
</table>

<table>

    <tr class="verde">
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Nombre:</b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b></b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b>Correo:</b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b></b>
            </label>
        </td> 
        <td colspan="1" align="center" border=1>
            <label class="grande">
                <b></b>
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
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[2]";?></b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[3]";?></b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[4]";?></b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[5]";?></b>
            </label>
        </td>
        <td colspan="1" align="center" border=1>
            <label class="mediano">
                <b><?php echo "$row[6]";?></b>
            </label>
        </td>
              
    </tr>
    <?php
    $n++;
    }
    ?>
</table>