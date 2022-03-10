<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa extends CI_Model {
    public function calle() {
        return $this->db->get("calle")->result();
    }
    //obtener ruta
    public function sector($idCalle,$dia){
        
        $this->db->select('sector_has_calle.Sector_idSector');
        $this->db->from('calle');
        $this->db->join('sector_has_calle','calle.idCalle = sector_has_calle.Calle_idCalle');
        $this->db->join('sector','sector_has_calle.Sector_idSector = sector.idSector');
        $this->db->join('horario_tiene_sector','horario_tiene_sector.Sector_idSector = sector.idSector');
        $this->db->join('horario','horario_tiene_sector.Horario_idHorario = horario.idHorario');
        $this->db->where('calle.idCalle',$idCalle);
        $this->db->where('horario.Dia',(string)$dia);
        
        //$sql = 'SELECT se.Sector_idSector FROM calle ca LEFT JOIN sector_has_calle se ON ca.idCalle = se.Calle_idCalle left join sector s on se.Sector_idSector = s.idSector left join horario_tiene_sector ho on ho.Sector_idSector = s.idSector left join horario h on ho.Horario_idHorario = h.idHorario where ca.idCalle = ?';
        //return $this->db->query($sql,4)->row()->Sector_idSector;
        
        return $this->db->get()->row()->Sector_idSector;
        
    }
    public function calles($idSector) {
        //$sql = 'SELECT C.Latitud, C.Longitud, SE.Sector_idSector FROM calle C INNER JOIN sector_has_calle SE ON C.idCalle = SE.Calle_idCalle INNER JOIN sector S ON SE.Sector_idSector = S.idSector where SE.Sector_idSector = ?';
        $sql = 'SELECT C.Latitud, C.Longitud, SE.Sector_idSector, ca.Latitud as camiLatitud, ca.Longitud as camiLongitud FROM calle C INNER JOIN sector_has_calle SE ON C.idCalle = SE.Calle_idCalle INNER JOIN sector S ON SE.Sector_idSector = S.idSector INNER JOIN camion ca ON ca.Sector_idSector = S.idSector where SE.Sector_idSector = ?';
        return $this->db->query($sql,$idSector)->result();
    }
    public function distancia($idCalle) {
        //$sql = 'SELECT C.Latitud, C.Longitud, SE.Sector_idSector FROM calle C INNER JOIN sector_has_calle SE ON C.idCalle = SE.Calle_idCalle INNER JOIN sector S ON SE.Sector_idSector = S.idSector where SE.Sector_idSector = ?';
        $sql = 'SELECT * FROM calle where calle.idCalle= ?';
        return $this->db->query($sql,$idCalle)->result();
    }

    //////CALLE//////////
    public function insertar_calle($Nombre, $Latitud, $Longitud) {

        $datos = array(
            
            "Nombre" => $Nombre,
            "Latitud" => $Latitud,
            "Longitud" => $Longitud
            
        );

        return $this->db->insert("calle", $datos);
    }

    public function Cargacalle() {
        return $this->db->get("calle")->result();
    }

    public function eliminar_calle($idCalle) {
        $this->db->where("idCalle", $idCalle);
        return $this->db->delete("calle");
    }

    public function actualizar_calle($idCalle, $Nombre, $Latitud, $Longitud) {
        $this->db->where("id_Chofer", $idCalle);

        $datos = array(
            "idCalle" => $idCalle,
            "Nombre" => $Nombre,
            "Latitud" => $Latitud,
            "Longitud" => $Longitud
        );
        return $this->db->update("calle", $datos);
    }
}
