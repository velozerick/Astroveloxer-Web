<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::index');
$routes->get('/inicio', 'Inicio::index');


$routes->get('/registro', 'Registro::index');     // Muestra el formulario
$routes->post('/registro/guardar', 'Registro::guardar'); // Procesa el formulario (registro)


$routes->get('/login', 'Login::index'); // Muestra el formulario de inicio de sesión
$routes->post('/login/acceder', 'Login::acceder'); // Procesa el formulario de inicio de sesión
$routes->get('/logout', 'Login::salir'); // Cierra la sesión del usuario


