<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?php echo $__env->yieldContent('title'); ?></title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo e(URL::asset('backend/assets/images/favicon.ico')); ?>" type="image/x-icon"/>


<!-- css -->
<?php if(App::getlocale()== 'en'): ?>
    <link href="<?php echo e(URL::asset('backend/assets/css/ltr.css')); ?>" rel="stylesheet">
<?php else: ?>
    <link href="<?php echo e(URL::asset('backend/assets/css/rtl.css')); ?>" rel="stylesheet">
<?php endif; ?>
<link   href="<?php echo e(URL::asset('backend/assets/fontawesome/css/all.css')); ?>" rel="stylesheet"  />
<?php /**PATH F:\courses\laravel\project-pos\resources\views/layouts/backend/head.blade.php ENDPATH**/ ?>