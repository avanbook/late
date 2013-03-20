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

}

?>
