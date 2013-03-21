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

//AGENDA 
		$query4= "Select Date_format(Fecha,'%m/%d') as fechaA, ID_Agenda,Titulo, Descripcion  FROM agendas WHERE Fecha>(now())- interval 8 day ORDER BY  Fecha ASC ";
		$rowsA=$this->db->query($query4);
		$rows_A =$rowsA->result_array();
		$data['row_A']=$rows_A;
// DESCRIPCION Y KEYS
		if ($result_Al['TipoAlojamiento'] =="Hotel") {
		$descripcion=$result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." - ". substr($result_Al['Descripcion'],0,200).".. - San Rafael Late - www.sanrafaellate.com" ;
		$keywords="";
		$tipoalojamientos="hoteles";
}
else {

$descripcion="";
		$keywords="";
		$tipoalojamientos="hoteles";

}
		$data['body']="website/body_fichas";
		$data['title']= $result_Al['TipoAlojamiento']." ".$result_Al['Nombre']." | San Rafael Mendoza | San Rafael Late ";
		$data['descripcion']=$descripcion;
		$data['keywords']=$keywords;
		$data['tipoalojamientos']=$tipoalojamientos;
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