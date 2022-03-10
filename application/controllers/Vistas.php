<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vistas extends CI_Controller {
      
	 function __construct() {
        parent::__construct();

    }

        //--------LOGIN------------
        public function Principal(){

     
            $this->load->view('dash/principal');
     

        }


          //--------USUARIOS------------
  
        public function Usuario(){     
            if ($this->session->userdata('admin')) {
                $this->load->view('administrativo/Usuario');
            } else {
                   $this->load->view('dash/Login');
                }
            
        }

        public function Login(){
            $this->load->view('dash/Login');
        }

        public function vistaReporteCamion() {
            if ($this->session->userdata('admin')) {
                $this->load->view('administrativo/logCamion');
            } else {
                   $this->load->view('dash/Login');
                }

          
        }


         public function EditarUsuarios(){

            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/VerUsuario");
            } else {
                   $this->load->view('dash/Login');
                }

           
        }

        public function ReporteUsuario(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/ImportUsuario");
            } else {
                   $this->load->view('dash/Login');
                }
            
        }



        
        //--------CAMIONES---------------
        public function Camion(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/Camion");
            } else {
                   $this->load->view('dash/Login');
                }
            
            
        }
        

         public function EditarCamiones(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/VerCamion");
            } else {
                   $this->load->view('dash/Login');
                }
           
        }

        public function ReporteCamion(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/ImportCamion"); 
            } else {
                   $this->load->view('dash/Login');
                }
           
                       
        }
        
        


        //--------MARCAS---------------
        public function Marca(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/Marca");
            } else {
                   $this->load->view('dash/Login');
                }
           
        }
            
        public function EditarMarcas(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/VerMarca");
            } else {
                   $this->load->view('dash/Login');
                }
           
        }

        public function ReporteMarca(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/ImportMarca");  
            } else {
                   $this->load->view('dash/Login');
                }
                      
        }
        //--------CALLE---------------
        public function Calle(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/Calle");
            } else {
                   $this->load->view('dash/Login');
                }
           
        }
            
        public function EditarCalle(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/VerCalle");
            } else {
                   $this->load->view('dash/Login');
                }
           
        }

        public function ReporteCalle(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/ImportCalle");  
            } else {
                   $this->load->view('dash/Login');
                }
                      
        }
       



        //--------CHOFER---------------

        public function Chofer(){

            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/Chofer");  
            } else {
                   $this->load->view('dash/Login');
                }
            
        }
    

        public function EditarChoferes(){
            
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/VerChofer");
            } else {
                   $this->load->view('dash/Login');
                }


          
        }

        public function ReporteChofer(){
            if ($this->session->userdata('admin')) {
                $this->load->view("administrativo/ImportChofer");  
            } else {
                   $this->load->view('dash/Login');
                }


                      
        }
         
     
        

        //--------MAPA---------------

        public function Mapa(){
            
                $this->load->view("cliente/Mapita");
           

           
         }
         public function Puntos(){
       
                $this->load->view("cliente/Puntos");
          
           
         }


        //--------CLIENTE-----------------

        public function vistaCliente() {
           
                $this->load->view('cliente/Mapita');
         

        
        }

         //--------REPORTES-----------------

         public function vistaReporte() {
            if ($this->session->userdata('admin')) {
                $this->load->view('administrativo/Import1');
            } else {
                   $this->load->view('dash/Login');
                }

          
        }



        //--------CONSEJOS-----------------  
        
        public function vistaConsejo() {

                $this->load->view('cliente/consejos/consejos');
                
        }

             
        public function vistaVidrio() {
          
                $this->load->view('cliente/consejos/vidrio');
        
        } 
            
        public function vistaPlastico() {
            
                $this->load->view('cliente/consejos/plastico');
            

           
        } 
                   
        public function vistaPapel() {
            
                $this->load->view('cliente/consejos/papel');
              
        } 


         public function vistaCarton() {

                $this->load->view('cliente/consejos/carton');
             
        } 


            
        //--------HORARIOS CLIENTE-----------------  
        
        public function vistaHorario() {
            
                $this->load->view('horarios/sectores1');
           
            
       }
             
        public function vistaHorario2() {
          
                $this->load->view('horarios/sectores2');
           
           
      } 
            
        public function vistaHorario3() {
            
                $this->load->view('horarios/sectores3');
          
        } 
                   
        public function vistaHorario4() {
          
                $this->load->view('horarios/sectores4');
           
          
        } 


          //--------HORARIOS-----------------  
        
          public function vistaHorarioCliente1() {
            
            $this->load->view('cliente/horarios/sectores1');
       
        
   }
         
    public function vistaHorarioCliente2() {
      
            $this->load->view('cliente/horarios/sectores2');
       
       
  } 
        
    public function vistaHorarioCliente3() {
        
            $this->load->view('cliente/horarios/sectores3');
      
    } 
               
    public function vistaHorarioCliente4() {
      
            $this->load->view('cliente/horarios/sectores4');
       
      
    } 


       


 

}
