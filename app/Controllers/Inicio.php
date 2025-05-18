<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FraseModel;

class Inicio extends BaseController
{
    public function index()
    {
        // Instanciar el modelo
        $fraseModel = new FraseModel();

        // Obtener una frase aleatoria
        $frase = $fraseModel->obtenerFraseDiaria();

        // Cargar la vista y pasar la frase como variable
        return view('frontend/inicio', ['frase' => $frase]);
    }
}
