<!DOCTYPE html>
<html lang="en" dir="<?php echo e(App::getLocale()=='ar' ? 'rtl':''); ?>">
<head>
  <?php echo $__env->make('layouts.backend.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

<div class="wrapper">

    <!--=================================
     preloader -->

    <div id="pre-loader">
        <img src="<?php echo e(URL::asset('backend/assets/images/pre-loader/loader-01.svg')); ?>" alt="">
    </div>

    <!--=================================
     preloader -->

<?php echo $__env->make('layouts.backend.main-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!--=================================
     Main content -->

    <div class="container-fluid">
        <div class="row">
           <?php echo $__env->make('layouts.backend.main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--=================================
           wrapper -->

            <div class="content-wrapper">
              <?php echo $__env->yieldContent('content'); ?>
                <!--=================================
                 wrapper -->

               <?php echo $__env->make('layouts.backend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div><!-- main content wrapper end-->
        </div>
    </div>
</div>

<!--=================================
 footer -->


<!--=================================
 jquery -->

<?php echo $__env->make('layouts.backend.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH F:\courses\laravel\project-pos\resources\views/layouts/backend/master.blade.php ENDPATH**/ ?>