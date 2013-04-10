<?php 

/**
* funcion a utilizar en todo el website.
*/
class fag
{
	function agenda() 
	{
		 $CI = & get_instance();
		 //AGENDA 
		$query4= "Select Date_format(Fecha,'%m/%d') as fechaA, ID_Agenda,Titulo, Descripcion  FROM agendas WHERE Fecha>(now())- interval 8 day ORDER BY  Fecha ASC ";
		$rowsA=$CI->db->query($query4);
		$rows_A =$rowsA->result_array();
		
		return $rows_A;
	}
//LISTAR LOS TIPOS DE ALOJAMIENTOS
	function tiposalojar() 
	{
		 $CI = & get_instance();
		 //AGENDA 
		$query= "Select TipoAlojamiento, UrlAlojamiento,TituloAlojamiento,ID_TipoAlojamiento  FROM tipoalojamiento Order by ID_TipoAlojamiento ASC ";
		$rows=$CI->db->query($query);
		$rows_ =$rows->result_array();
		
		return $rows_;
	}

}



 ?>