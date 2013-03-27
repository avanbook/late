<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model("website/dbgeneral");
	}

	public function paginas($a,$b)
	{


		//obtendo datos de la pagina	
  $result_P = $this->dbgeneral->paginas($a,$b);
		//obtengo paginas internas relacionadas
  $idPagina=  $result_P['ID_Pagina'];
  $intena_P = $this->dbgeneral->paginasint($idPagina);
  $data['row_P'] =$result_P;
  $data['int_P'] =$intena_P;
//OBTENGO LAS FOTOS DE LA PAGINA
  $foto_P = $this->dbgeneral->fotosp($idPagina);
  $data['foto_P'] =$foto_P;

//DATA ENVIAR
		$data['body']="website/body_paginas";
		$data['title']= $result_P['MetaTitulo']." | ".$a." | San Rafael Mendoza | San Rafael Late ";
		$data['descripcion']=$result_P['MetaDescripcion'];
		$data['keywords']=$result_P['Keywords'];
	//AGENDA 
		$query4= "Select Date_format(Fecha,'%m/%d') as fechaA, ID_Agenda,Titulo, Descripcion  FROM agendas WHERE Fecha>(now())- interval 8 day ORDER BY  Fecha ASC ";
		$rowsA=$this->db->query($query4);
		$rows_A =$rowsA->result_array();
		$data['row_A']=$rows_A;
	 //javascript	
		$data['js']=array(
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

	$this->load->view('templates/website/template_gral', $data);

	}


	public function prueba2()
	{
			echo " alojamiento";
	}
}