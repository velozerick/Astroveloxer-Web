<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Registro extends BaseController
{
    public function index()
    {
        return view('frontend/registro_form');
    }

    public function guardar()
    {
        helper(['form', 'url']);

        $rules = [
            'nombre'     => 'required|min_length[3]',
            'email'      => 'required|valid_email|is_unique[usuarios.email]',
            'contrasena' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            return view('frontend/registro_form', [
                'validation' => $this->validator
            ]);
        }

        $usuarioModel = new UsuarioModel();

        $data = [
            'nombre'         => $this->request->getPost('nombre'),
            'email'          => $this->request->getPost('email'),
            'contrasena'     => password_hash($this->request->getPost('contrasena'), PASSWORD_DEFAULT),
            'fecha_registro' => date('Y-m-d H:i:s'),
            'activo'         => 1,
            'rol'            => 'usuario',
            'token_recupera' => ''
        ];

        $usuarioModel->save($data);

       return redirect()->to('/')->with('mensaje', 'Registro exitoso.');


    }
}
