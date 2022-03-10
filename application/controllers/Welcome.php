<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model("CRUD_Usuario");
        $this->load->model("CRUD_Chofer");
        $this->load->model("CRUD_Marca");
        $this->load->model("CRUD_Camion");
        $this->load->model("CRUD_Calles");
    }

    public function index() {
        $this->load->view('cliente/Mapita');
    }

 
    public function usuarios() {
        echo json_encode($this->CRUD_Usuario->Cargausuarios());
    }

    public function choferes() {
        echo json_encode($this->CRUD_Chofer->Cargachofer());
    }

    public function marca() {
        echo json_encode($this->CRUD_Marca->Cargamarca());
    }

    public function TablaCamion() {
        echo json_encode($this->CRUD_Camion->tablaCamion());
    }
     public function camiones() {
        echo json_encode($this->CRUD_Camion->camiones());
    }

    public function ChoferCamion() {
        echo json_encode($this->CRUD_Chofer->cargaChoferCamion());
    }

 
    //========================================================================================
    //========================================================================================
    //INICIO DE LoGIN


    public function login() {
        $username = $this->input->post("username");
        $clave = $this->input->post("clave");
        $ruta = "";
        if (isset($username) && isset($clave)) {
            $user = $this->CRUD_Usuario->iniciarSesion($username, sha1(md5($clave)));
            if ($user) {
             
                 if (count($user) > 0) {
                  
                if ($user[0]->is_admin && $user[0]->is_active) {
                  
                    $this->session->set_userdata("admin", $user[0]);
                    $ruta = site_url() . "Vistas/Principal";
                    $r = "valido";
                   
                   
                } 
            } else {
                $r = "Usuario no existe";
            }
            }else  {
                    $r = "Error de contraseña o nombre de usuario";
            }
           
        } else {
            $r = "error de parametros";
        }
        echo json_encode(array("value" => $r, "ruta" => $ruta));
    }

    public function salir() {
        $this->session->sess_destroy();
        redirect("");
    }

    //========================================================================================
    //========================================================================================
    //INICIO DE USUARIO


    public function insertar_usuario() {

        $Nombre = $this->input->post("Nombre");
        $Apellido_Paterno = $this->input->post("Apellido_Paterno");
        $Apellido_Materno = $this->input->post("Apellido_Materno");
        $Fecha_Nacimiento = $this->input->post("Fecha_Nacimiento");        
        $clave = $this->input->post("clave");
        $Direccion = $this->input->post("Direccion");
        $Email = $this->input->post("Email");
        $Estado_Usuario = $this->input->post("Estado_Usuario");
        $username = $this->input->post("username");
        $is_admin = $this->input->post("is_admin");
        $is_active = $this->input->post("is_active");

        if (isset($Nombre)) {
            if (empty($Nombre) || empty($Apellido_Paterno) || empty($Apellido_Materno) || 
            empty($Fecha_Nacimiento) || empty($username) || empty($clave) || empty($Email) || empty($Direccion)) {
                $resp = "Error de parametros ";
                
            } else {
                $this->CRUD_Usuario->insertar_usuario($Nombre,$Apellido_Paterno,$Apellido_Materno,$Fecha_Nacimiento,sha1(md5($clave)),$Direccion,
                $Email,$Estado_Usuario,$is_admin,$is_active,$username);
                
            $resp = "Usuario creado correctamente";
            }
          } else {
            $resp = "Error, Faltan datos";
        }
        echo json_encode($resp);
    }

    public function eliminar_usuario() {
        $id_Usuario = $this->input->post("id_Usuario");
        if (isset($id_Usuario)) {
            $this->CRUD_Usuario->eliminar_usuario($id_Usuario);
            $resp = "Usuario eliminado correctamente";
        } else {
            $resp = "Error, Usuario no eliminado";
        }
        echo json_encode($resp);
    }

    public function actualizar_usuario() {
        $id_Usuario = $this->input->post("id_Usuario");
        $Nombre = $this->input->post("Nombre");
        $Email = $this->input->post("Email");
        $Apellido_Paterno = $this->input->post("Apellido_Paterno");
        $Apellido_Materno = $this->input->post("Apellido_Materno");
        $username = $this->input->post("username");
        $Fecha_Nacimiento = $this->input->post("Fecha_Nacimiento");
        
        $clave = $this->input->post("clave");
        $Direccion = $this->input->post("Direccion");
     

        $Estado_Usuario = $this->input->post("Estado_Usuario");
        $is_admin = $this->input->post("is_admin");
        $is_active = $this->input->post("is_active");

        if (isset($Nombre)) {
            $this->CRUD_Usuario->actualizar_usuario($id_Usuario, $Nombre, $Email, $Apellido_Paterno, 
            $Apellido_Materno, $username,$Fecha_Nacimiento, sha1(md5($clave)), $Direccion, $Estado_Usuario,$is_admin,$is_active);
            $resp = "Usuario actualizado correctamente";
        } else {
            $resp = "Error, Usuario no actualizado";
        }
        echo json_encode($resp);
    }

    //TERMINO DE USUARIO
    //========================================================================================
    //========================================================================================
    //INICIO DE CHOFER

    public function insertar_chofer()
	{
		$prerut =$this->input->post("Rut");
		$rut =$this->input->post("Rut");
		$Nombre = $this->input->post("Nombre");
        $Apellido_Paterno = $this->input->post("Apellido_Paterno");
        $Apellido_Materno = $this->input->post("Apellido_Materno");
        $Estado_idEstado = $this->input->post("Estado_idEstado");
		if ($rut === "") {
            # code...
            $resp = "Verifique datos";
            echo json_encode($resp);
        }else {
            if (!preg_match("/^[0-9.]+[-]?+[0-9kK]{1}/", $rut)) {
                $resp = "Verifique datos";
                echo json_encode($resp);
            }else {
                $rut = preg_replace('/[\.\-]/i', '', $rut);
            $dv = substr($rut, -1);
            $numero = substr($rut, 0, strlen($rut) - 1);
            $i = 2;
            $suma = 0;
            foreach (array_reverse(str_split($numero)) as $v) {
                if ($i == 8)
                    $i = 2;
                $suma += $v * $i;
                ++$i;
            }
            $dvr = 11 - ($suma % 11);
        
            if ($dvr == 11)
                $dvr = 0;
            if ($dvr == 10)
                $dvr = 'K';
            if ($dvr == strtoupper($dv)){
        
                if (isset($Nombre)) {
                    if(empty($prerut) || empty($Nombre) || empty($Apellido_Paterno) || empty($Apellido_Materno) ){
                    $resp = "Error, faltan datos";
                    }else{
                    $this->CRUD_Chofer->insertar_chofer($rut, $Nombre, $Apellido_Paterno, $Apellido_Materno, $Estado_idEstado);
                    $resp = "Chofer creado correctamente";
                    }
                } else {
                $resp = "Error, Faltan datos";
                }
                echo json_encode($resp);
        
            }else{
                $resp = "Verifique datos";
                echo json_encode($resp);
            }	
            }
        
            
        }
    
	}

    
    public function eliminar_chofer() {
        $id_Chofer = $this->input->post("id_Chofer");
        if (isset($id_Chofer)) {
            $this->CRUD_Chofer->eliminar_chofer($id_Chofer);
            $resp = "Chofer eliminado correctamente";
        } else {
            $resp = "Error, Usuario no eliminado";
        }
        echo json_encode($resp);
    }

    public function actualizar_chofer() {
        $id_Chofer = $this->input->post("id_Chofer");
        $prerut =$this->input->post("Rut");
		$rut =$this->input->post("Rut");
		$Nombre = $this->input->post("Nombre");
        $Apellido_Paterno = $this->input->post("Apellido_Paterno");
        $Apellido_Materno = $this->input->post("Apellido_Materno");
        $Estado_idEstado = $this->input->post("Estado_idEstado");
		if ($rut === "") {
            # code...
            $resp = "Verifique datos";
            echo json_encode($resp);
        }else {
            if (!preg_match("/^[0-9.]+[-]?+[0-9kK]{1}/", $rut)) {
                $resp = "Verifique datos";
                echo json_encode($resp);
            }else {
                $rut = preg_replace('/[\.\-]/i', '', $rut);
            $dv = substr($rut, -1);
            $numero = substr($rut, 0, strlen($rut) - 1);
            $i = 2;
            $suma = 0;
            foreach (array_reverse(str_split($numero)) as $v) {
                if ($i == 8)
                    $i = 2;
                $suma += $v * $i;
                ++$i;
            }
            $dvr = 11 - ($suma % 11);
        
            if ($dvr == 11)
                $dvr = 0;
            if ($dvr == 10)
                $dvr = 'K';
            if ($dvr == strtoupper($dv)){
        
                if (isset($Nombre)) {
                    if(empty($prerut) || empty($Nombre) || empty($Apellido_Paterno) || empty($Apellido_Materno) ){
                    $resp = "Error, faltan datos";
                    }else{
                    $this->CRUD_Chofer->actualizar_chofer($id_Chofer,$Nombre,$rut , $Apellido_Paterno, $Apellido_Materno, $Estado_idEstado);
                    $resp = "Chofer actualizado correctamente";
                    }
                } else {
                $resp = "Error, Faltan datos";
                }
                echo json_encode($resp);
        
            }else{
                $resp = "Verifique datos";
                echo json_encode($resp);
            }	
            }
        
            
        }
        
    }
    public function estadoChofer() {
		echo json_encode($this->CRUD_Chofer->estadoChofer());
    }

    //TERMINO DE CHOFER
    //========================================================================================
    //========================================================================================
    //INICIO DE MARCA


    public function insertar_marca() {

        $Nombre_Marca = $this->input->post("Nombre_Marca");
        $Modelo = $this->input->post("Modelo");
  


        if (isset($Nombre_Marca)) {
            if ((empty($Nombre_Marca) || empty($Modelo))) {
                $resp = "Error, Faltan datos";
            } else {             

            $this->CRUD_Marca->insertar_marca($Nombre_Marca, $Modelo);
            $resp = "Marca creado correctamente";
            }
   
        }else {
            $resp = "Error, Faltan datos";
        }
        echo json_encode($resp);
    }

    public function eliminar_marca() {
        $id_Marca = $this->input->post("id_Marca");
        if (isset($id_Marca)) {
            $this->CRUD_Marca->eliminar_marca($id_Marca);
            $resp = "Marca eliminado correctamente";
        } else {
            $resp = "Error, Usuario no eliminado";
        }
        echo json_encode($resp);
    }

    public function actualizar_marca() {
        $id_Marca = $this->input->post("id_Marca");
        $Nombre_Marca = $this->input->post("Nombre_Marca");
        $Modelo = $this->input->post("Modelo");

        if (isset($Nombre_Marca)) {
            $this->CRUD_Marca->actualizar_marca($id_Marca, $Nombre_Marca, $Modelo);
            $resp = "Marca actualizado correctamente";
        } else {
            $resp = "Error, Marca no actualizado";
        }
        echo json_encode($resp);
    }

    //TERMINO DE MARCA
     //========================================================================================
    //========================================================================================
    //INICIO DE CAMION


    public function insertar_Camion() {
        $Patente = $this->input->post("Patente");
        $Estado_idEstado = $this->input->post("Estado_idEstado");
        $Chofer_id_Chofer = $this->input->post("Chofer_id_Chofer");
        $Marca_id_Marca = $this->input->post("Marca_id_Marca");

        if (isset($Patente)) {

            if (empty($Patente)) {
                $resp = "Error, Faltan datos";
            } else {
                $this->CRUD_Camion->insertar_camion($Patente, $Estado_idEstado, $Chofer_id_Chofer, $Marca_id_Marca);
            $resp = "Camion creado correctamente";
            }    
          
        } else {
            $resp = "Error, Faltan datos";
        }
        echo json_encode($resp);
    }

    public function eliminar_Camion() {
        $id_Camion = $this->input->post("id_Camion");
        if (isset($id_Camion)) {
            $this->CRUD_Camion->eliminar_Camion($id_Camion);
            $resp = "camion eliminado correctamente";
        } else {
            $resp = "Error, Camion no eliminado";
        }
        echo json_encode($resp);
    }

    public function actualizar_Camion() {
        $id_Camion = $this->input->post("id_Camion");
        $Patente = $this->input->post("Patente");
        $Estado_idEstado = $this->input->post("Estado_idEstado");
        $Chofer_id_Chofer = $this->input->post("Chofer_id_Chofer");
        $Marca_id_Marca = $this->input->post("Marca_id_Marca");

        if (isset($Patente)) {
            $this->CRUD_Camion->actualizar_Camion($id_Camion, $Patente, $Estado_idEstado, $Chofer_id_Chofer, $Marca_id_Marca);
            $resp = "Camion actualizado correctamente";
        } else {
            $resp = "Error, Faltan datos";
        }
        echo json_encode($resp);
    }

    public function estadoCamion() {
		echo json_encode($this->CRUD_Camion->estadoCamion());
    }

    ///////////CALLE////////////////
    ///////Inicio Calle////////////
    
	public function insertar_calle() {
        
        $Nombre = $this->input->post("Nombre");
        $Latitud = $this->input->post("Latitud");
        $Longitud = $this->input->post("Longitud");
        
        
        

        if (isset($Nombre)) {
            if (empty($Nombre) || empty($Latitud) || empty($Longitud)) {
                $resp = "Error, faltan datos";
            } else {
            $this->CRUD_Calles->insertar_calle($Nombre, $Latitud, $Longitud);
            $resp = "Calle creada correctamente";
            }   

        } else {
            $resp = "Error, Faltan datos";
        }
        echo json_encode($resp);
        
    }

    public function eliminar_calle() {
        
        $id_Calle = $this->input->post("idCalle");
       

        if (isset($idCalle)) {
            $respuesta = $this->CRUD_Calles->eliminar_calle($idCalle);
            $resp = "Calle eliminada correctamente";
        } else {
            $resp = "Error, Calle no eliminada";
        }
        echo json_encode($resp);
        
    }
    public function actualizar_calle() {

        $idCalle = $this->input->post("idCalle");
        $Nombre = $this->input->post("Nombre");
        $Latitud = $this->input->post("Latitud");
        $Longitud = $this->input->post("Longitud");


        if (isset($Nombre)) {
            $this->CRUD_Calles->actualizar_calle($idCalle, $Nombre, $Latitud, $Longitud);
            $resp = "Calle actualizada";
        } else {
            $resp = "Error, Calle no actualizada";
        }
        echo json_encode($resp);

    }

    
    public function calles() {
        echo json_encode($this->CRUD_Calles->Cargacalle());
    }
    public function distancia(){
		$idCalle = $this->input->post("idCalle");
		echo json_encode($this->CRUD_Calles->distancia($idCalle));
	}
	public function tomarCalles(){
		//saco la id de la calle
		$idCalle = $this->input->post("idCalle");
		//sacar el dia en el que estamos
		//$dia =json_decode($this->saber_dia());
		$dias = array("0","1","2","3","4","5","6");
		
		$fecha = $dias[date('N', strtotime(date('Y/m/d')))];
		
		switch ($fecha){
			case 0: 
				$nombre = "Domingo";
				
				break;
			case 1: 
				$nombre = "Lunes";
				
				break;
			case 2: 
				$nombre = "Martes";
				
				break;
			case 3: 
				$nombre = "Miercoles";
				
				break;
			case 4: 
				$nombre = "Jueves";
				
				break;
			case 5: 
				$nombre = "Viernes";
				
				break;
			case 6: 
				$nombre = 'Sabado';
				
				break;
		}
		//consulta para sacar el sector where id de la calle AND dia de semana
		
		$idSector = json_decode($this->CRUD_Calles->sector($idCalle,$nombre),true);
		//pedir las calles con el sector
		$calles = json_encode($this->CRUD_Calles->calles($idSector));
		
		echo $calles;
	
    }

    public function camionesRuta() {
        echo json_encode($this->CRUD_Camion->camionesRuta());
    }
    public function choferesTotal() {
        echo json_encode($this->CRUD_Chofer->choferesTotal());
    }   
    public function usuariosTotal() {
        echo json_encode($this->CRUD_Usuario->usuariosTotal());
    } 




}
