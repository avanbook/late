

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <!-- TITUTLO-->
    <?php if (isset($title)) {?>
     <title><?php echo $title ; ?></title><?php } else {?>
     <title><?php echo $this->config->item('ciudadweb');; ?> <?php echo $this->config->item('provinciaweb');;?> | <?php echo $this->config->item('nameweb');; ?> </title>
     <?php } ?>

     <!-- descripcion -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($title)) {?> <meta name="description" content="<?php echo $descripcion ;?>"><?php } else {?>
    <meta name="description" content="Portal de Turismo de <?php echo $this->config->item('ciudadweb');; ?> <?php echo $this->config->item('provinciaweb');;?> - <?php echo $this->config->item('ciudadweb');; ?> late - ">
     <?php } ?>

     <!-- Keywords-->
      <?php if (isset($keywords)) {?> <meta name="Keywords" content="<?php echo $keywords ;?>"><?php } else {?>
    <meta name="Keywords" lang="es" content="san, Rafael, Turismo, <?php echo $this->config->item('provinciaweb');;?>, Etc"><?php } ?>
    <meta name="author" content="sanrafaellate.com">
    <meta name="copyright" content="© 2013 Franco Gasparini Sanrafaellate.com" />
    <meta name="contact" content="contacto@sanrafaellate.com" />
    <META name="y_key" content="4b95707884045d1e"/>
    <meta name="distribution" content="global" /> 
    <meta name="geo.region" content="AR-M" /> 
    <meta name="geo.placename" content="<?php echo $this->config->item('ciudadweb');; ?>, <?php echo $this->config->item('provinciaweb');;?>" /> 
    <meta name="geo.position" content="-34.613874;-68.339596" /> 
    <meta name="icbm" content="-34.613874, -68.339596" /> 
    <meta name="language" content="es" /> 
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="content-language" content="es" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <META name="robots" content="INDEX,FOLLOW">


<!-- JQUERY CSS 
-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" /> 
 <!-- offline -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery-ui-1.9.2.custom.css" />

<!--FIN JQUERY CSS -->

<!-- CSS --> 

<?php if (isset($css)): ?>
        <?php foreach ($css as $var): ?>
            <link type="text/css" href="<?php echo base_url() . $var ?>.css" rel="stylesheet" />
        <?php endforeach ?>
<?php endif; ?>



      <!-- Start VideoLightBox.com HEAD section -->
<link rel="stylesheet" href="<?php echo base_url() ?>js/engine/css/videolightbox.css" type="text/css" />
<style type="text/css">#videogallery a#videolb{display:none}</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/engine/css/overlay-minimal.css"/>


  </head>
  <body>
 
<div align="center" id="general"> 
<div class="nofixed" align="center"> <div id="menu2" align="center">
  <div align="center">
    <ul align="left">
     <img src="<?php echo base_url() ?>logo_nuevo2.png" width="270px" height="110px" alt="SAN RAFAEL LATE" Title="<?php echo $this->config->item('nameweb');; ?> - Portal de Turismo de <?php echo $this->config->item('ciudadweb');; ?>">
      <li class="menuss"><span class="title">Descubrenos</span><br><span class="info">Toda la informacion sobre <?php echo $this->config->item('ciudadweb');; ?></span>
<!-- ########## SUBMENU DESCUBRELA ######## -->
<div class="submenu" align="left">
<div><img src="<?php echo base_url() ?>imagenes/CTC.jpg" alt="" class=""></div>
<!-- SAN RAFAEL INFO -->
<div><ul class="">
 <li><h2><img src="<?php echo base_url() ?>iconos/info.jpg" class="ico" alt="Informacion <?php echo $this->config->item('ciudadweb');; ?>">Info <?php echo $this->config->item('ciudadweb');; ?></h2></li>
  <li><a href="http://sanrafaellate.com.ar/san-rafael/San-Rafael.html" title="Reseña Historia de San Rafael"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">Reseña Histotica</a></li>
  <li><a href="http://sanrafaellate.com.ar/san-rafael/san_rafael_demografia.html" tilte="informacion geografica de <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">Geografia</a></li>
  <li><a href="http://sanrafaellate.com.ar/san_rafael_mapa.html" title="Mapa Interactivo de <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">Mapa Interactivo Ciudad</a></li>
  <li><a href="http://sanrafaellate.com.ar/transporte/transportes.html" title="Guia de transporte Urbano de <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">Guia de Transporte</a></li>
  <li><a href="http://sanrafaellate.com.ar/san-rafael/datos-utiles.html" title="Datos Utiles de <?php echo $this->config->item('ciudadweb');; ?>" ><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">Telefonos de Utilidad</a></li>
 
</ul></div>

<!-- MULTIMEDIA -->
<div><ul class="">
 <li><h2><img src="<?php echo base_url() ?>iconos/multimedia.jpg" class="ico" alt="Multimedia <?php echo $this->config->item('ciudadweb');; ?>">Multimedia</h2></li>
  <li><a href="http://sanrafaellate.com.ar/multimedia/galeriaFotos.html" title=" Fotos de <?php echo $this->config->item('ciudadweb');; ?> ..1 fotos mas que Mil Palabras"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">Fotos</a></li>
  <li><a href="http://sanrafaellate.com.ar/multimedia/videos.html" title="Videos de <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">videos</a></li>
  <li><a href="http://sanrafaellate.com.ar/multimedia/mapas-san-rafael.html" title="Mapas de <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">Mapas</a></li>
  <li><a href="http://sanrafaellate.com.ar/multimedia/guias-san-rafael.html" title="Guias Turisticas Offline de <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">Guias Offline</a></li>
  <li><a href="http://sanrafaellate.com.ar/multimedia/apps.html" title="Baje todas las Apps para tu visita en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">App Smartphone</a></li>
 
</ul></div>
<div><h2><img src="<?php echo base_url() ?>iconos/video.jpg" class="ico" alt="video <?php echo $this->config->item('ciudadweb');; ?>">Video <?php echo $this->config->item('ciudadweb');; ?></h2><div id="videogallery"><a rel="#voverlay" href="http://www.youtube.com/v/FqfSgDLMdio?autoplay=1&rel=0&enablejsapi=1&playerapiid=ytplayer" title="<?php echo $this->config->item('ciudadweb');; ?> - <?php echo $this->config->item('provinciaweb');;?>"><img src="<?php echo base_url() ?>imagenes/1.png" alt="<?php echo $this->config->item('ciudadweb');; ?> - <?php echo $this->config->item('provinciaweb');;?>" /><span></span></a></div></div>
<!-- TIEMPO -->
<div align="center"><div class="container">
<div class="clock">
<div id="Date"></div>

<ul>
  <li id="hours"> </li>
    <li id="point">:</li>
    <li id="min"> </li>
    <li id="point">:</li>
    <li id="sec"> </li>
</ul>

</div>
</div><!-- www.TuTiempo.net - Ancho:145px - Alto:106px -->
<div id="TT_vimEk1111SKjlQIK7AVDDDjzD6uKLnK2rdkdEsyoKEj"><h2><a href="http://www.tutiempo.net">Tutiempo.net</a></h2><a href="http://www.tutiempo.net/tiempo/San_Rafael_Aerodrome/SAMR.htm">El tiempo en <?php echo $this->config->item('ciudadweb');; ?> Aerodrome</a></div>
<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_vimEk1111SKjlQIK7AVDDDjzD6uKLnK2rdkdEsyoKEj"></script></div>
<div id="block_inf" ><div class="contac">
  
  <h3><img src="<?php echo base_url() ?>iconos/facebook.jpg" class="ico" alt="siguenos en Facebook"><a href="http://facebook.com/turismosanrafael">Siguenos en Facebook</a></h3>
</div>
<div class="contac">
  
  <h3><img src="<?php echo base_url() ?>iconos/twitter.jpg" class="ico" alt=""><a href="http://twitter.com/sanrafaellate">Siguenos en Twitter</a></h3>
</div>
<div class="contac">
  
  <h3><img src="<?php echo base_url() ?>iconos/contacto2.jpg" class="ico" alt=""><a href="http://sanrafaellate.com/contacto.html">Contactanos</a></h3>
</div>
<div class="contac">
  
  <h3><img src="<?php echo base_url() ?>iconos/opine.jpg" class="ico" alt=""><a href="http://sanrafaellate.com/opina.php">Dejenos su Opinion</a></h3>
</div>
<div class="telefonos"><img src="<?php echo base_url() ?>iconos/telefonos.jpg" class="ico" alt="">0260 4540127 / 154595557 </div>
  </div>
</div>
<!-- ##########SUBMENU FIN DESCUBRELA ######## -->
      </li>
      <li class="menuss" id="preptuviaje"><span class="title">Prepara Tu Viaje</span><br><span class="info">Todo lo que necesitas para armar tu Viaje a <?php echo $this->config->item('ciudadweb');; ?> </span>
<!-- ##########SUBMENU PREPARA TU VIAJE ######## -->
<div class="submenu" align="left" >
<!-- ALOJAMIENTOS --> 
<div id="alojamiento" class="border_rigth">
 
 <h2><img src="<?php echo base_url() ?>iconos/aloja.jpg" class="ico" alt="alojamientos <?php echo $this->config->item('ciudadweb');; ?>">Alojamientos</h2>
<ul class="twocolum">
  <?php foreach ($alojarmenu as $var) {?>
  <li><a href="<?php echo base_url()."/alojamiento/". $var['UrlAlojamiento'] ?>" title="Listado de <?php echo $var['TituloAlojamiento']; ?> en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hoteles <?php echo $this->config->item('ciudadweb');; ?>"><?php echo $var['TituloAlojamiento'] ;?></a></li>
  
  <?php } ?>

 </ul> 
</div>
<!-- RESERVA ONLINE -->
<div id="buscador_a" class="border_rigth"><form action="http://sanrafaellate.com.ar/servicios/buscador-rutas.html" id="balojar"><div id="bAlojar">
 <h2>Buscador de Rutas</h2>
 <p>Enontra la mejor ruta a <?php echo $this->config->item('ciudadweb');; ?> desde tu casa.</p>
  <div class=""><label for="desde">Desde:</label><input type="text" value="Direccion, Ciudad, Provincia" id="desde"></div>
  <div class=""><label for="hsta">Hasta</label><input type="text" value="Mitre 200, <?php echo $this->config->item('ciudadweb');; ?>, <?php echo $this->config->item('provinciaweb');;?> " id="hasta"></div><div> <button>BUSCAR</button></div>
 
</div></form></div>  
<!-- SERVICIOS TURISTAS -->
<div class="border_rigth"><ul>
 <li><h2><img src="<?php echo base_url() ?>iconos/servicios.jpg" class="ico " alt="servicios turisticos">Servicios Turistas</h2></li>
  <li><a href="http://sanrafaellate.com.ar/gastronomia/donde-comer-san-rafael.html" title="Donde Comer en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="donde comer san rafael">Donde Comer?</a></li>
  <li><a href="http://sanrafaellate.com.ar/transporte/alquiler-autos-san-rafael.html" title="Alquiler de Autos en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta alquiler autos">Alquiler Autos</a></li>
  <li><a href="http://sanrafaellate.com.ar/excursiones/excursiones-san-rafael.html" title="Excursiones en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñetas excursiones">Excursiones</a></li>
  <li><a href="http://sanrafaellate.com.ar/servicios/agencias-de-viajes.html" title="Agencias de Viaje para organizar su viaje en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta agencias ">Agencias de Viaje</a></li>
  <li><a href="http://sanrafaellate.com.ar/servicios/buscador-rutas.html" title="Busque la mejor ruta de su ciudad a <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="">Buscador de Rutas</a></li>
</div>
<div class=""><ul>
 <li><h2><img src="<?php echo base_url() ?>iconos/no_te_pierdas.jpg" class="ico " alt="">No te PIerdas!</h2></li>
  <li><a href="http://sanrafaellate.com.ar/circuitos-turistico/canon-atuel.html" title="Conozca el imponente Cañon del Atuel"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta cañon del atuel <?php echo $this->config->item('ciudadweb');; ?>">Cañon del Atuel</a></li>
  <li><a href="http://sanrafaellate.com.ar/vinos/champanera-bianchi" title="Descubra La Champañera Bianchi"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta chanpañera <?php echo $this->config->item('ciudadweb');; ?>">Champañera Bianchi</a></li>
  <li><a href="http://sanrafaellate.com.ar/vinos/ruta-del-vino.html" title="Ruta del Vino de <?php echo $this->config->item('ciudadweb');; ?> , Bodegas , varietales,e tc"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta ruta del vino <?php echo $this->config->item('ciudadweb');; ?>">Ruta del Vino</a></li>
  <li><a href="http://sanrafaellate.com.ar/olivos/ruta-del-olivo.html" title="la Ruta del Olivo de <?php echo $this->config->item('ciudadweb');; ?>, Fabricas, Plantaciones, etc."><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta ruta del olivo <?php echo $this->config->item('ciudadweb');; ?>">Ruta del Olivos</a></li>
  <li><a href="http://sanrafaellate.com.ar/turismo-aventura/" title="Descubri la mejor Aventura en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta hostel <?php echo $this->config->item('ciudadweb');; ?>">Turismo Aventura</a></li>
 
</ul></div>
  </div>

<!-- ##########SUBMENU FIN PREPARA ######## -->
      </li>
      <li class="menuss"><span class="title">Circuitos</span><br><span class="info">Conoce los circuitos turistico de <?php echo $this->config->item('ciudadweb');; ?> </span>
<div class="submenu" align="center">
  <div id="circuitos">
    <div>
      <img src="<?php echo base_url() ?>imagenes/valleGrande.jpg" alt="Valle Grande <?php echo $this->config->item('ciudadweb');; ?>">
      <h3><a href="http://sanrafaellate.com.ar/circuitos-turisticos/valle-grande.html" title="Descubri Valle Grande <?php echo $this->config->item('ciudadweb');; ?>">Valle Grande</a></h3>
    </div>
    <div>
      <img src="<?php echo base_url() ?>imagenes/losReyunos.jpg" alt="Los Reyunos <?php echo $this->config->item('ciudadweb');; ?>">
      <h3><a href="http://sanrafaellate.com.ar/circuitos-turisticos/los-reyunos.html" title="Descubre el Imponente Lago Los Reyunos">Los Reyunos</a></h3>
    </div>
    <div>
      <img src="<?php echo base_url() ?>imagenes/nihuil1.jpg" alt="El Nihuil <?php echo $this->config->item('ciudadweb');; ?>">
      <h3><a href="http://sanrafaellate.com.ar/circuitos-turisticos/el-nihiul.html" title="Playa, arena , relax en el Nihiul .. Descubrelo">El Nihuil</a></h3>
    </div>
    <div>
      <img src="<?php echo base_url() ?>imagenes/villa25mayo.jpg" alt="villa 25 de mayo <?php echo $this->config->item('ciudadweb');; ?>">
      <h3><a href="http://sanrafaellate.com.ar/circuitos-turisticos/villa-25-mayo.html" title="Patrimonia de La humanidad , UNICO museo Viviente del Mundo">Villa 25 de Mayo</a></h3>
    </div>
    <div>
      <img src="<?php echo base_url() ?>imagenes/ciudad.jpg" alt="Ciudad de <?php echo $this->config->item('ciudadweb');; ?>">
      <h3><a href="http://sanrafaellate.com.ar/circuitos-turisticos/ciudad-san-rafael.html" title="descubre todo lo que podes hacer en la Ciudad">Ciudad y Vinos</a></h3>
    </div>
    <div>
      <img src="<?php echo base_url() ?>imagenes/sosneado.jpg" alt="El sosneado <?php echo $this->config->item('ciudadweb');; ?>">
      <h3><a href="http://sanrafaellate.com.ar/circuitos-turisticos/el-sosneado.html" title="El Sosneado Relax, tranquilidad y Aventura">El Sosneado</a></h3>
    </div>
      <div>
      <img src="<?php echo base_url() ?>imagenes/lasLenas.jpg" alt="las leñas <?php echo $this->config->item('ciudadweb');; ?>">
      <h3><a href="http://sanrafaellate.com.ar/circuitos-turisticos/las-lenas.html" title="Las Leñas, el mejor centro de Esqui Argentina.">Las Leñas</a></h3>
    </div>
      <div>
      <img src="<?php echo base_url() ?>imagenes/canonAtuel.jpg" alt="Cañon del atuel <?php echo $this->config->item('ciudadweb');; ?>">
      <h3><a href="http://sanrafaellate.com.ar/circuitos-turisticos/canon-atuel.html" title="El Imponente Cañon de Atuel">cañon del Atuel</a></h3>
    </div>
    
  </div>
</div>
      </li>
      <li class="menuss"><span class="title">Que Hacer?</span><br><span class="info">
      Turismo Aventura, Vino y Bodegas, Olivos..Disfruta! </span>

<div class="submenu" align="left">
<!-- turismo aventura--> 
<div id="tAventura" class="border_rigth">
 
 <h2><img src="<?php echo base_url() ?>iconos/taventura.jpg" class="ico" alt="alojamientos <?php echo $this->config->item('ciudadweb');; ?>">Turismo Aventura</h2>
 <ul class="twocolum">
  <li><a href="http://sanrafaellate.com.ar/turismo-aventura/rafting-san-rafael.html" title="Rafting en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta Rafting <?php echo $this->config->item('ciudadweb');; ?>">Rafting</a></li>
  <li><a href="http://sanrafaellate.com.ar/turismo-aventura/rapel-san-rafael.html" title="Rapel en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta Rapel <?php echo $this->config->item('ciudadweb');; ?>">Rapel</a></li>
  <li><a href="http://sanrafaellate.com.ar/turismo-aventura/kayak-san-rafael.html" title="kayak en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta kayak <?php echo $this->config->item('ciudadweb');; ?>"> Kayak</a></li>
  <li><a href="http://sanrafaellate.com.ar/turismo-aventura/doky-san-rafael.html" title="Doky en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta doky <?php echo $this->config->item('ciudadweb');; ?>">Doky</a></li>
  <li><a href="http://sanrafaellate.com.ar/turismo-aventura/cabalgata-san-rafael.html" title="Cabalgatas en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta cabalgatas <?php echo $this->config->item('ciudadweb');; ?>">Cabalgatas</a></li>
  <li><a href="http://sanrafaellate.com.ar/turismo-aventura/caminatas-san-rafael.html" title="Caminatas en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta caminatas <?php echo $this->config->item('ciudadweb');; ?>">Caminatas</a></li>
  <li><a href="http://sanrafaellate.com.ar/turismo-aventura/aventura4x4-san-rafael.html" title="Aventura 4x4 en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta aventura 4x4 <?php echo $this->config->item('ciudadweb');; ?>">Aventura 4x4</a></li>
  <li><a href="http://sanrafaellate.com.ar/turismo-aventura/parapente-san-rafael.html" title="Parapente en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta parapente <?php echo $this->config->item('ciudadweb');; ?>">Parapente</a></li>
   <li><a href="http://sanrafaellate.com.ar/turismo-aventura/catamaran-san-rafael.html" title="catamaran en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta catamaran <?php echo $this->config->item('ciudadweb');; ?>">Catamaran</a></li>
    <li><a href="http://sanrafaellate.com.ar/turismo-aventura/buceo-san-rafael.html" title="buceo en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta buceo San Rafae">Buceo</a></li>
     <li><a href="http://sanrafaellate.com.ar/turismo-aventura/pesca-san-rafael.html" title="pesca en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta pesca San Rafae">Pesca</a></li>
</ul> 
</div>

 
<!-- CAMINOS DEL VINO -->
<div class="border_rigth"><ul>
 <li><h2><img src="<?php echo base_url() ?>iconos/vinos.jpg" class="ico " alt="Caminos del Vino">Caminos Del Vino</h2></li>
  <li><a href="http://sanrafaellate.com.ar/vinos/bodegas-san-rafael.html" title="conozca Bodegas en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="bodegas San Rafel">Bodegas</a></li>
  <li><a href="http://sanrafaellate.com.ar/vinos/vinos-san-rafael.html" title="Toda la informacion sobre Vinos"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="Informacion de Vinos <?php echo $this->config->item('ciudadweb');; ?> ">Informacion de Vinos</a></li>
  <li><h2><img src="<?php echo base_url() ?>iconos/olivos.jpg" class="ico " alt="Caminos del Vino">Caminos Del Olivo</h2></li>
  <li><a href="http://sanrafaellate.com.ar/olivos/fabricas.html" title="fabricas de olivos en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="fabricas de Productos Olivos">Fabricas</a></li>
  <li><a href="http://sanrafaellate.com.ar/olivos/olivos.html" title="Olivos en <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="Informacion sobre olivos">Informacion sobre Olivos</a></li>
  
</ul></div>  
 <!-- ACTIVIDADES !-->
<div class=""><ul>
 <li><h2><img src="<?php echo base_url() ?>iconos/actividades.jpg" class="ico " alt="">Actividades</h2></li>
  <li><a href="http://sanrafaellate.com.ar/actividades/festivales-san-rafael.html" title="Festivales de <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta festivales <?php echo $this->config->item('ciudadweb');; ?>">Festivales</a></li>
  <li><a href="http://sanrafaellate.com.ar/actividades/museos-cultura-san-afael.html" title="Listado de Museos y casas de cultura <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta Museos y casas Cultura <?php echo $this->config->item('ciudadweb');; ?>">Museos y Cultura</a></li>
  <li><a href="http://sanrafaellate.com.ar/actividades/congresos-convenciones-san-rafael.html" title="Centro de Congresos y convenciones <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta congresos <?php echo $this->config->item('ciudadweb');; ?>">Congresos y convenciones</a></li>
  <li><a href="http://sanrafaellate.com.ar/actividades/regionales-san-rafael.html" title="Regionales y Artesanias <?php echo $this->config->item('ciudadweb');; ?>"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta regionales <?php echo $this->config->item('ciudadweb');; ?>">Regionales</a></li>
  <li><a href="http://sanrafaellate.com.ar/actividades/deportes-san rafael.html"><img src="<?php echo base_url() ?>vineta2.jpg" class="ico" alt="viñeta depostes <?php echo $this->config->item('ciudadweb');; ?>">Deportes</a></li>
 
</ul></div>
<div id="agenda">
<h2><img src="<?php echo base_url() ?>iconos/agenda.jpg" class="ico " alt="">Agenda Eventos</h2>

<?php
$i=0;
 foreach ($row_A as $var): 
$i++;
if($i<=3) { ?>
  <div>
    <div class="fecha_ag">
      <p><?php echo $var['fechaA']; ?></p>
    </div>
    <div class="info_ag">
      <h3><?php echo $var['Titulo']; ?> </h3>
      <p><?php echo substr(strip_tags($var['Descripcion']),0, 50) ?></p>
    </div>
</div>
  <?php } 
  endforeach ?>  
</div>

  
  <!-- FIN AGENDA-->
      </li>
    
    </ul>
  </div>
 </div>
 </div> 
 <!-- FIN MENU-->