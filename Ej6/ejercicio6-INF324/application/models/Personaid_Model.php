<?php

class Personaid_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    //la función de Select * en sql
    public function selPerfil(){
        $query = $this->db->query("Select * from personaid");
        return $query->result();
    }
    
    //funcion para insertar usuario
    public function insertUsuario($CI, $Nombre_completo, $fechaNaci, $telefono, $departamento){
        
        $arrayDatos = array(
            'CI' => $CI,
            'Nombre_completo' => $Nombre_completo,
            'fechaNaci' => $fechaNaci,
            'telefono' => $telefono,
            'departamento' => $departamento
        );

        $this->db->insert('personaid', $arrayDatos);
        
    }
    //funcion para listar usuarios
    public function listUsuario(){
        $query = $this->db->query("SELECT * FROM personaid");
        return $query->result();
    }
    
    public function deleteUsuario($id){        
        $this->db->where('id', $id);
        $this->db->delete('personaid');
    }
    public function editUsuario($id){
        $consulta = $this->db->query("SELECT * FROM personaid WHERE id = $id");
        return $consulta->result();
    }
    public function updateUsuario($id, $CI, $Nombre_completo, $fechaNaci, $telefono, $departamento){
        $array = array(
            'CI' => $CI,
            'Nombre_completo' => $Nombre_completo,
            'fechaNaci' => $fechaNaci,
            'telefono' => $telefono,
            'departamento' => $departamento            
        );
        $this->db->where('id', $id);
        $this->db->update('personaid',$array);
    }
    
    
}