<?php

class Clientes_user_model extends CI_Model
{

    const tabla = 'clientes';
    const id_tabla = 'ID_Cliente';

    /* ------------------------ INSERTAR EN LA BASE DE DATOS----------------------- */

    function insert($row = array())
    {
        $this->db->insert(self::tabla, $row);
        return $this->db->insert_id();
    }


    /* ------------------------ BUSCAR POR ID-------------------------------------- */

    function find($id)
    {
        $query = sprintf("select * from %s where %s=%s",self::tabla, self::id_tabla, $id);
        $row = $this->db->query($query);
        return $row;
    }

    
    /* ------------------------ LISTAR TODOS LOS ELEMENTOS------------------------ */

    function select()
    {

        $query =sprintf( "select * from %s",  self::tabla);
        $rows = $this->db->query($query);
        $rows = $rows->result_array();
        return $rows;
    }

    /* ------------------------ MODIFICAR UN REGISTRO----------------------------- */

    function update($id, $row = array())
    {

        $this->db->where(self::id_tabla, $id);
        $this->db->update(self::tabla, $row);
    }

    /* ------------------------ ELIMINAR UN REGISTRO------------------------------- */

    function delete($id)
    {

        $query = sprintf("delete from %s where %s=%s",self::tabla,  self::id_tabla, $id);
        $this->db->query($query);
    }
    
    /*-----------------------------ENCONTRAR SI EXISTE UN NICK REPETIDO(VALIDAR CON AJAX)---------------*/
    
    function find_nick($Usuario,$ID_Cliente)
    {
        $query = sprintf("select * from clientes where Usuario='%s' and ID_Cliente<>%s", $Usuario,$ID_Cliente);
        $row = $this->db->query($query);
        return $row;
        
    }
    
    function login($Usuario, $Clave)
    {
        
        $query=sprintf("select * from clientes where Usuario='%s' and Clave='%s' ",$Usuario,$Clave);
        $row = $this->db->query($query);
        
        if($row->num_rows()==0)
        {
            return false;  
        }
        else
        {
          return $row->row();
        }

    }
    
}

?>
