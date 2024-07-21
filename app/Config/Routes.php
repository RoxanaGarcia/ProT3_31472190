<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/principal', 'Home::index');
/* $routes->get('/registro', 'Home::registro');
$routes->get('/login', 'Home::login'); */
$routes->get('/acercade', 'Home::acerca_de');
$routes->get('/quienes_somos', 'Home::quienes_somos');

// Rutas del registro de Usuarios
$routes->get('/registro','Usuario_controller::create');
$routes->post('/enviar-form','Usuario_controller::formValidation');
$routes->get('/list_usuario','Usuario_controller::listado');
$routes->get('/editar/(:num)','Usuario_controller::editar/$1');
$routes->post('/editar','Usuario_controller::modificar');
$routes->get('/eliminar/(:num)','Usuario_controller::eliminar/$1');
// Rutas Login
$routes->get('/login','Login_controller');
$routes->post('/enviarlogin','Login_controller::auth');
$routes->get('/panel','Panel_controller::index', ['filter'=> 'auth']);
$routes->get('/logout','Login_controller::logout');



if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}