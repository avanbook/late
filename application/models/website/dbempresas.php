<?php 

/**
* 
*/
class Dbempresas extends CI_Model
{
	

function empresas ($tipoempresa, $star, $end) {


$query= sprintf("Select i.Nombre, i.Descripcion,i.Telefono,i.Email, i.Direccion,a.Url, a.ID_Alojamiento  FROM alojamientos a, informaciongeneral i 
WHERE i.ID_InformacionGeneral=a.ID_InformacionGeneral AND (a.ID_TipoAlojamiento=%s %s ) AND a.DestaOrden >'0'  ORDER BY a.DestaOrden ASC
LIMIT %s, %s ",$Tipoalojar,$Tipoalojar22, $star, $end);

$rows=$this->db->query($query);
$rows =$rows->result_array();

return $rows;
}



}


 ?>