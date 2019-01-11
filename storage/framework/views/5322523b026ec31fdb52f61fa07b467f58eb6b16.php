<?php $__env->startSection('title'); ?>Inicio <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Introduction Row -->
    <h4 class="text-center">¿Nuestros amig@s?<br><small>¡Mira que guap@s!</small></h4>
    <p class="text-parrafado">Mira algunos de nuestros queridos amig@s, seguro que alguno te enamora.</p>

    <div class="row">

        <?php if(isset($animales) and !is_null($animales)): ?>
            <div class="col-lg-12">
                <h5 class="my-4 text-center">Mira, estos son algunos de nuestros preciosos amigos (<?php echo e(count($animales)); ?>)</h5>
            </div>
            <?php $__currentLoopData = $animales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6 text-center mb-4">
                    <?php
                        if ($animal->getUrlPortada())
                            echo $animal->getHTMLFotoPortada();
                        else
                            echo 'Sin Portada';
                    ?>
                    <h3><?php echo e($animal->nombre); ?></h3>
                    <p><b>Raza:</b> <smal><?php echo e($animal->raza); ?></smal><br><?php echo $animal->descripcion; ?></p>
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