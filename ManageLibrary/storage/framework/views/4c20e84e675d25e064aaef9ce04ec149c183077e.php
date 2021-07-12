

<?php $__env->startSection('content'); ?>
    <!-- <h1>Đây là trang chủ welcome, đi kèm với file Example.js</h1> -->
    <div id='example'></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\libraryManagement\ManageLibrary\resources\views/welcome.blade.php ENDPATH**/ ?>