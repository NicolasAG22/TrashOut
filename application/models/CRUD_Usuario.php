<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class CRUD_Usuario extends CI_Model{
   
    
    public function insertar_usuario($Nombre,$Apellido_Paterno,$Apellido_Materno,$Fecha_Nacimiento,$clave,$Direccion,
    $Email,$Estado_Usuario,$is_admin,$is_active,$username){
            
        $datos=array(
           
            "Nombre"=>$Nombre,
            "Email"=>$Email,
            "Apellido_Paterno"=>$Apellido_Paterno,
            "Apellido_Materno"=>$Apellido_Materno,
            "username"=>$username,
            "Fecha_Nacimiento"=>$Fecha_Nacimiento,
            "clave"=>$clave,
            "Direccion"=>$Direccion,   
            "Estado_Usuario"=>$Estado_Usuario,
            "is_admin"=>$is_admin,
            "is_active"=>$is_active
                      
            
        );
        
        return $this->db->insert("usuario",$datos);
        
        
    }
    
        public function eliminar_usuario($id_Usuario) {
          $this->db->where("id_Usuario",$id_Usuario);
        return $this->db->delete("usuario");
    }
    
    
    public function actualizar_usuario($id_Usuario,$Nombre,$Email,$Apellido_Paterno,$Apellido_Materno,$username, 
    $Fecha_Nacimiento,$clave,$Direccion,$Estado_Usuario,$is_admin,$is_active){
        $this->db->where("id_Usuario", $id_Usuario);
        
          $datos=array(
            "id_Usuario"=>$id_Usuario,
            "Nombre"=>$Nombre,
            "Email"=>$Email,
            "Apellido_Paterno"=>$Apellido_Paterno,
            "Apellido_Materno"=>$Apellido_Materno,
            "username"=>$username,
            "Fecha_Nacimiento"=>$Fecha_Nacimiento,
            "clave"=>$clave,
            "Direccion"=>$Direccion,
           
            
            "Estado_Usuario"=>$Estado_Usuario,
            "is_admin"=>$is_admin,
            "is_active"=>$is_active
                      
            
        );
          
           return $this->db->update("usuario", $datos);
        
        
        
    }

    public function Cargausuarios() {
        return $this->db->get("usuario")->result();
    }
    
    
    
    
      public function iniciarSesion($username, $clave){
        
      $this->db->where("username", $username);
        $this->db->where("clave", $clave);
        return $this->db->get("usuario")->result();
        
    }
    
    public function usuariosTotal() {

        $sql = "SELECT COUNT(*) as contador FROM usuario";
        
        return $this->db->query($sql)->result();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
