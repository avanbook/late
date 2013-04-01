<?php

class Tipoalojamiento extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/tipoalojamiento_model');
        $this->load->library('gf');
    }
    
    function index()
    {
        $this->lists();
    }


    function lists()
    {
        $data['tipoalojamiento_array'] = $this->tipoalojamiento_model->tipoalojamiento_list();
        $data['title'] = "Listado tipos alojamientos";
        $data['view'] = 'admin/tipoalojamiento/tipoalojamiento_list';
        $this->load->view('admin/templates/temp_menu', $data);
    }
    
    function form($id_tipoalojamiento = 0)
    {
        //Apuntadores, segun tipo formulario a mostrar (update or insert) cambian los valores, y para no repetir
        //todo de nuevo uso apuntadores.
        //Tabla paginas
        $data['ID_TipoAlojamiento'] = & $ID_TipoAlojamiento;
        $data['TipoAlojamiento'] = & $TipoAlojamiento;
        $data['TituloAlojamiento'] = & $TituloAlojamiento;
        $data['KeyAlojamiento']= & $KeyAlojamiento;
        $data['UrlAlojamiento'] = & $UrlAlojamiento;
        $data['DesAlojamiento'] = & $DesAlojamiento;
       
        $query_rows = $this->tipoalojamiento_model->tipoalojamiento_find($id_tipoalojamiento);
        $row = $query_rows->row();

        if ($query_rows->num_rows() == 0)
        {
            $data['title'] = 'Crear tipo alojamiento';
            $data['accion'] = 'crear';
        }
        else
        {
            $data['title'] = 'Editar tipo alojamiento';
            $data['accion'] = 'editar';

            //Tabla agendas
            $ID_TipoAlojamiento = $row->ID_TipoAlojamiento;
            $TipoAlojamiento = $row->TipoAlojamiento;
            $TituloAlojamiento = $row->TituloAlojamiento;
            $KeyAlojamiento = $row->KeyAlojamiento;
            $UrlAlojamiento = $row->UrlAlojamiento;
            $DesAlojamiento = $row->DesAlojamiento;
           
        }
        $data['view'] = "admin/tipoalojamiento/tipoalojamiento_form";
        $this->load->view('admin/templates/temp_menu', $data);
    }
    
    
    function save()
    {
        $ID_TipoAlojamiento = $this->input->post('ID_TipoAlojamiento');
        $TipoAlojamiento = $this->input->post('TipoAlojamiento');
        $KeyAlojamiento = $this->input->post('KeyAlojamiento');
        $DesAlojamiento = $this->input->post('DesAlojamiento');
        $UrlAlojamiento = $this->input->post('UrlAlojamiento');
        $TituloAlojamiento = $this->input->post('TituloAlojamiento');
        
        $accion = $this->input->post('accion');
        $tipoalojamiento_array = array(
            'TipoAlojamiento' => $TipoAlojamiento,
            'TituloAlojamiento' => $TituloAlojamiento,
            'KeyAlojamiento' => $KeyAlojamiento,
            'DesAlojamiento' => $DesAlojamiento,
            'UrlAlojamiento' => $UrlAlojamiento
        );

        if ($accion == 'crear')
        {
            $this->tipoalojamiento_model->insert('tipoalojamiento', $tipoalojamiento_array);
        }
        elseif ($accion == 'editar')
        {
            $this->tipoalojamiento_model->update($ID_TipoAlojamiento,$tipoalojamiento_array);
        }

        redirect(base_url() . 'admin/tipoalojamiento/lists/', 'refresh');
    }
    
    function delete($id_tipoalojamiento=0)
    {
        $this->tipoalojamiento_model->delete($id_tipoalojamiento);
        redirect(base_url() . 'admin/tipoalojamiento/lists/', 'refresh');
    }
}

?>

