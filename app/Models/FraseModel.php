<?php

namespace App\Models;

use CodeIgniter\Model;

class FraseModel extends Model
{
    protected $table = 'frases';
    protected $primaryKey = 'id';
    protected $allowedFields = ['contenido'];
    protected $useTimestamps = false; // ← CAMBIADO de public a protected

    // Obtener una frase aleatoria
    public function obtenerFraseDiaria()
    {
        return $this->orderBy('RAND()')->first();
    }
}
