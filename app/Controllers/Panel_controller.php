<?php
namespace App\Controllers;
use CodeIgniter\Controller;

 class Panel_controller extends Controller
 {
   
 public function index() {
    $session = session(); // Inicia la sesión
    $nombre = $session->get('usuario'); // Obtiene el nombre de usuario de la sesión
    $perfil = $session->get('perfil_id'); // Obtiene el perfil del usuario de la sesión

    $data['perfil_id'] = $perfil; // Prepara los datos del perfil para pasar a la vista

    $dato['titulo'] = 'panel de usuario '; // Título de la página
    echo view('front/head_view', $dato); // Carga la vista del encabezado (head_view.php) con datos
    echo view('front/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
    echo view('Back/usuario/usuario_logeado', $data); // Carga la vista del panel del usuario (usuario_logueado.php) con datos del perfil
    echo view('front/footer_view'); // Carga la vista del pie de página (footer_view.php)
  } 
 }


