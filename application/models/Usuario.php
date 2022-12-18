<?php

class Usuario extends CI_Model {

    function __construct()
    {
        $this->load->database();
    }

    // public function get_last_ten_entries()
    // {
    //     $query = $this->db->get('entries', 10);
    //     return $query->result(); 
    // }

    public function listar(){
        $query = $this->db->get('usuarios');
        return $query->result();
    }

    #Insertar en php
    public function insertar($data){

        $this->db->insert('usuarios', $data);

        return $this->db->insert_id();

    }

    public function actualizar($id, $data){
        $datos = array(
            'nombre' => $data['nombre'],
            'nombre' => $data['nombre'],
        );

        $this->db->where('id', $id);
        $query = $this->db->update('usuarios', $datos);

    }

    



}

?>