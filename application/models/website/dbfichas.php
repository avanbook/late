<?php 

/**
* 
*/
class Dbfichas extends CI_Model
{
	

function fichaal ($url) {
$queryAl= sprintf("Select *  FROM alojamientos a, informaciongeneral i, tipoalojamiento t WHERE a.Url='%s' AND a.ID_InformacionGeneral=i.ID_InformacionGeneral and a.ID_TipoAlojamiento=t.ID_TipoAlojamiento",$url);
		$rowsAl=$this->db->query($queryAl);
		$rows_Al =$rowsAl->row_array();

return $rows_Al;
}

function fotosal ($ID) {
	$query=sprintf( "Select *  FROM alojamientos_imagenes  WHERE ID_Alojamiento= '%s' ORDER BY NombreImagen Desc ",$ID);	
	$rows=$this->db->query($query);
	$rows =$rows->result_array();
return $rows;
}
}


 ?>