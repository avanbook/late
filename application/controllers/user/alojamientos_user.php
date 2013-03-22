<?php

class Alojamientos_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();


        $this->load->library('gf');
        $this->load->model('user/alojamientos_clientes_user_model');
        $this->load->model('user/alojamientos_user_model');
        $this->load->model('user/categorias_user_model');
        $this->load->model('user/ciudades_user_model');
        $this->load->model('user/localidades_user_model');
        $this->load->model('user/paises_user_model');
        $this->load->model('user/provincias_user_model');
        $this->load->model('user/tipoalojamiento_user_model');
        $this->load->model('user/servicios_user_model');
        $this->load->model('user/alojamientos_servicios_user_model');
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

        $pestania = $this->input->get('pestania');
        if ($pestania == "")
            $pestania = "info";

        $data['p_a']             = $pestania;
        $data['title']           = "Mostrar Alojamiento";
        $data['ID_Alojamiento']  = $ID_Alojamiento;
        $data['menu_activo']     = 'info';
        $data['info_array']      = $this->alojamientos_user_model->info_gral_view($ID_Alojamiento);
        //Servicios
        $servicios_total         = $this->servicios_user_model->find_all();
        $servicios_alojamiento   = $this->alojamientos_servicios_user_model->find_id_alojamiento_inner_servicios($ID_Alojamiento);
        //Meto una combinacion de esos array en un array nuevo
        //La funcion esta al final de este archivo php
        $data['servicios_array'] = $this->alojamientos_servicios_array_final($servicios_total, $servicios_alojamiento);
        $data['fotos_array']               = $this->alojamientos_user_model->fotos_list($ID_Alojamiento);
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
        $data['ID_Alojamiento']     = & $ID_Alojamiento;
        $data['ID_Categorias']      = & $ID_Categorias;
        $data['ID_TipoAlojamiento'] = & $ID_TipoAlojamiento;
        //Configuraciones agregadas al ultimo para posicionamiento
        $data['Url']                = & $Url;
        $data['DestaOrden']         = & $DestaOrden;
        $data['DestaHome']          = & $DestaHome;
        $data['Basico']             = & $Basico;

        //Tabla informaciongeneral
        $data['ID_InformacionGeneral'] = & $ID_InformacionGeneral;
        $data['Nombre']                = & $Nombre;
        $data['Direccion']             = & $Direccion;
        $data['Telefono']              = & $Telefono;
        $data['Email']                 = & $Email;
        $data['WebSite']               = & $WebSite;
        $data['Responsable']           = & $Responsable;
        $data['Descripcion']           = & $Descripcion;
        $data['Coordenadas']           = & $Coordenadas;
        $data['Pais']                  = & $Pais;
        $data['Provincia']             = & $Provincia;
        $data['Ciudad']                = & $Ciudad;
        $data['Localidad']             = & $Localidad;
        $data['Restaurant']            = & $Restaurant;
        $data['InformacionRestaurant'] = & $InformacionRestaurant;
        $data['Checkin']               = & $Checkin;
        $data['Checkout']              = & $Checkout;
        $data['PoliticaCancelacion']   = & $PoliticaCancelacion;
        $data['DiasPolitica']          = & $DiasPolitica;
        $data['TipoAcuerdo']           = & $TipoAcuerdo;

        //Tabla metodosdepago
        $data['ID_MP']             = & $ID_MP;
        $data['Senia']             = & $Senia;
        $data['GarantiaDebooking'] = & $GarantiaDebooking;
        $data['Anticipado']        = & $Anticipado;
        $data['ComisionSenia']     = & $ComisionSenia;
        $data['AceptaSenia']       = & $AceptaSenia;
        $data['Comision']          = & $Comision;
        $data['MejorPrecio']       = & $MejorPrecio;

        $query_rows = $this->alojamientos_user_model->alojamiento_find($id_alojamiento);
        $row        = $query_rows->row();

        if ($query_rows->num_rows() == 0)
        {
            $data['title']  = 'Crear Alojamiento';
            $data['accion'] = 'crear';
        }
        else
        {
            $data['title']      = 'Editar Alojamiento';
            $data['accion']     = 'editar';
            //Tabla alojamientos
            $ID_Alojamiento     = $row->ID_Alojamiento;
            $ID_Categorias      = $row->ID_Categorias;
            $ID_TipoAlojamiento = $row->ID_TipoAlojamiento;
            //Configuracion
            $Url                = $row->Url;
            $DestaOrden         = $row->DestaOrden;
            $DestaHome          = $row->DestaHome;
            $TipoAcuerdo        = $row->TipoAcuerdo;
            $Basico             = $row->Basico;

            //Tabla informaciongeneral
            $ID_InformacionGeneral = $row->ID_InformacionGeneral;
            $Nombre                = $row->Nombre;
            $Direccion             = $row->Direccion;
            $Telefono              = $row->Telefono;
            $Email                 = $row->Email;
            $WebSite               = $row->WebSite;
            $Responsable           = $row->Responsable;
            $Descripcion           = $row->Descripcion;
            $Coordenadas           = $row->Coordenadas;
            $Pais                  = $row->Pais;
            $Provincia             = $row->Provincia;
            $Ciudad                = $row->Ciudad;
            $Localidad             = $row->Localidad;
            $Restaurant            = $row->Restaurant;
            $InformacionRestaurant = $row->InformacionRestaurant;
            $Checkin               = $row->Checkin;
            $Checkout              = $row->Checkout;
            $PoliticaCancelacion   = $row->PoliticaCancelacion;
            $DiasPolitica          = $row->DiasPolitica;

            //Tabla metodosdepago
            $ID_MP             = $row->ID_MP;
            $Senia             = $row->Senia;
            $GarantiaDebooking = $row->GarantiaDebooking;
            $Anticipado        = $row->Anticipado;
            $ComisionSenia     = $row->ComisionSenia;
            $AceptaSenia       = $row->AceptaSenia;
            $Comision          = $row->Comision;
            $MejorPrecio       = $row->MejorPrecio;
        }

        //Array segun lugar para mostrar
        $data['paises_array']           = $this->paises_user_model->find_all();
        $data['provincias_array']       = $this->provincias_user_model->find_from_pais($Pais);
        $data['ciudades_array']         = $this->ciudades_user_model->find_form_pais_provincia($Pais, $Provincia);
        $data['localidades_array']      = $this->localidades_user_model->find_from_pais_provincia_ciudad($Pais, $Provincia, $Ciudad);
        $data['tipoalojamientos_array'] = $this->tipoalojamiento_user_model->find_all();
        $data['categorias_array']       = $this->categorias_user_model->find_all();
        $data['js']                     = array('js/user/alojamientos_form');
        $data['view'] = 'user/alojamientos_user/alojamientos_form_user';
        $this->load->view('user/templates_user/temp_menu_user', $data);
    }
    
        //Guardar Formulario alojamiento
    function save()
    {
        $accion = $this->input->post('accion');
        $ID_Alojamiento = $this->input->post('ID_Alojamiento');
        $ID_InformacionGeneral = $this->input->post('ID_InformacionGeneral');
        $ID_MP = $this->input->post('ID_MP');
        
        $data_info_gral = array(
            'Nombre' => $this->input->post('Nombre'),
            'Direccion' => $this->input->post('Direccion'),
            'Telefono' => $this->input->post('Telefono'),
            'Email' => $this->input->post('Email'),
            'WebSite' => $this->input->post('WebSite'),
            'Responsable' => $this->input->post('Responsable'),
            'Descripcion' => $this->input->post('Descripcion'),
            'Coordenadas' => $this->input->post('Coordenadas'),
            'Localidad' => $this->input->post('Localidad'),
            'Ciudad' => $this->input->post('Ciudad'),
            'Provincia' => $this->input->post('Provincia'),
            'Pais' => $this->input->post('Pais'),
            'Restaurant' => $this->input->post('Restaurant'),
            'InformacionRestaurant' => $this->input->post('InformacionRestaurant'),
            'InformacionHabitaciones' => $this->input->post('InformacionHabitaciones'),
            'Checkin' => $this->input->post('Checkin'),
            'Checkout' => $this->input->post('Checkout'),
            'PoliticaCancelacion' => $this->input->post('PoliticaCancelacion'),
            'DiasPolitica' => $this->input->post('DiasPolitica')
        );

        $data_metodo_pago = array(
            'Senia' => $this->input->post('Senia'),
            'GarantiaDebooking' => $this->input->post('GarantiaDebooking'),
            'Anticipado' => $this->input->post('Anticipado'),
            'ComisionSenia' => $this->input->post('ComisionSenia'),
            'AceptaSenia' => $this->input->post('AceptaSenia'),
            'Comision' => $this->input->post('Comision'),
            'MejorPrecio' => $this->input->post('MejorPrecio')
        );

        if ($accion == 'crear')
        {
            $id_data_info_gral = $this->alojamientos_model->insert('informaciongeneral', $data_info_gral);
            $id_data_metodo_pago = $this->alojamientos_model->insert('metododepago', $data_metodo_pago);

            $data_alojamientos = array(
                'ID_InformacionGeneral' => $id_data_info_gral,
                'ID_Imagenes' => 0, //no se sabe
                'ID_TipoAlojamiento' => $this->input->post('ID_TipoAlojamiento'),
                'ID_Categorias' => $this->input->post('ID_Categorias'),
                'Url' => $this->input->post('Url'),
                'TipoAcurdo' => $this->input->post('TipoAcuerdo'),
                'DestaOrden' => $this->input->post('DestaOrden'),
                'DestaHome' => $this->input->post('DestaHome'),
                'ID_MP' => $id_data_metodo_pago,
                'ID_Modulos' => '0', //no se sabe
                'Votos' => '0', //no se sabe
                'Activo' => 'A', //no se sabe
                'Basico' => $this->input->post('Basico')
            );

            $id_data_alojamientos = $this->alojamientos_model->insert('alojamientos', $data_alojamientos);
            redirect('user/alojamientos_user/' . $id_data_alojamientos . "/?pestania=info", 'refresh');
        }
        elseif ($accion == 'editar')
        {
            $data_alojamientos = array(
                'ID_InformacionGeneral' => $this->input->post('ID_InformacionGeneral'),
                'ID_Imagenes' => 0, //no se sabe
                'ID_TipoAlojamiento' => $this->input->post('ID_TipoAlojamiento'),
                'ID_Categorias' => $this->input->post('ID_Categorias'),
                'Url' => $this->input->post('Url'),
                'TipoAcuerdo' => $this->input->post('TipoAcuerdo'),
                'DestaOrden' => $this->input->post('DestaOrden'),
                'DestaHome' => $this->input->post('DestaHome'),
                'ID_MP' => $this->input->post('ID_MP'),
                'ID_Modulos' => '0', //no se sabe
                'Votos' => '0', //no se sabe
                'Activo' => 'A', //no se sabe
                'Basico' => $this->input->post('Basico')
            );

            $this->alojamientos_model->update($ID_MP, $data_metodo_pago, 'ID_MP', 'metododepago');
            $this->alojamientos_model->update($ID_InformacionGeneral, $data_info_gral, 'ID_InformacionGeneral', 'informaciongeneral');
            $this->alojamientos_model->update($ID_Alojamiento, $data_alojamientos, 'ID_Alojamiento', 'alojamientos');

            redirect('admin/alojamientos/form_view/' . $ID_Alojamiento . "/?pestania=info", 'refresh');
        }
    }
    
    //------------------------------------------- Funciones que solo se usan en este controlador-----------------------------------
    private function alojamientos_servicios_array_final($servicios_total = array(), $servicios_alojamiento = array())
    {

        //Inicializo la variable que sera a donde se metan todos los array
        $a[] = "";
        //La variable que contrendra cuales son los check chekeados
        $checked = "";
        //Un contador para pugar el primer elemento cosa que el array tenga el primer elemento
        //para luego pugar los demas
        $count = 0;
        foreach ($servicios_total as $var0)
        {
            $count++;
            foreach ($servicios_alojamiento as $var1)
            {
                if ($var0['Servicio'] != $var1['Servicio'])
                {
                    $checked = "";
                }
                else
                {
                    $checked = "checked='checked'";
                    break; //En caso de ser iguales se hace un brack para que no se sobrescriba la variable
                }
            }

            $b = array(
                'Servicio' => $var0['Servicio'],
                'ID_Servicio' => $var0['ID_Servicio'],
                'checked' => $checked
            );

            if ($count == 1)
            //Pongo el primer elemento del array
                $a[0] = $b;
            else
            //Se puja el array
                array_push($a, $b);
        }

        return $a;
    }


}

?>
