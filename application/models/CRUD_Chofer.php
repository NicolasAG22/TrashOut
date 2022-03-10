<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_Chofer extends CI_Model {

    public function insertar_chofer($Rut, $Nombre, $Apellido_Paterno, $Apellido_Materno, $Estado_idEstado) {

        $datos = array(
            "Rut" => $Rut,
            "Nombre" => $Nombre,
            "Apellido_Paterno" => $Apellido_Paterno,
            "Apellido_Materno" => $Apellido_Materno,
            "Estado_idEstado" => $Estado_idEstado
        );

        return $this->db->insert("chofer", $datos);
    }

    public function Cargachofer() {
        return $this->db->get("chofer")->result();
    }

    public function eliminar_chofer($id_Chofer) {
        $this->db->where("id_Chofer", $id_Chofer);
        return $this->db->delete("chofer");
    }

    public function actualizar_chofer($id_Chofer, $Nombre, $Rut, $Apellido_Paterno, $Apellido_Materno, $Estado_idEstado) {
        $this->db->where("id_Chofer", $id_Chofer);

        $datos = array(
            "id_Chofer" => $id_Chofer,
            "Rut" => $Rut,
            "Nombre" => $Nombre,
            "Apellido_Paterno" => $Apellido_Paterno,
            "Apellido_Materno" => $Apellido_Materno,
            "Estado_idEstado" => $Estado_idEstado
        );
        return $this->db->update("chofer", $datos);
    }


    public function choferesTotal() {

        $sql = "SELECT COUNT(*) as contador FROM chofer";
        
        return $this->db->query($sql)->result();
    }

    public function estadoChofer() {
       
        $sql = "SELECT Estado_idEstado,COUNT(*) as contador FROM chofer GROUP BY Estado_idEstado";
        
        return $this->db->query($sql)->result();
    }
 
}
