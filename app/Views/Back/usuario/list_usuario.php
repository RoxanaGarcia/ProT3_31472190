
    <div class="container-fluid">
    <?php $validation = \Config\Services::validation(); ?>
        
    
            <!-- Mensajes de éxito y error -->
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif; ?>
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
            <?php endif; ?>
            
   <center><h2 >Lista de Usuarios</h2></center> 
   <a href="<?= base_url('/registro');?>" class="btn btn-success"> Nuevo Usuario </a>

     <!-- Usamos table-responsive-sm para dispositivos pequeños -->
        <table class="table table-striped">
            <thead>
                <tr>
                     <th scope="col">#</th> 
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($datos as $dato): ?>
            <tr>
                    <th scope="row"><?php echo $dato['id_usuario'];?></th>
                    <td><?php echo $dato['nombre'];?></td>
                    <td><?php echo $dato['apellido'];?></td>
                    <td><?php echo $dato['usuario'];?></td>
                    <td><?php echo $dato['email'];?></td>
                    <!-- <td><-?php echo $dato['pass'];?></td> -->
                    <td>
                   
                        <a href="<?= base_url('editar/'.$dato['id_usuario']); ?>">Editar</a>
                        <a href="<?= base_url('eliminar/'.$dato['id_usuario']); ?>" >Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
                <!-- Agregar más filas según sea necesario -->
            </tbody>
        </table>
    
       
</div>