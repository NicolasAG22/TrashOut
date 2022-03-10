<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_Marca extends CI_Model {


    public function insertar_marca($Nombre_Marca, $Modelo) {


        $datos = array(
            "Nombre_Marca" => $Nombre_Marca,
            "Modelo" => $Modelo,
        );

        return $this->db->insert("marca", $datos);
    }

    public function eliminar_marca($id_Marca) {
        $this->db->where("id_Marca", $id_Marca);
        return $this->db->delete("marca");
    }

    public function actualizar_marca($id_Marca, $Nombre_Marca, $Modelo) {
        $this->db->where("id_Marca", $id_Marca);

        $datos = array(
            "id_Marca" => $id_Marca,
            "Nombre_Marca" => $Nombre_Marca,
            "Modelo" => $Modelo,
        );
        return $this->db->update("marca", $datos);
    }



    public function Cargamarca() {
        return $this->db->get("marca")->result();
    }
    
    

}
