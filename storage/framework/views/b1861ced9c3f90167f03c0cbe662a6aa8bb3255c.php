<?php $__env->startSection('title'); ?>
blank
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Page Title</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Title</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- main body -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <p>Page content goes here<br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\courses\laravel\project-pos\resources\views/backend/blank.blade.php ENDPATH**/ ?>