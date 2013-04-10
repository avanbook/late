<?php 

/**
* 
*/
class Dblistado extends CI_Model
{
	//DETERMINAR datos del tipo de alojamiento
	function tipoalojar ($url)
	{
$query= sprintf("Select * FROM tipoalojamiento WHERE UrlAlojamiento ='%s'",$url);
$rows=$this->db->query($query);
$rows =$rows->row_array();
return $rows;
	}

function desta ($Tipoalojar,$Tipoalojar2, $star, $end) 
{
	//para hoteles y Apart
if($Tipoalojar2 !="0") {
$Tipoalojar22="OR a.ID_TipoAlojamiento=$Tipoalojar2 ";
} else {
$Tipoalojar22="";
}

$query= sprintf("Select i.Nombre, i.Descripcion,i.Telefono,i.Email, i.Direccion,a.Url, a.ID_Alojamiento  FROM alojamientos a, informaciongeneral i 
WHERE i.ID_InformacionGeneral=a.ID_InformacionGeneral AND (a.ID_TipoAlojamiento=%s %s ) AND a.DestaOrden >'0'  ORDER BY a.DestaOrden ASC
LIMIT %s, %s ",$Tipoalojar,$Tipoalojar22, $star, $end);

$rows=$this->db->query($query);
$rows =$rows->result_array();

return $rows;
}


function listar ($Tipoalojar,$Tipoalojar2, $star, $end) {

if($Tipoalojar2 !="0") {
$Tipoalojar22="OR a.ID_TipoAlojamiento=$Tipoalojar2 ";
} else {
$Tipoalojar22=" ";
}

$query= sprintf("Select i.Nombre, i.Descripcion,i.Telefono,a.Basico,i.Email, i.Direccion,a.Url, a.ID_Alojamiento  FROM alojamientos a, informaciongeneral i 
WHERE i.ID_InformacionGeneral=a.ID_InformacionGeneral AND (a.ID_TipoAlojamiento=%s %s ) AND a.DestaOrden ='0'  ORDER BY  Basico ASC, RAND()
LIMIT %s, %s ",$Tipoalojar,$Tipoalojar22, $star, $end);

$rowsA=$this->db->query($query);
$rowsA=$rowsA->result_array();

return $rowsA;
}

function getCantidad ($Tipoalojar,$Tipoalojar2)
{
	if($Tipoalojar2 !="0") {
$Tipoalojar22="OR a.ID_TipoAlojamiento=$Tipoalojar2 ";
} else {
$Tipoalojar22=" ";
}
$query= sprintf("SELECT COUNT(*) as totalrows FROM alojamientos a, informaciongeneral i WHERE i.ID_InformacionGeneral=a.ID_InformacionGeneral AND (a.ID_TipoAlojamiento=%s %s ) AND a.DestaOrden ='0'",$Tipoalojar,$Tipoalojar22);
$rows= $this->db->query($query);
$rows=$rows->row();
return $rows->totalrows;
}


}


 ?>