<?php
class Personaid extends CI_Controller {
    function __construct() {
        parent::__construct();
        //comunicación con el modelo
        $this->load->model('Personaid_Model');
    }    
    public function index(){
        $data['contenido'] = "Personaid/index";        //enviar a plantilla la vista index de usuario
        $data['selPerfil'] = $this->Personaid_Model->selPerfil();
        $data['listaUsuario'] = $this->Personaid_Model->listUsuario();
        $this->load->view("plantilla", $data);
    }
    public function insert(){
        $datos = $this->input->post();        
        if(isset($datos)){
            //$txtId = $datos['txtIdper'];
            $CI = $datos['CI'];
            $Nombre_completo = $datos['Nombre_completo'];
            $fechaNaci = $datos['fechaNaci'];
            $telefono = $datos['telefono'];
            $departamento = $datos['departamento'];
            $this->Personaid_Model->insertUsuario($CI, $Nombre_completo, $fechaNaci, $telefono, $departamento);
            redirect('');
        }        
    }    
    public function delete($id = NULL){
        if($id != NULL){
            $this->Personaid_Model->deleteUsuario($id);
            redirect('');
        }
    }
    public function edit($id = NULL){
        if($id != NULL){
            //mostrar datos
            $data['contenido'] = 'Personaid/edit';
            $data['selPerfil'] = $this->Personaid_Model->selPerfil();
            $data['datosUsuario'] = $this->Personaid_Model->editUsuario($id);
            $this->load->view('plantilla', $data);
        }else{
            //regresar a index enviar parametro
            redirect('');
        }
    }
    public function update(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $id = $datos['id'];
            $CI = $datos['CI'];
            $Nombre_completo = $datos['Nombre_completo'];
            $fechaNaci = $datos['fechaNaci'];
            $telefono = $datos['telefono'];
            $departamento = $datos['departamento'];
            $this->Personaid_Model->updateUsuario($id ,$CI, $Nombre_completo, $fechaNaci, $telefono, $departamento);
            redirect('');
        }
    }
    
}