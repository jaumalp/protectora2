<?php $__env->startSection('title'); ?>Inicio <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Introduction Row -->
    <h4 class="text-center">¿Nuestros amig@s?<br><small>¡Mira que guap@s!</small></h4>
    <p class="text-parrafado mb-0">Mira algunos de nuestros queridos amig@s, seguro que alguno te enamora.
    Si quieres saber más sobre alguno, pincha en su foto y te lo muestro.</p>

    <div class="row">

        <?php if(isset($animales) and !is_null($animales)): ?>
            <?php $__currentLoopData = $animales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6 text-center sin-margen-bottom mt-3">
                    <hr class="w-75">
                    <?php
                        if ($animal->getUrlPortada())
                            echo $animal->getHTMLFotoPortada();
                        else
                            echo 'Sin Portada';
                    ?>
                    <h3 class="text-uppercase"><?php echo e($animal->nombre); ?></h3>
                    <p><b>Raza: </b><?php echo e($animal->raza); ?></p>
                    <p><b>Edad: </b><?php echo e($animal->edad); ?></p>
                    <p><?php echo $animal->descripcion; ?></p>
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