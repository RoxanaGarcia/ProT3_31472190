
<?php 
// Inicialización de la sesión y obtención del nombre de usuario
$session = session();
$nombre = $session->get('nombre');
?>



    <div class="container-fluid">
    <div class="row justify-content-md-center">
     <!-- Mostrar mensaje el nombre del usuario logeado si existe -->
            <?php if (session()->getFlashData('msg')): ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
        <br> <br>
          <!-- Verificar el perfil del usuario -->
          <?php if (session()->perfil_id == 1): ?>
          <!-- Contenido para Administrador -->
          <div  data-bs-theme="dark">
          <div class="card-body">
             <img src="assets/img/foto3.jpg" class="card-img-bottom" alt="...">
          </div>
           </div>
        <?php elseif (session()->perfil_id == 2): ?>
        <!-- Contenido para Cliente -->
        <div  data-bs-theme="dark">
           <div class="card-body">
           <img src="assets/img/foto2.jpg" class="card-img-bottom" alt="...">
           </div>
        </div>
        <?php endif; ?>
    </div>
    </div>

