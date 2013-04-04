<?php 
$a = $this->session->userdata('logged');
$usuario=$a['Usuario']; 
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">sanrafaelLate</a>
            <div class="nav-collapse collapse">
                <div class="btn-group pull-right">
                    <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i><?php echo $usuario ?></a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url() ?>admin/login/salir"><i class="icon-ban-circle"></i>Salir</a></li>
                    </ul>
                </div>
                <ul class="nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reservas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>admin/reservas/">Buscar Reservas</a></li>
                            <li><a href="<?php echo base_url() ?>admin/reservas/form">Reservar</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url() ?>admin/alojamientos/">Alojamientos</a></li>
                    <li><a href="<?php echo base_url() ?>admin/paginas/">Páginas</a></li>
                    <li><a href="<?php echo base_url() ?>admin/empresas/">Empresas</a></li>
                    <li><a href="<?php echo base_url() ?>admin/agendas/">Agenda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuraciones <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() ?>admin/tipoalojamiento/">Tipo Alojamiento</a></li>
                            <li><a href="<?php echo base_url() ?>admin/categorias/">Categorías</a></li>
                            <li><a href="<?php echo base_url() ?>admin/servicios/">Servicios</a></li>
                            <li><a href="<?php echo base_url() ?>admin/tipopagina/">Tipo Página</a></li>
                            <li><a href="<?php echo base_url() ?>admin/tipoempresa/">Tipo Empresa</a></li>
                            <li><a href="<?php echo base_url() ?>admin/subtipoempresa/">Subtipo Empresa</a></li>
                            <li><a href="<?php echo base_url() ?>admin/tipopublicidad/">Tipo Publicidad</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>