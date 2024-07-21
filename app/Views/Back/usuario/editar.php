
        
<div class="container">
    <div class="container-fluid">
    <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?= base_url('editar'); ?>"  novalidate>
            <?= csrf_field(); ?>
            <br><br>
            <h2>Modificar Usuario</h2>
            <!-- Mensajes de éxito y error -->
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif; ?>
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
            <?php endif; ?>

            <!-- nombre -->
            <div class="container-input" >
                    <ion-icon name="person-outline"></ion-icon>
                    <label for="validationDefault01" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" Value="<?=$dato['nombre']?>"></input>
                
                    <!-- Validación de errores -->
                 <?php if($validation->getError('nombre')){?>
                  <div class='alert alert-danger'><?php $error = $validation->getError('nombre'); ?></div>
                 <?php }?>
            </div>
                
            <!-- Campo Apellido -->
            <div class="container-input" >
            <ion-icon name="person-outline"></ion-icon>
                <label for="validationDefault02" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" Value="<?=$dato['apellido']?>"></input>
                <!-- Validación de errores -->
                <?php if($validation->getError('apellido')){?>
                  <div class='alert alert-danger'><?php $error = $validation->getError('apellido'); ?></div>
                 <?php }?>
            </div>

            <!-- Campo Usuario -->
            <div class="container-input" >
                 <ion-icon name="person-outline"></ion-icon>
                <label for="validationDefaultUsername" class="form-label">Usuario</label>
                <input type="text" name="usuario" class="form-control" Value="<?=$dato['usuario']?>"></input>
               
                <!-- Validación de errores -->
                <?php if($validation->getError('usuario')){?>
                  <div class='alert alert-danger'><?php $error = $validation->getError('usuario'); ?></div>
                 <?php }?>
                
            </div>

            <!-- Campo Email -->
            <div class="container-input">
                <ion-icon name="mail-outline"></ion-icon>
                <label for="validationDefaultEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" disabled  Value="<?=$dato['email']?>" ></input>
                <!-- disabled -->
                <!-- Validación de errores -->
                <?php if($validation->getError('email')){?>
                  <div class='alert alert-danger'><?php $error = $validation->getError('email'); ?></div>
                 <?php }?>
            </div>

            <!-- Campo Contraseña -->
            <div class="container-input">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <label for="validationDefaultPassword" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control"  Value="<?=$dato['pass']?>"></input>
                <!-- Validación de errores -->
                <?php if($validation->getError('password')){?>
                  <div class='alert alert-danger'><?php $error = $validation->getError('password'); ?></div>
                 <?php }?>
            </div>

                 <div>
                 <input class="btn btn-secondary" type="submit" Value="Guardar">
                 <input type="hidden" name="id" value="<?=$dato['id_usuario']?>">
                 <input type="reset" class="btn btn-danger" Value="Cancelar">
                </div>

            </form>
        </div>
            <div class="container-welcome">
            <div class="welcome-sign-up welcome">
                <center><h3>¡Actualización De Datos!</h3></center>
                <p>SR: Usuario ingrese los datos que desea actualizar</p>
                <!-- <button class="button" id="btn-sign-up">Registrarse</button> -->
            </div>
            <!-- <div class="welcome-sign-in welcome">
                <h3>¡Hola!</h3>
                <p>Regístrese con sus datos personales para usar todas las funciones del sitio</p>
                <button class="button" id="btn-sign-in">Iniciar Sesión</button>
            </div> -->
             </div>
    </div>