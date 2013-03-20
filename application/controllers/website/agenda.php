<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detalle extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
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
//
		$url="alojamiento/".$a."/".$b."/".$c;	
		$query4= "Select *  FROM alojamientos WHERE Url='$url'";
		
		$rowsA=$this->db->query($query4);
		$rows_A =$rowsA->row();
		$data['row_A']=$rows_A;
		$data['body']="website/body_home";
		$data['title']="Turismo San Rafael Mendoza | San Rafael Late | !";
		$data['descripcion']="HOLA LOCOS";
	


			$this->load->view('website/alojar', $data);
	}




}

/* End of file home.php */
/* Location: ./application/controllers/home.php */