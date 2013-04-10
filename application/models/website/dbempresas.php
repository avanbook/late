<?php 

/**
* 
*/
class Dbempresas extends CI_Model
{

	

function empresas ($idsubtipo, $star, $end) {


$query= sprintf("Select * From empresas  WHERE 	ID_SubtipoEmpresa='%s'  ORDER BY Basico ASC,RAND()  LIMIT %s, %s ",$idsubtipo, $star, $end);
$rows=$this->db->query($query);
$totalrows=$rows->num_rows();
$rows =$rows->result_array();
$results=array("rows"=>$rows, "totals"=>$totalrows);
return $results;
}

function tipoempresas ($tipoempresa) {


$query= sprintf("Select * From tipoempresa  WHERE TipoEmpresa='%s' ",$tipoempresa);

$rows=$this->db->query($query);
$rows =$rows->row_array();

return $rows;
}

function subtipoempresas ($urlsubtipo) {


$query= sprintf("Select * From subtipoempresa WHERE UrlSubEmpresa='%s' ORDER BY ID_SubtipoEmpresa DESC ",$urlsubtipo);

$rows=$this->db->query($query);
$rows =$rows->row_array();

return $rows;
}

function listarsubtipo ($tipoempresa) {


$query= sprintf("Select * From subtipoempresa WHERE ID_TipoEmpresa='%s' ORDER BY ID_SubtipoEmpresa DESC ",$tipoempresa);
$rows=$this->db->query($query);
$rows =$rows->result_array();
return $rows;
}



}


 ?>