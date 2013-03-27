<?php 

/**
* 
*/
class Dbgeneral extends CI_Model
{
	
//OBTENER DATOS DE LA PAGINA
function paginas ($tipopagina, $url) {

$url2=$url.".html";
$query= sprintf("Select * FROM paginas p, tipopagina t WHERE t.TipoPagina='%s' AND t.ID_TipoPagina=p.ID_TipoPagina  AND p.url='%s' ",$tipopagina,$url2);

$rows=$this->db->query($query);
$rows =$rows->row_array();

return $rows;
}
//OBTENER PAGINAS INTERNA DE LA PAGINA
function paginasint ($idp) {

$query= sprintf("Select Url,MetaTitulo, TituloContenido FROM paginas WHERE ID_PaginaPrincipal='%s' AND OrdenPagina='interna'  ",$idp);
$rows=$this->db->query($query);
$rows =$rows->result_array();
return $rows;

}

function fotosp ($idp) {

$query= sprintf("Select * FROM paginas_imagenespag p, imagenpag i WHERE p.ID_Pagina = '%s' AND p.ImagenPagina=ID_ImagenPag",$idp);
$rows=$this->db->query($query);
$rows =$rows->result_array();
return $rows;

}


}


 ?>