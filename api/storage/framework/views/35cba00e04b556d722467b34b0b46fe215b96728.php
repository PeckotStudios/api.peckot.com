<!DOCTYPE html>
<html lang="<?php echo e($locale); ?>">
<head>
    <?php echo $__env->make('shared.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(option_localized('site_name')); ?></title>
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php echo $__env->make('shared.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('shared.sidebar', ['scope' => 'admin'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo $__env->make('shared.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /www/wwwroot/mc.peckot.com/resources/views/admin/master.blade.php ENDPATH**/ ?>