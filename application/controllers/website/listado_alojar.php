
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listado_alojar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("website/dblistado");
	}

	public function alojar($tipo,$start)
	{
		//determinar tipo de alojamiento
	//tipo hoteles
		if ($tipo=="hoteles-san-rafael.html")
		{
			$tipos=1;
			$titulo_p="Hoteles";
			$tipos2=4;
			$name_tipo="Hotel";
			$descripcion="Hoteles en San Rafael Mendoza, Guia de hoteles y Alojamientos en San Rafael. Reserve Online!";
			$keywords="Hoteles, Hotel, hotels, otel,san, rafael,cuyo, sur mendoza";

		}
	//tipo cabanas
		if ($tipo=="cabanas-san-rafael.html") 
		{
			$tipos=2;
			$titulo_p="Cabañas";
			$tipos2="0";
			$name_tipo="Cabañas";
			$descripcion="Cabañas en San Rafael Mendoza, Guia de Cabañas y Alojamientos en San Rafael. Reserve Online!";
			$keywords="cabanas, cab, cabanias,bungalows,san,rafael,cuyo, sur mendoza";
		}
	//tipo chalet
		if ($tipo=="chalets-san-rafael.html") 
		{
			$tipos=3;
			$titulo_p="Chalets";
			$tipos2="0";
			$name_tipo="Chalet";
			$descripcion="Clalets y casas turisticas en San Rafael Mendoza, Guia de chalets, casas turisticas y Alojamientos en San Rafael. Reserve Online!";
			$keywords="chalet, casas, alquiler, turistico,san, rafael,cuyo, sur mendoza";
		}
		//tipo apart
		if ($tipo=="apartHoteles-san-rafael.html") 
		{
			$tipos=4;
			$titulo_p="Apart Hoteles";
			$tipos2="0";
			$name_tipo="Apart Hotel";
			$descripcion="Apart Hoteles en San Rafael Mendoza, Guia de Apat Hoteles y Alojamientos en San Rafael. Reserve Online!";
			$keywords="apart, alquiler, apartamentos, apartament,alojamiento,san,rafael,cuyo, sur mendoza";

		}
	//tipo Deptos
		if ($tipo=="departamentos-san-rafael.html") 
		{
			$tipos=4;
			$titulo_p="Departamentos";
			$tipos2="0";
			$name_tipo="Departamentos Turisticos";
			$descripcion="Departamentos Turisticos en San Rafael Mendoza, Guia de departamentos y Alojamientos en San Rafael. Reserve Online!";
			$keywords="deptos, alquiler, turistico, alojamiento,san, rafael,cuyo, sur mendoza";

		}
	//tipo Hostel
		if ($tipo=="Hostel-san-rafael.html") 
		{
			$tipos=6;
			$titulo_p="Hostels";
			$tipos2="0";
			$name_tipo="Hostel";
			$descripcion="Hostels en San Rafael Mendoza, Guia de Hostels y Alojamientos en San Rafael. Reserve Online!";
			$keywords="hostel, ostel, hostal,turistico, alojamiento,san, rafael,cuyo, sur mendoza";

		}
	//tipo Casas de Campo
		if ($tipo=="casas-campo-san-rafael.html") 
		{
			$tipos=7;
			$titulo_p="Casas de Campo";
			$tipos2="0";
			$name_tipo="Casa de Campo";
			$descripcion="Casas de Campo en San Rafael Mendoza, Guia de casas de Campo y Alojamientos en San Rafael. Reserve Online!";
			$keywords="casas, campo, agroturismo,turistico, alojamiento,san, rafael,cuyo, sur mendoza";

		}
	//tipo Complejos Turisticos
		if ($tipo=="complejos-turisticos-san-rafael.html") 
		{
			$tipos=8;
			$titulo_p="Complejos Turisticos";
			$tipos2="0";
			$name_tipo="Complejo turistico";
			$descripcion="Complejo turistico en San Rafael Mendoza, Guia de casas de Campo y Alojamientos en San Rafael. Reserve Online!";
			$keywords="complejos, turistico, agroturismo,turistico, alojamiento,san, rafael,cuyo, sur mendoza";

		}
		//tipo Complejos Turisticos
		if ($tipo=="campings-san-rafael.html") 
		{
			$tipos=9;
			$titulo_p="Campings";
			$tipos2="0";
			$name_tipo="Complejo turistico";
			$descripcion="Complejo turistico en San Rafael Mendoza, Guia de casas de Campo y Alojamientos en San Rafael. Reserve Online!";
			$keywords="casas, campo, agroturismo,turistico, alojamiento,san, rafael,cuyo, sur mendoza";

		}

		if ($tipo=="hosterias-san-rafael.html") 
		{
			$tipos=10;
			$titulo_p="Hosterias";
			$tipos2="0";
			$name_tipo="Hosteria";
			$descripcion="Hosterias en San Rafael Mendoza, Guia de Hosterias y Alojamientos en San Rafael. Reserve Online!";
			$keywords="hosterias, hostales, agroturismo,turistico, alojamiento,san, rafael,cuyo, sur mendoza";

		}
		if ($tipo=="agroturismo-san-rafael.html") 
		{
			$tipos=11;
			$titulo_p="Agroturismo";
			$tipos2="0";
			$name_tipo="Agroturismo";
			$descripcion="Agroturismo en San Rafael Mendoza, Guia de Agroturismo y Alojamientos en San Rafael. Reserve Online!";
			$keywords="agroturismo, hostales, agroturismo,turistico, alojamiento,san, rafael,cuyo, sur mendoza";

		}
	//AGENDA 
		$query4= "Select Date_format(Fecha,'%m/%d') as fechaA, ID_Agenda,Titulo, Descripcion  FROM agendas WHERE Fecha>(now())- interval 8 day ORDER BY  Fecha ASC ";
		$rowsA=$this->db->query($query4);
		$rows_A =$rowsA->result_array();
		$data['row_A']=$rows_A;
	
	 //	DESTACADOS DB
		$data['rowD']=$this->dblistado->desta($tipos,$tipos2,"0","4");

	 // DETERMINAR TIPOS DE ALJAMIENTOS
		$queryT="SELECT * FROM tipoalojamiento ORDER BY ID_TipoAlojamiento ASC ";
		$rowsT=$this->db->query($queryT);
    $rows_T =$rowsT->result_array();
    $data['row_T']=$rows_T;
	//ALOJAMIENTOS PAGINADOS

	//cargamos la librería

$this->load->library('pagination');

//Obtenemos resultados
$porpagina="100";
$totals=$this->dblistado->getCantidad($tipos,$tipos2);
$data['rowL']=$this->dblistado->listar($tipos,$tipos2,$start,$porpagina);

 //configuramos

$config['base_url'] = base_url()."alojamiento/".$tipo;
$config['total_rows'] = $totals;//obtenemos la cantidad de registros
$config['per_page'] = $porpagina;  //cantidad de registros por página
$config['num_links'] = '3'; //nro. de enlaces antes y después de la pagina actual
$config['prev_link'] = 'anterior'; //texto del enlace que nos lleva a la pagina ant.
$config['next_link'] = 'siguiente'; //texto del enlace que nos lleva a la sig. página
$config['uri_segment'] = '3';  //segmentos que va a tener nuestra URL
$config['first_link'] = '<<';  //texto del enlace que nos lleva a la primer página
$config['last_link'] = '>>';   //texto del enlace que nos lleva a la última página
$config['full_tag_open']="<div id='paginacion'>"; //div de apertura de paginacion
$config['full_tag_close']="</div>"; //div de cierre paginacion
$config['next_tag_open']="<div class='nextR'>";
$config['next_tag_close']="</div>";
$config['num_tag_open'] = '<div>';
$config['num_tag_close'] = '</div>';
$this->pagination->initialize($config);
$data['pag_links'] = $this->pagination->create_links();		
		
	 //javascript	
		$data['js']=array(
			"js/listado",
			"js/funcionesG"
				);
		$data['css']=array(
			//CSS globales
			"css/normalize.min",
			"css/estilos",
			"css/responsive",
			"js/scroll-infinite/css/jquery.ias",
			//TOOLTIP
			"css/tooltip"

		);
		//DATOS DE LA PAGINA
		$data['titulo_p']=$titulo_p;
		$data['name_T']=$name_tipo;
		$data['title']=$titulo_p." en San Rafael | San Rafael Late";
		$data['descripcion']=$descripcion;
		$data['keywords']=$keywords;


		$this->load->view('templates/website/template_listado', $data);
	}
} ?>

