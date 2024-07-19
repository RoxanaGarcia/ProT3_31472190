
        
<div class="container">
    <div class="container-fluid">
    <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?= base_url('enviar-form'); ?>"  novalidate>
            <?= csrf_field(); ?>
            <br><br>
            <h2>Registrar Usuarios</h2>
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
                    <input type="text" name="nombre" class="form-control <?= ($validation->hasError('nombre')) ? 'is-invalid' : ''; ?>" id="validationDefault01" value="<?= old('nombre') ?>" required>
                <!-- Validación de errores -->
                <div class="invalid-feedback"><?= $validation->getError('nombre'); ?></div>
                </div>
                
            <!-- Campo Apellido -->
            <div class="container-input" >
            <ion-icon name="person-outline"></ion-icon>
                <label for="validationDefault02" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control <?= ($validation->hasError('apellido')) ? 'is-invalid' : ''; ?>" id="validationDefault02" value="<?= old('apellido') ?>" required>
                <!-- Validación de errores -->
                <div class="invalid-feedback"><?= $validation->getError('apellido'); ?></div>
            </div>

            <!-- Campo Usuario -->
            <div class="container-input" >
                 <ion-icon name="person-outline"></ion-icon>
                <label for="validationDefaultUsername" class="form-label">Usuario</label>
                <input type="text" name="usuario" class="form-control <?= ($validation->hasError('usuario')) ? 'is-invalid' : ''; ?>" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="<?= old('usuario') ?>" required>
                <!-- Validación de errores -->
                <div class="invalid-feedback"><?= $validation->getError('usuario'); ?></div>
                
            </div>

            <!-- Campo Email -->
            <div class="container-input">
                <ion-icon name="mail-outline"></ion-icon>
                <label for="validationDefaultEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="validationDefaultEmail" value="<?= old('email') ?>" required>
                <!-- Validación de errores -->
                <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
            </div>

            <!-- Campo Contraseña -->
            <div class="container-input">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <label for="validationDefaultPassword" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="validationDefaultPassword" required>
                <!-- Validación de errores -->
                <div class="invalid-feedback"><?= $validation->getError('password'); ?></div>
            </div>

                 <div>
                 <button class="btn btn-secondary" type="submit" >Guardar</button>
                 <button type="reset" class="btn btn-danger" >Cancelar</button>
                </div>

            </form>
        </div>
            <div class="container-welcome">
            <div class="welcome-sign-up welcome">
                <h3>¡Bienvenido!</h3>
                <p>Ingrese sus datos personales para usar todas las funciones del sitio</p>
                <!-- <button class="button" id="btn-sign-up">Registrarse</button> -->
            </div>
            <!-- <div class="welcome-sign-in welcome">
                <h3>¡Hola!</h3>
                <p>Regístrese con sus datos personales para usar todas las funciones del sitio</p>
                <button class="button" id="btn-sign-in">Iniciar Sesión</button>
            </div> -->
             </div>
    </div>