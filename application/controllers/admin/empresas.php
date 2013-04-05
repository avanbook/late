<?php

class Empresas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/empresas_model');
        $this->load->library('gf');
        $this->load->helper('file');
        $this->load->config('avanbook_config');
    }

    function index()
    {
        $this->lists();
    }

    function lists()
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $data['tipoempresa_array'] = $this->empresas_model->tipo_empresas_list();
        //$data['empresas_array'] = $this->empresas_model->empresas_list();
        $data['title']             = "Listado Empresas";
        $data['js']                = array('js/admin/empresas_list');
        $data['view'] = 'admin/empresas/empresas_list';
        $this->load->view('admin/templates/temp_menu', $data);
    }

    function view($id_empresa = 0)
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $query_rows = $this->empresas_model->paginas_find($id_empresa);
        $row        = $query_rows->row();
        if ($query_rows->num_rows() == 0)
        {
            echo "esta empresa no existe";
        }
        else
        {
            $data['ID_Pagina']       = $row->ID_Pagina;
            $data['MetaTitulo']      = $row->MetaTitulo;
            $data['MetaDescripcion'] = $row->MetaDescripcion;
            $data['Keywords']        = $row->Keywords;
            $data['TituloContenido'] = $row->TituloContenido;
            $data['Contenido']       = $row->Contenido;
            $data['Subtitulo']       = $row->Subtitulo;
            $data['Url']             = $row->Url;
            $data['Basico']          = $row->Basico;
            $data['title']           = $row->TituloContenido;
            $data['keywords']        = $row->Keywords;
            $data['description']     = $row->MetaDescripcion;

            $data['js'] = array('js/admin/paginas_lists');
            $data['view'] = 'admin/paginas/paginas_view';
            $this->load->view('admin/templates/temp_menu', $data);
        }
    }

    function form($id_empresa = 0)
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        //Apuntadores, segun tipo formulario a mostrar (update or insert) cambian los valores, y para no repetir
        //todo de nuevo uso apuntadores.
        //Tabla paginas
        $data['ID_Empresa']        = & $ID_Empresa;
        $data['Empresa']           = & $Empresa;
        $data['Direccion']         = & $Direccion;
        $data['Telefono']          = & $Telefono;
        $data['Mail']              = & $Mail;
        $data['Facebook']          = & $Facebook;
        $data['Twitter']           = & $Twitter;
        $data['Pinterest']         = & $Pinterest;
        $data['Gplus']             = & $Gplus;
        $data['Web']               = & $Web;
        $data['Url']               = & $Url;
        $data['Basico']            = & $Basico;
        $data['Descripcion']       = & $Descripcion;
        $data['DescripcionDeta']   = & $DescripcionDeta;
        $data['ID_TipoEmpresa']    = & $ID_TipoEmpresa;
        $data['ID_SubtipoEmpresa'] = & $ID_SubtipoEmpresa;

        $query_rows = $this->empresas_model->empresas_find($id_empresa);
        $row        = $query_rows->row();

        if ($query_rows->num_rows() == 0)
        {
            $data['title']  = 'Crear Empresa';
            $data['accion'] = 'crear';
        }
        else
        {
            $data['title']  = 'Editar Empresa';
            $data['accion'] = 'editar';

            //Tabla paginas
            $ID_Empresa                  = $row->ID_Empresa;
            $Empresa                     = $row->Empresa;
            $Url                         = $row->Url;
            $Direccion                   = $row->Direccion;
            $Telefono                    = $row->Telefono;
            $Mail                        = $row->Mail;
            $Facebook                    = $row->Facebook;
            $Twitter                     = $row->Twitter;
            $Pinterest                   = $row->Pinterest;
            $Gplus                       = $row->Gplus;
            $Web                         = $row->Web;
            $Descripcion                 = $row->Descripcion;
            $DescripcionDeta             = $row->DescripcionDeta;
            $ID_TipoEmpresa              = $row->ID_TipoEmpresa;
            $ID_SubtipoEmpresa           = $row->ID_SubtipoEmpresa;
            $Basico                      = $row->Basico;
        }
        $data['tipo_empresas_array'] = $this->empresas_model->tipo_empresas_list();
        if ($ID_TipoEmpresa == "")
        {
            $ID_TipoEmpresa                = 0;
        }
        $data['suptipo_empresa_array'] = $this->empresas_model->subtipo_empresas_list_by_tipo($ID_TipoEmpresa);
        $data['js']                    = array('js/ckeditor/ckeditor', 'js/admin/empresas_form');
        $data['view'] = "admin/empresas/empresas_form";
        $this->load->view('admin/templates/temp_menu', $data);
    }

    function save()
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $ID_Empresa        = $this->input->post('ID_Empresa');
        $Empresa           = $this->input->post('Empresa');
        $Url               = $this->input->post('Url');
        $Direccion         = $this->input->post('Direccion');
        $Telefono          = $this->input->post('Telefono');
        $Mail              = $this->input->post('Mail');
        $Facebook          = $this->input->post('Facebook');
        $Twitter           = $this->input->post('Twitter');
        $Pinterest         = $this->input->post('Pinterest');
        $Gplus             = $this->input->post('Gplus');
        $Web               = $this->input->post('Web');
        $Descripcion       = $this->input->post('Descripcion');
        $DescripcionDeta   = $this->input->post('DescripcionDeta');
        $ID_TipoEmpresa    = $this->input->post('ID_TipoEmpresa');
        $ID_SubtipoEmpresa = $this->input->post('ID_SubtipoEmpresa');
        $Basico            = $this->input->post('Basico');

        $accion = $this->input->post('accion');


        $paginas_array = array(
            'Empresa'           => $Empresa,
            'Url'               => $Url,
            'Direccion'         => $Direccion,
            'Telefono'          => $Telefono,
            'Mail'              => $Mail,
            'Facebook'          => $Facebook,
            'Twitter'           => $Facebook,
            'Pinterest'         => $Pinterest,
            'Gplus'             => $Gplus,
            'Web'               => $Web,
            'Descripcion'       => $Descripcion,
            'DescripcionDeta'   => $DescripcionDeta,
            'ID_TipoEmpresa'    => $ID_TipoEmpresa,
            'ID_SubtipoEmpresa' => $ID_SubtipoEmpresa,
            'Basico'            => $Basico
        );

        if ($accion == 'crear')
        {
            $this->empresas_model->insert('empresas', $paginas_array);
        }
        elseif ($accion == 'editar')
        {
            $this->empresas_model->update($ID_Empresa, $paginas_array, 'ID_Empresa', 'empresas');
        }

        redirect(base_url() . 'admin/empresas/lists/', 'refresh');
    }

    function empresas_publicidad_form($id_empresa)
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $empresa_row = $this->empresas_model->empresas_find($id_empresa);
        $row         = $empresa_row->row();

        if (!$empresa_row->num_rows() == 0)
        {
            $data['empresa_nombre']   = $row->Empresa;
            $data['publicidad_array'] = $this->empresas_model->publicidad_select();
            $data['ID_Empresa']       = $row->ID_Empresa;
            $data['js']               = array('js/admin/alojamientos_publicidad_form');
            $data['title'] = 'Nueva publicidad';
            $data['css']   = array('css/admin/alojamientos_list');
            $data['view'] = 'admin/empresas/empresas_publicidad_form';
            $this->load->view('admin/templates/temp_menu', $data);
        }
        else
        {
            echo "No existe el alojamiento indicado (Mejorar menaje de error";
        }
    }

    function empresas_publicidad_list($id_empresa)
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $data['id_empresa']       = $id_empresa;
        $data['publicidad_array'] = $this->empresas_model->info_publicidad($id_empresa);
        $data['js']               = array('js/admin/empresas_publicidad_list');
        $data['title'] = 'Nueva publicidad';
        $data['view']  = 'admin/empresas/empresas_publicidad_list';
        $this->load->view('admin/templates/temp_menu', $data);
    }

    //Guardar Servicios
    function empresas_publicidad_save()
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $id_empresa = $this->input->post('ID_Empresa');
        $post_array = $this->input->post();


        //Saco el ultimo elemento del array post que es el id_alojamiento;
        array_pop($post_array);

        //Busco el precio en tipopublicidad
        foreach ($post_array as $var)
        {
            $precio = $this->empresas_model->find_precio_tipo_publicidad($var['ID_TipoPublicidad']);

            $array_publicidad = array(
                'ID_TipoPublicidad' => $var,
                'Precio'            => $precio
            );

            $id_publicidad = $this->empresas_model->insert('publicidad', $array_publicidad);

            $array_empresas_publicidad = array(
                'ID_Empresa'    => $id_empresa,
                'ID_Publicidad' => $id_publicidad
            );

            $this->empresas_model->insert('empresas_publicidad', $array_empresas_publicidad);
        }

        redirect('admin/empresas/empresas_publicidad_list/' . $id_empresa . "");
    }

    function empresas_imagenes_list($id_empresa)
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        //$data['js'] = array('js/empresas_publicidad_list');
        $row                             = $this->empresas_model->empresas_find($id_empresa);
        $row                             = $row->row();
        $data['Empresa']                 = $row->Empresa;
        $data['ID_Empresa']              = $row->ID_Empresa;
        $data['empresas_imagenes_array'] = $this->empresas_model->empresas_imagenes_list($id_empresa);
        $data['title']                   = 'Empresa Imagenes';
        $data['js']                      = array('js/admin/empresas_imagenes_list', 'js/blockui-master/jquery.blockUI');
        $data['view'] = 'admin/empresas/empresas_imagenes_list';
        $this->load->view('admin/templates/temp_menu', $data);
    }

    //Funciones para guardar muchas imagenes
    function empresas_imagenes_save()
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $id_empresa    = $this->input->post('ID_Empresa');
        $tipo          = $this->input->post('tipo');
        $nombre_imagen = $this->input->post('foto_numero');


        $cantidad_fotos = 0;

        if (isset($_FILES['filesToUpload']['tmp_name']))
        {
            if (count($_FILES['filesToUpload']['tmp_name']))
            {

                //Borrar las imagenes de la tabla imagenes_alojamientos ya que se agregaran varias mas
                if ($tipo == 'foto_comun')
                    $this->empresas_model->empresas_images_delete_nombre_imagen($id_empresa, $nombre_imagen);
                elseif ($tipo == 'muchas_fotos')
                    $this->empresas_model->empresas_images_delete($id_empresa);

                $i = 0;
                foreach ($_FILES['filesToUpload']['tmp_name'] as $file)
                {

                    $i++;

                    $cantidad_fotos = $this->empresas_model->empresas_images_count($id_empresa);
                    $cantidad_fotos = $cantidad_fotos + 1;

                    if ($cantidad_fotos <= 12)
                    {

                        if ($tipo == 'muchas_fotos')
                        {
                            $image_name   = $this->config->item('upload_path_emp') . $id_empresa . "_" . $i . ".jpg";
                            $thumb_grande = $this->config->item('upload_path_emp_thumb') . $id_empresa . "_" . $i . "_p" . ".jpg";
                            $thumb_chica  = $this->config->item('upload_path_emp_thumb') . $id_empresa . "_" . $i . ".jpg";
                        }
                        elseif ($tipo == 'foto_comun')
                        {
                            $image_name   = $this->config->item('upload_path_emp') . $id_empresa . "_" . $nombre_imagen . ".jpg";
                            $thumb_grande = $this->config->item('upload_path_emp_thumb') . $id_empresa . "_" . $nombre_imagen . "_p" . ".jpg";
                            $thumb_chica  = $this->config->item('upload_path_emp_thumb') . $id_empresa . "_" . $nombre_imagen . ".jpg";
                        }
                        elseif ($tipo == 'foto_mas')
                        {
                            $image_name   = $this->config->item('upload_path_emp') . $id_empresa . "_" . $cantidad_fotos . ".jpg";
                            $thumb_grande = $this->config->item('upload_path_emp_thumb') . $id_empresa . "_" . $cantidad_fotos . "_p" . ".jpg";
                            $thumb_chica  = $this->config->item('upload_path_emp_thumb') . $id_empresa . "_" . $cantidad_fotos . ".jpg";
                        }


                        $image      = ImageCreateFromJPEG($file);
                        //ancho
                        $width      = imagesx($image);
                        //alto imagen
                        $height     = imagesy($image);
                        //nuevo ancho imagen
                        $new_width  = 550;
                        //calcular alto 
                        $new_height = ($new_width * $height) / $width;
                        //crear imagen nueva
                        $thumb      = imagecreatetruecolor($new_width, $new_height);
                        //redimensiono
                        imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                        //Guardo imagen final 
                        ImageJPEG($thumb, $image_name);

                        //Thumb
                        //nuevo ancho imagen
                        $new_width  = 100;
                        //calcular alto 
                        $new_height = ($new_width * $height) / $width;
                        //crear imagen nueva
                        $thumb      = imagecreatetruecolor($new_width, $new_height);
                        //redimensiono
                        imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                        //Guardo imagen final 
                        ImageJPEG($thumb, $thumb_chica);

                        if ($i == 1 or $cantidad_fotos == 1 or $nombre_imagen == '1')
                        {
                            //Thumprincipal
                            //nuevo ancho imagen
                            $new_height = 270;
                            //calcular alto 
                            $new_width  = ($new_height * $width) / $height;
                            //crear imagen nueva
                            $thumb      = imagecreatetruecolor($new_width, $new_height);
                            //redimensiono
                            imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                            //Guardo imagen final 
                            ImageJPEG($thumb, $thumb_grande);
                        }

                        //Guardar imagenes en la table alojamientos_imagenes
                        if ($tipo == 'foto_comun')
                            $this->empresas_model->empresas_images_save($id_empresa, $nombre_imagen);
                        elseif ($tipo == 'muchas_fotos')
                            $this->empresas_model->empresas_images_save($id_empresa, $i);
                        elseif ($tipo == 'foto_mas')
                            $this->empresas_model->empresas_images_save($id_empresa, $cantidad_fotos);
                    }
                }
            }
        }
        redirect(base_url() . 'admin/empresas/empresas_imagenes_list/' . $id_empresa, 'refresh');
    }

    function empresas_imagenes_delete()
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $id_empresa    = $this->input->get('ID_Empresa');
        $ImagenEmpresa = $this->input->get('ImagenEmpresa');
        $this->empresas_model->delete_empresas_imagenesemp($id_empresa, $ImagenEmpresa);
        redirect(base_url() . 'admin/empresas/empresas_imagenes_list/' . $id_empresa, 'refresh');
    }

    function empresas_publicidad_estado($id_empresa)
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $id_publicidad = $this->input->get('ID_Publicidad');
        $this->empresas_model->update_estado_publicidad($id_publicidad);
        redirect(base_url() . 'admin/empresas/empresas_publicidad_list/' . $id_empresa . "");
    }

    function empresas_publicidad_renovar($id_empresa)
    {
        $a = $this->session->userdata('logged');
        $this->gf->comp_sesion_admin($a, base_url());

        $id_publicidad    = $this->input->get('ID_Publicidad');
        $row              = $this->empresas_model->find_precio_publicidad($id_publicidad);
        $this->empresas_model->update_estado_publicidad_simple($id_publicidad, 0);
        $array_publicidad = array(
            'ID_TipoPublicidad' => $row->ID_TipoPublicidad,
            'Precio'            => $row->Precio
        );

        $id_publicidad             = $this->empresas_model->insert('publicidad', $array_publicidad);
        $array_empresas_publicidad = array(
            'ID_Empresa'    => $id_empresa,
            'ID_Publicidad' => $id_publicidad
        );

        $this->empresas_model->insert('empresas_publicidad', $array_empresas_publicidad);

        redirect(base_url() . 'admin/empresas/empresas_publicidad_list/' . $id_empresa . "");
    }

}

?>
