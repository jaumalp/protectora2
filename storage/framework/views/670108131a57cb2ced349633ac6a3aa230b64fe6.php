<?php $__env->startSection('title'); ?>Quienes Somos <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Introduction Row -->
    <h4 class="text-center pb-2">¿Quieres ayudarnos?<br><small>¡Muchas Gracias!</small></h4>
    <p class="text-parrafado">Queremos agradecerte de antemano que quieras colaborar con nosotros.</p>

    <p class="text-parrafado">La mejor forma de ayudar y que además ayudes también a nuestras mascotas es
        <a href="/animales">adoptar a uno de nuestros queridos amig@s.</a></p>

    <p class="text-parrafado">Tambien puedes ayudarnos con una donación en la cuenta que abajo te mostramos.</p>

    <p class="text-parrafado">Y si quieres, puedes tambien formar parte de nuestro <a href="#">TEAMING</a>,
        que nos ayudaría muchísimo para darles a nuestros animales lo que necesitan.</p>
    <p class="text-parrafado">Página de Teaming en CONSTRUCCION, Maria Jesus...</p>

    <h5 class="text-center">CUENTA DE DONACIONES</h5>
    <p class="text-center">En Cajasur:<br>ES06 0237 0036 8091 7150 0413</p>
    <h5 class="text-center">¡GRACIAS!</h5>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('otros.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>