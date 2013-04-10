
<!-- BEGUIN FOTTER-->
<div id="footer2" align="center">
  
<div class="fotterTop" ><div align="right">
  
<div class="" align="right">
<div class="follows" title=>Siguenos en:</div>
<div class="icofacebook imagico" title="Siguenos en Facebbok"  rel="facebook.com/turismosanrafael"></div><div title="Siguenos en Twitter" class="icotwitter imagico" rel="twitter.com/sanrafaellate"></div><div class="icogoogle imagico" title="Siguenos en Google Plus"  rel="gplus.to/sanrafaellate"></div><div class="icopinterest imagico" title="Siguenos en Pinterest" ></div>
</div></div>
</div>


 <div class="footerBottom" align="left">
<div class="imag"><img src="<?php echo base_url() ?>logo_nuevo.jpg" alt=""></div>
<div>
  <ul>
    <h3>No te Pierdas..</h3>
    <li><a href="#">Caminos del Vino</a></li>
    <li><a href="#">Cañon del Atuel</a></li>
    <li><a href="#">Los Reyunos</a></li>
    <li><a href="#"></a></li>
  </ul>
</div>
<div>
  <ul>
    <h3>Prepara tu Viaje</h3>
    <li><a href="#">Alojamientos</a></li>
    <li><a href="#">Excursiones</a></li>
    <li><a href="#">Agencias de Viaje</a></li>
    <li><a href="#">Calcula tu Ruta</a></li>
  </ul>
</div>
<div>
  <ul>
    <h3>Circuitos</h3>
    <li><a href="#">Valle Grande</a></li>
    <li><a href="#">Los Reyunos</a></li>
    <li><a href="#">Las Leñas</a></li>
    <li><a href="#">25 de Mayo</a></li>
    <li><a href="#">Ciudad</a></li>
  </ul>
</div>
<div>
  <ul>
    <h3>Servicios Turisticos</h3>
    <li><a href="#">Valle Grande</a></li>
    <li><a href="#">Los Reyunos</a></li>
    <li><a href="#">Las Leñas</a></li>
    <li><a href="#">25 de Mayo</a></li>
    <li><a href="#">Ciudad</a></li>
  </ul>
</div>
<div>Diseñado por :</div>
<div>

</div> 

 </div>
 <div class="footerBottom2" align="center">
 <div>
  <span class="title">© 2013 <?php echo $this->config->item('paginaweb');; ?> </span>
<span><a href="http://sanrafaellate.com.ar/staff.html">Staff</a></span>
<span><a href="http://sanrafaellate.com.ar/publicidad.html">Publicidad</a></span>
<span><a href="http://sanrafaellate.com.ar/opina.php">¿Sugerencias?</a></span>
<span><a href="http://sanrafaellate.com.ar/mapa-sitio.html">Mapa Sitio</a></span>
<span><a href="http://sanrafaellate.com/contacto.html">Contacto</a></span>
</div>
</div>
 <!-- FIN FOOTER-->


</div>

<!-- =================| SCRIPTS |============== -->
<!-- jQuery JS -->
<script src="<?php echo base_url() ?>js/jquery-ui/js/jquery-1.8.3.js"></script>
  <script src="<?php echo base_url() ?>js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>js/scroll-infinite/jquery.infinitescroll.js"></script>
<script type="text/javascript">


 //<![CDATA[

  // Inicialización de variables.
    var map      = null;
    var coord    = String($("input#cordeMap").val());
    var coord2 =coord.split(',');
    function initialize() {  
  var map;  
  

  var myOptions = {
      zoom: 13,
  
    center: new google.maps.LatLng(coord2[0],coord2[1]),
      mapTypeId: google.maps.MapTypeId.HYBRID,
      mapTypeControl: true,
         mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
    },
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL
    },
      scaleControl: true
    
    }
    var map = new google.maps.Map(document.getElementById("map"),
                                  myOptions);
                  
  
  var image = 'http://sanrafaelhoteles.com/imagenes/hotel.png';
  var myLatLng = new google.maps.LatLng(coord2[0],coord2[1]);
  var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });
  
  }

$(document).ready(function() {
  $( '#dir_' ).infinitescroll({
 
  navSelector  : "div#paginacion",            
                 // selector for the paged navigation (it will be hidden)
 
  nextSelector : ".nextR a:first",    
                 // selector for the NEXT link (to page 2)
 
  itemSelector :  ".items" ,          
                 // selector for all items you'll retrieve
 
  debug        : true,                        
                 // enable debug messaging ( to console.log )
 
  loadingImg   : "../../../js/infinite-scroll/images/loading.gif",          
                 // loading image.
                 // default: "http://www.infinite-scroll.com/loading.gif"
 
  loadingText  : "Cargando Alojamientos...",      
                 // text accompanying loading image
                 // default: "<em>Loading the next set of posts...</em>"
 
  animate      : true
                 // boolean, if the page will do an animated scroll when new content loads
                 // default: false
 

    });
});
</script>
   <?php if (isset($js)): ?>
        <?php foreach ($js as $var): ?>
            <script type="text/javascript" src="<?php echo base_url() . $var ?>.js"></script>
        <?php endforeach; ?>
    <?php endif; ?>






<!-- VIDEO LIGHTBOX 
      <script src="<?php echo base_url() ?>js/engine/js/jquery.tools.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url() ?>js/engine/js/swfobject.js" type="text/javascript"></script>-->
      <!-- make all links with the 'rel' attribute open overlays 
      <script src="<?php echo base_url() ?>js/engine/js/videolightbox.js" type="text/javascript"></script>
      <script type="text/javascript">

      function onYouTubePlayerReady(playerId) { 
      ytplayer = document.getElementById("video_overlay"); 
      ytplayer.setVolume(100); 
      } 

</script> -->


<!-- CARUSEL -->



</body>
</html>
