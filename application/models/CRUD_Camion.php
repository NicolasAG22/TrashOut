<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD_Camion extends CI_Model {

    public function insertar_camion($Patente, $Estado_idEstado, $Chofer_id_Chofer, $Marca_id_Marca) {

        $datos = array(
            "Patente" => $Patente,
            "Estado_idEstado" => $Estado_idEstado,
            "Chofer_id_Chofer" => $Chofer_id_Chofer,
            "Marca_id_Marca" => $Marca_id_Marca
        );
        return $this->db->insert("camion", $datos);
    }

    public function eliminar_Camion($id_Camion) {
        $this->db->where("id_Camion", $id_Camion);
        return $this->db->delete("camion");
    }

    public function actualizar_Camion($id_Camion, $Patente, $Estado_idEstado, $Chofer_id_Chofer, $Marca_id_Marca) {
        $this->db->where("id_Camion", $id_Camion);

        $datos = array(
            "id_Camion" => $id_Camion,
            "Patente" => $Patente,
            "Estado_idEstado" => $Estado_idEstado,
            "Chofer_id_Chofer" => $Chofer_id_Chofer,
            "Marca_id_Marca" => $Marca_id_Marca
        );
        return $this->db->update("camion", $datos);
    }

    public function Cargachofer() {
        return $this->db->get("chofer")->result();
    }

    public function Cargamarca() {
        return $this->db->get("marca")->result();
    }

    public function tablaCamion() {

        $sql = 'SELECT  c.id_Camion, c.Patente, c.Estado_idEstado, chof.Nombre, chof.Apellido_Paterno, chof.Apellido_Materno, m.Nombre_Marca ';
        $sql .= 'from camion c ';
        $sql .= 'INNER join chofer chof on chof.id_Chofer = c.Chofer_id_Chofer ';
        $sql .= 'INNER join marca m on m.id_Marca = c.Marca_id_Marca';
      

        return $this->db->query($sql)->result();
        
    
        
    }
    
     public function camiones() {
        return $this->db->get("camion")->result();
    }

    public function estadoCamion() {
       
        $sql = "SELECT Estado_idEstado,COUNT(*) as contador FROM camion GROUP BY Estado_idEstado";
        
        return $this->db->query($sql)->result();
    }
    public function camionesRuta() {

        $sql = "SELECT Estado_idEstado,COUNT(*) as contador FROM camion";
        
        return $this->db->query($sql)->result();
    }


}
