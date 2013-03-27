<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detalle extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model("website/dbfichas");
	}

	public function detalle($id)
	{
//
		$ids=$id;	
//AGENDA 
		$query4= "Select *  FROM agendas WHERE ID_Agenda='$ids'";
		$rowsA=$this->db->query($query4);
		$rows_A =$rowsA->row();
		$data['row_A']=$rows_A;
		$data['body']="website/body_home";
		$data['title']="Turismo San Rafael Mendoza | San Rafael Late | !";
		$data['descripcion']="HOLA LOCOS";
		$this->load->view('website/agenda', $data);


		
	}
public function alojar($a,$b,$c)
	{
// DATOS ALOJAMIENTO
		$url="alojamiento/".$a."/".$b."/".$c;	
		$result_Al = $this->dbfichas->fichaal($url);
		$data['row_Al']=$result_Al ;
// FOTOS ALOKAR 
		$id_Al=$result_Al['ID_Alojamiento'];
		$data['row_FA']=$this->dbfichas->fotosal($id_Al);
// SERVICIOS ALOJAR
		$data['row_S']=$this->dbfichas->servicios($id_Al);

//AGENDA 
		$query4= "Select Date_format(Fecha,'%m/%d') as fechaA, ID_Agenda,Titulo, Descripcion  FROM agendas WHERE Fecha>(now())- interval 8 day ORDER BY  Fecha ASC ";
		$rowsA=$this->db->query($query4);
		$rows_A =$rowsA->result_array();
		$data['row_A']=$rows_A;
// DESCRIPCION KEYS Y URLS DE LOS ALOJAMIENTOS
if ($result_Al['TipoAlojamiento'] =="Hotel") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="hotel, otel, hoteles, hostel, san , rafael, turismo";
		$tipoalojamientos="hoteles";
		$urlback="alojamientos/hoteles-san-rafael.html";
		
}

if ($result_Al['TipoAlojamiento'] =="Cabañas") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="cabanas, cabanias, cab, san , rafael, turismo, alquiler, ";
		$tipoalojamientos="Cabañas";
		$urlback="alojamientos/cabanas-san-rafael.html";
		
}
if ($result_Al['TipoAlojamiento'] =="Chalet") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="cabanas,chalet,  cabanias, cab, san , rafael, turismo, alquiler ";
		$tipoalojamientos="Chalet";
		$urlback="alojamientos/chalets-san-rafael.html";
		
}
if ($result_Al['TipoAlojamiento'] =="Casas de Campo") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="casas,campo, cab, san , rafael, turismo,turistico, alquiler ";
		$tipoalojamientos="Casas de Campo";
		$urlback="alojamientos/casas-campo-san-rafael.html";

}
if ($result_Al['TipoAlojamiento'] =="Apart Hotel") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="apart, apartements, deptos, san, rafael, turistico,mendoza, sur, alquiler ";
		$tipoalojamientos="Apart Hoteles";
		$urlback="alojamientos/apartHoteles-san-rafael.html";

}
if ($result_Al['TipoAlojamiento'] =="Departamentos") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="apart, apartements, deptos, san, rafael, turistico,mendoza, sur, alquiler ";
		$tipoalojamientos="Apart Hoteles";
		$urlback="alojamientos/departamentos-san-rafael.html";

}
if ($result_Al['TipoAlojamiento'] =="Hostel") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="hostel, hostels, ostel, san, rafael, turistico,mendoza, sur, alquiler ";
		$tipoalojamientos="Hostel";
		$urlback="alojamientos/hostel-san-rafael.html";

}
if ($result_Al['TipoAlojamiento'] =="Complejos Turisticos") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="complejos, Turistico, san, rafael, turistico,mendoza, sur, alquiler ";
		$tipoalojamientos="Complejos Turisticos";
		$urlback="alojamientos/complejos-turisticos-san-rafael.html";

}
if ($result_Al['TipoAlojamiento'] =="Campings") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="campings san, rafael, turistico,mendoza, sur, alquiler ";
		$tipoalojamientos="Campings";
		$urlback="alojamientos/campings-san-rafael.html";

}
if ($result_Al['TipoAlojamiento'] =="Hosterias") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="Hosterias, osterias, san, rafael, turistico,mendoza, sur, alquiler ";
		$tipoalojamientos="Hosteria";
		$urlback="alojamientos/hoterias-san-rafael.html";

}
if ($result_Al['TipoAlojamiento'] =="Agroturismo") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="Agro,turismo, ecologico,sustentable, san, rafael, turistico,mendoza, sur, alquiler ";
		$tipoalojamientos="agroturismo";
		$urlback="alojamientos/agorturismo-san-rafael.html";

}
//DATA ENVIAR
		$data['body']="website/body_fichas";
		$data['title']= $result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." | San Rafael Mendoza | San Rafael Late ";
		$data['descripcion']=$descripcion;
		$data['keywords']=$keywords;
		$data['tipoalojamientos']=$tipoalojamientos;
		$data['urlback']=$urlback;
	 //javascript	
		$data['js']=array(
			"js/fichas",
						//JS GENERAL
			"js/funcionesG",
			//GALERIA FICHA
			"js/AD-Gallery/jquery.ad-gallery.min",
			"js/galeriaFicha"				);
		$data['css']=array(
			//CSS globales
			"css/normalize.min",
			"css/estilos",
			"css/responsive",
			//TOOLTIP
			"css/tooltip",
			//GALERIA FICHA
			"js/AD-Gallery/jquery.ad-gallery"


		);


		$this->load->view('templates/website/template_gral', $data);	}



}

/* End of file home.php */
/* Location: ./application/controllers/home.php */