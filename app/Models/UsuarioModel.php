<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'nombre',
        'email',
        'contrasena',
        'fecha_registro',
        'token_recupera',
        'activo',
        'rol'
    ];

    protected $useTimestamps = false;

public function getUsuarioByemail($email)
{
    return $this->where('email', $email)->first();

    
} 

}

