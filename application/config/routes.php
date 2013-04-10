<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "principal";
$route['404_override'] = '';
$route['user/loguin']='user/alojamientos_user/form_view_user';
//AGENDA
$route['agenda/([^/]+)-([^/]+)'] ='website/agenda/detalle/$2';

//ALOJAMIENTOS
$route['alojamiento/([^/]+)/([^/]+)/([^/]+)'] ='website/detalle/alojar/$1/$2/$3';
$route['alojamiento/([^/]+)'] ='website/listado_alojar/alojar/$1/0';
$route['alojamiento/alojamientos.html'] ='website/general/prueba2/';
$route['alojamiento/([^/]+)/([^/]+)'] ='website/listado_alojar/alojar/$1/$2';

//PAGINAS
$route['([^/]+)/([^/]+).html'] ='website/general/paginas/$1/$2';
/* End of file routes.php */
/* Location: ./application/config/routes.php */

//EMPRESAS
$route['servicios/([^/]+)/([^/]+)'] ='website/empresas/listarempresas/$1/$2';
$route['servicios/([^/]+)'] ='website/empresas/infoempresas/$1';

/*require_once( BASEPATH .'database/DB'. EXT );
$db =& DB();
$query = $db->get ("tipoempresa ");
$result = $query->result();
foreach( $result as $row )
{
    $route[ 'empresas/'.$row->TipoEmpresa.'/([^/]+)' ] = 'website/empresas/'.$row->TipoEmpresa.'/$1';
}
*/