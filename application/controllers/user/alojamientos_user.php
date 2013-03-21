<?php

class Alojamientos_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
        
        $this->load->library('gf');
        $this->load->model('user/alojamientos_clientes_user_model');
        $this->load->model('user/alojamientos_user_model');
        $this->load->config('avanbook_config');
    }
    
    function index()
    {
       $this->form_view_user(); 
    }
    
    //Mostrar Alojamiento
    function form_view_user()
    {
        $a              = $this->session->userdata('logged_in');
        $this->gf->comp_sesion($a, base_url());
        //Buscar el alojamiento que viene de la sesion del cliente con el cliente_id
        $ID_Alojamiento = $this->alojamientos_clientes_user_model->cliente_alojamiento($a['ID_Cliente']);

        $pestania=$this->input->get('pestania');
        if($pestania=="")
            $pestania="info";
        
        $data['p_a']                       = $pestania;
        $data['title']                     = "Mostrar Alojamiento";
        $data['ID_Alojamiento']            = $ID_Alojamiento;
        $data['menu_activo']               = 'info';
        $data['info_array']                = $this->alojamientos_user_model->info_gral_view($ID_Alojamiento);
        $data['servicios_array']           = $this->alojamientos_user_model->info_servicios($ID_Alojamiento);
        $data['publicidad_array']          = $this->alojamientos_user_model->info_publicidad($ID_Alojamiento);
        $data['fotos_array']               = $this->alojamientos_user_model->fotos_list($ID_Alojamiento);
        $data['clientes_array']            = $this->alojamientos_user_model->clientes_list($ID_Alojamiento);
        $data['habitaciones_array']        = $this->alojamientos_user_model->habitaciones_list($ID_Alojamiento);
        $data['alojamientos_menu_sidebar'] = $this->config->item('alojamientos_menu_sidebar');
        $data['js']                        = array(
            'js/fancybox/jquery.mousewheel-3.0.4.pack',
            'js/fancybox/jquery.fancybox-1.3.4.pack',
            'js/blockui-master/jquery.blockUI',
            'js/admin/alojamientos_view'
        );
        $data['css'] = array('css/admin/alojamientos_list', 'js/fancybox/jquery.fancybox-1.3.4');
        $data['view'] = 'user/alojamientos_user/alojamientos_user_view';
        $this->load->view('user/templates_user/temp_menu_user', $data);
    }
    
    //Formulario Alojamiento
    function form_user($id_alojamiento = 0)
    {
        //Apuntadores, segun tipo formulario a mostrar (update or insert) cambian los valores, y para no repetir
        //todo de nuevo uso apuntadores.
        //Tabla alojamientos
        $data['ID_Alojamiento'] = & $ID_Alojamiento;
        $data['ID_Categorias'] = & $ID_Categorias;
        $data['ID_TipoAlojamiento'] = & $ID_TipoAlojamiento;
        //Configuraciones agregadas al ultimo para posicionamiento
        $data['Url'] = & $Url;
        $data['DestaOrden'] = & $DestaOrden;
        $data['DestaHome'] = & $DestaHome;
        $data['Basico']= & $Basico;

        //Tabla informaciongeneral
        $data['ID_InformacionGeneral'] = & $ID_InformacionGeneral;
        $data['Nombre'] = & $Nombre;
        $data['Direccion'] = & $Direccion;
        $data['Telefono'] = & $Telefono;
        $data['Email'] = &  $Email;
        $data['WebSite'] = & $WebSite;
        $data['Responsable'] = & $Responsable;
        $data['Descripcion'] = & $Descripcion;
        $data['Coordenadas'] = & $Coordenadas;
        $data['Pais'] = & $Pais;
        $data['Provincia'] = & $Provincia;
        $data['Ciudad'] = & $Ciudad;
        $data['Localidad'] = & $Localidad;
        $data['Restaurant'] = & $Restaurant;
        $data['InformacionRestaurant'] = & $InformacionRestaurant;
        $data['Checkin'] = & $Checkin;
        $data['Checkout'] = & $Checkout;
        $data['PoliticaCancelacion'] = & $PoliticaCancelacion;
        $data['DiasPolitica'] = & $DiasPolitica;
        $data['TipoAcuerdo'] = & $TipoAcuerdo;

        //Tabla metodosdepago
        $data['ID_MP'] = & $ID_MP;
        $data['Senia'] = & $Senia;
        $data['GarantiaDebooking'] = & $GarantiaDebooking;
        $data['Anticipado'] = & $Anticipado;
        $data['ComisionSenia'] = & $ComisionSenia;
        $data['AceptaSenia'] = & $AceptaSenia;
        $data['Comision'] = & $Comision;
        $data['MejorPrecio'] = & $MejorPrecio;

        $query_rows = $this->alojamientos_user_model->alojamiento_find($id_alojamiento);
        $row = $query_rows->row();

        if ($query_rows->num_rows() == 0)
        {
            $data['title'] = 'Crear Alojamiento';
            $data['accion'] = 'crear';
        }
        else
        {
            $data['title'] = 'Editar Alojamiento';
            $data['accion'] = 'editar';
            //Tabla alojamientos
            $ID_Alojamiento = $row->ID_Alojamiento;
            $ID_Categorias = $row->ID_Categorias;
            $ID_TipoAlojamiento = $row->ID_TipoAlojamiento;
            //Configuracion
            $Url = $row->Url;
            $DestaOrden = $row->DestaOrden;
            $DestaHome = $row->DestaHome;
            $TipoAcuerdo = $row->TipoAcuerdo;
            $Basico = $row->Basico;

            //Tabla informaciongeneral
            $ID_InformacionGeneral = $row->ID_InformacionGeneral;
            $Nombre = $row->Nombre;
            $Direccion = $row->Direccion;
            $Telefono = $row->Telefono;
            $Email = $row->Email;
            $WebSite = $row->WebSite;
            $Responsable = $row->Responsable;
            $Descripcion = $row->Descripcion;
            $Coordenadas = $row->Coordenadas;
            $Pais = $row->Pais;
            $Provincia = $row->Provincia;
            $Ciudad = $row->Ciudad;
            $Localidad = $row->Localidad;
            $Restaurant = $row->Restaurant;
            $InformacionRestaurant = $row->InformacionRestaurant;
            $Checkin = $row->Checkin;
            $Checkout = $row->Checkout;
            $PoliticaCancelacion = $row->PoliticaCancelacion;
            $DiasPolitica = $row->DiasPolitica;

            //Tabla metodosdepago
            $ID_MP = $row->ID_MP;
            $Senia = $row->Senia;
            $GarantiaDebooking = $row->GarantiaDebooking;
            $Anticipado = $row->Anticipado;
            $ComisionSenia = $row->ComisionSenia;
            $AceptaSenia = $row->AceptaSenia;
            $Comision = $row->Comision;
            $MejorPrecio = $row->MejorPrecio;
        }

        //Array segun lugar para mostrar
        $data['paises_array'] = $this->alojamientos_user_model->paises();
        $data['provincias_array'] = $this->alojamientos_model->provincias($Pais);
        $data['ciudades_array'] = $this->alojamientos_model->ciudades($Pais, $Provincia);
        $data['localidades_array'] = $this->alojamientos_model->localidades($Pais, $Provincia, $Ciudad);
        $data['tipoalojamientos_array'] = $this->alojamientos_model->tipo_alojamientos();
        $data['categorias_array'] = $this->alojamientos_model->categorias();
        $data['paises_array'] = $this->alojamientos_model->paises();
        $data['js'] = array('js/admin/alojamientos_form');
        $data['css'] = array('css/admin/alojamientos_list');
        $data['view'] = 'user/alojamientos_user/alojamientos_form_user';
        $this->load->view('user/templates_user/temp_menu_user', $data);
    }

}

?>
