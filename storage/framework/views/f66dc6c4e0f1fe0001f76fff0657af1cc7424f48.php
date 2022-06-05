<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('lang.Services')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.services.services')->html();
} elseif ($_instance->childHasBeenRendered('vUOR9oK')) {
    $componentId = $_instance->getRenderedChildComponentId('vUOR9oK');
    $componentTag = $_instance->getRenderedChildComponentTagName('vUOR9oK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vUOR9oK');
} else {
    $response = \Livewire\Livewire::mount('dashboard.services.services');
    $html = $response->html();
    $_instance->logRenderedChild('vUOR9oK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Services/Services.blade.php ENDPATH**/ ?>