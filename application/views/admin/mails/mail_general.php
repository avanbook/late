
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="san rafael,">
        <meta name="author" content="">
    </head>
    <body>
        <div style='font-style:normal; font: Arial; font-weight: normal; font-size:10px'>
            <div style='font-style:normal;font-size: 12px; font-family: Arial '>
                <span style='font-style:normal; font: Arial;  '>
                    <p>---------- <span style='font-size:16px'>VOUCHER DE RESERVA DBHOTEL - RESERVA A CONFIRMAR </span> ---------------<br />
                        <br/>
                </span>
                <?php if ($enviar_tipo=='alojamiento'): ?>
                    <?php $str_para = strtoupper($tipo_Hotel) . " " . strtoupper($nombre_Hotel) . ", " . strtoupper($responsable); ?>
                <?php elseif ($enviar_tipo=='huesped'): ?>
                    <?php $str_para = strtoupper($apellido) . ", " . strtoupper($nombre) ?>
                <?php else: ?>
                    <?php $str_para = "SAN RAFAEL LATE" ?>
                <?php endif ?>
                <div style='width:575px; font-family:arial; font-size:12px; color:#666'>Estimado</b><strong> <?php echo $str_para ?></strong><br>
                    <br />
                    Le informamos que se realizo una <strong>RESERVA PENDIENTE DE CONFIRMACION </strong>a su alojamiento atraves de nuestro Motor de Reservas <strong>DBHOTEL_V3</strong> en su web.<br>
                    <br>
                    La reserva <strong>RESERVA PENDIENTE DE CONFIRMACION </strong> es debido a que no cuenta con disponibilidad en DBHOTEL en caso de tener lugar  Ingrese a su panel de control  y  <strong>Confirme</strong>
                    <span style='font-style:normal; font: Arial;  '><strong> la reserva. <br>
                            <br>
                            En Caso contrario ingrese y haga la cancelacion de la misma.<br>
                        </strong><br/>
                        </b>
                    </span>    
                </div>
                <table width='575' border='0'>
                    <tr>
                        <td align='center'>
                            <span class=''>
                                <a href='http://debooking.com.ar/hoteleros.php'>
                                    <b style='font-size:14px'>Ingresar al Panel Control &gt;&gt;<br /></b>
                                </a>
                            </span>
                            <b style='font-size:12px'>(o  tambien escribiendo en el navegador http://debooking.net/hoteleros)
                            </b>
                        </td>
                    </tr>
                </table>
                <span ><br />
                    <b style='font-size:14px;'>Nº RESERVA: <?php echo $localizador ?></b><br />
                    <br />
                </span>
                <table width='575' border='1' cellpadding='0' cellspacing='0' style='border-color:#428FCE; font-size:12px'>
                    <tr>
                        <td width='571' height='' bgcolor=''><table width='100%' border='0'  style=' font-size:12px'>
                                <tr>
                                    <td width='234' height='' valign='top' bgcolor='' style='padding-left:10px;'><p class=''><span style='color:#5B8AB9;'><b>DATOS HUESPED </b></span><br />
                                            <br />
                                            <span style='color:#666666'>
                                                <b>Nombre</b>:<?php echo $nombre ?> <br />
                                                <br />
                                                <b>Apellido</b>:. <?php echo $apellido ?><br />
                                                <br />
                                                <b>Telefono</b>: <?php echo $telefono ?>
                                            </span>
                                        </p>
                                        <p class='style7'>
                                            <span style='color:#666666'>
                                                <strong>Email</strong>: <?php echo $email ?><br />
                                                <br />
                                                <b>Ciudad</b>: <?php echo $ciudad ?><br />
                                            </span>
                                            <span style='color:#666666'><br />
                                                <b>Provincia</b>: <?php echo $provincia ?><br />
                                                <span class='style5'>
                                                    <br />
                                                </span>
                                            </span>
                                        </p>
                                    </td>
                                    <td width='331' valign='top' bgcolor=''>
                                        <span class='style4'>
                                            <span class='style7'><span style='color:#5B8AB9'><b>DATOS DE LA ESTADIA</b></span><br />
                                                <span style='color:#666666'><br />
                                                    <b>Check In</b>: <?php echo $fecha1 ?><br />
                                                    <br />
                                                    <b>Check Out:</b> <?php echo $fecha2 ?><br />
                                                    <br />
                                                    <b>Cantidad de Dias de Estadia:</b><?php echo $cant_dias ?> <br />
                                                    <br />
                                                    <b>Cantidad de Pasajeros:</b><?php echo $cant_paxs ?><br />
                                                    <br />
                                                    <span style='color:#00C; font-size:14px'>
                                                        <strong>Total Estadia: <?php echo $total_estadia ?> </strong>
                                                    </span>
                                                    <br />
                                                    <br />
                                                    <strong>Forma de Pago Seleccionada :</strong> <?php echo $pago3 ?>
                                                </span>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <br />
                <br />
                <table width='575' border='1' cellpadding='0' cellspacing='0' style='border-color:#428FCE'>
                    <tr>
                        <td width='575' height='85' valign='top' bgcolor='#F0F0FF'>
                            <table width='100%' border='0' cellpadding='0' cellspacing='0'>
                                <tr>
                                    <td height='34' valign='top' bgcolor='#F1F5FA' style='padding-left:10px'>
                                        <span style='color:#5B8AB9;'>
                                            <b>
                                                <br />
                                                OBSERVACIONES DEL CLIENTE<br />
                                                <br />
                                            </b>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td height='34' align='left' valign='top' bgcolor='#F1F5FA'>
                                        <span style='font-size:11pt;color:#666666 ;padding-left:10px'>
                                            <?php echo $consulta ?>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <br />
                <span class='style7'>
                    <span class='style5'>
                        <span class='style5'>
                            <br />
                            <span class='style4'>
                                <span class='style7'>
                                    <b>
                                    </b>
                                </span>
                            </span>
                        </span>
                    </span>
                </span>
                <table width='575' border='1' cellpadding='0' cellspacing='0' style='border-color:#428FCE;' >
                    <tr>
                        <td width='575' height='216' valign='top' bgcolor=''>
                            <table width='100%' border='0' cellpadding='0' cellspacing='0'>
                                <tr>
                                    <td height='34' valign='top' bgcolor='' style='padding-left:10px;'>
                                        <br />
                                        <span class='style5'>
                                            <span class='style7'>
                                                <span style='color:#5B8AB9;'>
                                                    <b>DETALLES HABITACION/CABAÑAS/DEPTOS Y COSTOS</b>
                                                    <br />
                                                </span>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td height='170' valign='top' bgcolor='' style='padding-left:10px;font-size:12px'>
                                        <br />
                                        <table><!-- foreach -->
                                            <tr>
                                                <th>Unidad</th>
                                                <th>Reservo</th>
                                                <th>Tarifas y noches</th>
                                                <th>Subtotal</th>
                                            </tr>
                                            <?php $total_final = 0; ?>
                                            <?php for ($i = 1; $i <= $cantidad_habitaciones; $i++): ?>
                                                <?php for ($y = 1; $y <= $cant_por_hab[$i]; $y++): ?>
                                                    <tr>
                                                        <td><?php echo $unidad_alojativa[$i] ?></td>
                                                        <td><?php echo $nombre_hab[$i] ?></td>
                                                        <td>

                                                            <?php
                                                            $tarifa = 0;
                                                            $subtotal = 0;
                                                            ?>
                                                            <?php for ($z = 1; $z <= $cantidad_dias; $z++): ?>
                                                                <!-- Para poder colorear cuando es tarifa o oferta (por eso esta dos veces) -->
                                                                <?php if ($tarifa_oferta[$i][$z] != 0): ?>
                                                                    <?php $tarifa = $tarifa_oferta[$i][$z] ?>
                                                                    <div style="display: inline-block;margin: 4px; font-size: 10px; color: #222; padding: 4px; border:1px solid #428FCE"><?php echo $this->gf->fecha_corta($fe_array[$z]) ?><br /> <span style='color:green'>$<?php echo $tarifa_oferta[$i][$z] ?></span></div>
                                                                <?php else: ?>
                                                                    <?php $tarifa = $tarifa_normal[$i][$z] ?>
                                                                    <div style="display: inline-block;margin: 4px; font-size: 10px; color: #222; padding: 4px; border:1px solid #428FCE"><?php echo $this->gf->fecha_corta($fe_array[$z]) ?><br />$<?php echo $tarifa_normal[$i][$z] ?></div>
                                                                <?php endif; ?>
                                                                <?php $subtotal = $tarifa + $subtotal; ?>
                                                            <?php endfor; ?>


                                                        </td>

                                                        <td>$<?php echo $subtotal ?></td>
                                                        <?php $total_final = $subtotal + $total_final ?>
                                                    </tr>
                                                <?php endfor; ?>

                                            <?php endfor; ?>
                                            <tr>
                                                <td colspan="3">Total</td>
                                                <td>$<?php echo $total_final ?></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <?php $des_p = ($descuento * $total_final) / 100 ?>
                                                <td colspan="3">Descuento (% <?php echo $descuento ?> )</td>
                                                <td>$<?php echo $des_p ?></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">Total a pagar ( total - descuento )</td>
                                                <?php $total_descuento = $total_final - (($descuento * $total_final) / 100) ?>
                                                <?php //$total_descuento=$descuento-$total_final ?>
                                                <td>$<?php echo $total_descuento ?></td>
                                                <td></td>
                                                <?php $total_senia = $senia * $total_descuento / 100 ?>
                                                <?php $resto_senia = $total_descuento - $total_senia ?>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <br>
                <br />
                <!-- Solamente se veran estos datos si es para huesped el mail enviado -->
                <?php if ($enviar_tipo=='huesped'): ?>

                    <div style='width:575px; font-family:arial; font-size:12px; color:#666'>
                        <b> ----------------------------- METODO DE PAGO Y/O CONFIRMACION DE LA RESERVA -----------------------------</b>
                        <p>
                            Ud selecciono el siguiente Tipo y metodo de Pago/confirmacion de la reserva.
                        </p>
                        <br>
                        <?php if ($metodo_pago == 'S'): ?>
                            <p>
                                <span style="color:#206abd;font-size:14px">
                                    <b>PAGO FRACCIONADO (SEÑA + RESTO AL LLEGAR)</b>
                                </span>
                                <br>
                            </p>
                            <p>Para confirmar la reserva debe realizar un pago de un <?php echo $senia ?> % del total de la reserva, mediante el método de pago elegido (si desea cambiar método de pago, envie un email a contacto@sanrafaellate.com solicitandolo.
                            </p>
                            <table>
                                <tr><td>Total Estadia</td><td><?php echo $total_final ?></td></tr>
                                <tr><td>Total Seña ( <?php echo $senia ?>% ) </td><td><?php echo $total_senia ?></td></tr>
                                <tr><td>Resto a pagar en alojamiento</td><td><?php echo $resto_senia ?></td></tr>
                            </table>
                            <br>
                            <br>
                            <?php if ($tipo_pago == 'B'): ?>
                                <table>
                                    <tr><td colspan="2">DATOS DEPOSITO/TRANFERENCIA</td></tr>
                                    <tr><td><b>Entidad Bancaria:</b></td><td>Banco Galicia</td></tr>
                                    <tr><td><b>Titular Cuenta:</b></td><td>Luis Dario Calderon.</td></tr>
                                    <tr><td><b>Tipo de Cuenta:</b></td><td>Caja De Ahorro</td></tr>
                                    <tr><td><b>Moneda:</b></td><td>Pesos</td></tr>
                                    <tr><td><b>Numero de Cuenta:</b></td><td>4011518-5 222-2</td></tr>
                                    <tr><td><b>Sucursal:</b></td><td>222</td></tr>
                                    <tr><td><b>Cuit:</b></td><td>20-21807351-5</td></tr>
                                    <tr><td><b>CBU:</b></td><td>0070 2227 3000 4011 5185 20 </td></tr>
                                </table>
                            <?php elseif ($tipo_pago == 'T'): ?>
                                <table>
                                    <tr><td>PAGO CON TARJETA DE CREDITO </td></tr>
                                    <tr>
                                        <td>
                                            Puede pagar en hasta en 12 cuotas. Su tarjeta de credito se procesara a traves de la empresa DINEROMAIL (empresa Lider en America Latina en cobros online, mas info www.dineromail.com.ar). Verifique tarjetas con 12 cuotas sin Interes.
                                            Este metodo de pago tiene un recargo del 7% sobre el monto a pagar 
                                        </td>
                                    </tr>
                                </table>
                            <?php else: ?>
                                <table>
                                    <tr><td colspan="2">DATOS DEPOSITO/TRANFERENCIA</td></tr>
                                    <tr><td><b>Entidad Bancaria:</b></td><td>Banco Galicia</td></tr>
                                    <tr><td><b>Titular Cuenta:</b></td><td>Luis Dario Calderon.</td></tr>
                                    <tr><td><b>Tipo de Cuenta:</b></td><td>Caja De Ahorro</td></tr>
                                    <tr><td><b>Moneda:</b></td><td>Pesos</td></tr>
                                    <tr><td><b>Numero de Cuenta:</b></td><td>4011518-5 222-2</td></tr>
                                    <tr><td><b>Sucursal:</b></td><td>222</td></tr>
                                    <tr><td><b>Cuit:</b></td><td>20-21807351-5</td></tr>
                                    <tr><td><b>CBU:</b></td><td>0070 2227 3000 4011 5185 20 </td></tr>
                                </table>
                                <br>
                                <br>
                                <table>
                                    <tr><td>PAGO CON TARJETA DE CREDITO </td></tr>
                                    <tr>
                                        <td>
                                            Puede pagar en hasta en 12 cuotas. Su tarjeta de credito se procesara a traves de la empresa DINEROMAIL (empresa Lider en America Latina en cobros online, mas info www.dineromail.com.ar). Verifique tarjetas con 12 cuotas sin Interes.
                                            Este metodo de pago tiene un recargo del 7% sobre el monto a pagar 
                                        </td>
                                    </tr>
                                </table>
                            <?php endif ?>
                        <?php elseif ($metodo_pago == 'A'): ?>
                            <p>
                                <span style="color:#206abd;font-size:14px">
                                    <b>PAGO ANTICIPADO (TOTAL ESTADIA)</b>
                                </span>
                                <br>
                            </p>

                            <table>
                                <tr><td>Total Estadia</td><td><?php echo $total_final ?></td></tr>
                            </table>

                            <p>Para confirmar la reserva debe realizar un pago de un <?php echo $senia ?> % del total de la reserva, mediante el método de pago elegido (si desea cambiar método de pago, envie un email a contacto@sanrafaellate.com solicitandolo.
                                <?php if ($tipo_pago == 'B'): ?>
                                <table>
                                    <tr><td colspan="2">DATOS DEPOSITO/TRANFERENCIA</td></tr>
                                    <tr><td><b>Entidad Bancaria:</b></td><td>Banco Galicia</td></tr>
                                    <tr><td><b>Titular Cuenta:</b></td><td>Luis Dario Calderon.</td></tr>
                                    <tr><td><b>Tipo de Cuenta:</b></td><td>Caja De Ahorro</td></tr>
                                    <tr><td><b>Moneda:</b></td><td>Pesos</td></tr>
                                    <tr><td><b>Numero de Cuenta:</b></td><td>4011518-5 222-2</td></tr>
                                    <tr><td><b>Sucursal:</b></td><td>222</td></tr>
                                    <tr><td><b>Cuit:</b></td><td>20-21807351-5</td></tr>
                                    <tr><td><b>CBU:</b></td><td>0070 2227 3000 4011 5185 20 </td></tr>
                                </table>
                            <?php elseif ($tipo_pago == 'T'): ?>
                                <table>
                                    <tr><td>PAGO CON TARJETA DE CREDITO </td></tr>
                                    <tr>
                                        <td>
                                            Puede pagar en hasta en 12 cuotas. Su tarjeta de credito se procesara a traves de la empresa DINEROMAIL (empresa Lider en America Latina en cobros online, mas info www.dineromail.com.ar). Verifique tarjetas con 12 cuotas sin Interes.
                                            Este metodo de pago tiene un recargo del 7% sobre el monto a pagar 
                                        </td>
                                    </tr>
                                </table>
                            <?php else: ?>
                                <table>
                                    <tr><td colspan="2">DATOS DEPOSITO/TRANFERENCIA</td></tr>
                                    <tr><td><b>Entidad Bancaria:</b></td><td>Banco Galicia</td></tr>
                                    <tr><td><b>Titular Cuenta:</b></td><td>Luis Dario Calderon.</td></tr>
                                    <tr><td><b>Tipo de Cuenta:</b></td><td>Caja De Ahorro</td></tr>
                                    <tr><td><b>Moneda:</b></td><td>Pesos</td></tr>
                                    <tr><td><b>Numero de Cuenta:</b></td><td>4011518-5 222-2</td></tr>
                                    <tr><td><b>Sucursal:</b></td><td>222</td></tr>
                                    <tr><td><b>Cuit:</b></td><td>20-21807351-5</td></tr>
                                    <tr><td><b>CBU:</b></td><td>0070 2227 3000 4011 5185 20 </td></tr>
                                </table>
                                <br>
                                <table>
                                    <tr><td>PAGO CON TARJETA DE CREDITO </td></tr>
                                    <tr>
                                        <td>
                                            Puede pagar en hasta en 12 cuotas. Su tarjeta de credito se procesara a traves de la empresa DINEROMAIL (empresa Lider en America Latina en cobros online, mas info www.dineromail.com.ar). Verifique tarjetas con 12 cuotas sin Interes.
                                            Este metodo de pago tiene un recargo del 7% sobre el monto a pagar 
                                        </td>
                                    </tr>
                                </table>
                            <?php endif ?>
                        <?php else: ?>
                            <p>
                                <span style="color:#206abd;font-size:14px">
                                    <b>PAGO GARANTIA</b>
                                </span>
                                <br>
                            </p>
                            <p>Usted selecciono pago en "Hotel" mediente este métod tomamos como garantia su tarjeta de crédito, de la cual no se cobrara ningún gasto, usted pagara el total de la estadía al llegar, en caso de no llegar al alojamieto se le cobrará el costo según politicas de cancelación.</p>
                        <?php endif; ?>

                    <?php endif ?>

                </div>
                <div style='width:575px; font-family:arial; font-size:12px; color:#666'>
                    <p><span style='font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#009'><strong>Consultas o Sugerencias</strong></span><br />
                        Para cualquier tipo de consultas entre en su <strong><a href='http://debooking.com.ar/hoteleros'>Panel de Usuario</a></strong> <strong>DEBOOKING</strong> y vaya a la seccion Atencion a Clientes o comuniquese via email al <a href='mailto:hoteleros@debooking.com.ar?Subjet= Consulta DBHOTEL'>hotel@debooking.com.ar </a> o llamandonos a los telefonos (54) (0260) 4540127 (TELEFAX) de 9hs a 20hs o al (54) (0260) 154595557 de 9 a 20hs o por Skype a <strong>Debooking</strong> o A nuestro soporte online <a href='http://debooking.com.ar/soporte2 /'>http://debooking.net/soporte2/ </a></p>
                </div>
                <div style='width:575px' align='center'> 
                    <p>------------------------------------------------------      
                        <span style=' font-size: 16px; font: Arial; color: #FF0080 '>
                            <strong>DBHOTEL</strong>
                        </span> (Version 3 ) ----------------------------------------------------<br>
                        Motor de Reservas para  Webs de Alojamientos<br>
                        -----------------------------------------------------------------------------------------------------------------------------------------------<br />
                    </p> 
                </div> 

                <div style='width:575px;'>
                    <b>
                        <img src='http://debooking.com.ar/imagenes/debooking.jpg' width='174' height='57' />
                    </b>
                    <p>
                    <spam style=' font-size: 10px; font: Arial; color:#666 '>
                        <b>Plataforma de Comercializacion de Alojamientos</b>
                    </spam>
                    <spam style=' font-size: 10px; font: Arial;  '><br />
                        <strong>Producto de DESTINOS INTERACTIVOS</strong><br />
                        <b>Telefax</b>: 0260 - 4540127 (de 9 a 20 hs lunes a viernes)<br />
                        <b>Celulares:</b>0260 - 154595557( de 9 a 20 hs ).<br />
                        <strong>Oficinas Centrales  :</strong> Coronel Plaza 390<br />
                        <b>San Rafael &bull; Mendoza &bull; Argentina</b></spam>
                    <br />
                    <a href='http://www.debooking.net'>www.debooking.net </a><br />
                    <a href='http://www.destinosinteractivos.com'>www.destinosinteractivos.com</a><br />
                    </p>
                </div>
            </div>   
        </div>
    </body>