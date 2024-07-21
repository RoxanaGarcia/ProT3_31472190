<?php
namespace App\Models;
use CodeIgniter\Model;


class Usuario_model extends Model{

    protected $table ='usuarios';
    protected $primaryKey ='id_usuario';
    protected $allowedFields =['nombre', 'apellido','usuario','email','pass','perfil_id','baja','created_at'];


// Obtener un usuario por ID
public function getUsuarios() {
    return $this->where('baja','NO')->findAll();
}

public function get_Usuario($id) {
    return $this->where('id_usuario', $id)->first();
}

// Crear un nuevo usuario
public function createUsuario($data) {
    return $this->insert($data);
}

// Actualizar un usuario
public function modificar_Usuario($id,$datos) {
 return $this->update($id,$datos);
    
}

// Borrar un usuario
public function deleteUsuario($id) {
    return $this->Update($id,['baja'=>'SI']);
}

}


