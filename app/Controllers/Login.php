<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        return view('frontend/login_form');
    }

    public function acceder()
    {
        $session = session();
        $model = new UsuarioModel();

        $email = $this->request->getPost('email');
        $contrasena = $this->request->getPost('contrasena');

        $usuario = $model->getUsuarioByEmail($email);

        if ($usuario) {
            // Verificar contraseña
            if (password_verify($contrasena, $usuario['contrasena'])) {
                // Guardar datos en sesión
                $session->set([
                    'id' => $usuario['id'],
                    'nombre' => $usuario['nombre'],
                    'email' => $usuario['email'],
                    'rol' => $usuario['rol'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/inicio')->with('mensaje', 'Bienvenido');
            } else {
                return redirect()->back()->with('mensaje', 'Contraseña incorrecta.');
            }
        } else {
            return redirect()->back()->with('mensaje', 'El usuario no existe.');
        }
    }

    public function salir()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
