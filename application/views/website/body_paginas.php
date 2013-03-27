<div id="contenedor2">

 <div id="cont_full" align="left">
   <!-- BEGUIN CONT FULL-->
       <div id="toplinks" align="left"><b>Estas en: </b><a href="http://sanrafaellate.com" title="Ir a home">Home</a> >> <a href="<?php echo base_url().'/alojamientos/alojamientos.html';?>" title="Alojamientos en San Rafael"></a> <?php echo $row_P['MetaTitulo']; ?> en San rafael</div>
<div class="cont_margin" >
<h1><?php echo $row_P['TituloContenido'] ;?></h1>
<div id="imagenPag">
	<?php foreach ($foto_P as $var ) { ?>
<img src="<?php echo base_url() . "upload/paginas/thumb/" . $var['ID_Pagina'] . "_".$var['ImagenPagNombre']."_p.jpg" ?>" alt="">
<?php } ?>  </div>
<div id="contenido">
<?php echo $row_P['Contenido'] ;?>

</div>
<div id="adsC"> <?php foreach ($int_P as $var ) { ?>
	<?php echo $var['TituloContenido']; ?>
<?php } ?> </div>
</div>

</div>

</div>