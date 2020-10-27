<?php
include '../configuracion/conexion.php';


 
    mysql_query("SET NAMES utf8");
                                                            $combo1 = mysql_query("SELECT
                                                                                    personas.id_persona,
                                                                                    CONCAT(
                                                                                      personas.ap_paterno,
                                                                                      ' ',
                                                                                      personas.ap_materno,
                                                                                      ' ',
                                                                                      personas.nombre
                                                                                    ) AS nombre
                                                                                  FROM
                                                                                    personas
                                                                                  WHERE personas.activo=1",$conexion);

                                                            while ($row=mysql_fetch_array($combo1))
                                                              {
                                                              echo "<option value='$row[0]'>$row[1]</option>";
                                                              }
 mysql_close($conexion);
 exit;
                                              
?>