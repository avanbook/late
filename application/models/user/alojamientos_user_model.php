<?php

class Alojamientos_user_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function info_gral_view($id_alojamiento)
    {
        $query = "
        select 
        ID_Alojamiento, 
        Nombre,
        Descripcion,
        Coordenadas,
        Direccion,
        Telefono,
        Responsable,
        Email,
        Checkin,
        Checkout,
        Name,
        SUName
        from alojamientos
        inner join 
        informaciongeneral 
        on  
        alojamientos.ID_InformacionGeneral = informaciongeneral.ID_InformacionGeneral
        inner join 
        ciudades 
        on 
        informaciongeneral.Ciudad = ciudades.Location 
        inner join 
        provincias 
        on 
        informaciongeneral.Provincia = provincias.SUcode 
        where 
        ID_Alojamiento=" . $this->db->escape_str($id_alojamiento);

        $rows = $this->db->query($query);
        $rows = $rows->row();
        return $rows;
    }

    function info_servicios($id_alojamiento)
    {
        //select servicios.ID_Servicio,Servicio from alojamientos_servicios inner join servicios on alojamientos_servicios.ID_Servicio=servicios.ID_Servicio
        $query = sprintf("select servicios.ID_Servicio,Servicio from alojamientos_servicios inner join servicios on alojamientos_servicios.ID_Servicio=servicios.ID_Servicio where ID_Alojamiento=%s", $id_alojamiento);
        $rows  = $this->db->query($query);
        $rows  = $rows->result_array();
        return $rows;
    }

    function info_publicidad($id_alojamiento)
    {
        $query = sprintf("
                            select
                            p.ID_Publicidad,
                            TipoPublicidad,
                            p.Precio,
                            FechaPublicidad,
                            Activo,
                            DetallePublicidad,
                            PERIOD_DIFF(EXTRACT(YEAR_MONTH FROM NOW()), EXTRACT(YEAR_MONTH FROM FechaPublicidad)) AS Meses
                            from 
                            alojamientos_publicidad as ap
                            inner join
                            publicidad as p
                            on 
                            p.ID_Publicidad = ap.ID_Publicidad
                            inner join
                            tipopublicidad as tp
                            on
                            p.ID_TipoPublicidad = tp.ID_TipoPublicidad            
                            where ID_Alojamiento=%s order by activo desc", $id_alojamiento);

        $rows = $this->db->query($query);
        $rows = $rows->result_array();
        return $rows;
    }

    function fotos_list($id_alojamiento)
    {
        $query = sprintf("select * from alojamientos_imagenes where ID_Alojamiento=%s", $id_alojamiento);
        $rows  = $this->db->query($query);
        $rows  = $rows->result_array();
        return $rows;
    }

    function clientes_list($id_alojamiento)
    {
        $query = sprintf(
                "select 
                    * 
                    from 
                    alojamientos_clientes 
                    inner join 
                    clientes 
                    on 
                    alojamientos_clientes.ID_Cliente=clientes.ID_Cliente 
                    where 
                    ID_Alojamiento=%s", $id_alojamiento);

        $rows = $this->db->query($query);
        $rows = $rows->result_array();
        return $rows;
    }

    function habitaciones_list($id_alojamiento)
    {
        $query = sprintf(
                "select 
                ID_Alojamiento,habitaciones.ID_Habitacion,NombreHab,DescripcionHab,Desayuno,PaxMax,PaxAdulto,PaxNinio,TipoHabitacion
                from habitaciones 
                inner join tipo_habitaciones 
                on
                tipo_habitaciones.ID_TipoHabitacion = habitaciones.ID_TipoHabitacion 
                inner join alojamientos_habitaciones
                on
                alojamientos_habitaciones.ID_Habitacion = habitaciones.ID_Habitacion
                inner join tipo_desayunos
                on
                tipo_desayunos.ID_Desayuno = habitaciones.ID_Desayuno
                where ID_Alojamiento=%s", $id_alojamiento
        );

        $rows = $this->db->query($query);
        $rows = $rows->result_array();
        return $rows;
    }

}

?>