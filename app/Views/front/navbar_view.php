<?php
$session =session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');

?>

<!-- barra de navegacion -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar-header">

   <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
        <!-- logo de la radio -->
         <img src="<?php echo base_url('/assets/img/radio.jpg')?>" alt="marca" width="75" height="30" class="img-fluid">
    </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

     <?php if(session()->perfil_id == 1):?>
      <div class="btn btn-secundary active btnUser btn-sm">
        <a href=""> ADMIN: <?php echo session('nombre');?></a>
      </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo base_url('/registro');?>" >Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/login');?>" >Login</a>
        </li>
        <li class="nav-item">
          <ul>
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/list_usuario');?>" >Usuarios</a>
           <!-- <a class="nav-link active" aria-current="page" href="<-?php echo base_url('/editar');?>" >Modificar Usuario</a> -->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true"> Cerrar Sesión</a>
        </li>
        </ul>
    </div>


        <?php elseif(session()->perfil_id == 2):?>
        <div class="btn btn-info active btnUser btn-sm">
         <a href=""> Cliente: <?php echo session('nombre');?> </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/quienes_somos');?>" >Quiénes Somos</a>
          </li>
          <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/#');?>" >Contactenos</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true"> Cerrar Sesión</a>
          </li>
         </ul>
        </div>
      <?php else:?>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/registro');?>">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/login');?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/quienes_somos');?>">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/acercade');?>">Acerca de </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/#');?>">Contactenos </a>
        </li>
         </ul>
      </div>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <?php endif;?>

  </div>
</nav>