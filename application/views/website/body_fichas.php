<div id="contenedorInt">
	<div id="cont_int">
	<div id="fichasD" >
    <div id="toplinks" align="left"><b>Estas en: </b><a href="<?php echo base_url(); ?>" title="Ir a home">Home</a> >>  <a href="<?php echo base_url(). $urlback; ?>" title=" Volver a Pagina <?php echo $tipoalojamientos. " en " . $this->config->item('ciudadweb'); ?>"><?php echo $tipoalojamientos; ?> en <?php echo $this->config->item('ciudadweb'); ?></a> >><?php echo $row_Al['TipoAlojamiento']; ?> <?php echo $row_Al['Nombre']; ?></div>

    <!-- TITULO FICHAS & SOCIAL MEDIA -->
    <div class="tituloSocial" align="left">
		<!-- TITULO  -->
    <div><h1 align="left"><?php echo $row_Al['TipoAlojamiento']; ?> <?php echo $row_Al['Nombre']; ?></h1></div>

    <?php $direccion = "http://".$_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI']; ?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=129728918042";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--SOCIAL MEDIA --><div align="rigth">
<div id="share" align="rigth" >
  <!-- TWITTER -->
<div><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script><a href="https://twitter.com/share" class="twitter-share-button" data-via="sanrafaellate" data-lang="es" data-size="" data-dnt="true"  data-count="vertical">Twittear</a>
</div>
<!-- FACEBOOK -->
<div><div class="fb-like" data-href="<?php   echo $direccion; ?>" data-send="false" data-layout="box_count" data-width="100" data-show-faces="true"></div></div>
<!--GOOGLE PLUS-->
<div><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><g:plusone size="tall"></g:plusone>
</div>
</div>
</div>
	</div><!-- FICHAS INFORMARIVAS -->
	<div id="ficha_info">

		<div id="ficha-tabs">
                <ul>
                    <li id="fotosAlojar"><a href= "#tabs-1"  ></span>Fotos</a></li>
                    <li id="mapaAlojar"><a href= "#tabs-2" >Ubicacion</a></li>
                    <li id="calendarAlojar"><a href= "#tabs-3" >Calendario</a></li>
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
                
            
                <div id="tabs-2"> 
                 <input type="hidden" id="cordeMap" value="<?php echo $row_Al['Coordenadas']; ?>"> <div id="map"> </div></div>
                        <div id="tabs-3"> </div>
	</div>

	<div id="ficha-tabs2">
                <ul>
                    <li id="tabDescrip"><a href= "#tabs-12"  ></span>Descripcion</a></li>
                    <li id="tabServ" ><a href= "#tabs-22" >Servicios</a></li>
                    <li id="tabComent" ><a href= "#tabs-32" >Comentarios</a></li>
                </ul>
                <div id="tabs-12"> <div id="descripcion" align="left"> <?php echo $row_Al['Descripcion'] ?> </div></div>
                <div id="tabs-22"> <div id="servicios" align="left"><div id="servicios"><ul><?php foreach ($row_S as $var) { ?>
                  <li><img src="<?php echo  base_url()."iconos/yes.png" ?>" alt=" Servicios <?php echo $row_Al['Nombre'] ." - ".$var['Servicio'] ;?>"><?php echo $var['Servicio'] ?></li>
                <?php } ?> </ul></div></div></div>
<div id="tabs-32"> 

<div class="fb-comments" data-href="<?php   echo $direccion; ?>" data-width="600" data-num-posts="10"></div>  </div> 
</div>
	</div>
	<!-- FICHAS DATOS -->
	<div id="ficha_datos">
		<div id="datos_alojar" class="border-Corner borde-gris " align="left">
			<h2>Datos Alojamientos</h2>
			<p><img src="<?php echo base_url() . "iconos/direction.png"; ?>" alt="direccion - <?php echo $row_Al['TipoAlojamiento']; ?>"> <b>Direccion:</b> <?php echo $row_Al['Direccion']; ?> - <?php echo $this->config->item('ciudadweb');?> - <?php echo $this->config->item('provinciaweb');?></p>
			<p><img src="<?php echo base_url() . "iconos/phone.png"; ?>" alt=""> <b>Teleono: </b><?php echo $row_Al['Telefono']; ?></p>
			<p><img src="<?php echo base_url() . "iconos/url2.png"; ?>" alt=""> <b>Website:</b> <a href="<?php echo base_url(). "website/contador/url/" .$row_Al['ID_Alojamiento']; ?>" "Vistie el Web del Alojamiento"><?php echo $row_Al['WebSite']; ?></a></p>
	
		</div>
<div class="border-Corner borde-gris" align="left">  <h2>Enviar una Consulta</h2>   <div id="form"  align="left" >
   <!-- <div id="loading"><img src="images/ajax-loader.gif" alt=""></div>-->
    <div><label for="name">Nombre y Apellido:</label><br/><input type="text" name="nombre" id="name" placeholder="Su nombre Aqui"/> </div>
    <div class="fechadiv"><label for="llegada">Llegada:</label><br/><input type="text" name="llegada" id="from" class="fechainput"/> </div>
     <div class="fechadiv"><label for="Salida">salida:</label><br/><input type="text" name="salido" id="to" class="fechainput"/> </div>
    <div><label for="email">Email:</label><br/><input type="text" name="email" placeholder="Su email Aqui" id="email"/> </div>
    <div><label for="telefono">Telefono:</label><br/><input type="text" name="telefono" id="telefono" placeholder="Su telefono Aqui"/> </div>
    <div><label for="consulta">Consulta:</label><br/><textarea name="consulta" id="consulta" cols="20" rows="6" id="consulta" placeholder="Agregue su consulta"></textarea> </div>
    <div align="right"><button type="submit" id="enviar">Enviar</button></div>
  </div>
  </div>
  <div class="border-Corner borde-gris" align="center"> 

  <img src="http://api.qrserver.com/v1/create-qr-code/?size=200x200&data=<?php echo $row_Al['WebSite'] ?>&bgcolor=DCEA8E" alt="QR:  <?php echo $row_Al['Nombre'] ?>"/>
</div>
	</div>
		</div>
	</div>
</div>