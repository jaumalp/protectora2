<?php $__env->startSection('title'); ?>Pagina de Ejemplo <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Introduction Row -->
    <h4 class="mb-4 pt-3 text-center">¿Que quienes somos?<br>
        <small>¡Perdón por no presentarnos!</small>
    </h4>
    <p class="text-parrafado">Somos una protectora de animales pequeñita, solo somos unas pocas personas que queremos
    y amamos a los mejores compañeros que uno puede tener, ¡los animales de compañia!.</p>
    <p class="text-parrafado">Necesitamos a gente como tu que pueda ayudarnos, necesitamos apoyo para poder seguir nuestra
    labor de ayuda...</p>
    <!-- Team Members Row -->
    <div class="row">

        <?php if(isset($perros) and !is_null($perros)): ?>
            <div class="col-lg-12">
                <h5 class="my-4 text-center">Mira, estos son algunos de nuestros preciosos amigos (<?php echo e(count($perros)); ?>)</h5>
            </div>
            <?php $__currentLoopData = $perros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <a href="pepita"><img class="rounded-circle img-fluid d-block mx-auto"
                                          src="/images/Perros/portada<?php echo e($perro); ?>.jpg" alt="">
                    </a>
                    <h3>Pepita</h3>
                    <p><b>Raza:</b> <smal>No se, pero la quiero.</smal><br>¡Adorable!.<br>Se llevarte a mi terreno fácil, me
                        porto bien en público, te miro con cara de pena... Eso si, no soy lassie ¿eh?.</p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="col-lg-12">
                <h5 class="my-4 text-center">Vaya, parece que no hay ninguno...</h5>
            </div>
        <?php endif; ?>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('otros.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>