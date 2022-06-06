<?php $__env->startSection('head'); ?>
    <title><?php echo e(__('Create Service')); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('dashboard.services.create-service')->html();
} elseif ($_instance->childHasBeenRendered('CxbB6PK')) {
    $componentId = $_instance->getRenderedChildComponentId('CxbB6PK');
    $componentTag = $_instance->getRenderedChildComponentTagName('CxbB6PK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CxbB6PK');
} else {
    $response = \Livewire\Livewire::mount('dashboard.services.create-service');
    $html = $response->html();
    $_instance->logRenderedChild('CxbB6PK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.newdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abo Samer\Desktop\Work\Maher Project\laravel project\MaherPeronalWebsite\resources\views/pages/Dashboard/Services/CreateService.blade.php ENDPATH**/ ?>