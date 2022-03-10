<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {
   
    
    
    
    public function iniciarSesion($user, $Contraseña){
        
      $this->db->where("username", $user);
        $this->db->where("Contraseña", $Contraseña);
        return $this->db->get("usuario")->result();
        
        
        
    }
 
    
    
    
    
}
