<!--
====================================
BEGUIN CONTENIDOS
====================================
-->

 <div id="contenedor2">
    <!-- BEGUIN IMAGENES -->
    <div id="imagen_fondo"><img src="<?php echo base_url() ?>top.jpg" alt="" ></div>
    <!-- end IMAGENES-->  

    <!-- BEGUIN CONT GRAL-->

    <div id="cont_gral">
        <!-- BEGUIN CONT PPAL-->
        <div id="cont_ppal" align="left">

            <!-- BEGUIN TABS--> 
            <div id="tabs">
                <ul>
                    <li><a href= "#tabs-1" >Hoteles</a></li>
                    <li><a href= "#tabs-2" >cabañas</a></li>
                    <li><a href= "#tabs-3" >chalets</a></li>
                    <li><a href= "#tabs-4" >Excuriones</a></li>
                </ul>
                <div id="tabs-1">
                    <div id="alojar_tabs">
                        <?php foreach ($row1 as $var): ?>
                                                    
                                <div>
                                    <img src="<?php echo base_url() . "upload/alojamientos/thumb/" . $var['ID_Alojamiento'] . "_1.jpg" ?>" alt="Hotel <?php echo ucwords($var['Nombre']); ?> San Rafael">
                                    <h2><?php echo ucwords($var['Nombre']); ?></h2>
                                    <p><?php echo substr($var['Descripcion'],0,100) ?> </p>
                                    <span class="button"><a href="<?php echo base_url().$var['Url'] ?>" title="Hotel <?php echo ucwords($var['Nombre']); ?>- San Rafael - Ver Ficha Informacion">+ INFO</a> </span>
                                </div>
                       
                          <?php endforeach ?>
                    </div>
                </div>
                <div id="tabs-2">
                    <div id="alojar_tabs">
                        
                    <?php foreach ($row2 as $var): ?>
                            
                      
                                <div>
                                    <img src="<?php echo base_url() . "upload/alojamientos/thumb/" . $var['ID_Alojamiento'] . "_1.jpg" ?>" alt="Cabañas <?php echo ucwords($var['Nombre']); ?> San Rafael">
                                    <h2><?php echo ucwords($var['Nombre']); ?></h2>
                                    <p><?php echo substr($var['Descripcion'],0,100) ?> </p>
                                    <span class="button"><a href="<?php echo base_url().$var['Url'] ?>" title="Cabañas <?php echo ucwords($var['Nombre']); ?>- San Rafael - Ver Ficha Informacion">+ INFO</a> </span>
                               </div>
                       
                          <?php endforeach ?>
                    </div>
                </div>
                <div id="tabs-3">
                    <div id="alojar_tabs">
                        <?php foreach ($row3 as $var): ?>
                          
                                <div>
                                    <img src="<?php echo base_url() . "upload/alojamientos/thumb/" . $var['ID_Alojamiento'] . "_1.jpg" ?>" alt="Chalet <?php echo ucwords($var['Nombre']); ?> San Rafael">
                                    <h2><?php echo ucwords($var['Nombre']); ?></h2>
                                    <p><?php echo substr($var['Descripcion'],0,100) ?> </p>
                                    <span class="button"><a href="<?php echo base_url().$var['Url'] ?>" title="Chalet <?php echo ucwords($var['Nombre']); ?>- San Rafael - Ver Ficha Informacion">+ INFO</a> </span>
                             
                                </div>
                     
                        <?php endforeach ?>

                    </div>
                </div>
                <div id="tabs-4">
                    <div id="alojar_tabs">
                    
                          <?php foreach ($row4 as $var): ?>
                          
                                <div>
                                    <img src="<?php echo base_url() . "upload/empresas/thumb/" . $var['ID_Empresa'] . "_1.jpg" ?>" alt="<?php echo ucwords($var['Empresa']); ?> - Excursiones">
                                    <h2><?php echo ucwords($var['Empresa']); ?></h2>
                                    <p><?php echo substr($var['Descripcion'],0, 100) ?> </p>
                                    <span class="button"><a href="<?php echo base_url() .$var['Url'] ; ?>" Title="<?php echo ucwords($var['Empresa']); ?> San Rafael - Ficha Información">+ INFO</a> </span>
                                </div>
                     
                        <?php endforeach ?>
                       
                       

                    </div>
                </div>
            </div>
            <!-- BEGUIN fin tabs-->

            <!-- BEGUIN DESTACADOS-->
            <div id="destacamos">
                <h2>Destacamos..</h2>
                       <?php foreach ($row_p as $var): ?>
                <div>

                    <div class="imag"><img src="<?php echo base_url() . "upload/paginas/thumb/" . $var['ID_Pagina'] . "_1_p.jpg" ?>" alt=""> </div>
                    <h3><a href="<?php echo base_url() .$var['Url'] ; ?>" title="<?php echo ucwords($var['TituloContenido']); ?> - San Rafael - Ver Info completa"><?php echo ucwords($var['TituloContenido']); ?></a></h3>
                    <p><?php echo substr(strip_tags($var['Contenido']),0, 200) ?>... <a href="<?php echo base_url().$var['TipoPagina']."/" .$var['Url'] ; ?>" title="<?php echo ucwords($var['TituloContenido']); ?> - San Rafael - Ver Info completa">Seguir Leyendo</a>
                </div>
                  <?php endforeach ?>
            </div>
            <!-- FIN  DESTACADOS-->
            <br>
            <div align="center"> <a href="http://www.despegar.com.ar/hoteles/hl-mdz-i1/hoteles-en-mendoza/?cid=19" class="titulos_12_grisc">Hoteles en Mendoza</a></div>
            <!-- BEGUIN AGENDA-->
            <br>
<div id="agendaC">
    <h2>Agenda Cultural</h2>
    <p>Los mejores Eventos en San Rafael para organizar tus dias.</p>
    <div id="carusel">
      <?php foreach ($row_A as $var): ?>
        <div class="carusell">
             <p class="fecha"><?php echo $var['fechaA']; ?></p>
            <img src="<?php echo base_url() . "upload/agendas/thumb/" . $var['ID_Agenda'] . "_1_p.jpg" ?>" alt="">
            <h3><a href="<?php echo base_url(). "agenda/" . trim($var['Titulo'])."-".$var['ID_Agenda']; ?>" title="<?php echo "Ver Detalle Evento - ".ucwords($var['Titulo'])."- San Rafael"; ?>"><?php echo ucwords($var['Titulo']); ?></a></h3>
           
        </div>
        <?php endforeach ?>
    </div>
</div>
            <!-- END AGENDA-->
        </div>
        <!-- fin PPAL-->

        <!-- BEGUIN ADS-->
        
        <div id="cont_ads">
            <div id="buscadorC" align="left"> 
                <form>
            <h2>Buscador de Alojamientos</h2>

<div class=""><label for="in">Llegada</label><br><input type="text" class="fechass" value="fecha Llegada" id="from"></div>
  <div class=""><label for="out">Salida</label><br><input type="text" value="Fecha Salida" id="to"></div>
  <div><label for="tipo">Tipo alojamiento</label>
<select name="tipo" id="tipo">
    <option value="hotel">Hotel</option>
    <option value="cabanas">Cabañas</option>
    <option value="depto">Departmentos</option> 
</select> 
  </div>
  <div align="center"><button>Buscar..</button> </div>
</form>
           </div>

           <img src="<?php echo base_url() ?>imagenes/publi_p.jpg" alt=""></div>
        <!-- END ADS-->
    </div>
    <!-- FIN CONT GRAL-->
    <p></p><br>  </div>
<!-- END CONTENEDOR-->
