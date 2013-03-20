<div id="contenedor2">
	<div id="cont_full">
	<div id="fichasD" >
		<h1 align="left"><?php echo $row_Al['TipoAlojamiento']; ?> <?php echo $row_Al['Nombre']; ?></h1>
	<!-- FICHAS INFORMARIVAS -->
	<div id="ficha_info">
		<div id="ficha-tabs">
                <ul>
                    <li><a href= "#tabs-1"  ></span>Fotos</a></li>
                    <li><a href= "#tabs-2" >Ubicacion</a></li>
                    <li><a href= "#tabs-3" >Calendario</a></li>
                </ul>
                <div id="tabs-1"> 
                	
<!-- GALERIA FOOTOS -->
    <div id="gallery" class="ad-gallery">
      <div class="ad-image-wrapper">
      </div>
   
      <div class="ad-nav">
        <div class="ad-thumbs">
          <ul class="ad-thumb-list">
          	<?php $i=0; foreach ($row_FA as $var) { ?>
            <li>
              <a href="<?php echo base_url()."upload/alojamientos/".$var['ID_Alojamiento']."_".$var['NombreImagen'].".jpg" ?>">
                <img src="<?php echo base_url()."upload/alojamientos/thumb/".$var['ID_Alojamiento']."_".$var['NombreImagen'].".jpg" ?>" <?php if ($i==0) { ?>class="image0"<?php } ?> alt="<?php echo $var['ImagenDescripcion']; ?>"> 
              </a>
            </li>
               <?php  $i++;} ?>  </div>
          </ul>
        </div>
      </div>
    </div>

    <div id="descriptions">

    </div>
<!-- FIN GALERIA -->
                
            
                <div id="tabs-2"> <img src="<?php echo base_url() . "upload/alojamientos/5_1.jpg"; ?>" alt=""> </div>
	</div>

	<div id="ficha-tabs2">
                <ul>
                    <li><a href= "#tabs-12"  ></span>Descripcion</a></li>
                    <li><a href= "#tabs-22" >Servicios</a></li>
                    <li><a href= "#tabs-32" >Comentarios</a></li>
                </ul>
                <div id="tabs-12"> <img src="<?php echo base_url() . "upload/alojamientos/8_2.jpg"; ?>" alt=""> </div>
                <div id="tabs-22"> <img src="<?php echo base_url() . "upload/alojamientos/5_1.jpg"; ?>" alt=""> </div>
	</div>
	</div>
	<!-- FICHAS DATOS -->
	<div id="ficha_datos">
		<div id="datos_alojar" class="border-Corner borde-verde " align="left">
			<h2>Datos Alojamientos</h2>
			<p><img src="<?php echo base_url() . "iconos/direction.png"; ?>" alt="direccion - <?php echo $row_Al['TipoAlojamiento']; ?>"> <b>Direccion:</b> Almafuerte 225 - San Rafael - Mendoza</p>
			<p><img src="<?php echo base_url() . "iconos/phone.png"; ?>" alt=""> <b>Teleono: </b><?php echo $row_Al['Telefono']; ?></p>
			<p><img src="<?php echo base_url() . "iconos/url2.png"; ?>" alt=""> <b>Website:</b> <a href="<?php echo base_url(). "website/contador/url/" .$row_Al['ID_Alojamiento']; ?>" "Vistie el Web del Alojamiento"><?php echo $row_Al['WebSite']; ?></a></p>
	
		</div>
	</div>
		</div>
	</div>
</div>