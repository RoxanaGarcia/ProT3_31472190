
    <!-- Mensje de error-->
     <?php if(session()->getFlashdata('msg')):?>
         <div class="alert alert-warning">
            <?php=session()->getFlashdata('msg')?>
         </div>    
    <?php endif;?>

    <div class="container">
        <div class="container-fluid">
        <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
            <br> <br> <br>
               <h2>Iniciar Sesión</h2>
               <span>Use su correo y contraseña</span>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="email" placeholder="Email" value="" > 
                   
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password"  name="password" placeholder="Password" Value="">
                  
                </div>
                <input type="submit" value="Ingresar" class="btn btn-success">
                <a href="<?php echo base_url('/login');?>" class="btn btn-success">Cancelar</a>
                <br>
                <span> ¿Aun no se registro? <a href="<?php echo base_url('/registro');?>"> Registrarse aqui</a></span> 

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


 