<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('lang.Edit Service')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.services.edit-service')->html();
} elseif ($_instance->childHasBeenRendered('WgYxLuB')) {
    $componentId = $_instance->getRenderedChildComponentId('WgYxLuB');
    $componentTag = $_instance->getRenderedChildComponentTagName('WgYxLuB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WgYxLuB');
} else {
    $response = \Livewire\Livewire::mount('dashboard.services.edit-service');
    $html = $response->html();
    $_instance->logRenderedChild('WgYxLuB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Services/EditService.blade.php ENDPATH**/ ?>