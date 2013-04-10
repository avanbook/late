<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model("website/dbgeneral");

	}

	public function paginas($a,$b)
	{

		// SABER SI EXISTE EL TIPO PAGINA 
		$exiteTP =  $this->dbgeneral->tipop($a);
if (count($exiteTP)>0){

 //obtendo datos de la pagina	
  $result_P = $this->dbgeneral->paginas($a,$b);
 // SABER SI EXISTE  PAGINA 
  if (count($result_P)>0){
  $idPagina=  $result_P['ID_Pagina']; // ID PAGINA PPAL
		//obtengo paginas internas relacionadas
  if($result_P['ID_PaginaPrincipal']!=0){
  		$idPaginap=  $result_P['ID_PaginaPrincipal'];
  		$intena_Pa=$this->dbgeneral->paginasint($idPaginap,$idPagina);
} else {$idPaginap=$idPagina;}
//OBTENGO LAS FOTOS DE LA PAGINA
  $foto_Pa = $this->dbgeneral->fotosp($idPagina);


//MAS PAGINAS SEGUN TIPOPAGINA
  $tipopaginas=$result_P['ID_TipoPagina'];
  $mastiposa = $this->dbgeneral->mastipos($tipopaginas,$idPaginap);

//determinar nombre tipo top pagina
   if($result_P['ID_PaginaPrincipal']!=0){
   	$nametop = $this->dbgeneral->tipopp($idPaginap);
   	$data['nametop'] =$nametop["TituloContenido"];
   }

// PASO DATOS A VIEW
	 //VARIABLES
		$data['row_P'] =$result_P; //datos de la pagina a mostrar
		if($result_P['ID_PaginaPrincipal']!=0){
		$data['int_P'] =$intena_Pa["rows"];//datos paginas internas
 	    $data['int_PN'] =$intena_Pa["totals"];//total resultados internos
 	} else { $data['int_PN']="0";}
 	    $data['foto_P'] =$foto_Pa["rows"];//fotos pagina ppal
  		$data['foto_PN']=$foto_Pa['totals'];//numero fotos
  		$data['mastipo'] =$mastiposa["rows"]; // Paginas similares Segun Tipo Pagina
  		$data['mastipo_PN'] =$mastiposa["totals"]; //total paginas similares
	 //datos generales	
		$data['body']="website/body_paginas";
		$data['title']= $result_P['MetaTitulo']." | ".$a." | San Rafael Mendoza | San Rafael Late ";
		$data['descripcion']=$result_P['MetaDescripcion'];
		$data['keywords']=$result_P['Keywords'];

	// DATOS DE AGENDA
		$data['row_A']=$this->fag->agenda();
	// TIPOS ALOJAMIENTOS 
		$data['alojarmenu']=$this->fag->tiposalojar();
	// LISTAR TIPO ALOJAMIENTOS PARA BUSCADOR
		$data['Tipo_A']=$this->fag->tiposalojar();
	 //javascript	
		$data['js']=array(
     		//JS GENERAL
			"js/funcionesG",
			//GALERIA FICHA
			"js/AD-Gallery/jquery.ad-gallery.min",
			"js/galeriapaginas"				);
	//css
		$data['css']=array(
			//CSS globales
			"css/normalize.min",
			"css/estilos",
			"css/responsive",
			//TOOLTIP
			"css/tooltip",
			//GALERIA FICHA
			"js/AD-Gallery/jquery.ad-gallery2"


		);

	$this->load->view('templates/website/template_gral', $data);
} else {
	// SINO EXITE LA PAGINA
redirect(base_url().'website/home');

}

} else {
	//SI NO EXISTE TIPO PAGINA
redirect(base_url().'website/home');

}
	}


}