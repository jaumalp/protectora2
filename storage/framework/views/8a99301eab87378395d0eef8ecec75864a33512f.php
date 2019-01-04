<?php $__env->startSection('title'); ?> Indice <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php for($i = 1; $i <= 26; $i++): ?>
        <p>Esta es la linea <?php echo e($i); ?></p>
    <?php endfor; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>