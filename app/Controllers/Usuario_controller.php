<?php
namespace App\Controllers;
Use App\Models\Usuario_model;
Use CodeIgniter\Controller;

class Usuario_controller extends Controller{

    public function _construct(){
        helper(['form','url']); // Carga los helpers form y url de CodeIgniter
    }
 
    public function create(){
        $data['titulo']='Registrar';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro'); 
        echo view('front/footer_view');
    }

     // Validación de campos del formulario
     public function formValidation() {
        // Validación de campos del formulario
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]', // Validación del email único en la tabla 'usuarios'
            'password' => 'required|min_length[3]|max_length[10]',
        ]);
        $formModel = new Usuario_model(); // Instancia del modelo usuario_models
        $email = $this->request->getVar('email'); // Obtiene el valor del campo 'email' del formulario
        
         // Verifica si el email ya está en uso
         if ($formModel->where('email', $email)->first()) {
            session()->setFlashdata('fail', 'SR Usuario el email ya se encuentra registrado en el sistemas.'); // Mensaje de error si el email ya está registrado
            return redirect()->to('registrar');
            // Redirige al usuario a la página de registro si el email ya está registrado
        }else {
            if (!$input) {
                // Si la validación falla, establece el mensaje de error y redirige de vuelta al formulario
                session()->setFlashdata('fail', 'Sr: Usuario error al registrarse');
               return redirect()->back()->withInput();
            }else {
                // Si la validación es exitosa, guarda los datos del usuario en la base de datos
                $formModel->save([
                    'nombre' => $this->request->getVar('nombre'),
                    'apellido' => $this->request->getVar('apellido'),
                    'usuario' => $this->request->getVar('usuario'),
                    'email' => $this->request->getVar('email'),
                    'pass' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                ]);

                session()->setFlashdata('success', 'Usuario registrado con éxito'); // Mensaje de éxito usando flashdata

                // Redirige al usuario a la página de inicio de sesión después del registro
                return redirect()->to('principal');
                //ver si pongo registro me sale mi mjs de errores 
            }
        }
    }
    
}