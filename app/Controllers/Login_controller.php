<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuario_model;


class Login_controller  extends BaseController {
    public function _construct(){
        helper(['form','url']);
    }

    public function index(){
       
/*         echo password_hash("12345678", PASSWORD_DEFAULT); */
        $dato['titulo']='login';
         echo view('front/head_view',$dato);
         echo view('front/navbar_view');
         echo view('Back/usuario/login');
         echo view('front/footer_view');
    }

  public function auth(){
    $session = session();
    $model = new Usuario_model();
    
    //traemos los datos del formulario
    $email=$this->request->getVar('email');
    $password=$this->request->getVar('password');

    $data=$model->where('email',$email)->first();
    /* print_r($data);
    exit($password);
    exit($email); */
    if($data){
        
        $pass = $data['pass'];
        $ba = $data['baja'];
        //  exit($pass); 
        if ($ba =='SI'){
            $session->setFlashdata('msg','usario dado de baja');
            return redirect()->to('/Login_controller');
        }
        //se verifican los datos ingresados para iniciar, si cumple la verificacion inicia la sesion
        $verify_pass = password_verify($password, $pass);


        // password_verify determina los requisitos de configuracion de la contraseña
        if ($verify_pass){
         $ses_data = [
            'id_usuario' => $data['id_usuario'],
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'usuario' => $data['usuario'],
            'perfil_id' => $data['perfil_id'],
            'logged_in' => TRUE
         ];
         // Si se cumple la verificacion inicia la sesion
         $session->set($ses_data);
         session()->setFlashdata('msg','Bienvenido a Radio Mixer!!');
         return redirect()->to('/panel');
         // retorna pagina principal

        }else{
            //no pasa la validasion de contraseña
            $session()->setFlashdata('msg','SR: Usuario sus Datos ingresados son incorrectos');
         return redirect()->to('/login');
        }

    }else {
        $session()->setFlashdata('msg','No existe el email Incorrecto');
         return redirect()->to('/login');
    }
  }

 public function logout(){
    $session = session();
    $session->destroy();
    return redirect()->to('/');
 }
}