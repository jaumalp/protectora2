<?php $__env->startSection('title'); ?>Inicio <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Introduction Row -->
    <h4 class="text-center">¿Que quienes somos?<br><small>¡Un breve resumen!</small></h4>
    <p class="text-parrafado">Somos un grupo de voluntari@s, amantes de los animales que, debido
    al gran número de mascotas (en su mayoría perros) abandonad@s o maltratad@s en nuestra localidad
    y a las personas que sufren por esta situación, nos hemos visto obligados a fundar una asociación
    para defenderlos, protegerlos y buscarles un hogar donde sean felices y así evitar que acaben
    en la perrera.</p>

    <h5 class="text-center">¿Con más detalle?</h5>
    <p class="text-center"><a href="/quienes-somos">Púlsame para saber más</a></p>

    <h5 class="text-center">¿Quieres ayudarnos?</h5>
    <p class="text-center"><a href="/ayudanos">Púlsame para ver como puedes</a></p>

    <p class="container"><a href="https://www.facebook.com/APA-Vida-La-Carlota-354465445103672/" target="_blank">
        <img src="<?php echo e(asset('images/logo-fondo.png')); ?>"
             class="w-100 border-dark rounded shadow-lg"></a></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('otros.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>