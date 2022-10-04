<?php $__env->startSection('title', trans('GPlane\MultiIndexStyle::config.title')); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e(trans('GPlane\MultiIndexStyle::config.title')); ?>

    </h1>
    <div class="breadcrumb"></div>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php
      $formStyleChoose = Option::form('style_choose', trans('GPlane\MultiIndexStyle::config.general.title'), function($form) {
        $form->select('index_style_type', trans('GPlane\MultiIndexStyle::config.general.select-title'))
            ->option('default', trans('GPlane\MultiIndexStyle::config.general.option-default'))
            ->option('fixed', trans('GPlane\MultiIndexStyle::config.general.option-fixed'))
            ->option('old', trans('GPlane\MultiIndexStyle::config.general.option-old'));
        $form->checkbox('use_bing_pic', trans('GPlane\MultiIndexStyle::config.general.bing-bg'))
            ->label(trans('GPlane\MultiIndexStyle::config.general.bing-bg-label'));
        $form->text('random_bg_dir', trans('GPlane\MultiIndexStyle::config.general.random-bg'))
            ->hint(trans('GPlane\MultiIndexStyle::config.general.random-bg-hint'));
        $form->text('website_approve', trans('GPlane\MultiIndexStyle::config.general.website-approve'));
      })->handle();

      $formNavBarItems = Option::form('nav_bar', trans('GPlane\MultiIndexStyle::config.navbar.title'), function ($form)
      {
          $form->textarea('nav_bar_items', trans('GPlane\MultiIndexStyle::config.navbar.textarea-title'))->rows(18);
      })->addMessage(trans('GPlane\MultiIndexStyle::config.navbar.message'), 'warning')->handle();

      $formFeatureText = Option::form('feature_text', trans('GPlane\MultiIndexStyle::config.feature.title'), function ($form)
      {
          $form->text('feature_1_title', trans('GPlane\MultiIndexStyle::config.feature.1-title'));
          $form->text('feature_1_text', trans('GPlane\MultiIndexStyle::config.feature.1-text'));
          $form->text('feature_1_fa', trans('GPlane\MultiIndexStyle::config.feature.1-fa'));
          $form->text('feature_2_title', trans('GPlane\MultiIndexStyle::config.feature.2-title'));
          $form->text('feature_2_text', trans('GPlane\MultiIndexStyle::config.feature.2-text'));
          $form->text('feature_2_fa', trans('GPlane\MultiIndexStyle::config.feature.2-fa'));
          $form->text('feature_3_title', trans('GPlane\MultiIndexStyle::config.feature.3-title'));
          $form->text('feature_3_text', trans('GPlane\MultiIndexStyle::config.feature.3-text'));
          $form->text('feature_3_fa', trans('GPlane\MultiIndexStyle::config.feature.3-fa'));
          $form->text('introdution_text', trans('GPlane\MultiIndexStyle::config.feature.intro-title'));
          $form->text('start_button_text', trans('GPlane\MultiIndexStyle::config.feature.btn-start'));
      })->addMessage(trans('GPlane\MultiIndexStyle::config.feature.message'))->handle();

    ?>

    <div class="row">
        <div class="col-md-6">
            <?php echo $formStyleChoose->render(); ?>

            <?php echo $formNavBarItems->render(); ?>

        </div>

        <div class="col-md-6">
            <?php echo $formFeatureText->render(); ?>

        </div>
    </div>
    
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/wwwroot/mc.peckot.com/plugins/multi-index-style/views/config.blade.php ENDPATH**/ ?>